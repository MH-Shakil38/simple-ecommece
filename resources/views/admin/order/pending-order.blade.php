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
    </div>
    <!-- /.card -->
@endsection
