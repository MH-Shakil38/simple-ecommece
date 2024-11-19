@extends('website.version1.layouts.master')
@section('content')
    @include('website.version1.componant.slide')
    @include('website.version1.componant.quick-view')
    <div class="quick-view"></div>
    <div class="container">
        <style>
            /* Mobile Styles */
            @media screen and (max-width: 768px) {

                /* Adjust container padding for smaller screens */
                .container {
                    padding: 10px;
                }

                /* Responsive heading */
                h1,
                h2,
                h3 {
                    font-size: 1.5rem;
                    text-align: center;
                }

                /* Responsive buttons */
                button {
                    width: 100%;
                    padding: 10px;
                    font-size: 1rem;
                }

                /* Stack items vertically */
                .flex-container {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                /* Adjust images for small screens */
                img {
                    max-width: 100%;
                    height: auto;
                }

                /* Adjust navigation */
                nav {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    gap: 10px;
                }

                /* Hide unnecessary elements */
                .desktop-only {
                    display: none;
                }
            }

            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                line-height: 1.5;
            }

            .product-section {
                text-align: center;
                padding: 50px 20px;
                background-color: #f8f9fa;
            }

            .product-section .section-heading {
                font-size: 2.5rem;
                color: #333;
                font-weight: 700;
                margin-bottom: 10px;
                text-transform: uppercase;
                letter-spacing: 2px;
            }

            .product-section .section-subheading {
                font-size: 1rem;
                color: #777;
                margin-top: 0;
                font-style: italic;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
            }
        </style>
        <section class="product-section">
            <div class="container">
                <h2 class="section-heading">Our Campaine Offer</h2>
                <p class="section-subheading">Don't miss out on our exclusive offer! Limited time only – grab amazing deals
                    and unbeatable discounts today!</p>
            </div>
        </section>
    </div>
    <div id="post-14742" class="post-14742 page type-page status-publish has-post-thumbnail hentry">
        <div id="vc_row_1" class="ep-section background_cover row_section  section ">
            <div class="section-container" style="background-color:#f8f8f8;">
                <div class="clearfix"></div>
                <div class="section-content-container" style>
                    <div class="container">
                        <div class="wpb_row vc_row-fluid parallax_content  vc_row vc_column-gap vc_column-gap-30">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="  vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="woocommerce wc-shortcode  fadeIn  no-carousel no-responsive-animation "
                                            data-layoutMode="masonry" data-delay="0" data-animation="none">
                                            <ul class="products buttonsOnHover shop-3column">

                                                {{-- @php
                                                    $products = products();
                                                @endphp --}}
                                                @forelse (campaine() as $info)
                                                    @include('website.version1.card.card1', [
                                                        'info' => $info,
                                                    ])
                                                @empty
                                                @endforelse

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
    </div>
    <section class="product-section">
            <h2 class="section-heading">All Product</h2>
    </section>
    <div id="post-14742" class="post-14742 page type-page status-publish has-post-thumbnail hentry">
        <div id="vc_row_1" class="ep-section background_cover row_section  section ">
            <div class="section-container" style="background-color:#f8f8f8;">
                <div class="clearfix"></div>
                <div class="section-content-container" style>
                    <div class="container">
                        <div class="wpb_row vc_row-fluid parallax_content  vc_row vc_column-gap vc_column-gap-30">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="  vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="woocommerce wc-shortcode  fadeIn  no-carousel no-responsive-animation "
                                            data-layoutMode="masonry" data-delay="0" data-animation="none">
                                            <ul class="products buttonsOnHover shop-3column">

                                                {{-- @php
                                                    $products = products();
                                                @endphp --}}
                                                @forelse ($products as $info)
                                                    @include('website.version1.card.card1', [
                                                        'info' => $info,
                                                    ])
                                                @empty
                                                @endforelse

                                            </ul>

                                        </div>
                                        <div class="inlinestyle center ">
                                            <div class="centeralignment">
                                                {{ $products->links('website.version1.componant.pagination') }}
                                            </div>
                                        </div>
                                        <div id="vc_empty_space_1" class="vc_empty_space" style="height: 30px"><span
                                                class="vc_empty_space_inner"></span></div>
                                        <style type="text/css" media="all">
                                            #button_1.ep_button {
                                                border-radius: 1px;
                                            }



                                            #button_1.ep_button {
                                                border-width: 1px;
                                            }


                                            #button_1.ep_button span.txt:before,
                                            #button_1.ep_button span.icon .hovericon {
                                                color: #000000;
                                            }

                                            #button_1.ep_button.style1,
                                            #button_1.ep_button.style2 {
                                                border-color: #168d44;
                                            }

                                            #button_1.ep_button {
                                                background-color: #168d44;
                                            }
                                        </style>
                                        <div class="inlinestyle center ">
                                            <div class="centeralignment">
                                                <a id="button_1"
                                                    class="ep_button button-large center row style2 fill hasIcon buttoniconright"
                                                    style="color: #ffffff;" href="#" title>
                                                    <span class="txt" data-hover="শপে যান">
                                                        শপে যান </span>
                                                    <span class="icon" data-float="right" data-hover="icon-bag2">
                                                        <span class="firsticon glyph icon-bag2"></span>
                                                        <span class="hovericon glyph icon-bag2"></span>
                                                    </span>
                                                </a>
                                                <div class="clearfix"></div>
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
        @include('website.version1.layouts.include.footer-info')
        @include('website.version1.custom-js')
        @include('website.componant.size-js')
    </div>
    @include('website.version1.componant.order-confirm-btn')
@endsection
