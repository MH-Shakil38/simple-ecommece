@extends('website.version1.layouts.master')
@section('content')


   @include('website.version1.componant.quick-view')
<div class="quick-view"></div>


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

                                                @php
                                                    $products = products();
                                                @endphp
                                                @forelse ($products as $info)
                                                    @include('website.version1.card.card1', [
                                                        'info' => $info,
                                                    ])
                                                @empty
                                                @endforelse
                                            </ul>
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

@endsection
