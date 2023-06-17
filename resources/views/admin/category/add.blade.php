@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0">Category List</h1> -->
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add Category</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    @method('POST')
                    @include('admin.category.form',['button'=>'Save'])
                </div>
            </form>

        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- /.card -->
</div>
<div>
    @endsection