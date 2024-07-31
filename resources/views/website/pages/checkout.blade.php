@extends('website.layouts.master')
@section('content')

    @if (count((array) session('cart')) > 0)
        <section>
            <div class="cart-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-12 mb-md-0 mb-4">
                            <div class="card">
                                <h5 class="font-weight-bold card-header">কাস্টমার ইনফরমেশন</h5>
                                <div class="card-body p-2">
                                    <p class="text-center">অর্ডারটি কনফার্ম করতে আপনার নাম, ঠিকানা, মোবাইল নাম্বার, লিখে
                                        <span class="text-danger">অর্ডার কনফার্ম করুন</span> বাটনে ক্লিক করুন
                                    </p>
                                    <form action="{{ route('place.order') }}" method="post" id="checkout_form"
                                        class="checkout_form">
                                        @csrf

                                        <div class="form-group">
                                            <label for="shipping_method">আপনার এরিয়া সিলেক্ট করুন <span
                                                    class="text-danger">*</span></label>
                                            <select name="shipping_method" id="shipping_method" class="form-control"
                                                required="" onchange="delivery_cost()">
                                                <option
                                                    {{ delivery_policy()->inside_dhaka == session()->get('shipping_cost') ? 'selected' : '' }}
                                                    value="{{ delivery_policy()->inside_dhaka ?? 0 }}">ঢাকার ভিতরে ডেলিভারি
                                                </option>
                                                <option
                                                    {{ delivery_policy()->outside_dhaka == session()->get('shipping_cost') ? 'selected' : '' }}
                                                    value="{{ delivery_policy()->outside_dhaka ?? 0 }}">ঢাকার বাইরে ডেলিভারি
                                                </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="customer_name">আপনার নাম <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="customer_name"
                                                name="customer_name" placeholder="আপনার নাম লিখুন" required="">
                                        </div>

                                        <div class="form-group">
                                            <label for="customer_phone">আপনার মোবাইল <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="customer_phone"
                                                name="customer_phone" placeholder="আপনার মোবাইল লিখুন" minlength="11"
                                                required="">
                                        </div>

                                        <div class="form-group">
                                            <label for="customer_address">আপনার ঠিকানা <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="customer_address"
                                                name="customer_address" placeholder="আপনার ঠিকানা লিখুন" required="">
                                        </div>


                                        <button type="submit" class="btn btn-success w-100 mb-2" style="height: 50px"
                                            id="conf_order_btn">অর্ডার কনফার্ম করুন</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card">
                                <h5 class="font-weight-bold card-header">অর্ডার ইনফরমেশন</h5>
                                <div class="card-body p-2 table-responsive">
                                    <table class="cart_table table table-bordered table-striped text-center mb-0">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Product Name &amp; Image</th>
                                                <th>Price</th>
                                                <th>Size</th>
                                                <th>Qty</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if (session('cart'))
                                                @foreach (session('cart') as $id => $details)
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('card.remove',['id'=>$details['id'],'stock_id'=>$details['stock_id']]) }}"><i
                                                                    class="fa fa-trash-o text-danger"></i></a>
                                                        </td>
                                                        <td class="text-left">
                                                            <img width="35" src="{{ asset($details['image']) }}"
                                                                alt="">
                                                            <a style="font-size: 14px"
                                                                href="#">{{ $details['name'] }}</a>
                                                            {{--                                            <a style="font-size: 14px" href="{{ $details['id'] ? route('single.product',$details['id']) : '#'}}">{{ $details['name'] }}</a> --}}
                                                        </td>
                                                        {{--                                            {{dd($details['selling_price'])}} --}}
                                                        <td class="price{{ $details['stock_id'] }}">{{ $details['price'] }}
                                                        </td>
                                                        <td>{{ $details['size'] ?? '' }}</td>
                                                        <td width="15%" class="cart_qty">
                                                            <a href="#"><i class="fa fa-minus" id="qty_minus"
                                                                    onclick="qty_minus({{ $details['id'] }},{{ $details['stock_id'] }})"></i></a>
                                                            <input type="text" name="qty" id="qty"
                                                                class="qty{{ $details['stock_id'] }}"
                                                                value="{{ $details['qty'] }}" readonly="">
                                                            <a href="#"><i class="fa fa-plus" id="qty_plus"
                                                                    onclick="qty_plus({{ $details['id'] }},{{ $details['stock_id'] }})"></i></a>
                                                        </td>
                                                        <td class="subtotal{{ $details['stock_id'] }} subtotalsum" id="subtotal">
                                                            {{ $details['qty'] * $details['price'] }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5" class="text-right pr-2">Net Total</th>
                                                <td class="net_total">
                                                    <span id="net_total">

                                                        @if (session('cart'))
                                                            @php
                                                                $net_total = 0;
                                                            @endphp

                                                            @foreach (session('cart') as $id => $details)
                                                                @php
                                                                    $net_total =
                                                                        $net_total +
                                                                        $details['qty'] * $details['price'];
                                                                @endphp
                                                            @endforeach
                                                            {{ $net_total }}
                                                        @endif
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="5" class="text-right pr-2">Shipping Cost</th>
                                                <td>
                                                    {{--                                            {{dd(\session()->get('shipping_cost'))}} --}}
                                                    <span id="shipping_cost">{{ \session()->get('shipping_cost') }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="5" class="text-right pr-2">Grand Total</th>
                                                <td>
                                                    <span
                                                        id="grand_total" class="grand_total">{{ $net_total + session('delivery_charge') + \session()->get('shipping_cost') }}</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="card-footer">
                                    <a href="{{ route('/') }}" class="btn btn-info btn-sm ">
                                        <i class="fa fa-angle-left"></i> Back To Shopping
                                    </a>
                                    <a href="{{ route('card.clear') }}" class="btn btn-danger btn-sm float-right">Cart
                                        Clear</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="py-md-5">
            <div class="cart-section">
                <div class="container">
                    <div class="row py-md-5">
                        <div class="col-12 text-center">
                            <h1 class="mb-md-4">কোন প্রোডাক্ট নেই</h1>
                            <a href="{{ route('/') }}" class="btn btn-info px-5">প্রোডাক্ট বাছাই করুন</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

<script>
    // $(document).ready(function () {
    //     var data = $('#shipping_method').val();
    //     $('#cart_shipping_cost').html(data)
    // })
    function qty_plus(id, stock_id) {
        var ele = $(this);
        var qty = parseInt($('.qty' + stock_id).val(), 10);
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
        var price = $('.price' + stock_id).html();
        toastr.success('Update Product Successfully!');
        $('.qty' + stock_id).val(qty)
        var subqty = $('.qty' + stock_id).val();
        $('.subtotal' + stock_id).html(subqty * price);
        var net_total = netTotal();
        console.log(net_total);
        $('.net_total').html(net_total);
        var shipping_cost = $('#shipping_cost').html();
        $('.grand_total').html(net_total + parseFloat(shipping_cost));
        console.log('Total:', net_total);
        console.log('shipping cost:', shipping_cost);
    }

    function netTotal(){
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
</script>

</body>

<!-- Mirrored from citystorebd.com/checkout by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2023 08:14:37 GMT -->

</html>
