<link rel="stylesheet" type="text/css" href="{{ asset('/') }}backEnd/assets/vendor/toastr/toastr.min.css">
<script>
    // $(document).ready(function () {
    //     var data = $('#shipping_method').val();
    //     $('#cart_shipping_cost').html(data)
    // })
    function qty_plus(id, stock_id) {
        var ele = $(this);
        var qty = parseInt($('.qty' + stock_id).val(), 10);
        $('.loader').addClass('wc-loading')
        $.ajax({
            url: '{{ route('add.card') }}',
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                product_id: id,
                stock_id: stock_id,
                qty: parseInt(qty + 1),
            },
            success: function(response) {
                afterSuccessPlusMinus(stock_id, qty + 1)
            }

        });
    }

    function qty_minus(id, stock_id) {
        var ele = $(this);
        $('.loader').addClass('wc-loading')
        var qty = parseInt($('.qty' + stock_id).val(), 10);
        $.ajax({
            url: '{{ route('add.card') }}',
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                product_id: id,
                stock_id: stock_id,
                qty: parseInt(qty - 1),
            },
            success: function(response) {
                afterSuccessPlusMinus(stock_id, qty - 1)
            }

        });
    }

    function afterSuccessPlusMinus(stock_id, qty) {
        var price = $('.price'+stock_id).html();
        // toastr.success('Update Product Successfully!');
        $('.qty'+stock_id).val(qty)

        var subqty = $('.qty'+stock_id).val();
        $('.subtotal' + stock_id).html(subqty * price);
        var net_total = netTotal();
        console.log('net total: '+ net_total);
        $('.net_total').html(net_total);
        var shipping_cost = $('.shipping_method:checked').val();
        console.log("Selected Value: " + shipping_cost);
        $('.grand_total').html(net_total + parseFloat(shipping_cost));
        $('.loader').removeClass('wc-loading')
        console.log('Total:', net_total);
        console.log('shipping cost:', shipping_cost);
    }

    function netTotal() {
        var net_total = 0;
        $('.subtotalsum').each(function() {
            net_total += parseFloat($(this).text());
        });
        return net_total;
    }

    function delivery_cost() {
        var data = $('#shipping_method').val();
        $.ajax({
            url: '{{ route('minus.card') }}',
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                delivery_cost: data,
            },
            success: function(response) {
                var shipping_cost = $('#shipping_cost').html(response.data)
                var total = $('.grand_total').html();
                $('.grand_total').html(netTotal() + parseFloat(response.data))
            }
        });


        // $('#cart_shipping_cost').html(data)
    }

    $('.shipping_method').click(function(){
        var shipping_cost = $('.shipping_method:checked').val();
        var total = netTotal();
        $('.grand_total').html(parseFloat(total) + parseFloat(shipping_cost));
    })
</script>
