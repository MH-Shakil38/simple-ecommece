<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DeliveryPolicy;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\TmpOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function place_order(Request $request)
    {
        $data = $request->validate([
            'customer_name'       =>  'required',
            'customer_phone'      =>  'required',
            'customer_address'    =>  'required',
        ]);



        try {
            DB::beginTransaction();

            $data['delivery_cost'] = $request->shipping_method ?? $request->delivery_cost ?? 0;
            $data['shipping_cost'] = $request->shipping_method ?? $request->delivery_cost ?? 0;
            $data['shipping_type'] = ($request->delivery_cost == 75 ? 1 : ($request->delivery_cost == 120 ? 2 : 0));
            $data['message'] = $request->message;


            $customer = Customer::query()->create($data);

            $order['invoice_id'] = Carbon::parse(now())->format('dmy') . '#' . $customer->id + 1;
            $order['delivery_cost'] = $request->shipping_method ?? $request->delivery_cost ?? 0;
            $order['shipping_cost'] = $request->shipping_method ?? $request->delivery_cost ?? 0;
            $order['shipping_type'] = ($request->delivery_cost == 75 ? 1 : ($request->delivery_cost == 120 ? 2 : 0));
            $order['message'] = $request->message;
            $order['customer_id'] = $customer->id;
            $store_order = Order::query()->create($order);


            foreach (session('cart') as $id => $details) {
                $store =   OrderDetails::query()->create([
                    'order_id'        => $store_order->id,
                    'product_id'      => $details['id'],
                    'stock_id'        => $details['stock_id'],
                    'qty'             => $details['qty'],
                    'selling_price'   => $details['price'],
                    'total'           => $details['qty'] * $details['price'],
                ]);
            }
            session()->forget('cart');
            DB::commit();
            return redirect()->route('order.received', $customer->id);
        } catch (\Throwable $e) {
            DB::rollBack();
            dd(
                $e->getFile(),
                $e->getMessage(),
                $e->getCode(),
                $e->getPrevious(),
            );
        }
    }

    public function pending_order()
    {
        $data['orders'] = Order::query()->where('status',1)->latest()->get();
        return view('admin.order.pending-order')->with($data);
    }


    public function chagneStatus(Request $request)
    {
        $data['orders'] = Order::query()->findOrFail($request->id)->update(['status'=>$request->status]);
        return redirect()->back()->with('success','Successfully Order Changes');
    }

    public function orderPage($status)
    {
        $data['status'] = $status;
        $data['status_name'] = $status == 1 ? 'Pending' : ($status == 2 ? 'Recived' : ($status == 3 ? 'Delivered' : 'Cancel'));
        $data['orders'] = Order::query()->where('status',$status)->latest()->get();
        return view('admin.order.order-page')->with($data);
    }

    public function received_order()
    {
        $data['orders'] = Order::query()->with('customer')->l();
        return view('admin.order.recived-order')->with($data);
    }

    public function store_order($id)
    {
        try {
            DB::beginTransaction();
            Order::query()->findOrFail($id)->update(['status' => 2]);
            //   $tmp = TmpOrder::query()->where('customer_id',$id)->get();
            //   $customer = Customer::query()->findOrFail($id);
            //   foreach ($tmp as $item){
            //       $a =   Order::query()->create([
            //             'customer_id'   =>$item->customer_id,
            //             'product_id'    =>$item->product_id,
            //             'stock_id'    =>$item->stock_id,
            //             'qty'           =>$item->qty,
            //             'selling_price' =>$item->selling_price,
            //             'total' =>$item->total + $customer->delivery_cost,
            //         ]);
            //         TmpOrder::query()->findOrFail($item->id)->delete();
            //   }
            DB::commit();
            return redirect()->route('received.order')->with('Order Received Successfully');
        } catch (\Throwable $e) {
            DB::rollBack();
            dd(
                $e->getFile(),
                $e->getMessage(),
                $e->getCode(),
                $e->getPrevious(),
            );
        }
    }

    public function order_recived($id)
    {
        $customer = Customer::query()->findOrFail($id);
        return view('website.version1.order-received-page.order-received', compact('customer'));
    }

    public function cart()
    {
        return view('website.version1.cart.cart');
    }

    public function details_order($id)
    {
        $data['order'] = Order::query()->findOrFail($id);
        //   $id = $request->id;
        //   if ($request->receive == true){
        //       $data['orders'] = Order::query()->with('customer')->where('customer_id',$id)->get();
        //   }else{
        //       $data['orders'] = TmpOrder::query()->with('customer')->where('customer_id',$id)->get();
        //   }
        //   $data['customer'] = Customer::query()->findOrFail($id);
        //   $total = 0;
        //   foreach($data['orders'] as $info){
        //     $total += $info->selling_price * $info->qty;
        //   }
        //   $data['total']    = $total + $data['customer']->delivery_cost;
        return view('admin.order.details-order')->with($data);
    }

    public function delete_order($id)
    {
        Order::query()->findOrFail($id)->update(['status'=>0]);
        return redirect()->back()->with('success', 'Order Cancel');
    }
}
