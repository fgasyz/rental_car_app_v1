@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="paginate_button page-item disabled" aria-disabled="true">
                        <a class="page-link">@lang('pagination.previous')</a>
                    </li>
                @else
                    <li class="paginate_button page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="paginate_button page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class="paginate_button page-item disabled" aria-disabled="true">
                        <a class="page-link">@lang('pagination.next')</a>
                    </li>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('-') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('dari') !!}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('total') !!}
                </p>
            </div>

            <div>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="paginate_button page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <a class="page-link" aria-hidden="true">Sebelumnya</a>
                        </li>
                    @else
                        <li class="paginate_button page-item">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Sebelumnya</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="paginate_button page-item disabled" aria-disabled="true"><a class="page-link">{{ $element }}</a></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="paginate_button page-item active" aria-current="page"><a class="page-link">{{ $page }}</a></li>
                                @else
                                    <li class="paginate_button page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="paginate_button page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Selanjutnya</a>
                        </li>
                    @else
                        <li class="paginate_button page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <a class="page-link" aria-hidden="true">Selanjutnya</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
