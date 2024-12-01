
@extends('layouts.admin.master ')
@section('content')
    <div class="container content-header ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Offer List</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('offers.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ route('offers.create') }}">add new Offer</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Offer</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(isset($offer))
                            {!! Form::model($offer, ['route' => ['offers.update', $offer->id], 'files' => true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'offers.store', 'files' => true]) !!}
                        @endif

                        <!-- Min Price -->
                        {{ Form::label('min_price', 'Minimum Price', ['class' => 'form-label']) }}
                        {{ Form::number('min_price', null, ['class' => 'form-control', 'step' => '0.01', 'placeholder' => 'Enter minimum price']) }}

                        <!-- Status -->
                        {{ Form::label('status', 'Status', ['class' => 'form-label mt-3']) }}
                        {{ Form::select('status', [1 => 'Active', 0 => 'Inactive'], null, ['class' => 'form-control']) }}

                         <!-- Offer Type -->
                         {{ Form::label('status', 'Offer Type', ['class' => 'form-label mt-3']) }}
                         {{ Form::select('offer_type', [1 => 'Free Delivery', 2 => 'Discount',3=>'Percentage'], null, ['class' => 'form-control','placeholder' => 'Select Type']) }}

                        <!-- Total Discount -->
                        {{ Form::label('total_discount', 'Total Discount (%) Or Amount', ['class' => 'form-label mt-3']) }}
                        {{ Form::number('total_discount', null, ['class' => 'form-control', 'placeholder' => 'Enter total discount']) }}

                        <!-- Submit Button -->
                        {{ Form::submit('Submit', ['class' => 'btn btn-success mt-4']) }}
                        <a href="{{ route('offers.index') }}" class="btn btn-primary mt-4">Cancel</a>

                        {!! Form::close() !!}
                    </div>

                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3>Offer List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table" class="cat-table">

                            <tr>
                                <th>Min Price</th>
                                <th>Total Discount</th>
                                <th>Status</th>
                                <th>Offer Type</th>
                                <th>Actions</th>
                            </tr>


                            @foreach ($offers as $info)
                            <tr>
                                <td>{{ $info->min_price }}</td>
                                <td>{{ $info->offer_type == 1 ? '0' : ($info->offer_type == 2 ? $info->total_discount.'Taka' : $info->total_discount.'%') }}</td>
                                <td>{{ $info->status == 1 ? 'ON' : 'OFF' }}</td>
                                <td>{{ $info->offer_type == 1 ? 'Free Deliver' : ($info->offer_type == 2 ? 'Discount' : 'Percentage') }}</td>
                                {{-- <td>{{ $info->total_discount }}</td> --}}
                                <td>
                                    <a class="btn btn-info float-left" href="{{ route('offers.edit', $info->id) }}">Edit</a>
                                    <form action="{{ route('offers.destroy', $info->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger float-end" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>
    <!-- /.card -->
    </div>
    <div>
    @endsection
