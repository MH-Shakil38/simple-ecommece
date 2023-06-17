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
                        <h3>Received Order</h3>
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
                                @php
                                    $data = \App\Models\Customer::query()->where('id',$info->customer_id)->first();
                                @endphp

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->customer_name}}</td>
                                    <td>{{$data->customer_phone}}</td>
                                    <td>{{$data->customer_address}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('order.details',['receive'=>true,'id'=>$info->customer->id])}}">Details</a>
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
