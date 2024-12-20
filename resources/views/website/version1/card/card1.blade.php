<li
    class="with-border no-responsive-animation post-36170 product type-product status-publish has-post-thumbnail product_cat-254 last instock shipping-taxable purchasable product-type-simple">
    <div class="productwrap">
        @if ($info->sizePrice[0]->offer)
            <span class="onsale percentage-sale">-{{ $info->sizePrice[0]->offer }}%</span>
        @else
            {{-- <span class="onsale" style="background: green">Sale</span> --}}
        @endif
        <div class="add_to_cart_btn_wrap lazy-load-hover-container">
            <a href="{{ route('order',['product_id'=>$info->id,'stock_id'=>$info->sizePrice[0]->id,'qty'=>1]) }}" class="product-link"></a>
            <div class="imageswrap productthumbnail lazy-load lazy-load-on-load" style="padding-top: 100%;">
                <img decoding="async" src="{{ asset($info->image) }}" width="600" height="600"
                    data-src="{{ asset($info->image) }}" alt="3 Pcs Pickle Combo" />
            </div>
            <div class="product-buttons button{{ $info->sizePrice[0]->id }}">
                <span
                    class="{{ cartCheck($info->id, $info->sizePrice[0]->id) ? 'added_to_cart wc-forward' : 'product-button product_type_simple' }}"><a
                        href="#" rel="nofollow" data-product_id="{{ $info->id }}"
                        data-stock_id="{{ $info->sizePrice[0]->id }}" data-qty="1"
                        class="{{ cartCheck($info->id, $info->sizePrice[0]->id) ? 'added_to_cart wc-forward' : 'button add_to_cart_button product_type_simple ajax_add_to_cart' }}"><span
                            class="icon">
                        </span>
                        <span class="txt" data-hover="Add to cart">Add to cart</span>
                    </a>
                </span>
                <span class="ep-qv">
                    <a href="#" class="quick-view-button" data-product_id="{{ $info->id }}"
                        title="Show in quickview">Quick
                        View</a></span>
            </div>
        </div>
        <div class="wrap_after_thumbnail">
            <a href="{{ route('single.product', $info->id) }}">
                <style>
                    .woocommerce ul.products.shop-4column li.product:not(.product-category) h3 {
                        font-size: 18px !important;
                        line-height: 26px !important;
                    }
                </style>
                <h3 style="font-size: 18px" title="View More details">{{ $info->name }} <br> </h3>

             <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>{{ discount_calculate($info->sizePrice[0]->price, $info->sizePrice[0]->offer) }}</bdi></span></span>
            @if ($info->short_description != null)
                <p style="font-size: 12px; line-height: normal; margin:0px" class="short_des">{!! strip_tags($info->short_description) !!}
                </p>
            @else
                <p> <b> স্বাদঃ টক ঝাল মিষ্টি | </b> </p>
                <p>উপাদানঃ আম, লবন, মরিচ, ভিনেগার,</p>
                <p> নিজস্ব ঘানি ভাংগা সরিষার তৈল,</p>
                <p>আচার বাড়ি”র স্পেশাল মসলা।</p>
            @endif
        </a>
        </div>
    </div>
</li>
