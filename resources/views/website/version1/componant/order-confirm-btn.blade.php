<style>
    @media (max-width: 768px) {
        .orderbtn {
            display: block;
            width: 100%;
            font-size: 26px;
            color: #fff;
            position: fixed;
            bottom: 0%;
            /* border-radius: 8px; */
            margin: 0 auto;
            text-align: center;
            z-index: 999999;
            padding: 10px;
            background: #168d44;
            border: none;
            box-shadow: 1px -5px 19px 4px #39ff3f;
        }
    }

    @media (min-width: 768px) {
        .orderbtn {
            display: none;
        }
    }
</style>
@php
    $cart = count((array) session('cart'));
@endphp
@if ($cart > 0)
    <a id="" href="{{ route('checkout') }}" class="orderbtn">অর্ডার করুন </a>
@endif
