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
                        @if (isset($product))
                            <h3 class="float-right">Update Product</h3>
                        @else
                            <h3 class="float-right">Create Product</h3>
                        @endif
                        <a href="{{ route('products.index') }}" class="btn btn-primary">Product List</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (isset($product))
                            {!! Form::model($product, ['route' => ['products.update', $product->id], 'files' => true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'products.store', 'files' => true]) !!}
                        @endif
                        <div class="row">

                            <div class="col-md-12">
                                {{ Form::label('Name', null, ['class' => 'form-label']) }}
                                {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                            </div>

                            <div class="col-md-3">
                                {{ Form::label('Category', null, ['class' => 'form-label']) }}
                                {{ Form::select('category_id', $categories, isset($product) ? $product->category_id : null, ['class' => 'form-control', 'required', 'placeholder' => 'Select Category']) }}
                            </div>


                            {{--                            <div class="col-md-12"> --}}
                            {{--                                <label for="" class="form-label">Description</label> --}}
                            {{--                                <textarea type="text" class="summernote form-control" id="summernote" name="description" placeholder="Select Product description"></textarea> --}}
                            {{--                            </div> --}}

                            {{-- <div class="col-md-4">
                                {{ Form::label('Original Price', null, ['class' => 'form-label']) }}
                                {{ Form::number('original_price', null, ['class' => 'form-control', 'required']) }}
                            </div>

                            <div class="col-md-4">
                                {{ Form::label('Selling Price', null, ['class' => 'form-label']) }}
                                {{ Form::number('selling_price', null, ['class' => 'form-control', 'required']) }}
                            </div>

                            <div class="col-md-4">
                                {{ Form::label('Offer Price', null, ['class' => 'form-label']) }}
                                {{ Form::number('offer_price', null, ['class' => 'form-control']) }}
                            </div> --}}

                            <div class="col-md-2">
                                {{ Form::label('Quantity', null, ['class' => 'form-label']) }}
                                {{ Form::text('quantity', null, ['class' => 'form-control', 'required']) }}
                            </div>


                            <div class="col-md-2">
                                {{ Form::label('Is Campain', null, ['class' => 'form-label']) }}
                                {{ Form::select('show_hot_deal', [ 0 => 'No',1 => 'Yes'], null, ['class' => 'form-control']) }}
                            </div>


                            <div class="col-md-3">
                                {{ Form::label('Image', null, ['class' => 'form-label']) }}
                                {{ Form::file('image', ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-2">
                                {{ Form::label('Status', null, ['class' => 'form-label']) }}
                                {{ Form::select('status', [1 => 'Active', 0 => 'inActive'], null, ['class' => 'form-control']) }}
                            </div>


                            <div class="col-md-12">
                                @isset($product)
                                    @forelse ($product->sizePrice as $key=>$info )
                                    <div class="row">
                                        <div class="col-md-2">
                                            {{ Form::label('Size', null, ['class' => 'form-label']) }}
                                            {{ Form::text('size[]', $info->size, ['class' => 'form-control']) }}
                                        </div>
                                        <input type="hidden" name="stock_id[]" value="{{ $info->id }}">
                                        <div class="col-md-2">
                                            {{ Form::label('price', null, ['class' => 'form-label']) }}
                                            {{ Form::text('price[]', $info->price, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ Form::label('Offer', null, ['class' => 'form-label']) }}
                                            {{ Form::text('offer[]', $info->offer, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="col-md-2">
                                            {{ Form::label('Stock', null, ['class' => 'form-label']) }}
                                            {{ Form::select('stock[]', [1 => 'In Stock', 0 => 'Out of Stock'], $info->stock, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="col-md-3 mt-2"><br/><a class="btn btn-danger deleteBtn"><i class="fa fa-trash"></i></a></div>
                                    </div>
                                    @empty

                                    @endforelse
                                @endisset

                                <div class="row coloneRow">
                                    <div class="col-md-2">
                                        {{ Form::label('Size', null, ['class' => 'form-label']) }}
                                        {{ Form::text('size[]', null, ['class' => 'form-control']) }}
                                    </div>

                                    <div class="col-md-2">
                                        {{ Form::label('price', null, ['class' => 'form-label']) }}
                                        {{ Form::text('price[]', null, ['class' => 'form-control']) }}
                                    </div>

                                    <div class="col-md-2">
                                        {{ Form::label('Offer', null, ['class' => 'form-label']) }}
                                        {{ Form::text('offer[]', null, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ Form::label('Stock', null, ['class' => 'form-label']) }}
                                        {{ Form::select('stock[]', [1 => 'In Stock', 0 => 'Out of Stock'], null, ['class' => 'form-control']) }}
                                    </div>

                                </div>
                                <div class="appendRow"></div>
                                <div class="col-md-3">
                                    {{ Form::label('', null, ['class' => 'form-label']) }} <br />
                                    <a class="btn btn-info addBtn"> <i class="fa fa-plus-circle"> Add More</i> </a>
                                </div>

                                <div class="col-md-12">
                                    {{ Form::label('Short Description', null, ['class' => 'form-label']) }}
                                    {{ Form::textarea('short_description', null, ['rows' => 3, 'class' => 'summernote']) }}
                                </div>

                                <div class="col-md-12">
                                    {{ Form::label('Description', null, ['class' => 'form-label']) }}
                                    {{ Form::textarea('description', null, ['rows' => 4, 'class' => 'form-control', 'id' => 'summernote']) }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                {{ Form::submit('submit', ['class' => 'btn btn-success mt-4','type'=>"submit"]) }}
                                {!! Form::close() !!}
                            </div>

                        </div>



                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.addBtn').click(function(e) {
                e.preventDefault();

                var clonedRow = $('.coloneRow').first().clone();
                clonedRow.find('input').val(''); // Clear input values in the cloned row
                clonedRow.append(
                    '<div class="col-md-3 mt-2"><br/><a class="btn btn-danger deleteBtn"><i class="fa fa-trash"></i></a></div>'
                    );

                $('.appendRow').append(clonedRow);
            });

            // Event delegation for dynamically added delete buttons
            $(document).on('click', '.deleteBtn', function(e) {
                e.preventDefault();
                $(this).closest('.coloneRow').remove();
            });
        });
    </script>
    <!-- /.card -->
@endsection
