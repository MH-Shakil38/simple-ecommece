@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Setting List</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('settings.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ route('settings.create') }}">add new Setting</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="float-right">Setting List</h3>
                        @if(isset($settings))
                        <a href="{{route('settings.edit',$settings->id)}}" class="btn btn-primary">Update setting</a>
                        @else
                            <a href="{{route('settings.create')}}" class="btn btn-primary">Create setting</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <table class="table" class="cat-table">

                            <tr>
                                <th>Site name</th>
                                <th>Logo</th>
                                <th>Phone1</th>
                                <th>Phone2</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Facebook</th>
                                <th>whatsapp</th>
                                <th>Youtube</th>
                            </tr>

                                @if(isset($settings))
                                <tr>
                                    <td>{{$settings->name ?? '-'}}</td>
                                    <td><img src="{{ asset($settings->logo) }}" alt="" height="80px" width="100px"></td>
                                    <td>{{$settings->phone1}}</td>
                                    <td>{{$settings->phone2}}</td>
                                    <td>{{$settings->email}}</td>
                                    <td>{{$settings->address}}</td>
                                    <td>{{$settings->fb}}</td>
                                    <td>{{$settings->wp}}</td>
                                    <td>{{$settings->youtube}}</td>

                                </tr>
                            @endif

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
