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
                        <h3 class="">Blog List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table" class="cat-table">

                            <tr>
                                <th>Sl</th>
                                <th>image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @forelse($blogs as $info)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset($info->image) }}" height="80px" width="80px"
                                        alt=""></td>
                                    <td>{{ $info->title }}</td>
                                    <td class="">{{ @$info->category->name }}</td>
                                    <td class=""> <span class="badge bg-primary">Active</span></td>
                                    <td>
                                        <a href="{{ route('blogs.edit',$info->id) }}" class="btn btn-info">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
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
