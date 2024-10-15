@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">.</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ route('blogs.create') }}">add new
                                blogs</a>
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
                        <h3 class="card-title">Create Blog</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (isset($blog) && !empty($blog->id))
                            {!! Form::model($blog, ['route' => ['blogs.update', $blog->id], 'files' => true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'blogs.store', 'files' => true]) !!}
                        @endif

                        {{ Form::label('Title', null, ['class' => 'form-label']) }}
                        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => '']) }}

                        {{ Form::label('Category', null, ['class' => 'form-label']) }}
                        {{ Form::select('category_id', $categories,Null, ['class' => 'form-control', 'placeholder' => 'Select Category']) }}
                        <br>
                        {{ Form::label('Image', null, ['class' => 'form-label']) }} <br>
                        {{ Form::file('image', null, ['class' => 'form-control', 'placeholder' => 'Ex: 70tk']) }}

                        <br>
                        <br>
                        {{ Form::label('Description', null, ['class' => 'form-label']) }}
                        {{ Form::textarea('description', null, ['rows' => 6, 'class' => 'form-control', 'id' => 'summernote']) }}


                        {{ Form::submit('submit', ['class' => 'btn btn-success mt-4']) }}

                        {!! Form::close() !!}

                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-md-12 col-lg-12">
                <div class="card">

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
