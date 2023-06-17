@extends('website.layouts.master')

@section('content')

    <section>
        <div class="category_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
                            <a href="{{url('/')}}">Home</a>
                            /
                            <a href="javascript:void(0);">{{$category->name ?? $hotDeal}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="main-products-section">
            <div class="container">
                <div class="row m-0">
                    @forelse($products as $info)
                        <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="{{route('single.product',$info->id)}}">
                                    <img src="{{asset($info->image)}}" alt="GOLD 24K WHITENING SOAP">
                                </a>
                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">
                                    ৳ {{$info->original_price}}</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ {{$info->selling_price}}</p>
                                <p class="mb-0 prod_name"><a
                                        href="product/gold-24k-whitening-soap/133.html">{{$info->name}}</a></p>
                                <form action="https://citystorebd.com/add-cart/133" method="post">
                                    <input type="hidden" name="_token" value="RmrYQT0c8w3nngTk2cx7mxhNPSCHEgGQJrT6gGRl">
                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now"
                                           value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                    @empty
                        <h3>No product fund for this Category</h3>
                    @endforelse
                </div>
                <div class="d-flex justify-content-center">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
