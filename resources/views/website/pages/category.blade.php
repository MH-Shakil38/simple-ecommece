@extends('website.layouts.master')

@section('content')
    <section>
        <div class="category_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
                            <a href="{{ url('/') }}">Home</a>
                            /
                            <a href="javascript:void(0);">{{ $category->name ?? $hotDeal }}</a>
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
                    <div class="col-md-3 col-lg-3 col-6 main-product">
                        @if ($info->sizePrice[0]->offer)
                            <div class="discount mt-2 mr-2">
                                <div class="discount-wrapper">
                                    <img src="frontEnd/images/flash-deal-percentage.png" alt=""
                                        class="rounded-circle">
                                    <span>{{ $info->sizePrice[0]->offer }}%</span>
                                    <br>
                                    <span>ছাড়</span>
                                </div>
                            </div>
                        @endif
                        <div class="main-product-inner-wrapper text-center">
                            <a href="{{ route('single.product', $info->id) }}">
                                <img src="{{ asset($info->image) }}" alt="GOLD 24K WHITENING SOAP">
                            </a>
                            <p class="mb-0 original-price" style="">
                                @if ($info->sizePrice[0]->offer)
                                    ৳ {{ $info->sizePrice[0]->price }}
                                    @else
                                    <br>
                                 @endif
                        </p>
                <p class="font-weight-bold mb-0 selling-price" style="color: #fca204">৳
                    {{ discount_calculate($info->sizePrice[0]->price, $info->sizePrice[0]->offer) }}<span style="font-size: 11px;color:rgb(65, 65, 65)">({{$info->sizePrice[0]->size }}) </span>  </p>
                <p class="mb-0 prod_name" style=""><a href="{{ route('single.product', $info->id) }}">{{ $info->name }}</a> </p>

                @include('website.componant.order_cart_btn',['product_id'=>$info->id,'stock_id'=>$info->sizePrice[0]->id,'type'=>'cart_btn'])
                @include('website.componant.order_cart_btn',['product_id'=>$info->id,'stock_id'=>$info->sizePrice[0]->id,'type'=>'order_btn'])
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
