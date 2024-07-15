@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Delivery Policy</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('delivery-policy.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ route('delivery-policy.create') }}">add new
                                Delivery-policy</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Delivery-policy</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (isset($policy) && !empty($policy->id))
                            {!! Form::model($policy, ['route' => ['delivery-policy.update', $policy->id], 'files' => true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'delivery-policy.store', 'files' => true]) !!}
                        @endif

                        {{ Form::label('InSide Dhaka', null, ['class' => 'form-label']) }}
                        {{ Form::number('inside_dhaka', null, ['class' => 'form-control', 'placeholder' => 'Ex: 70tk']) }}

                        {{ Form::label('Outside Dhaka', null, ['class' => 'form-label']) }}
                        {{ Form::number('outside_dhaka', null, ['class' => 'form-control', 'placeholder' => 'Ex: 70tk']) }}


                        {{ Form::label('Details', null, ['class' => 'form-label']) }}
                        {{ Form::textarea('details', null, ['rows' => 4, 'class' => 'form-control', 'id' => 'summernote']) }}


                        {{ Form::submit('submit', ['class' => 'btn btn-success mt-4']) }}

                        {!! Form::close() !!}

                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3>Delivery Policy</h3>
                    </div>
                    <div class="card-body">
                        <table class="table" class="cat-table">

                            <tr>
                                <th>ID</th>
                                <th>Inside Dhaka </th>
                                <th>Outside Dhaka</th>
                                <th>Details</th>
                            </tr>

                            <tr>
                                <td>{{ $policy->id ?? '-' }}</td>
                                <td>{{ $policy->inside_dhaka ?? '-' }}</td>
                                <td>{{ $policy->outside_dhaka ?? '-' }}</td>
                                <td>{!! $policy->details ?? '-' !!}</td>
                            </tr>
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
