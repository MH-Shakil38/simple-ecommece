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
                            <a href="javascript:void(0);">{{ $product->name }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="products-details-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12 mb-md-3 mb-2">

                        <div id="sing_prod_img_slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset($product->image) }}" class="d-block w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 mb-3">
                        <h2 class="text-capitalize single_prod_title">{{ $product->name }}</h2>
                        @if ($product->sizePrice[0]->offer)
                            <h5>
                                <span class="offer">{{ $product->sizePrice[0]->offer }}%</span>
                                ছাড়
                            </h5>
                        @endif

                        <h3 class="font-weight-bold single_prod_prices">
                            @if ($product->sizePrice[0]->offer)
                                <span class="original_price"
                                    style="text-decoration: line-through; color: #555;opacity: .5">৳{{ $product->sizePrice[0]->price }}</span>
                            @endif
                            <span class="price"
                                style="color: #0088cc">৳{{ discount_calculate($product->sizePrice[0]->price, $product->sizePrice[0]->offer) }}
                            </span>
                        </h3>
                        <p class="sku_text"><span>প্রোডাক্ট কোড: </span> <span
                                class="p-0 pr-1">{{ $product->product_code }}</span></p>
                        <h4 class="single_prod_in_stock">স্টক : <span
                                class="{{ $product->sizePrice[0]->in_stock == 1 && $product->sizePrice[0]->in_stock != null ? 'text-success ' : 'text-danger' }}">{{ $product->sizePrice[0]->in_stock == 1 && $product->sizePrice[0]->in_stock != null ? 'স্টক ইন ' : 'স্টক আউট' }}</span>
                        </h4>




                        <form action="#" method="post">
                            <input type="hidden" name="_token" value="RmrYQT0c8w3nngTk2cx7mxhNPSCHEgGQJrT6gGRl">
                            <div class="d-flex">
                                <div class="qty-text-div">
                                    <span>পরিমান : </span>
                                </div>
                                <div class="qty_div">
                                    <div class="minus-qty-div">
                                        <i class="fa fa-minus" id="qty_minus"></i>
                                    </div>
                                    <div class="qty-div">
                                        <input type="text" name="qty" id="qty" class="qty" min="1" value="1">
                                    </div>
                                    <div class="plus-qty-div">
                                        <i class="fa fa-plus" id="qty_plus"></i>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mt-md-3 mt-2">
                                <input type="submit" class="btn px-4 add_cart_btn" name="add_cart" value="কার্ট-এ যোগ করুন">
                            </div> --}}
                        </form>

                        @if (count($product->sizePrice))
                            <div class="size mt-3">
                                <div id="sizeBtn">
                                    @forelse ($product->sizePrice as $info)
                                        <button class="btn {{ $loop->iteration == 1 ? 'active' : 'border' }} size"
                                            data-size_id={{ $info->id }}>
                                            {{ $info->size }}
                                        </button>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        @endif

                        {{-- order btn --}}
                        <form action="{{ route('add.card') }}" method="post">
                            @csrf
                            <input type="hidden" name="qty" id="qty" class="qty" value="1">
                            <input type="hidden" name="product_id" class="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="stock_id" class="stock_id" value="{{ $product->sizePrice[0]->id }}">
                            <input type="submit" class="btn px-4 order_now_btn order_now_btn_m" name="order_now"value="অর্ডার করুন">
                            <span class="mt-md-4 mt-2">
                                <a class="btn px-4 order_now_btn  add_to_card_btn bg-danger pt-2"
                                    data-id="{{ $info->id }}">কার্ডে যুক্ত করুন </a>
                            </span>
                        </form>

                        {{-- add to cart btn --}}
                        {{-- <input type="hidden" class="qty" id="qty" value="1">
                        <input type="hidden" class="product_id" value="{{ $product->id }}">
                        <input type="hidden" class="stock_id" value="{{ $product->sizePrice[0]->id }}"> --}}




                        <div class="mt-md-5 mt-4">
                            <h4>ফোনে অর্ডারের জন্য ডায়াল করুন</h4>

                            <h4 class="font-weight-bold ml-4">
                                <a href="tel:{{ siteInfo()->phone1 ?? 0 }}">
                                    <i class="fa fa-phone-square"></i>
                                    {{ siteInfo()->phone1 ?? 0 }}
                                </a>
                            </h4>


                        </div>



                        <div class="col-12 mt-3 delivery_details" style="padding: 0">
                            <table class="table" style="color:#08c !important">
                                <tbody>
                                    <tr>
                                        <td style="padding-left: 0;border-bottom: 1px solid #ddd;">
                                            ঢাকার ভিতরে ডেলিভারি
                                        </td>
                                        <td style="border-bottom: 1px solid #ddd;">
                                            <b>৳ {{ delivery_policy()->outside_dhaka ?? '--' }}</b>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 0;border-bottom: 1px solid #ddd;">
                                            ঢাকার বাইরে ডেলিভারি
                                        </td>
                                        <td style="border-bottom: 1px solid #ddd;">
                                            <b>৳ {{ delivery_policy()->inside_dhaka ?? '--' }}</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h6 class="font-weight-bold text-danger mt-md-3 mt-2">Bkash {{ siteInfo()->phone1 ?? 0 }}
                            (Personal)
                        </h6>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="features">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="icon"><i class="fa fa-thumbs-up" style="color: #666"></i></td>
                                        <td class="text">100% original products</td>
                                    </tr>

                                    <tr>
                                        <td class="icon"><i class="fa fa-money" style="color: #666"></i></td>
                                        <td class="text">Pay cash on delivery</td>
                                    </tr>

                                    <tr>
                                        <td class="icon"><i class="fa fa-shopping-cart"
                                                style="color: #666;vertical-align: top"></i></td>
                                        <td class="text">Delivery within: 2-3 business days</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="feature-products d-md-block d-none">
                            <p>প্রয়োজনীয় প্রোডাক্ট</p>
                            <div class="feature-products-wrapper">
                                <table>
                                    <tbody>
                                        @forelse(products() as $info)
                                            @if ($loop->iteration <= 3)
                                                <tr>
                                                    <td class="img">
                                                        <a href="{{ route('single.product', $info->id) }}">
                                                            <img width="50" src="{{ asset($info->image) }}"
                                                                alt="">
                                                        </a>
                                                    </td>
                                                    <td class="title">
                                                        <a href="{{ route('single.product', $info->id) }}"
                                                            class="text-dark">
                                                            {{ $info->name }}
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs nav-tabs-mod">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#product_description">পন্যের বিবরণ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#delivery_return_policy">ডেলিভারি এবং রিটার্ন
                                    পলিসি</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-mod">
                            <div class="tab-pane active" id="product_description">
                                <div>
                                    {!! $product->description !!}
                                    {{--                                    <p><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">2 inch small dents remover for pulling automotive car hail and door ding damage.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Designed to pull dents from nearly any vehicle surfaces including metal and plastic.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Can be used on glass, mirror or any smooth sheet material.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Heavy-duty rubber suction cup allows for gentle and scratch-free use.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Quick release handle design, easy to use.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><strong style="box-sizing: inherit; font-weight: bold; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Specification:</strong><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Material: ABS.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Color: show as pictures.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Size: 5.8cm.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><strong style="box-sizing: inherit; font-weight: bold; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Note:</strong><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">There might be a bit color distortions due to different computer resolutions.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">There might be size errors due to different computer resolutions.</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">Package include:</span><br style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;"><span style="box-sizing: inherit; color: rgb(102, 102, 102); font-family: raleway, sans-serif; font-size: 13px; padding: 0px; margin: 0px;">1 * Car bodywork panel suction cup.</span><br></p> --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="delivery_return_policy">
                                <div>
                                    {!! return_policy()?->details !!}

                                    {{--                                    {{$return_policy->return_policy}} --}}
                                    {{--                                    <p style="margin-bottom: 10px; color: rgb(102, 102, 102); line-height: 21px; font-family: raleway, sans-serif;">আপনার যত প্রশ্ন আছে তা বর্ননার সাথে মিলিয়ে অথবা আমাদের কাছ থেকে জেনে পন্য অর্ডার করুন।</p><p style="margin-bottom: 10px; color: rgb(102, 102, 102); line-height: 21px; font-family: raleway, sans-serif;"><span class="fa  fa-arrow-circle-right " style="font-weight: normal; font-stretch: normal; font-family: FontAwesome; font-size: inherit; transform: translate(0px, 0px); color: red;"></span>&nbsp;ছবি এবং বর্ণনার সাথে পন্যের মিল থাকলে পণ্য ফেরত নেয়া হবে না ।</p><p style="margin-bottom: 10px; color: rgb(102, 102, 102); line-height: 21px; font-family: raleway, sans-serif;"><span class="fa  fa-arrow-circle-right " style="font-weight: normal; font-stretch: normal; font-family: FontAwesome; font-size: inherit; transform: translate(0px, 0px); color: red;"></span>&nbsp;তবে আপনি চাইলে আপনার গ্রহন করা পন্যের সম মুল্যের কি বা বেশি মুল্যের পণ্য নিতে পারবেন (যে টাকা বেশি হবে তা প্রদান করতে হবে ) ।</p><p style="margin-bottom: 10px; color: rgb(102, 102, 102); line-height: 21px; font-family: raleway, sans-serif;"><span class="fa  fa-arrow-circle-right " style="font-weight: normal; font-stretch: normal; font-family: FontAwesome; font-size: inherit; transform: translate(0px, 0px); color: red;"></span>&nbsp;কম মুল্যের পণ্য নেয়া যাবে না ।</p><p style="margin-bottom: 10px; color: rgb(102, 102, 102); line-height: 21px; font-family: raleway, sans-serif;"><span class="fa  fa-arrow-circle-right " style="font-weight: normal; font-stretch: normal; font-family: FontAwesome; font-size: inherit; transform: translate(0px, 0px); color: red;"></span>&nbsp;পণ্য আনা নেয়ার খরচ আপনাকে দিতে হবে।</p><p style="margin-bottom: 10px; color: rgb(102, 102, 102); line-height: 21px; font-family: raleway, sans-serif;"><span class="fa  fa-arrow-circle-right " style="font-weight: normal; font-stretch: normal; font-family: FontAwesome; font-size: inherit; transform: translate(0px, 0px); color: red;"></span>&nbsp;যে সকল পন্যে ওয়ারেন্টি আছে তার ওয়ারেন্টি সার্ভিস আমরা প্রদান করবো।তবে কিছু কিছু ক্ষেত্রে পন্যের ব্রান্ড আপনাকে সার্ভিস প্রদান করবে তবে সে ক্ষেত্রে আপনার নিকটস্থ সার্ভিস পয়েন্ট থেকে সার্ভিস নিতে পারবেন।</p><p style="margin-bottom: 10px; color: rgb(102, 102, 102); line-height: 21px; font-family: raleway, sans-serif;"><span class="fa  fa-arrow-circle-right " style="font-weight: normal; font-stretch: normal; font-family: FontAwesome; font-size: inherit; transform: translate(0px, 0px); color: red;"></span>&nbsp;পণ্য সার্ভিস করতে যাওয়া আসা বা পাঠানো এবং রিটার্ন করার খরজ আপনাকে বহন করতে হবে।</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 related-products">
                    <div class="col-md-12">
                        <h4 class="mb-3">রিলেটেড প্রোডাক্ট</h4>
                    </div>
                </div>

                <div class="row m-0">
                    @forelse(related_product($product->id) as $info)
                        <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="{{ route('single.product', $info->id) }}">
                                    <img src="{{ asset($product->image) }}" alt="Automatic Door Closer">
                                </a>
                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳
                                    {{ $info->original_price }}</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ {{ $info->original_price }}</p>
                                <p class="mb-0 prod_name"><a
                                        href="{{ route('single.product', $info->id) }}">{{ $info->name }}</a></p>
                                <form action="https://citystorebd.com/add-cart/2" method="post">
                                    <input type="hidden" name="_token"
                                        value="RmrYQT0c8w3nngTk2cx7mxhNPSCHEgGQJrT6gGRl">
                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now"
                                        value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                    @empty
                        <h3>এ সম্পর্কিত কোনো পণ্য পাওয়া যায়নি। </h3>
                    @endforelse
                </div>
                <div class="d-flex justify-content-center">
                    {!! related_product($product->id)->links() !!}
                </div>


            </div>
        </div>
    </section>
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

@endsection
@section('js')
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
@endsection
