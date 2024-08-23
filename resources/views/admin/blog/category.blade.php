@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blog Category List</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ route('categories.create') }}">add new category</a>
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
                        <h3 class="card-title">Add Blog Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(isset($category))
                            {!! Form::model($category,['route' => ['blog-categories.update',$category->id],'files'=>true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'blog-categories.store','files'=>true]) !!}
                        @endif

                        {{Form::label('Name',null,['class'=>'form-label'])}}
                        {{Form::text('name',null,['class'=>'form-control'])}}

                        {{Form::label('Description',null,['class'=>'form-label'])}}
                        {{Form::text('description',null,['class'=>'form-control'])}}

                        {{Form::label('Status',null,['class'=>'form-label'])}}
                        {{Form::select('status',[1=>"active",0=>"inActive"],null,['class'=>'form-control'])}}


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
                        <h3>Category List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table" class="cat-table">

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>


                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td> <span class="badge {{ $item->status == 1 ? 'badge-success':'badge-danger'}} ">{{ $item->status == 1 ? 'On':'Off' }}</span></td>

                                    <td class="d-flex">
                                        <a href="{{ route('categories.edit', [$item->id]) }}" class="btn btn-sm btn-primary mr-1"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('categories.destroy', [$item->id]) }}" class="mr-1"
                                              method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></button>
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
