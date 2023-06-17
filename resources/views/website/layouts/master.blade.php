<!doctype html>
<html lang="en">

<!-- Mirrored from citystorebd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2023 08:14:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
@include('website.include.header-script')
</head>
<body>
<div class="main-wrapper">

    @php
        $site       = siteInfo();
        $menu_categories   = menu_categoris();
        $categories   = categoris();
    @endphp


    @include('website.include.header')

    @yield('content')

    @include('website.include.footer')

</div>
@include('website.include.footer-script')
@yield('js')
</body>

<!-- Mirrored from citystorebd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2023 08:14:34 GMT -->
</html>
