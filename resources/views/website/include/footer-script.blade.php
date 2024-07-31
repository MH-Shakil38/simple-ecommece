<script src="{{ asset('/') }}frontEnd/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/') }}frontEnd/js/bootstrap.bundle.min.js"></script>


<script src="{{ asset('/') }}frontEnd/plugins/owl-carousel/owl.carousel.min.js"></script>


<script src="{{ asset('/') }}backEnd/assets/vendor/toastr/toastr.min.js"></script>
<script></script>

<script>
    $('#account-btn').on('click', function() {
        $('.login-float').toggle()
    });

    $('#header-top-menu-btn').on('click', function() {
        $('.header-top-menu-m').toggle()
    });

    $('#cat_menu_mobile_btn').on('click', function() {
        $('.cat_menu_m').toggle()
    });

    $('#search_mobile_btn').on('click', function() {
        $('.search-form-m').toggle()
    });

    $('.search_btnclose').on('click', function() {
        $('.search-form-m').toggle()
    });
</script>

<script>
    $(document).ready(function() {
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
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        });

        $('.owl-nav').remove();

        // add to card section
        $('.add_to_card_button').on('click', function(event) {
            event.preventDefault();
            var url = "{{ route('add.card') }}";
            var product_id = $(this).siblings('.product_id').val();
            var stock_id = $(this).siblings('.stock_id').val();
            var qty = $(this).siblings('.qty').val();

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
    });
</script>

@yield('script')

<script>
    $(document).ready(function() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
        };

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif


        $('.add_to_card_button').click(function() {
            let id = $(this).data('id')

        })
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
