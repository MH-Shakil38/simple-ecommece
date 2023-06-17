@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1 class="m-0">Setting</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('settings.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('settings.create') }}">add new Setting</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        @if(isset($setting))
                            <h3 class="float-right">Update Setting</h3>
                        @else
                            <h3 class="float-right">Create Setting</h3>
                        @endif
                        <a href="{{route('settings.index')}}" class="btn btn-primary">Setting List</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(isset($setting))
                            {!! Form::model($setting,['route' => ['settings.update',$setting->id],'files'=>true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'settings.store','files'=>true]) !!}
                        @endif
                        <div class="row">

                            <div class="col-md-4">
                                {{Form::label('Site Name',null,['class'=>'form-label'])}}
                                {{Form::text('name',null,['class'=>'form-control','required'])}}
                            </div>
                            <div class="col-md-4">
                                {{Form::label('Phone1',null,['class'=>'form-label'])}}
                                {{Form::number('phone1',null,['class'=>'form-control','required'])}}
                            </div>

                            <div class="col-md-4">
                                {{Form::label('Phone2',null,['class'=>'form-label'])}}
                                {{Form::number('phone2',null,['class'=>'form-control'])}}
                            </div>

                            <div class="col-md-4">
                                {{Form::label('Email',null,['class'=>'form-label'])}}
                                {{Form::email('email',null,['class'=>'form-control'])}}
                            </div>

                            <div class="col-md-4">
                                {{Form::label('Address',null,['class'=>'form-label'])}}
                                {{Form::text('address',null,['class'=>'form-control','required'])}}
                            </div>

                            <div class="col-md-4">
                                {{Form::label('Facebook',null,['class'=>'form-label'])}}
                                {{Form::text('fb',null,['class'=>'form-control','required'])}}
                            </div>

                            <div class="col-md-4">
                                {{Form::label('Whats App',null,['class'=>'form-label'])}}
                                {{Form::text('wp',null,['class'=>'form-control','required'])}}
                            </div>


                            <div class="col-md-4">
                                {{Form::label('Instagram',null,['class'=>'form-label'])}}
                                {{Form::text('instagram',null,['class'=>'form-control','required'])}}
                            </div>


                            <div class="col-md-4">
                                {{Form::label('Youtube',null,['class'=>'form-label'])}}
                                {{Form::text('youtube',null,['class'=>'form-control','required'])}}
                            </div>


                            <div class="col-md-4">
                                {{Form::label('Address',null,['class'=>'form-label'])}}
                                {{Form::text('address',null,['class'=>'form-control','required'])}}
                            </div>


                            <div class="col-md-4">
                                {{Form::label('Site logo',null,['class'=>'form-label'])}}
                                {{Form::file('logo',['class'=>'form-control'])}}
                            </div>

                            <div class="col-md-8">

                            </div>
                            <div class="col-md-4">
                                {{Form::submit('submit',['class'=>'btn btn-success mt-4'])}}
                                {!! Form::close() !!}
                            </div>

                        </div>



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
