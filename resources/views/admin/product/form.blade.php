@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('products.create') }}">add new Product</a>
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
                        @if(isset($product))
                            <h3 class="float-right">Update Product</h3>
                        @else
                            <h3 class="float-right">Create Product</h3>
                        @endif
                        <a href="{{route('products.index')}}" class="btn btn-primary">Product List</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(isset($product))
                            {!! Form::model($product,['route' => ['products.update',$product->id],'files'=>true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'products.store','files'=>true]) !!}
                        @endif
                        <div class="row">

                            <div class="col-md-6">
                                {{Form::label('Name',null,['class'=>'form-label'])}}
                                {{Form::text('name',null,['class'=>'form-control','required'])}}
                            </div>

                            <div class="col-md-6">
                                {{Form::label('Category',null,['class'=>'form-label'])}}
                                {{Form::select('category_id',$categories,isset($product)?$product->category_id : null,['class'=>'form-control','required','placeholder'=>'Select Category'])}}
                            </div>
                          
                            <div class="col-md-12">
                                {{Form::label('Description',null,['class'=>'form-label'])}}
                                {{Form::textarea('description',null,['rows'=>4,'class'=>'form-control summernote','id'=>'summernote','required'])}}
                            </div>
{{--                            <div class="col-md-12">--}}
{{--                                <label for="" class="form-label">Description</label>--}}
{{--                                <textarea type="text" class="summernote form-control" id="summernote" name="description" placeholder="Select Product description"></textarea>--}}
{{--                            </div>--}}

                            <div class="col-md-4">
                                {{Form::label('Original Price',null,['class'=>'form-label'])}}
                                {{Form::number('original_price',null,['class'=>'form-control','required'])}}
                            </div>

                            <div class="col-md-4">
                                {{Form::label('Selling Price',null,['class'=>'form-label'])}}
                                {{Form::number('selling_price',null,['class'=>'form-control','required'])}}
                            </div>

                            <div class="col-md-4">
                                {{Form::label('Offer Price',null,['class'=>'form-label'])}}
                                {{Form::number('offer_price',null,['class'=>'form-control'])}}
                            </div>

                            <div class="col-md-4">
                                {{Form::label('Quantity',null,['class'=>'form-label'])}}
                                {{Form::text('quantity',null,['class'=>'form-control','required'])}}
                            </div>


                            <div class="col-md-4">
                                {{Form::label('Show Hot Deal',null,['class'=>'form-label'])}}
                                {{Form::select('show_hot_deal',[1=>'show',0=>'hide'],null,['class'=>'form-control'])}}
                            </div>


                            <div class="col-md-4">
                                {{Form::label('Image',null,['class'=>'form-label'])}}
                                {{Form::file('image',['class'=>'form-control'])}}
                            </div>
                            <div class="col-md-4">
                                {{Form::label('Status',null,['class'=>'form-label'])}}
                                {{Form::select('status',[1=>'Active',0=>'inActive'],null,['class'=>'form-control'])}}
                            </div>

                            <div class="col-md-4">
                                {{Form::label('Status',null,['class'=>'form-label'])}}
                                {{Form::select('stock',[1=>'In Stock',0=>'Out of Stock'],null,['class'=>'form-control'])}}
                            </div>

                            <div class="col-md-12">

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
@endsection
