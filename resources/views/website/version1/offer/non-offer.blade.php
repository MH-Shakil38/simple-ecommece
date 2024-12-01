<tfoot>
    <tr class="cart-subtotal">
        <th>Subtotal</th>
        <td><span
                class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>
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
                    </bdi></span>
        </td>
    </tr>
    <tr
        class="woocommerce-shipping-totals shipping">
        <th colspan="2">Shipping
        </th>
    </tr>
    <tr
        class="woocommerce-shipping-totals shipping">
        <td colspan="2"
            data-title="Shipping">
            <ul id="shipping_method"
                class="woocommerce-shipping-methods">
                <li>
                    <input
                        type="radio"
                        name="delivery_cost"
                        data-index="0"
                        id="shipping_method_0_flat_rate8"
                        value="{{ delivery_policy()->inside_dhaka ?? 0 }}"
                       checked="checked"
                        class="shipping_method" /><label
                        for="shipping_method_0_flat_rate8">ঢাকার
                        মধ্যে: <span
                            class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>{{ delivery_policy()->inside_dhaka ?? 0 }}.00</bdi></span></label>
                </li>
                <li>
                    <input
                        type="radio"
                        name="delivery_cost"
                        data-index="0"
                        id="shipping_method_0_flat_rate9"
                        value="{{ delivery_policy()->outside_dhaka ?? 0 }}"
                        class="shipping_method" /><label
                        for="shipping_method_0_flat_rate9 ">ঢাকার
                        বাইরে: <span
                            class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>{{ delivery_policy()->outside_dhaka ?? 0 }}.00</bdi></span></label>
                </li>
                <li>
                    <input
                        type="radio"
                        name="delivery_cost"
                        data-index="0"
                        id="shipping_method_0_local_pickup10"
                        value="0"
                        class="shipping_method"
                         /><label
                        for="shipping_method_0_local_pickup10">Pickup
                        From
                        Store</label>
                </li>
            </ul>

        </td>
    </tr>

    <tr class="order-total">
        <th>Total</th>
        <td><strong>৳<span
                    class="woocommerce-Price-amount"><bdi><span
                            class="woocommerce-Price-currencySymbol"></span>
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
                            <span class="total-amount"> {{ $net_total + delivery_policy()->inside_dhaka ?? 0  }}</span>

                            <input type="hidden" class="total-amount-input" value="{{ $net_total }}">
                        @endif
                    </bdi></span></strong>
        </td>
    </tr>
</tfoot>
