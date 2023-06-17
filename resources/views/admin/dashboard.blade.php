@extends('layouts.admin.master')
@section('content')
    <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Pending Order</span>
                    <span class="info-box-number">
                                {{\App\Models\TmpOrder::query()->get()->unique('customer_id')->count()}}
                        <small></small>
                    </span>
                </div>

            </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Received Order</span>
                    <span class="info-box-number">{{\App\Models\Order::query()->get()->unique('cutomer_id')->count()}}
                    </span>
                </div>

            </div>

        </div>


        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">{{\App\Models\Order::query()->get()->sum('total')}}
                    </span>
                </div>

            </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Profit</span>
                    <span class="info-box-number">0000</span>
                </div>

            </div>

        </div>

    </div>
    <div class="row m-5">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-header">
                    <h3>Pending Order List</h3>
                </div>
                <div class="card-body">
                    <table class="table" class="cat-table">

                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        @forelse($orders as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->customer->customer_name}}</td>
                                <td>{{$info->customer->customer_phone}}</td>
                                <td>{{$info->customer->customer_address}}</td>
                                <td>{{$info->customer->created_at}}</td>
                                <td>{{$info->created_at}}</td>
                                <td>
                                    <a class="btn btn-info"  href="{{route('order.details',['receive'=>false,'id'=>$info->customer->id])}}">Details</a>
                                    <a class="btn btn-success" href="{{route('store.order',$info->customer->id)}}">Received</a>
                                    <a class="btn btn-danger" href="{{route('delete.order',$info->customer->id)}}">Cancel</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </table>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>

@endsection
