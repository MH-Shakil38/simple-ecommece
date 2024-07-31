@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="float-right">Order Details</h3>
                        @if($_GET['receive'] == true)
                            Delivered
                        @else
                            <a href="{{route('store.order',$customer->id)}}" class="btn btn-success">Receive</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <table class="table" class="cat-table">

                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>image</th>
                                <th>Price</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            @forelse($orders as $info)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$info->product->name}}</td>
                                    <td><img src="{{asset($info->product->image)}}" height="80px" width="80px" alt=""></td>
                                    <td class="">{{$info->selling_price}}</td>
                                    <td class="">{{$info->stock->size}}</td>
                                    <td class="">{{$info->qty}}</td>
                                    <td class="">{{$info->qty * $info->selling_price}}</td>
                                </tr>
                            @empty
                            @endforelse
                            <tr>
                                <td colspan="6" class="text-right">Shipping Cost:</td>
                                <td class="">{{ $customer->delivery_cost}}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-right">Total:</td>
                                <td class="">{{$total ?? 0}}</td>
                            </tr>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>
    <!-- /.card -->
@endsection
