@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">return Policy</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('return-policy.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ route('return-policy.create') }}">add new return-policy</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add return-policy</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(isset($policy) && !empty($policy->id))
                            {!! Form::model($policy,['route' => ['return-policy.update',$policy->id],'files'=>true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'return-policy.store','files'=>true]) !!}
                        @endif

                        {{Form::label('Details',null,['class'=>'form-label'])}}
                        {{Form::textarea('details',null,['rows'=>4,'class'=>'form-control'])}}

                        {{Form::submit('submit',['class'=>'btn btn-success mt-4'])}}

                        {!! Form::close() !!}

                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-md-7 col-lg-7">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3>return Policy</h3>
                    </div>
                    <div class="card-body">
                        <table class="table" class="cat-table">

                            <tr>
                                <th>Details</th>
                            </tr>


                            <tr>
                                <td>{{ $policy->details ?? '-'}}</td>

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
