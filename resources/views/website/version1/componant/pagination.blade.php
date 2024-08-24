@if ($paginator->hasPages())
    <ul class="pagination custom-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>Prev</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">Prev</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{-- Show three links before current page --}}
                        @for ($i = $page - 3; $i < $page; $i++)
                            @if ($i > 0)
                                <li><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endfor

                        {{-- Current Page --}}
                        <li class="active"><span>{{ $page }}</span></li>

                        {{-- Show three links after current page --}}
                        @for ($i = $page + 1; $i <= $page + 3; $i++)
                            @if ($i <= $paginator->lastPage())
                                <li><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endfor
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
        @else
            <li class="disabled"><span>Next</span></li>
        @endif
    </ul>
@endif

<style>
    .custom-pagination {
    display: flex;
    list-style: none;
}

.custom-pagination li {
    margin: 0 5px;
}

.custom-pagination a {
    text-decoration: none;
    padding: 10px 15px;
    color: #28292b;
    border: 1px solid #dee2e6;
    border-radius: 4px;
}

.custom-pagination .active span {
    background-color: green;
    color: white;
    padding: 10px 15px;
    border-radius: 4px;
}

.custom-pagination .disabled span {
    color: #6c757d;
    padding: 10px 15px;
}
.pagination .custom-pagination{
    list-style: none !important;
    text-align: center !important;
}
.page-template-default:not(.woocommerce-page) .page ul, .row .page.type-page ul, .singlePost ul {
    list-style: none;
}
</style>
