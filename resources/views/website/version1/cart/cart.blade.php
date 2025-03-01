<html lang="en-US"
    class="csstransforms csstransforms3d csstransitions no-forcetouch js_active  vc_desktop  vc_transform  vc_transform ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="https://chuijhal.com/xmlrpc.php">
    <meta name="robots" content="noindex, follow">

    <!-- This site is optimized with the Yoast SEO plugin v23.0 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>কার্ট - আচার</title>
    <link rel="icon" href="{{ asset(setting()->logo) }}" sizes="32x32" />
    <link rel="icon" href="{{ asset(setting()->logo) }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset(setting()->logo) }}" />

    <link rel="canonical" href="{{ route('cart') }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="কার্ট - আচার">
    <meta property="og:url" content="{{ route('cart') }}">
    <meta property="og:site_name" content="আচার">
    <meta property="article:publisher" content="https://www.facebook.com/Achar.BariETHA99">
    <meta property="article:modified_time" content="2019-02-28T07:58:35+00:00">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@chuijhal">
    <!-- / Yoast SEO plugin. -->
    @include('website.version1.layouts.include.header-script')
    @include('website.version1.cart.header-script')
    </script>
</head>

<body data-rsssl="1"
    class="page-template-default page page-id-554 theme-vitrine woocommerce-cart woocommerce-page woocommerce-js no-preloader fade wpb-js-composer js-comp-ver-6.9.0 vc_responsive elementor-default elementor-kit-34415 has-scrollbar scrollbarSize17"
    data-pageid="554">


    <div id="top"></div>

    <div class="scrollToTop visible-desktop">
        <a href="#top"></a>
    </div>

    <div class="layout">

        <!-- Preloader -->


        @include('website.version1.componant.sidebar-category')




        <!-- Header Navigation  -->
        @include('website.version1.layouts.include.header')
        <!-- Header Navigation End -->





        <div class="toggleSidebarContainer">
            <div id="main-content" class="main-content type1 show">
                <div id="main" style="margin-top: 0px;">
                    <div id="home" class="hidehome"></div>
                    <style>
                        #header h1,
                        #header .subtitle,
                        #header ul li a,
                        .page-breadcrumb .woocommerce-breadcrumb,
                        .page-breadcrumb .woocommerce-breadcrumb a,
                        .page-breadcrumb .woocommerce-breadcrumb span.delimiter {
                            color: #212121;
                        }

                        #header ul li a:before {
                            background-color: #212121;
                        }
                    </style>
                    <div id="header" class="">
                        <div id="header-content">

                            <div class="page-breadcrumb">
                                <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb"><a
                                        href="{{ route('/') }}">Home</a><span class="delimiter">/</span>কার্ট
                                </nav>
                            </div>

                            <h1>কার্ট</h1>

                        </div>
                    </div>
                    <div class="loader"></div>


                    <!-- Page Content-->
                    <div class="wrap" id="pageHeight">



                        <!-- custom section  -->
                        @if (session('cart'))
                        <div id="post-554" class="post-554 page type-page status-publish hentry">
                            <div id="vc_row_1" class="ep-section background_cover row_section  section ">
                                <div class="section-container">
                                    <div class="clearfix"></div>
                                    <div class="section-content-container" style="padding-bottom:100px;">
                                        <div class="container">
                                            <div
                                                class="wpb_row vc_row-fluid parallax_content  vc_row vc_column-gap vc_column-gap-30">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="  vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="woocommerce">
                                                                <form class="woocommerce-cart-form"
                                                                    action="{{ route('cart') }}" method="post">

                                                                    <table
                                                                        class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                                                        cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="product-remove">&nbsp;</th>
                                                                                <th class="product-thumbnail">&nbsp;
                                                                                </th>
                                                                                <th class="product-name">পণ্য</th>
                                                                                <th class="product-price">সাইজ</th>
                                                                                <th class="product-price">মূল্য</th>
                                                                                <th class="product-quantity">পরিমাণ
                                                                                </th>
                                                                                <th class="product-subtotal">মোট</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @if (session()->has('cart'))
                                                                                @forelse (session('cart') as $info)
                                                                                    <tr class="cart_item">
                                                                                        <td class="product-remove">
                                                                                            <a href="{{ route('card.remove', ['id' => $info['id'], 'stock_id' => $info['stock_id']]) }}"
                                                                                                style="background: red"
                                                                                                class="remove"
                                                                                                aria-label="Remove this item"
                                                                                                title="Remove this item"
                                                                                                data-product_id="33077"
                                                                                                data-product_sku="Chilli Combo">×</a>
                                                                                        </td>
                                                                                        <td class="product-thumbnail">
                                                                                            <a
                                                                                                href="{{ asset($info['image']) }}"><img
                                                                                                    fetchpriority="high"
                                                                                                    decoding="async"
                                                                                                    width="300"
                                                                                                    height="300"
                                                                                                    src="{{ asset($info['image']) }}"
                                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                                    alt="৩ টা ঝাল আচার বোম্বাই, নাগা কাঁচা মরিচ"
                                                                                                    srcset="{{ asset($info['image']) }}"
                                                                                                    sizes="(max-width: 300px) 100vw, 300px"></a>
                                                                                        </td>

                                                                                        <td class="product-name"
                                                                                            data-title="Product">
                                                                                            <a
                                                                                                href="{{ route('single.product', $info['id']) }}">{{ $info['name'] }}</a>
                                                                                        </td>

                                                                                        <td class="product-price"
                                                                                            data-title="Price">
                                                                                            <span
                                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                                        class="woocommerce-Price-currencySymbol"></span><span>{{ $info['size'] }}</span></bdi></span>
                                                                                        </td>

                                                                                        <td class="product-price"
                                                                                            data-title="Price">
                                                                                            <span
                                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                                        class="woocommerce-Price-currencySymbol">৳&nbsp;</span><span
                                                                                                        class="price{{ $info['stock_id'] }}">{{ $info['price'] }}</span></bdi></span>
                                                                                        </td>
                                                                                        <td class="product-quantity"
                                                                                            data-title="Quantity">
                                                                                            <div class="quantity">
                                                                                                <input type="number"
                                                                                                    class="qty{{ $info['stock_id'] }}"
                                                                                                    step="1"
                                                                                                    min="0"
                                                                                                    max="991"
                                                                                                    name="cart[32bb9f32e97807c36a1b1a881b31d33b][qty]"
                                                                                                    value="{{ $info['qty'] ?? 1 }}"
                                                                                                    title="Qty"
                                                                                                    readonly=""
                                                                                                    class="input-text qty text"
                                                                                                    size="4"
                                                                                                    pattern="[0-9]*"
                                                                                                    style="border: none"
                                                                                                    inputmode="numeric">
                                                                                                <div class="plus quantity-button"
                                                                                                    onclick="qty_plus({{ $info['id'] }},{{ $info['stock_id'] }})">
                                                                                                </div>
                                                                                                <div class="minus quantity-button"
                                                                                                    onclick="qty_minus({{ $info['id'] }},{{ $info['stock_id'] }})">
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>

                                                                                        <td class="product-subtotal"
                                                                                            data-title="Total">
                                                                                            <span
                                                                                                class="woocommerce-Price-amount "><bdi><span
                                                                                                        class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                                                                                                    <span
                                                                                                        class="subtotal{{ $info['stock_id'] }} subtotalsum">
                                                                                                        {{ $info['price'] * $info['qty'] }}</span></bdi></span>
                                                                                        </td>


                                                                                    </tr>
                                                                                @empty
                                                                                @endforelse
                                                                            @endif

                                                                        </tbody>
                                                                    </table>
                                                                </form>

                                                                <div class="cart-collaterals">
                                                                    <div class="cart_totals calculated_shipping">


                                                                        <h2>Cart totals</h2>
                                                                        @php
                                                                        $offer = offers();
                                                                        if (session('cart')) {
                                                                            $net_total = 0;

                                                                            foreach (session('cart') as $id => $details) {
                                                                                $net_total = $net_total + $details['qty'] * $details['price'];
                                                                            }
                                                                        }
                                                                        if ( $offer != null && $net_total >  $offer->min_price){
                                                                        if (isset($offer) && $offer->offer_type == 2) {
                                                                            $discount = $net_total - $offer->total_discount;
                                                                        } else {
                                                                            $discount = discount_calculate($net_total, $offer->total_discount);
                                                                        }
                                                                    }
                                                                    @endphp
                                                                         @if ( $offer != null && $net_total >  $offer->min_price)
                                                                         @include('website.version1.cart.offer',[
                                                                            'offer' => $offer,
                                                                            'discount_amount' => $discount,
                                                                            'net_total' => $net_total,
                                                                        ])
                                                                         @else
                                                                          @include('website.version1.cart.non-offer')
                                                                        @endif



                                                                        <div class="wc-proceed-to-checkout">

                                                                            <a href="{{ route('checkout') }}"
                                                                                class="checkout-button button alt wc-forward">
                                                                                Proceed to checkout</a>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="container">
                            <div class="wpb_row vc_row-fluid parallax_content  vc_row vc_column-gap vc_column-gap-30">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="  vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="woocommerce">
                                                <div class="container cartEmpty clearfix">
                                                    <!-- widgetized Area -->
                                                    <div class="wpb_row vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">

                                                                <div class="woocommerce-notices-wrapper"></div>
                                                                <div class="wc-empty-cart-message">
                                                                    <div class="cart-empty woocommerce-info">
                                                                        Your cart is currently empty. </div>
                                                                </div>
                                                                <p class="return-to-shop"><a
                                                                        class="button wc-backward"
                                                                        href="{{ url('/') }}">Return to Shop</a>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                    <!-- Page Content End -->



                </div>
            </div>
        </div>

        @include('website.version1.componant.order-confirm-btn')
        @include('website.version1.layouts.include.update-footer')
        @include('website.version1.layouts.include.footer')
        <!-- end of wrap element -->


        <script type="text/html" id="wpb-modifications"></script><noscript><img height="1" width="1" style="display: none;"
                src="https://www.facebook.com/tr?id=427272935467605&ev=PageView&noscript=1&cd%5Bpage_title%5D=%E0%A6%95%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%9F&cd%5Bpost_type%5D=page&cd%5Bpost_id%5D=554&cd%5Bplugin%5D=PixelYourSite&cd%5Buser_role%5D=guest&cd%5Bevent_url%5D=chuijhal.com%2Fcart%2F"
                alt=""></noscript>
        <noscript><img height="1" width="1" style="display: none;"
                src="https://www.google-analytics.com/collect?v=1&tid=G-Q4NWW12SW2&t=event&ec=ecommerce&ev=5260&pr0id=33077&pr0nm=Combo+%E0%A7%A9+%E0%A6%AC%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A6%97%E0%A7%87%E0%A6%B0+%E0%A7%A9+%E0%A6%9F%E0%A6%BE+%E0%A6%9D%E0%A6%BE%E0%A6%B2+%E0%A6%AE%E0%A6%B0%E0%A6%BF%E0%A6%9A%E0%A7%87%E0%A6%B0+%E0%A6%85%E0%A6%AB%E0%A6%BE%E0%A6%B0&pr0pr=1350&pr0qt=1&pr1id=14858&pr1nm=%E0%A6%AC%E0%A7%8B%E0%A6%AE%E0%A7%8D%E0%A6%AC%E0%A6%BE%E0%A6%87+%E0%A6%AE%E0%A6%B0%E0%A6%BF%E0%A6%9A%E0%A7%87%E0%A6%B0+%E0%A6%86%E0%A6%9A%E0%A6%BE%E0%A6%B0+%28Bombai+Morich%29+400gm&pr1pr=490&pr1qt=1&pr2id=15025&pr2nm=Chuijhal+%28%E0%A6%9A%E0%A7%81%E0%A6%87%E0%A6%9D%E0%A6%BE%E0%A6%B2%29+%E0%A7%AB%E0%A7%A6%E0%A7%A6+%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AE&pr2pr=600&pr2qt=1&pr3id=19886&pr3nm=%E0%A6%B9%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A1%E0%A6%AE%E0%A7%87%E0%A6%A1+%E0%A6%98%E0%A6%BF+-+Hand+Made+Ghee+%28350+gm%29&pr3pr=590&pr3qt=1&pr4id=34109&pr4nm=%E0%A6%B9%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A1%E0%A6%AE%E0%A7%87%E0%A6%A1+%E0%A6%98%E0%A6%BF+-+Hand+Made+Ghee+500+Gram&pr4pr=750&pr4qt=1&pr5id=20347&pr5nm=%E0%A6%B9%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A1%E0%A6%AE%E0%A7%87%E0%A6%A1+%E0%A6%98%E0%A6%BF+-+Hand+Made+Ghee+%281+kg%29&pr5pr=1480&pr5qt=1&pa=detail"
                alt="google_analytics"></noscript>
        <script type="text/javascript">
            (function() {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                document.body.className = c;
            })();
        </script>
        <script type="text/template" id="tmpl-variation-template">

</script>
        <script type="text/template" id="tmpl-unavailable-variation-template">
<p>Sorry, this product is unavailable. Please choose a different combination.</p>

</script>
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/') }}backEnd/assets/vendor/toastr/toastr.min.css">
        @include('website.version1.layouts.include.footer-script')
        @include('website.version1.custom-js')
        @include('website.version1.componant.show-cart')
        @include('website.componant.size-js')
        @include('website.version1.componant.qty-plus-minus-js')




</body>

</html>
