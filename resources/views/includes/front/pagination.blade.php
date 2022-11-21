
@if ($paginator->hasPages())
    <div class="styled-pagination">
        <ul class="clearfix">
            @if (!$paginator->onFirstPage())
                <li class="previous"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><span class="ti-angle-left"></span></a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#"><span>{{ $page }}</span></a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next"><span class="ti-angle-right"></span></a></li>
            @endif
        </ul>
    </div>
@endif 