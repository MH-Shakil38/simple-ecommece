
<div id="ep_wc_notices" class="hidden"><div class="woocommerce-message" role="alert">
    <a href="{{ route('cart') }}" tabindex="1" class="button wc-forward">View cart</a> <span class="product-name">“হ্যান্ডমেড ঘি – Hand Made Ghee (1 kg)” has been added to your cart.	</span></div></div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.add_to_cart_button').on('click', function(event) {
            event.preventDefault();
            var url = "{{ route('add.card') }}";
            var product_id = $(this).data('product_id');
            var stock_id = $(this).data('stock_id');
            var qty = $(this).data('qty');
            if (qty == undefined) {
                var qty = $('.single-qty').val();
                var stock_id = $('.stock_id').val();
            }


            var button = $(this); // Store the reference to the clicked button

            button.addClass('loading');
            $('.ajax-cart').addClass('loading');

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
                    $('.quick-view').html(res.view);
                    button.removeClass('loading'); // Use the stored reference
                    if (res.cart) {
                        // toastr.warning('This Item Already Added!');
                    } else {
                        var cart = parseInt($('.cartTotal').html(), 10);
                        var newCartTotal = cart + 1;
                        $('.cartTotal').html(newCartTotal);
                        $('.ajax-cart').html(res.html_cart);
                        $('#ep_wc_notices').removeClass('hidden');
                        $('#ep_wc_notices').addClass('show');
                        $('.product-name').text('“'+res.name+'” has been added to your cart.');

                        setTimeout(function() {
                            $('#ep_wc_notices').removeClass('show');
                            $('#ep_wc_notices').addClass('hidden');
                        }, 5000); // 1000 milliseconds = 1 second
                        // toastr.success('Product Successfully added to cart!');
                    }
                },
                error: function(xhr) {
                    button.removeClass('loading'); // Remove loading class on error too
                    toastr.error('An error occurred. Please try again.');
                }
            });
        });

        $('.closeModal').on('click', function(event) {
            alert()
            $('.quick-view').html('');
        });



        $('.quick-view-button').on('click', function(event) {
            // event.preventDefault();
            $('.quick-view').html('');
            var product_id = $(this).data('product_id');
            var url = "{{ route('quick.view') }}";





            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: product_id,
                },
                success: function(res) {
                    $('.quick-view').html(res.view);
                    button.removeClass('loading'); // Use the stored reference
                    }
            });
        });
    });
</script>
