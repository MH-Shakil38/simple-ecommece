@if ($type == 'cart_btn')
    <input type="hidden" class="qty" value="1">
    <input type="hidden" class="product_id" value="{{ $product_id }}">
    <input type="hidden" class="stock_id" value="{{ $stock_id }}">
    <button class="btn btn-sm w-100 mb-2 add_to_card_button"> Add To Card </button>
@endif

@if ($type == 'order_btn')
    <form action="{{ route('add.card') }}" method="post">
        @csrf
        <input type="hidden" name="qty" value="1">
        <input type="hidden" name="product_id" value="{{ $product_id }}">
        <input type="hidden" name="stock_id" value="{{ $stock_id }}">
        <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
    </form>
@endif

