<section>
    <div class="hot-deals">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hot-deals-inner-wrapper">
                        <div class="row mb-3">
                            <div class="col-md-6 col-6">
                                <div class="hot-deals-gif">
                                    <img src="frontEnd/images/hot-deal-logo.gif" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="all-hot-deals-btn text-right mt-2">
                                    <a href="{{route('all.hot.deal')}}">সকল হট ডিল <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        @php
                            $total  = hot_deal()->count();
                            $show   = $total / 2;
                        @endphp
                        <div class="owl-carousel mb-3">
                            @forelse($hot_deal as $info)
                                @if($loop->iteration <= $show)
                                    <div class="hot-deals-product">
                                        <a href="{{route('single.product',$info->id)}}">
                                            <div class="discount">
                                                <div class="discount-wrapper">
                                                    <img src="frontEnd/images/flash-deal-percentage.png" alt="">
                                                    <span>{{discount_calculate($info->original_price, $info->selling_price)}}%</span>
                                                    <br>
                                                    <span>ছাড়</span>
                                                </div>
                                            </div>
                                            <p class="float_price">৳ {{$info->selling_price}}</p>
                                            <img src="{{$info->image}}" alt="BLACK SOAP DR DAVEY অরজিনাল">
                                        </a>
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>

                        <div class="owl-carousel">
                            @forelse($hot_deal as $info)
                                @if($loop->iteration > $show)
                                    <div class="hot-deals-product">
                                        <a href="{{route('single.product',$info->id)}}">
                                            <div class="discount">
                                                <div class="discount-wrapper">
                                                    <img src="frontEnd/images/flash-deal-percentage.png" alt="">
                                                    <span>{{discount_calculate($info->original_price, $info->selling_price)}}%</span> <br>
                                                    <span>ছাড়</span>
                                                </div>
                                            </div>
                                            <p class="float_price">৳ {{$info->selling_price}}</p>
                                            <img src="{{$info->image}}"
                                                 alt="Stainless Steel Hexagonal Aiwa 40 In 1 Pcs Wrench Tool Kit">
                                        </a>
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
