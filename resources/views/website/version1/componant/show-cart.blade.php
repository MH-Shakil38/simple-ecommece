<div class="toggleSidebar cartSidebarContainer">
    <div class="cartSidebarWrap">
        <div class="wc-loading"></div>
        <span class="wc-loading-bg"></span>
        {{-- <div class="widget_shopping_cart_content">
            <div class="cartSidebarHeader">
                <div id="cart-close-btn"></div>
                <div class="cartSidebarTitle">
                    Shopping Bag </div>
                <div class="cartContentsCount">
                    0 </div>
            </div>
            <ul class="cart_list product_list_widget ">
                <li class="empty show-message">No products in the cart.</li>
            </ul>

            <div class="cart-bottom-box">
            </div>
        </div> --}}
        <div class="ajax-cart">
            <div class="widget_shopping_cart_content" style="opacity: 1;">
                <div class="cartSidebarHeader">
                    <div id="cart-close-btn"></div>
                    <div class="cartSidebarTitle">
                        Shopping Bag </div>

                    <div class="cartContentsCount cartTotal">
                        {{ count((array) session('cart')) }} </div>

                </div>


                <ul class="cart_list product_list_widget ajax-cart">
                    <div class="swiper-container sw-scrollbar swiper-container-vertical swiper-container-free-mode">
                        <div class="swiper-wrapper"
                            style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active">
                                @php
                                    $carts = session()->get('cart');
                                @endphp

                                @forelse ($carts ?? [] as $info)
                                    <li class="mini_cart_item">


                                        <!--**************************check the version  *****************************-->


                                        <a href="{{ route('card.remove',['id'=>$info['id'],'stock_id'=>$info['stock_id']]) }}"
                                            class="remove no_djax" aria-label="Remove this item" data-product_id="32614"
                                            data-product_sku="Combo1"
                                            data-item-key="32c92c5a9c391d8a2a2a05770f1a3395"></a>

                                        <!--**************************check the version end *****************************-->



                                        <div class="wc-loading hide"></div>


                                        <!--**************************check the version  *****************************-->


                                        <a href="{{route('cart')}}?undo_item=32c92c5a9c391d8a2a2a05770f1a3395&amp;_wpnonce=77634fd39e"
                                            class="icon icon-undo undo no_djax" title="Undo this item"
                                            data-product_id="32614" data-product_sku="Combo1"
                                            data-item-key="32c92c5a9c391d8a2a2a05770f1a3395"><span></span></a>

                                        <!--**************************check the version end *****************************-->


                                        <a href="https://chuijhal.com/product/pickle-combo-offer-01/">
                                            <img width="300" height="300"
                                                src="{{ asset($info['image']) }}"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="" decoding="async"
                                                srcset="{{ asset($info['image']) }} 1080w"
                                                sizes="(max-width: 300px) 100vw, 300px"> </a>

                                        <span>{{ $info['name'] }}</span>

                                        <span>{{ $info['size'] ?? '' }}</span>
                                        <!--**************************check the version  *****************************-->


                                        <!--**************************check the version end *****************************-->





                                        <span class="quantity">{{ $info['qty'] }} × <span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">৳&nbsp;</span>{{ $info['price'] }}</bdi></span></span>
                                    </li>

                                @empty
                                @endforelse



                            </div>
                        </div>
                        <div class="swiper-scrollbar" style="display: none; opacity: 0; transition-duration: 400ms;">
                            <div class="swiper-scrollbar-drag"
                                style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); height: 0px;">
                            </div>
                        </div>
                    </div>
                </ul><!-- end product list -->

                <div class="cart-bottom-box">

                    <p class="total"><strong>Subtotal:</strong> <span
                            class="woocommerce-Price-amount amount"><bdi><span

                                    class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                                    @if (session('cart'))
                                    @php
                                        $net_total = 0;
                                    @endphp

                                    @foreach (session('cart') as $id => $details)
                                        @php
                                            $net_total =
                                                $net_total +
                                                $details['qty'] * $details['price'];
                                        @endphp
                                    @endforeach
                                    {{ $net_total }}
                                @endif
                                </bdi></span>
                    </p>


                    <p class="buttons">
                        <a href="{{ route('cart')}}" class="button wc-forward">
                            <span data-hover="View Cart">View Cart</span>
                        </a><a href="{{ route('checkout') }}" class="button checkout wc-forward">
                            <span data-hover="Checkout">Checkout</span>
                        </a>
                    </p>

                </div>


                <div class="woocommerce-message" role="alert">
                    <a href="{{route('cart')}}" tabindex="1" class="button wc-forward">View cart</a>
                    “Pickle Combo Offer 01” has been added to your cart.
                </div>
            </div>
        </div>
    </div>
</div>
