


<table cellspacing="0" class="shop_table shop_table_responsive">

    <tbody>
        @if ($offer->offer_type == 1)


            <tr class="cart-subtotal">
                <th>Net Total</th>
                <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span
                                class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                            <span class="net_total">
                                {{ $net_total }}
                            </span>
                        </bdi></span>
                </td>
            </tr>

            <tr class="cart-subtotal">
                <th>Shipping</th>
                <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span
                                class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                            <span class="net_total">

                                Free
                            </span>
                        </bdi></span>
                </td>
            </tr>

            <tr class="woocommerce-shipping-totals shipping">
                <td colspan="2" data-title="Shipping">

                    <p class="woocommerce-shipping-destination">
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
                    <strong><span class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                                <span class="grand_total">
                                    {{ $net_total }}
                                </span>
                            </bdi></span></strong>
                </td>
            </tr>
        @else
            <tr class="cart-subtotal">
                <th>Subtotal</th>
                <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span
                                class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                            <span class="net_total">
                                {{ $net_total }}
                            </span>
                        </bdi></span>
                </td>
            </tr>
            <tr class="cart-subtotal">
                <th>Offer</th>
                <td data-title=""><span class="woocommerce-Price-amount amount"><bdi><span
                                class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                            <span class="">
                                <input type="hidden" class="offer" value="{{ $net_total - $discount }}">
                                {{ $net_total- $discount }}
                            </span>
                        </bdi></span>
                </td>
            </tr>
            <tr class="cart-subtotal">
                <th>Net Total</th>
                <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span
                                class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                            <span class="net_total">
                                {{ $net_total - ($net_total- $discount) }}
                            </span>
                        </bdi></span>
                </td>
            </tr>

            <tr class="woocommerce-shipping-totals shipping">
                <td colspan="2" data-title="Shipping">
                    <ul id="shipping_method" class="woocommerce-shipping-methods">
                        <li>
                            <input type="radio" name="delivery_cost" data-index="0" id="shipping_method_0_flat_rate8"
                                value="{{ delivery_policy()->inside_dhaka ?? 0 }}" checked="checked"
                                class="shipping_method" /><label for="shipping_method_0_flat_rate8">ঢাকার
                                মধ্যে: <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>{{ delivery_policy()->inside_dhaka ?? 0 }}.00</bdi></span></label>
                        </li>
                        <li>
                            <input type="radio" name="delivery_cost" data-index="0" id="shipping_method_0_flat_rate9"
                                value="{{ delivery_policy()->outside_dhaka ?? 0 }}" class="shipping_method" /><label
                                for="shipping_method_0_flat_rate9 ">ঢাকার
                                বাইরে: <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>{{ delivery_policy()->outside_dhaka ?? 0 }}.00</bdi></span></label>
                        </li>
                        <li>
                            <input type="radio" name="delivery_cost" data-index="0"
                                id="shipping_method_0_local_pickup10" value="0" class="shipping_method" /><label
                                for="shipping_method_0_local_pickup10">Pickup
                                From
                                Store</label>
                        </li>
                    </ul>

                </td>
            </tr>

            <tr class="woocommerce-shipping-totals shipping">
                <td colspan="2" data-title="Shipping">
                    <p class="woocommerce-shipping-destination">
                        Estimate for <strong>
                            {{ setting()->address ?? '' }}</strong>.
                    </p>
                </td>
            </tr>
            <tr class="order-total">
                <th>Total</th>
                <td data-title="Total">
                    <strong><span class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">৳&nbsp;</span>
                                <span class="grand_total">
                                    {{ $discount + delivery_policy()->inside_dhaka }}
                                </span>
                            </bdi></span></strong>
                </td>
            </tr>
        @endif
    </tbody>
</table>
