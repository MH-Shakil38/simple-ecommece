

<script src="{{asset('/')}}frontEnd/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('/')}}frontEnd/js/bootstrap.bundle.min.js"></script>


<script src="{{asset('/')}}frontEnd/plugins/owl-carousel/owl.carousel.min.js"></script>


<script src="{{asset('/')}}backEnd/assets/vendor/toastr/toastr.min.js"></script>
<script>
</script>

<script>
    $('#account-btn').on('click', function () {
        $('.login-float').toggle()
    });

    $('#header-top-menu-btn').on('click', function () {
        $('.header-top-menu-m').toggle()
    });

    $('#cat_menu_mobile_btn').on('click', function () {
        $('.cat_menu_m').toggle()
    });

    $('#search_mobile_btn').on('click', function () {
        $('.search-form-m').toggle()
    });

    $('.search_btnclose').on('click', function () {
        $('.search-form-m').toggle()
    });
</script>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        });

        $('.owl-nav').remove();
    });
    @yield('script')
</script>

<script>
    $(document).ready(function () {
        $("#cart_shipping_cost").text(0);
        $("#shipping_cost").val(0);
        // calculate();
    //
    //     $("#shipping_method").on('change', function () {
    //         if ($(this).val()) {
    //             $.ajax({
    //                 url: 'https://citystorebd.com/ajax-get-shipp-meth',
    //                 type: 'POST',
    //                 data: {_token: CSRF_TOKEN, id: $(this).val()},
    //                 success: function (data) {
    //                     $("#cart_shipping_cost").text(data);
    //                     $("#shipping_cost").val(data);
    //                     calculate();
    //                 }
    //             });
    //         } else {
    //             $("#cart_shipping_cost").text(0);
    //             $("#shipping_cost").val(0);
    //             calculate();
    //         }
    //     });
    //
    //     function calculate() {
    //         var net_total = parseFloat($('#net_total').text());
    //         var cart_shipping_cost = parseFloat($('#cart_shipping_cost').text());
    //         $('#grand_total').text(net_total + cart_shipping_cost);
    //     }
    //
    //
    //     $("#checkout_form").submit(function () {
    //         $("#conf_order_btn").attr("disabled", true).text('সাবমিট হচ্ছে...');
    //     });
    });
</script>
