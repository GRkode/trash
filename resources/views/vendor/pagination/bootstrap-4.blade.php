@if ($paginator->hasPages())
    <div class="kode_pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <a href="#" rel="prev" aria-label="Previous">&lsaquo; Précédent</a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">&lsaquo; Précédent</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a aria-label="Next" href="{{ $paginator->nextPageUrl() }}">Suivant &rsaquo;</a>
                </li>
            @else
                <li>
                    <a aria-label="Next" href="#">Suivant &rsaquo;</a>
                </li>
            @endif
        </ul>
    </div>
@endif
