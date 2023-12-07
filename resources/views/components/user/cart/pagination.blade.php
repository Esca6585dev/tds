@if ($paginator->hasPages())
<div class="pagination">
    <!--begin::Pagination-->
    {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <a href="{{ $paginator->previousPageUrl() }}" class="user-page-link">
            <i class="fa fa-chevron-left"></i>
        </a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="user-page-link">
            <i class="fa fa-chevron-left"></i>
        </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        @if (is_string($element))
        <a class="user-page-link">{{ $element }}</a>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <a class="active">{{ $page }}</a>
        @else
        <a href="{{ $url }}" class="user-page-link">{{ $page }}</a>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="user-page-link">
            <i class="fa fa-chevron-right"></i>
        </a>
        @else
        <a href="{{ $paginator->nextPageUrl() }}" class="user-page-link">
            <i class="fa fa-chevron-right"></i>
        </a>
        @endif
    <!--end:: Pagination-->
</div>
@endif
