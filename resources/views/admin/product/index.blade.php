@extends('layouts.admin.master ')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4">

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="float-right">Product List</h3>
                        <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
                    </div>
                    <div class="card-body">
                        <table class="table" class="cat-table">

                            <tr>
                                <th>Sl</th>
                                <th>Status</th>
                                <th>image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>stock</th>
                                <th>Size/Price</th>
                                <th>Quantity</th>
                                <th>Original Price</th>
                                <th>Selling Price</th>
                                <th>Offer Price</th>
                                <th>Action</th>
                            </tr>
                            @forelse($products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> <span
                                            class="badge {{ $item->status == 1 ? 'badge-success' : 'badge-danger' }} ">{{ $item->status == 1 ? 'ON' : 'OFF' }}</span>
                                    </td>
                                    <td><img src="{{ asset($item->image) }}" alt="" height="80px" width="80px">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name ?? '--' }}</td>
                                    <td> <span
                                            class="badge {{ $item->stock == 1 ? 'badge-success' : 'badge-danger' }} ">{{ $item->stock == 1 ? 'In-stock' : 'Out of stock' }}</span>
                                    </td>
                                    <td>
                                        <table class="table-bordered">
                                            @forelse ($item->sizePrice as $info)
                                                <tr>
                                                    <td>{{ $info->size }}</td>
                                                    <td>{{ $info->price }}-tk</td>
                                                </tr>
                                            @empty
                                            @endforelse

                                        </table>
                                    </td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->original_price }}</td>
                                    <td>{{ $item->selling_price }}</td>
                                    <td>{{ $item->offer_price }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('products.edit', [$item->id]) }}"
                                            class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('products.destroy', [$item->id]) }}" class="mr-1"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></button>
                                        </form>
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
    </div>
    <div>
    @endsection
