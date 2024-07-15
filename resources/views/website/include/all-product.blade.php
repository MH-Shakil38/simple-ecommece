<section>
    <div class="main-products-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-3 section-title">প্রয়োজনীয় প্রোডাক্ট</h4>
                </div>
            </div>
            <div class="row m-0">
                @forelse($products as $info)
                    <div class="col-md-3 col-lg-3 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="{{route('single.product',$info->id)}}">
                                <img src="{{asset($info->image)}}" alt="GOLD 24K WHITENING SOAP">
                            </a>
                            <p class="mb-0 original-price" style="">
                                ৳ {{$info->original_price}}</p>
                            <p class="font-weight-bold mb-0 selling-price" style="color: #fca204">৳ {{$info->selling_price}}</p>
                            <p class="mb-0 prod_name"><a
                                    href="{{route('single.product',$info->id)}}">{{$info->name}}</a></p>
                            <form action="{{route('add.card')}}" method="post">
                                @csrf
                                <input type="hidden" name="qty" value="1">
                                <input type="hidden" name="id" value="{{$info->id}}">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now"
                                       value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="d-flex justify-content-center">
                {!! $products->links() !!}
            </div>
        </div>
    </div>
</section>
