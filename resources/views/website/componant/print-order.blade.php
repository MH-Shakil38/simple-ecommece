<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exoticagro</title>

    <style>
        @font-face {
            font-family: 'SolaimanLipi';
            src: url('{{ public_path('fonts/SolaimanLipi.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'SolaimanLipi', sans-serif;
            font-size: 16px;
            /* Adjust the font size if needed */
        }

        .invoice-container {
            font-family: 'SolaimanLipi', sans-serif;
            font-size: 14px;
            /* Make sure the font size is readable */
        }

        @font-face {
            font-family: 'SolaimanLipi';
            src: url('storage/fonts/SolaimanLipi.ttf') format('truetype');
        }

        body {
            font-family: 'SolaimanLipi', sans-serif;
            /* background: #f9f9f9; */
        }

        .invoice-container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        .header,
        .footer {
            text-align: center;
        }

        .logo img {
            width: 150px;
            height: auto;
        }

        .company-details,
        .customer-details {
            margin-bottom: 10px;
        }

        .company-details p,
        .customer-details p {
            margin: 5px 0;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .invoice-table th,
        .invoice-table td {
            border: 1px solid #ddd;
            /* padding: 8px; */
            text-align: center;
        }

        .invoice-table th {
            background-color: #f2f2f2;
        }

        .total-section {
            width: 100%;
            text-align: right;
        }

        .total-section table {
            width: 50%;
            margin-top: 10px;
            border: 0;
            text-align: right;
        }

        .total-section td {
            padding: 0px;
        }
    </style>
</head>

<body>
    <div class="invoice-container">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <img src="{{ public_path(setting()->logo) }}" style="margin: -20px;widht:100px;height:70px">
            </div>
            <div class="company-details" style="border-bottom: 1px solid #6d6d6d;line-height:0.8rem;">
                <p><strong>{{ setting()->name }}</strong></p>
                <p>Email: {{ setting()->email }}</p>
                <p>Phone: {{ setting()->phone1 }}</p>
                <p>Address: {{ setting()->address }}</p>
            </div>
        </div>

        <!-- Customer Details -->
        <div class="customer-details" style="margin: 0px;font-size:14px;line-height:0.8rem;margin-bottom:10px">
            <strong style="margin: 0px">Customer Details</strong>
            <p><strong>Name:</strong> {{ $order->customer->customer_name }}</p>
            <p><strong>Phone:</strong> {{ $order->customer->customer_phone }}</p>
            <p><strong>Address:</strong> {{ $order->customer->customer_address }}</p>
        </div>

        <!-- Order Details -->
        <table class="invoice-table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Size</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orders as $info)
                    <tr>
                        <td>{{ mb_convert_encoding($info->product->name, 'UTF-8', 'auto') }}</td>
                        <td>{{ $info->selling_price }}</td>
                        <td>{{ $info->stock->size }}</td>
                        <td>{{ $info->qty }}</td>
                        <td>{{ $info->qty * $info->selling_price }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" style="text-align: right"><strong>Shipping Cost:</strong></td>
                    <td>{{ $order->delivery_cost }}</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right"><strong>Total:</strong></td>
                    <td>{{ $order->orders->sum('total') + $order->delivery_cost ?? 0 }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Total Section -->
        {{-- <div class="" style="text-align: right">
        <table>
            <tr>
                <td>Shipping Cost:</td>
                <td>{{ $order->delivery_cost }}</td>
            </tr>
            <tr>
                <td><strong>Total:</strong></td>
                <td><strong>{{ $order->orders->sum('total') + $order->delivery_cost ?? 0 }}</strong></td>
            </tr>
        </table>
    </div> --}}

        <!-- Footer -->

        <div class="footer" style="border-top: 1px solid #6d6d6d">
            <p style="font-size: 11px">Thank you for your purchase! If you have any questions, feel free to contact us
                at {{ setting()->email }} or {{ setting()->phone1 }}.</p>
            <p style="font-size: 11px; color: #555; margin-top: 5px;">&copy; {{ date('Y') }}
                {{ setting()->name }}. All rights reserved.</p>
        </div>
    </div>

</body>

</html>
