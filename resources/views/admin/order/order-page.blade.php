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
                        <h3>{{ $status_name }} Order List</h3>
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
                                        @if ($status == 0)
                                        <a class="btn btn-info"  href="{{route('order.details',$info->id)}}">Details</a>
                                        <a class="btn btn-danger" href="{{route('change.order.status',['id'=>$info->id,'status'=>1])}}">Return</a>
                                        @endif

                                        @if ($status == 1)
                                        <a class="btn btn-info"  href="{{route('order.details',$info->id)}}">Details</a>
                                        <a class="btn btn-danger" href="{{route('change.order.status',['id'=>$info->id,'status'=>2])}}">Received</a>
                                        <a class="btn btn-danger" href="{{route('change.order.status',['id'=>$info->id,'status'=>0])}}">Cancel</a>
                                        @endif


                                        @if ($status == 2)
                                        <a class="btn btn-info"  href="{{route('order.details',$info->id)}}">Details</a>
                                        <a class="btn btn-danger" href="{{route('change.order.status',['id'=>$info->id,'status'=>0])}}">Cancel</a>
                                        @endif

                                        @if ($status == 3)
                                        <a class="btn btn-info"  href="{{route('order.details',$info->id)}}">Details</a>
                                        @endif

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
