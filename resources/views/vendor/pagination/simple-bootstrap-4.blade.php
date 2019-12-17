@if ($paginator->hasPages())
    <table>
        <tr class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <td class="page-item disabled" aria-disabled="true">
                    <span class="page-link">@lang('pagination.previous')</span>
                </td>
            @else
                <td class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </td>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <td class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </td>
            @else
                <td class="page-item disabled" aria-disabled="true">
                    <span class="page-link">@lang('pagination.next')</span>
                </td>
            @endif
        </tr>
    </table>
@endif
