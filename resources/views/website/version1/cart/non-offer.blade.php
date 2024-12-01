<table cellspacing="0"
class="shop_table shop_table_responsive">

<tbody>
    <tr class="cart-subtotal">
        <th>Subtotal</th>
        <td data-title="Subtotal"><span
                class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                    <span
                        class="net_total">
                        @if (session('cart'))
                            @php
                                $net_total = 0;
                            @endphp

                            @foreach (session('cart') as $id => $details)
                                @php
                                    $net_total =
                                        $net_total +
                                        $details[
                                            'qty'
                                        ] *
                                            $details[
                                                'price'
                                            ];
                                @endphp
                            @endforeach
                            {{ $net_total }}
                        @endif
                    </span>
                </bdi></span>
        </td>
    </tr>




    <tr
        class="woocommerce-shipping-totals shipping">
        <th colspan="2">Shipping</th>
    </tr>
    <tr
        class="woocommerce-shipping-totals shipping">
        <td colspan="2"
            data-title="Shipping">
            <ul id="shipping_method"
                class="woocommerce-shipping-methods">
                <li>
                    <input type="radio"
                        name="shipping_method[0]"
                        data-index="0"
                        id="shipping_method_0_flat_rate8"
                        value="{{ delivery_policy()->inside_dhaka ?? 0 }}"
                        class="shipping_method"
                        checked="checked"><label
                        for="shipping_method_0_flat_rate8">ঢাকার
                        মধ্যে: <span
                            class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">৳&nbsp;</span>{{ delivery_policy()->inside_dhaka ?? 0 }}.00</bdi></span></label>
                </li>
                <li>
                    <input type="radio"
                        name="shipping_method[0]"
                        data-index="0"
                        id="shipping_method_0_flat_rate9"
                        value="{{ delivery_policy()->outside_dhaka ?? 0 }}"
                        class="shipping_method"><label
                        for="shipping_method_0_flat_rate9">ঢাকার
                        বাইরে: <span
                            class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">৳&nbsp;</span>{{ delivery_policy()->outside_dhaka ?? 0 }}.00</bdi></span></label>
                </li>
                <li>
                    <input type="radio"
                        name="shipping_method[0]"
                        data-index="0"
                        id="shipping_method_0_local_pickup10"
                        value="0"
                        class="shipping_method"><label
                        for="shipping_method_0_local_pickup10">Pickup
                        From Store</label>
                </li>
            </ul>
            <p
                class="woocommerce-shipping-destination">
                Estimate for <strong>
                    {{ setting()->address ?? '' }}</strong>.
            </p>


            <!-- EpicoMedia code -->

        </td>
    </tr>
    <tr>
        <td colspan="2">
        </td>
    </tr>
    <!-- EpicoMedia code -->





    <tr class="order-total">
        <th>Total</th>
        <td data-title="Total">
            <strong><span
                    class="woocommerce-Price-amount amount"><bdi><span
                            class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                        <span
                            class="grand_total">
                            @if (session('cart'))
                                @php
                                    $net_total = 0;
                                @endphp

                                @foreach (session('cart') as $id => $details)
                                    @php
                                        $net_total =
                                            $net_total +
                                            $details[
                                                'qty'
                                            ] *
                                                $details[
                                                    'price'
                                                ];
                                    @endphp
                                @endforeach
                                {{ $net_total + delivery_policy()->inside_dhaka }}
                            @endif
                        </span>
                    </bdi></span></strong>
        </td>
    </tr>


</tbody>
</table>
