@if ($paginator->lastPage() > 1)
<div class="shop-pagination">
    @for ($i = 1; $i <= $paginator->lastPage(); $i++) 
    <a href="{{ $paginator->url($i) }}"> 
        <div class="shop-pagination__btn btn {{ ($paginator->currentPage() == $i) ? ' shop-pagination__btn-active' : '' }}">
            {{ $i }}
        </div>
    </a>
    @endfor
</div>
@endif
