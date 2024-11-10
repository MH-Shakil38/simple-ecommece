<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/solaimanlipi" type="text/css" />
    <link href="https://fonts.cdnfonts.com/css/solaimanlipi" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'SolaimanLipi';
              /* src: url('fonts/SolaimanLipi.ttf') format('woff'); */
        }

        body {
            font-family: 'SolaimanLipi' !important;
            margin: 0;
            padding: 0;
        }

        .invoice-container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            background: #f9f9f9;
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
            margin-bottom: 20px;
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
            <div class="company-details">
                <p><strong>{{ setting()->name }}</strong></p>
                <p>Email: {{ setting()->email }}</p>
                <p>Phone: {{ setting()->phone1 }}</p>
                <p>Address: {{ setting()->email }}</p>
            </div>
        </div>
        <hr>

        <!-- Customer Details -->
        <div class="customer-details" style="margin: 0px">
            <h3 style="margin: 0px">Customer Details</h3>
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
                        <td>{{ $info->product->name }}</td>
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
        <div class="footer">
            <p style="font-size: 11px">Thank you for your purchase! If you have any questions, feel free to contact us
                at {{ setting()->email }} or {{ setting()->phone1 }}.</p>
        </div>
    </div>

</body>

</html>
