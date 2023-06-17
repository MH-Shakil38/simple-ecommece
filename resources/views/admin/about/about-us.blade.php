@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">About Us</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('about-us.index') }}">Home</a></li>
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
                        <h3 class="card-title">Add About</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(isset($about))
                            {!! Form::model($about,['route' => ['about-us.update',$about->id],'files'=>true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'about-us.store','files'=>true]) !!}
                        @endif

                        {{Form::label('Details',null,['class'=>'form-label'])}}
                        {{Form::textarea('details',null,['rows'=>4,'class'=>'form-control'])}}
                            <input type="hidden" name="id" value="{{$about->id ?? ''}}">

                        {{Form::submit('submit',['class'=>'btn btn-success mt-4'])}}
                        {!! Form::close() !!}

                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">About Details</h3>
                    </div>
                    <div class="card-body">
                       <h3>Details</h3>
                        <hr>
                        <p>{{$about->details ?? '-'}}</p>
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
