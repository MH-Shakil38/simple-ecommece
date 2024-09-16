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
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Slider</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (isset($slider))
                            {!! Form::model($slider, ['route' => ['slider-image.update', $slider->id], 'files' => true]) !!}
                            @method('PUT')
                        @else
                            {!! Form::open(['route' => 'slider-image.store', 'files' => true]) !!}
                        @endif

                        {{ Form::label('Slider image', null, ['class' => 'form-label']) }}
                        {{ Form::file('image', ['class' => 'form-control']) }}

                        {{ Form::label('Mobile Slider', null, ['class' => 'form-label']) }}
                        {{ Form::file('mobile_slider', ['class' => 'form-control']) }}

                        {{ Form::label('Status', null, ['class' => 'form-label']) }}
                        {{ Form::select('status', [1 => 'active', 0 => 'inActive'], null, ['class' => 'form-control']) }}

                        {{ Form::submit('submit', ['class' => 'btn btn-success mt-4']) }}
                        {!! Form::close() !!}

                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3>Slider List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive cat-table" >

                            <tr>
                                <th>ID</th>
                                <th>Desktop Slider</th>
                                <th>mobile Slider</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>


                            @foreach ($sliders as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><img src="{{ asset($item->image) }}" alt="" height="200px" width="500px"></td>
                                    <td ><img src="{{ asset($item->mobile_slider) }}" alt="" height="200px" width="500px"></td>
                                    <td> <span
                                            class="badge {{ $item->status == 1 ? 'badge-success' : 'badge-danger' }} ">{{ $item->status == 1 ? 'On' : 'Off' }}</span>
                                    </td>

                                    <td class="d-flex">
                                        @if (isset($slider) && $slider->id == $item->id)
                                            <span class="badge bg-info">Updating...</span>
                                        @else
                                            <a href="{{ route('slider-image.edit', [$item->id]) }}"
                                                class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('slider-image.destroy', [$item->id]) }}" class="mr-1"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></button>
                                            </form>
                                        @endif

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
