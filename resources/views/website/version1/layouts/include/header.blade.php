<header id="epHeader" data-fixed="fixed-menu"
            class=" hastogglesidebar  hasDropDownCart   fillhover    type1 fixed-menu   ">
            <div class="wrap headerWrap">
                <div id="headerFirstState">
                    <div class="menuBgColor hidden-phone hidden-tablet"></div>

                    <div class="container clearfix">

                        <a class="locallink logo" href="{{ route('/') }}">
                            <img class="firstLogo" src="{{asset(setting()->logo)}}"
                                alt="Logo" />
                        </a>
                        <a class="externalLink logo" href="{{ route('/') }}">
                            <img class="firstLogo" src="{{asset(setting()->logo)}}"
                                alt="Logo" />
                        </a>
                        <div class="cartSidebarbtn widget widget_woocommerce-dropdown-cart responsive-cart light">
                            <a href="#"></a>
                            <div class="cart-contents">
                                <div class="cartContentsCount cartTotal">{{ count((array) session('cart')) }}</div>
                            </div>
                            <span class="icon icon-bag"></span>
                        </div>
                        <div class="sidebartogglebtn hover light">
                            <ul class="sidebartogglebtnlines">
                                <li>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <span class="search-button icon-magnifier no-select hidden-phone hidden-tablet"></span>
                        <nav class="navigation hidden-phone hidden-tablet">
                            <ul id="menu-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a7%e0%a6%be%e0%a6%a8-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be"
                                class="clearfix">
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-14742 current_page_item">
                                    <span class="spanHover"></span><a class="locallink home" data-hash="home"
                                        href="{{ route('/') }}"><span class="menu_title_wrap"><span
                                                class="menu_title"><span>প্রচ্ছদ</span></span></span></a><a
                                        class="externalLink" href="{{ route('/') }}"><span class="menu_title_wrap"><span
                                                class="menu_title"><span>প্রচ্ছদ</span></span></span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><span
                                        class="spanHover"></span><a href="#"><span
                                            class="menu_title_wrap"><span
                                                class="menu_title"><span>শপ</span></span></span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><span
                                        class="spanHover"></span><a
                                        href="#"><span
                                            class="menu_title_wrap"><span
                                                class="menu_title"><span>আচার</span></span></span></a></li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <span class="spanHover"></span><a href="#"><span
                                            class="menu_title_wrap"><span
                                                class="menu_title"><span>ব্লগ</span></span></span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span
                                                        class="menu_title"><span>রেসিপি</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span class="menu_title"><span>গরুর
                                                            মাংস</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span class="menu_title"><span>রেসিপি
                                                            কন্টেস্ট</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span class="menu_title"><span>ঈদের
                                                            রান্না</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span
                                                        class="menu_title"><span>আচার</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span
                                                        class="menu_title"><span>রূপচর্চা</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span
                                                        class="menu_title"><span>স্বাস্থ্যবিধি</span></span></span></a>
                                        </li>
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span
                                                        class="menu_title"><span>ডাল</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span
                                                        class="menu_title"><span>বিরিয়ানি</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span class="menu_title"><span>আটা
                                                            ময়দা</span></span></span></a></li>
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                    <span class="spanHover"></span><a href="#"><span
                                            class="menu_title_wrap"><span class="menu_title"><span>আমাদের
                                                    সম্পর্কে</span></span></span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span
                                                        class="menu_title"><span>যোগাযোগ</span></span></span></a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy">
                                            <a
                                                href="#"><span
                                                    class="menu_title_wrap"><span class="menu_title"><span>গোপনীয়তা
                                                            নীতি</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span
                                                        class="menu_title"><span>শর্তাবলী</span></span></span></a></li>
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                    <span class="spanHover"></span><a
                                        href="#"><span
                                            class="menu_title_wrap"><span class="menu_title"><span>লগইন /
                                                    সাইনআপ</span></span></span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="#"><span class="menu_title_wrap"><span
                                                        class="menu_title"><span>কার্ট</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                                href="#"><span class="menu_title_wrap"><span
                                                        class="menu_title"><span>চেকআউট</span></span></span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                                href="#"><span
                                                    class="menu_title_wrap"><span class="menu_title"><span>আমার
                                                            অর্ডার</span></span></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <div id="mobile-menu-button" class="navigation-button hidden-desktop no_djax">
                    <span></span>
                </div>
                <nav id="mobile-menu-items" class="navigation-mobile  " style="display:none;">
                    <div class="mobile-menu-container hidden-desktop">
                        <ul id="menu-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a7%e0%a6%be%e0%a6%a8-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be-1"
                            class="menu">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-14742 current_page_item">
                                <a class="locallink home" data-hash="home" href="#">প্রচ্ছদ</a><a
                                    class="externalLink" href="#">প্রচ্ছদ</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                    href="#">শপ</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                    href="#">আচার</a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                <a href="blog/#">ব্লগ</a>
                                <span class="toggle_submneu"><span class="toggle_icon"></span></span>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">রেসিপি</a>
                                    </li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">গরুর মাংস</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">রেসিপি
                                            কন্টেস্ট</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">ঈদের
                                            রান্না</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">আচার</a>
                                    </li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">রূপচর্চা</a>
                                    </li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">স্বাস্থ্যবিধি</a>
                                    </li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">ডাল</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">বিরিয়ানি</a>
                                    </li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a
                                            href="#">আটা
                                            ময়দা</a></li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                <a href="about-us/#">আমাদের সম্পর্কে</a>
                                <span class="toggle_submneu"><span class="toggle_icon"></span></span>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="#">যোগাযোগ</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy">
                                        <a
                                            href="#">গোপনীয়তা
                                            নীতি</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="#">শর্তাবলী</a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                <a
                                    href="#">লগইন
                                    / সাইনআপ</a>
                                <span class="toggle_submneu"><span class="toggle_icon"></span></span>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="cart/#">কার্ট</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="checkout/#">চেকআউট</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                            href="#">আমার
                                            অর্ডার</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="mobile-search-form">
                        <div class="search-form">
                            <form role="search" method="get" class="searchform" action="https://chuijhal.com/">
                                <div>
                                    <label class="screen-reader-text" for="s"></label>
                                    <input type="text" placeholder="Search" value name="s" />
                                    <input type="hidden" name="post_type" value="post">
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
                <span id="mobile-menu-overlay" class="hidden-desktop"></span>
            </div>
        </header>
