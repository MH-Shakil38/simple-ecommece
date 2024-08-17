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
