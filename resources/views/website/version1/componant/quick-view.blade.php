    <!-- Modal content -->
    <div id="ep-modal" class="quickview-modal {{ isset($type) && $type == 1 ? 'open' : 'closed' }} shown">
        <a href="#" rel="prev">
            <span></span><img loading="lazy" decoding="async" src="{{ @$product->image }}" width="600" height="600"
                alt="Hand-Made-Ghee">
        </a>
        <a href="#" rel="next">
            <span></span><img decoding="async" src="{{ asset(@$product->image) }}" width="600" height="600"
                alt="3 chilli pickle">
        </a>
        <span class="wc-loading"></span>
        <div class="modal-content-wrapper">
            <div class="modal-main">
                <div class="modal-head">
                    <a href="#" id="modal-close" class="modalClose"></a>
                </div>
                <div id="modal-content" class="woocommerce single-product">
                    <div id="product-32614"
                        class="product  post-32614 type-product status-publish has-post-thumbnail product_cat-254 first instock sale shipping-taxable purchasable product-type-simple">


                        <span class="onsale percentage-sale">-{{ @$product->sizePrice[0]->offer }}%</span>
                        <div class="images">
                            <div id="product-fullview-thumbs" class="no-gallery">
                                <div class="zoom-container">

                                    <div class="swiper-container clearfix">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide easyzoom enable-popup swiper-slide-active"
                                                data-zoom-image="{{ asset(@$product->image) }}"
                                                data-src="{{ asset(@$product->image) }}" data-slide="0"><img
                                                    src="{{ asset(@$product->image) }}" alt="{{ @$product->name }}">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                            <a id="product_gallery_popup">
                                <div class="popup-button"><span class="ep-icon icon-expand5"></span></div>
                            </a>
                        </div>



                        <div class="summary entry-summary">
                            <div class="summary-content">
                                <a href="{{ route('single.product', @$product->id ?? '0') }}">
                                    <h1 class="product_title entry-title">{{ @$product->name }}</h1>
                                </a>
                                <div class="priceminheight">

                                    <p class="price"><del aria-hidden="true"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">৳&nbsp;</span><span class="original_price">{{ @$product->sizePrice[0]->price }}</span></bdi></span></del>
                                        <span class="screen-reader-text">Original price was: ৳&nbsp;<span class="original_price">{{ @$product->sizePrice[0]->price }}</span></span><ins
                                            aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">৳&nbsp;</span><span class="current_price">{{ discount_calculate(@$product->sizePrice[0]->price, @$product->sizePrice[0]->offer) }}</span></bdi></span></ins><span
                                            class="screen-reader-text">Current price is: ৳&nbsp;{{ discount_calculate(@$product->sizePrice[0]->price, @$product->sizePrice[0]->offer) }}.</span>
                                    </p>

                                </div>
                                <div class="woocommerce-product-details__short-description">
                                    <div
                                        class="swiper-container sw-scrollbar swiper-container-vertical swiper-container-free-mode">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide swiper-slide-active">
                                                <p>লিমিটেড টাইমের জন্য অফার মাত্র</p>
                                                <p>২০০০ জন এই অফারে অর্ডার করতে পারবেন।</p>
                                                <p>স্বাদ নিন মজাদার টক ঝাল মিষ্টি আচারের।</p>
                                            </div>
                                        </div>
                                        <div class="swiper-scrollbar" style="opacity: 0;">
                                            <div class="swiper-scrollbar-drag" style="height: 84.1429px;"></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="stock in-stock">961 in stock</p> --}}
                                <style>
                                    /* Style the buttons */
                                    #sizeBtn .btn {
                                        border: none;
                                        outline: none;
                                        padding: 7px 13px;
                                        background-color: #c8d3d3;
                                        cursor: pointer;
                                        font-size: 18px;
                                    }

                                    /* Style the active class, and buttons on mouse-over */
                                    #sizeBtn .active,
                                    #sizeBtn .btn:hover {
                                        background-color: #1b6567;
                                        color: white;
                                    }
                                </style>
                                @if ( isset($product) && count(@$product->sizePrice))
                                    <div class="size mt-3" style="margin-left:37px">
                                        <div id="sizeBtn" style=" ">
                                            @forelse ($product->sizePrice as $info)
                                                <button
                                                    class="btn {{ $loop->iteration == 1 ? 'active' : 'border' }} size btn btn ep_button center row style2"
                                                    style="" data-size_id={{ $info->id }}>
                                                    {{ $info->size }}
                                                </button>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                @endif
                                {{-- <p class="stock in-stock">963 in stock</p> --}}
                                <br>

                                <form class="cart" method="post" enctype="multipart/form-data">
                                    <div class="quantity">
                                        <input type="number" step="1" min="1" max
                                            name="quantity" value="1" title="Qty"
                                            class="input-text qty text single-qty" size="4"
                                            pattern="[0-9]*" inputmode="numeric" />
                                        <input type="hidden" name="qty" id="qty"
                                            class="qty" value="1">
                                        <input type="hidden" name="product_id" class="product_id"
                                            value="{{ @$product->id }}">
                                        <input type="hidden" name="stock_id" class="stock_id"
                                            value="{{ @$product->sizePrice[0]->id }}">
                                        <div class="plus quantity-button"></div>
                                        <div class="minus quantity-button"></div>
                                    </div>
                                    <a class="single_add_to_cart_button button alt product_type_simple add_to_cart_button ajax_add_to_cart "
                                        data-product_id="{{ @$product->id }}" data-quantity="1"
                                        href="#" title="Add to cart">
                                        <span class="icon"></span>
                                        <span class="txt" data-hover="Add to cart">
                                            Add to cart </span>
                                    </a>

                                </form>


                                <div class="socialShareContainer">
                                    <div class="label hidden-phone hidden-v-tablet"> Share : </div>

                                    <ul class="social-icons dark">

                                        <!-- facebook Social share button -->
                                        <li class="socialLinkShortcode iconstyle facebook">
                                            <a href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fchuijhal.com%2Fproduct%2Fpickle-combo-offer-01%2F"
                                                title="Share on Facebook!">
                                                <span class="firstIcon icon icon-facebook"></span>
                                                <span class="SecoundIcon icon icon-facebook"></span>
                                            </a>
                                        </li> <!-- google plus social share button -->
                                        {{-- <li class="socialLinkShortcode iconstyle google-plus">
                                            <a href="https://plus.google.com/share?url=https%3A%2F%2Fchuijhal.com%2Fproduct%2Fpickle-combo-offer-01%2F"
                                                title="Share on Google+!">
                                                <span class="firstIcon icon icon-google-plus"></span>
                                                <span class="SecoundIcon icon icon-google-plus"></span>
                                            </a>
                                        </li> <!-- Mail To icon -->
                                        <li class="socialLinkShortcode iconstyle email">
                                            <a href="mailto:?subject=Check this https://chuijhal.com/product/pickle-combo-offer-01/"
                                                title="Share by Mail!">
                                                <span class="firstIcon icon icon-envelope2"></span>
                                                <span class="SecoundIcon icon icon-envelope2"></span>
                                            </a>
                                        </li> <!-- twitter icon  -->
                                        <li class="socialLinkShortcode iconstyle twitter">
                                            <a href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fchuijhal.com%2Fproduct%2Fpickle-combo-offer-01%2F&amp;source=tweetbutton&amp;text=Pickle+Combo+Offer+01&amp;url=http://https%3A%2F%2Fchuijhal.com%2Fproduct%2Fpickle-combo-offer-01%2F"
                                                title="Share on Twitter!">
                                                <span class="firstIcon icon icon-twitter"></span>
                                                <span class="SecoundIcon icon icon-twitter"></span>
                                            </a>
                                        </li>
                                        <!-- pinterest icon -->
                                        <li class="socialLinkShortcode iconstyle pinterest dddddd">
                                            <a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fchuijhal.com%2Fproduct%2Fpickle-combo-offer-01%2F&amp;media=https://chuijhal.com/wp-content/uploads/2023/08/3-Pickle-COmbo-1.png&amp;description=Pickle+Combo+Offer+01"
                                                class="pin-it-button" count-layout="horizontal">
                                                <span class="firstIcon icon icon-pinterest"></span>
                                                <span class="SecoundIcon icon icon-pinterest"></span>
                                            </a>
                                        </li> --}}
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $('#sizeBtn .btn').click(function() {
            $('#sizeBtn .btn').removeClass('active');
            $(this).addClass('active');

            event.preventDefault();
            var url = "{{ route('sizePrice') }}";
            var sizeId = $(this).data('size_id');

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    sizeId: sizeId,
                },
                success: function(res) {
                    $('.stock_id').val(res.size.id)
                    $('#qty').val(1)
                    $('.offer').html(res.size.offer + '%')
                    $('.price').html('৳' + res.price)
                    $('.original_price').html('৳' + res.size.price)
                },
                error: function(xhr) {
                    toastr.error('An error occurred. Please try again.');
                }
            });
        });

        $('#qty_minus').click(function() {
            var qty = parseInt($('#qty').val(), 10);
            if (qty > 1) {
                $('#qty').val(qty - 1)
                $('.qty').val(qty - 1)
            }
        });

        $('#qty_plus').click(function() {
            var qty = parseInt($('#qty').val(), 10);
            if (qty >= 1) {
                $('#qty').val(qty + 1)
                $('.qty').val(qty + 1)
            }
        });

        $('.add_to_card_btn').on('click', function(event) {
            event.preventDefault();
            var url = "{{ route('add.card') }}";
            var product_id = $('.product_id').val();
            var stock_id = $('.stock_id').val();
            var qty = $('.qty').val();

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: product_id,
                    stock_id: stock_id,
                    qty: qty
                },
                success: function(res) {
                    if (res.cart) {
                        toastr.warning('This Item Already Added!');
                    } else {
                        var cart = parseInt($('.cartTotal').html(), 10);
                        var newCartTotal = cart + 1;
                        $('.cartTotal').html(newCartTotal)
                        toastr.success('Product Successfully added to cart!');
                    }
                },
                error: function(xhr) {
                    toastr.error('An error occurred. Please try again.');
                }
            });
        });

    </script>
