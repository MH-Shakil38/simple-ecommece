<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-7">
                    <div class="header-left">
                        <p>Welcome to {{$site->name ?? 'E-commerce'}}</p>
                    </div>
                </div>

                <div class="col-md-8 col-5">
                    <div class="header-right">
                        <ul>
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="{{url('/')}}">
                                    <span>Home</span>
                                </a>
                            </li>


                            <li>
                                <i class="fa fa-shopping-cart"></i>
                                <a href="checkout.html">
                                    <span>Checkout</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-user"></i>
                                <a href="#">
                                    <span>Account</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="header-right-m">
                        <ul>
                            <li class="position-relative">
                                <i class="fa fa-user" id="account-btn"></i>
                                <div class="login-float">
                                    <div class="card">
                                        <div class="card-header">
                                            <p>Login</p>
                                        </div>
                                        <div class="card-body">
                                            <form action="#" method="post">
                                                <input type="hidden" name="_token" value="RmrYQT0c8w3nngTk2cx7mxhNPSCHEgGQJrT6gGRl">                                                    <div class="form-group mb-2">
                                                    <input type="text" class="form-control" placeholder="Mobile Number">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-info w-100 mb-3">Login</button>
                                                <p>New Customer? <a href="#">Signup</a></p>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="position-relative">
                                <i class="fa fa-bars" id="header-top-menu-btn"></i>
                                <div class="header-top-menu-m">
                                    <ul>
                                        <li>
                                            <span class="fa fa-home"></span>
                                            <a href="index.html">
                                                <span>Home</span>
                                            </a>
                                        </li>


                                        <li>
                                            <span class="fa fa-shopping-cart"></span>
                                            <a href="checkout.html">
                                                <span>Checkout</span>
                                            </a>
                                        </li>
                                        <li>
                                            <span class="fa fa-user"></span>
                                            <a href="#">
                                                <span>Account</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-4 d-md-none cat_menu_btn_m">
                    <ul>
                        <li>
                            <i class="fa fa-bars" id="cat_menu_mobile_btn"></i>
                        </li>
                        <li>
                            <i class="fa fa-search" id="search_mobile_btn"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-7 logo-m">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <div class="row">
                                <di class="col-md-3">
                                    <img src="{{asset($site->logo ?? '')}}" alt=""><span style="">
                                </di>
                                <di class="col-md-9 mt-2" style="margin-left:-10px">
                                   <h4>{{ $site->name }}</h4>
                                </di>
                            </div></a>
                    </div>
                </div>

                <div class="col-md-5 py-md-3 d-none d-md-block">
                    <div class="search">
                        <form action="https://citystorebd.com/search" method="get">
                            <select name="category" id="category" class="search-select">
                                <option value="">ক্যাটেগরীজ</option>
                                @forelse($categories as $info)
                                    <option value="{{$info->id}}">{{$info->name}}</option>
                                @empty
                                    <option value="">Category Not found</option>
                                @endforelse
                                <option value="1">Gadgets</option>
{{--                                <option value="2">Health &amp; Beauty</option>--}}
{{--                                <option value="3">Hot Offer</option>--}}
{{--                                <option value="4">Kitchen Gadgets</option>--}}
{{--                                <option value="5">Security</option>--}}
{{--                                <option value="6">All Kinds Of Rack</option>--}}
{{--                                <option value="7">Fashion &amp; Jewelry</option>--}}
{{--                                <option value="8">Magic Book</option>--}}
                            </select>
                            <input type="text" name="query" class="search-input" placeholder="সার্চ করুন">
                            <button type="submit" class="search-btn"></button>
                        </form>
                    </div>
                </div>

                <div class="col-md-3 text-md-right text-center py-3 cart-m">
                    <span class="cart-number d-none d-md-inline-block"><i class="fa fa-phone"></i> {{$site->phone1 ?? ''}}</span>
                    <div class="cart d-inline-block position-relative checkout">
                        <span class="badge badge-danger rounded-circle">{{ count((array) session('cart')) }}</span>
                        <a href="{{route('checkout')}}"><i style="color: #fff6f6" class="fa fa-2x fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .checkout {
                /* position: relative !important; */
                position: fixed !important;
                right: 18px;
                background: rgb(8, 170, 30);
                width: 53px;
                color: green !important;
                padding: 11px;
                top: 30%;
                border-radius: 12% 62% 9% 35%;
                z-index: 99999999999;
            }
        </style>

        <div class="cat_menu_m">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                @forelse($menu_categories as $info)
                    <li>
                        <a href="#">{{$info->name}}</a>
                    </li>
                @empty
                    <option value="">Category Not found</option>
                @endforelse

{{--                <li>--}}
{{--                    <a href="category/1.html">Gadgets</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="category/2.html">Health &amp; Beauty</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="category/3.html">Hot Offer</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="category/4.html">Kitchen Gadgets</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="category/5.html">Security</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="category/6.html">All Kinds Of Rack</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="category/7.html">Fashion &amp; Jewelry</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="category/8.html">Magic Book</a>--}}
{{--                </li>--}}
            </ul>
        </div>

        <div class="search-form-m">
            <form action="https://citystorebd.com/search" method="get">
                <input type="text" name="query" class="form-control" placeholder="সার্চ করুন" autocomplete="off">
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>

            <button class="search_btnclose">
                <i class="fa fa-times-circle"></i>
            </button>
        </div>
    </div>

    <div class="header-bottom d-md-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cat_menu">
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            @forelse($menu_categories as $info)
                            <li>
                                <a href="{{route('product.category',$info->id)}}">{{$info->name}}</a>
                            </li>
                            @empty
                            @endforelse
{{--                            <li>--}}
{{--                                <a href="index.html">Home</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="category/1.html">Gadgets</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="category/2.html">Health &amp; Beauty</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="category/3.html">Hot Offer</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="category/4.html">Kitchen Gadgets</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="category/5.html">Security</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="category/6.html">All Kinds Of Rack</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="category/7.html">Fashion &amp; Jewelry</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="category/8.html">Magic Book</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
