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
                            button.removeClass('loading'); // Use the stored reference
                            if (res.cart) {
                                // toastr.warning('This Item Already Added!');
                            } else {
                                var cart = parseInt($('.cartTotal').html(), 10);
                                var newCartTotal = cart + 1;
                                $('.cartTotal').html(newCartTotal);
                                $('.ajax-cart').html(res.html_cart);

                                button.removeClass('button add_to_cart_button product_type_simple ajax_add_to_cart');
                                button.addClass('added_to_cart wc-forward');
                                // toastr.success('Product Successfully added to cart!');
                            }
                        },
                        error: function(xhr) {
                            button.removeClass('loading'); // Remove loading class on error too
                            toastr.error('An error occurred. Please try again.');
                        }
                    });
                });
            });
        </script>
