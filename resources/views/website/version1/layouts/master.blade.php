<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from chuijhal.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Aug 2024 11:20:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    @include('website.version1.layouts.include.header-script')
    <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '552732970546822');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=552732970546822&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body data-rsssl="1"
    class="home page-template-default page page-id-14742 theme-vitrine woocommerce-no-js no-preloader no-page-transition fade wpb-js-composer js-comp-ver-6.9.0 vc_responsive elementor-default elementor-kit-34415"
    data-pageid="14742">
    <div id="top"></div>
    <div class="scrollToTop visible-desktop">
        <a href="#top"></a>
    </div>
    <div class="layout">

        @include('website.version1.componant.sidebar-category')

        @include('website.version1.componant.show-cart')

        @include('website.version1.layouts.include.header')

        <span id="sidebar-open-overlay"></span>

        @include('website.version1.componant.search-popup')
        <div class="toggleSidebarContainer">
            <div id="main-content" class="main-content pageTopSpace  type1  ">
                <div id="main">
                    <div id="home" class="hidehome"></div>
                    <style>
                        body {
                            background-color: #bebcbc;
                        }

                        #header h1,
                        #header .subtitle,
                        #header ul li a,
                        .page-breadcrumb .woocommerce-breadcrumb,
                        .page-breadcrumb .woocommerce-breadcrumb a,
                        .page-breadcrumb .woocommerce-breadcrumb span.delimiter {
                            color: rgba(0, 0, 0, 1);
                        }

                        #header ul li a:before {
                            background-color: rgba(0, 0, 0, 1);
                        }
                    </style>

                    <div class="wrap" id="pageHeight">

                        @yield('content')
                    </div>

                </div>
            </div>
        </div>

        @include('website.version1.layouts.include.footer')

    </div>

    @include('website.version1.layouts.include.footer-script')
    @include('website.version1.custom-js')
    @include('website.version1.componant.show-cart')


</body>

<!-- Mirrored from chuijhal.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Aug 2024 11:21:06 GMT -->

</html>
