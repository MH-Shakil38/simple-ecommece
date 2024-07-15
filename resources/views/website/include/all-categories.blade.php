<br>
<section>
    <div class="product_categories">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-3 section-title">প্রোডাক্ট ক্যাটেগরীজ</h5>
                    <div class="horiz_cat">
                        <ul>
                            @forelse($categories as $info)
                                <li>
                                    <a href="{{route('product.category',$info->id)}}">{{$info->name}}</a>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="owl-carousel">
    @forelse($categories as $info)
            <div class="hot-deals-product">
                <a href="{{route('single.product',$info->id)}}">
                    <div class="discount">
                        <div class="discount-wrapper">
                            <img src="frontEnd/images/flash-deal-percentage.png" alt="" class="rounded-circle">

                            <span>ছাড়</span>
                        </div>
                    </div>
                    <img src="{{ asset($info->image) }}"
                         alt="Stainless Steel Hexagonal Aiwa 40 In 1 Pcs Wrench Tool Kit">
                </a>
            </div>
    @empty
    @endforelse
</div> --}}
