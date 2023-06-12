@if ($paginator->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            {{-- @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="page-link">
                                <li class="active"><span>{{ $page }}</span></li>
                            </a>
                        @elseif ($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2 || $page == $paginator->lastPage())
                            <li>
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @elseif ($page == $paginator->lastPage() - 1)
                        <a class="page-link">
                            <li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
                        </a>
                        @endif
                    @endforeach
                @endif
            @endforeach --}}

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                        <span><i class="fa fa-angle-double-right"></i></span>
                    </a>
                </li>
            @else
                <li class="disabled">
                    <a class="page-link">
                        <span><i class="fa fa-angle-double-right"></i></span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <!-- Pagination -->
@endif
