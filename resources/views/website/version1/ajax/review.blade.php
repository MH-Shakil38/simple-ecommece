@php
$reviews = App\Models\Review::where('product_id', $product_id)->get();
@endphp
@forelse ($reviews as $info)
<div class="review">
<h6>
    <img src="https://www.w3schools.com/howto/img_avatar.png"
        alt="Avatar" class="avatar">
    <span style="font-weight: bold">{{ $info->name ??'--' }}</span>
</h6>
<p style="margin-left: 30px;border-bottom: 0.01px solid #bbc2bb4c; font-size:20px">{{ $info->details ?? ''}}
</p>
</div>
@empty

@endforelse
