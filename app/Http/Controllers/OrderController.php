<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DeliveryPolicy;
use App\Models\Order;
use App\Models\Product;
use App\Models\TmpOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
  public function place_order(Request $request){
      $data = $request->validate([
          'customer_name'       =>  'required',
          'customer_phone'      =>  'required',
          'customer_address'    =>  'required',
      ]);

      $data['delivery_cost'] = $request->shipping_method ?? $request->delivery_cost ?? 0;

      try {
          DB::beginTransaction();
          $customer = Customer::query()->create($data);
              foreach(session('cart') as $id => $details){
                $store =   TmpOrder::query()->create([
                      'customer_id'     => $customer->id,
                      'product_id'      => $details['id'],
                      'stock_id'      => $details['stock_id'],
                      'qty'             => $details['qty'],
                      'selling_price'   => $details['price'],
                      'total'           => $details['qty'] * $details['price'],
                  ]);
              }
              session()->forget('cart');
          DB::commit();
          return redirect()->route('order.received',$customer->id);

      }catch (\Throwable $e){
          DB::rollBack();
          dd(
              $e->getFile(),
              $e->getMessage(),
              $e->getCode(),
              $e->getPrevious(),
          );
      }
  }

  public function pending_order(){
      $data['orders'] = TmpOrder::query()->with('customer')->latest()->get()->unique('customer_id');
      return view('admin.order.pending-order')->with($data);
  }

  public function received_order(){
      $data['orders'] = Order::query()->with('customer')->latest()->get()->unique('customer_id');
      return view('admin.order.recived-order')->with($data);
  }

  public function store_order($id){
      try {
          $tmp = TmpOrder::query()->where('customer_id',$id)->get();
          $customer = Customer::query()->findOrFail($id);
          foreach ($tmp as $item){
              $a =   Order::query()->create([
                    'customer_id'   =>$item->customer_id,
                    'product_id'    =>$item->product_id,
                    'stock_id'    =>$item->stock_id,
                    'qty'           =>$item->qty,
                    'selling_price' =>$item->selling_price,
                    'total' =>$item->total + $customer->delivery_cost,
                ]);
                TmpOrder::query()->findOrFail($item->id)->delete();
          }
          return redirect()->route('received.order')->with('Order Received Successfully');
      }catch (\Throwable $e){
          DB::rollBack();
          dd(
              $e->getFile(),
              $e->getMessage(),
              $e->getCode(),
              $e->getPrevious(),
          );
      }
  }

  public function order_recived($id){
    $customer = Customer::query()->findOrFail($id);
    Return view('website.version1.order-received-page.order-received',compact('customer'));
  }

  public function cart(){
    return view('website.version1.cart');
  }

  public function details_order(Request $request){
      $id = $request->id;
      if ($request->receive == true){
          $data['orders'] = Order::query()->with('customer')->where('customer_id',$id)->get();
      }else{
          $data['orders'] = TmpOrder::query()->with('customer')->where('customer_id',$id)->get();
      }
      $data['customer'] = Customer::query()->findOrFail($id);
      $total = 0;
      foreach($data['orders'] as $info){
        $total += $info->selling_price * $info->qty;
      }
      $data['total']    = $total + $data['customer']->delivery_cost;
      return view('admin.order.details-order')->with($data);
  }

    public function delete_order($id){
        TmpOrder::query()->findOrFail($id)->delete();
        Customer::query()->findOrFail($id)->delete();
        return redirect()->back()->with('success','Order Cancel');
    }
}
