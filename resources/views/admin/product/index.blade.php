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
                                <th>Campain</th>
                                <th>image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th class="p-0 m-0">
                                    <table class="p-0 m-0 ml-2 bg-green">
                                        <tr class="table-bordered">
                                            <th>Size</th>
                                            <th>Price</th>
                                            <th>Offer</th>
                                            <th>in Stock</th>
                                        </tr>
                                    </table>
                                </th>
                                <th>Action</th>
                            </tr>
                            @forelse($products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> <span
                                            class="badge {{ $item->status == 1 ? 'badge-success' : 'badge-danger' }} ">{{ $item->status == 1 ? 'ON' : 'OFF' }}</span>
                                    </td>
                                    <td> <span
                                            class="badge {{ $item->show_hot_deal == 1 ? 'badge-success' : 'badge-danger' }} ">{{ $item->show_hot_deal == 1 ? 'ON' : 'OFF' }}</span>
                                    </td>
                                    <td><img src="{{ asset($item->image) }}" alt="" height="80px" width="80px">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name ?? '--' }}</td>

                                    <td class="">
                                        <table class="table-bordered border-2 m-0 p-0">

                                            @forelse ($item->sizePrice as $info)
                                                <tr class="border-2"
                                                    style="border: 2px solid rgb(30, 5, 131);min-width:500px">
                                                    <td class="border-2">{{ $info->size }}</td>
                                                    <td>{{ $info->price }}-tk</td>
                                                    <td>{{ $info->offer }}%</td>
                                                    <td> <span
                                                            class="badge {{ $info->in_stock == 1 ? 'badge-success' : 'badge-danger' }} ">{{ $info->in_stock == 1 ? 'In-stock' : 'Out of stock' }}</span>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse

                                        </table>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('products.edit', [$item->id]) }}"
                                            class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                        {{-- <form action="{{ route('products.destroy', [$item->id]) }}" class="mr-1"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></button>
                                        </form> --}}
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('products.destroy', [$item->id]) }}" method="POST"
                                            class="mr-1">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" class="btn btn-sm btn-danger"
                                                onclick="confirmDelete({{ $item->id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(itemId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You Delete this item!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + itemId).submit();
                }
            });
        }

        // Show a success alert after deletion
        @if (session('success'))
            Swal.fire({
                title: 'Message!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif
    </script>


@endsection
