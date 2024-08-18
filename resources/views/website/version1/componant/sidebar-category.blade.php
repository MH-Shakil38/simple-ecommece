<div class="toggleSidebar toggleSidebarWidgetbar">
    <div id="toggle-sidebar-close-btn"></div>
    <div class="sidebar widget-area">
        <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
            <h4 class="widget-title">Product categories</h4>
            <ul class="product-categories">
                @forelse (categories() as $info)
                <li class="cat-item cat-item-254"><a
                    href="#">{{ $info->name }}</a> <span
                    class="count">({{ $info->products->count() }})</span></li>
                @empty

                @endforelse
            </ul>
        </div>
        {{-- <div id="woocommerce_product_tag_cloud-2" class="widget woocommerce widget_product_tag_cloud">
            <h4 class="widget-title">Product tags</h4>
            <div class="tagcloud"><a
                    href="product-tag/%e0%a6%8f%e0%a6%95-%e0%a6%95%e0%a7%8b%e0%a7%9f%e0%a6%be-%e0%a6%b0%e0%a6%b8%e0%a7%81%e0%a6%a8/index.html"
                    class="tag-cloud-link tag-link-412 tag-link-position-1" style="font-size: 22pt;"
                    aria-label="এক কোয়া রসুন (2 products)">এক কোয়া রসুন</a>
                <a href="product-tag/%e0%a6%95%e0%a6%be%e0%a6%9a%e0%a6%be-%e0%a6%ae%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a7%87%e0%a6%b0-%e0%a6%86%e0%a6%9a%e0%a6%be%e0%a6%b0/index.html"
                    class="tag-cloud-link tag-link-407 tag-link-position-2" style="font-size: 8pt;"
                    aria-label="কাচা মরিচের আচার (1 product)">কাচা মরিচের আচার</a>
                <a href="product-tag/%e0%a6%ac%e0%a7%8b%e0%a6%ae%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%87-%e0%a6%ae%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a7%87%e0%a6%b0-%e0%a6%86%e0%a6%9a%e0%a6%be%e0%a6%b0/index.html"
                    class="tag-cloud-link tag-link-406 tag-link-position-3" style="font-size: 8pt;"
                    aria-label="বোম্বাই মরিচের আচার (1 product)">বোম্বাই মরিচের আচার</a>
                <a href="product-tag/%e0%a6%b8%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%b0-%e0%a6%ae%e0%a6%b8%e0%a6%b2%e0%a6%be/index.html"
                    class="tag-cloud-link tag-link-450 tag-link-position-4" style="font-size: 8pt;"
                    aria-label="স্টার মসলা (1 product)">স্টার মসলা</a>
                <a href="product-tag/%e0%a6%b8%e0%a7%8d%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b8%e0%a6%a1-%e0%a6%9c%e0%a6%b2%e0%a6%aa%e0%a6%be%e0%a6%87-%e0%a6%86%e0%a6%9a%e0%a6%be%e0%a6%b0/index.html"
                    class="tag-cloud-link tag-link-376 tag-link-position-5" style="font-size: 8pt;"
                    aria-label="স্ম্যাসড জলপাই আচার (1 product)">স্ম্যাসড জলপাই আচার</a>
            </div>
        </div> --}}
    </div>
</div>
