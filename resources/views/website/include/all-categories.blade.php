<section>
    <div class="product_categories">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-3">প্রোডাক্ট ক্যাটেগরীজ</h5>
                    <div class="horiz_cat">
                        <ul>

                            @forelse($categories as $info)
                                <li>
                                    <a href="{{route('product.category',$info->id)}}">{{$info->name}}</a>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
