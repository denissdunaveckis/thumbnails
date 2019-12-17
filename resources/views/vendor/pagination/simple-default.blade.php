@if ($paginator->hasPages())
    <table>
        <tr class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <td class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></td>
            @else
                <td><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></td>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <td><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></td>
            @else
                <td class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></td>
            @endif
        </tr>
    </table>
@endif
