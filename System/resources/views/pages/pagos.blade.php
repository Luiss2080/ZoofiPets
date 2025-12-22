<style>
    /* Integrated Pagination Styles for Pagos Module */
    /* Replicating public/css/pages/paginacion.css but with module-specific scope and Purple theme */

    .pagos-pagination-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        background: var(--bg-surface);
        border: 1px solid var(--border-color);
        border-radius: 16px; /* Matches screenshot rounded container */
        width: 100%;
        margin-top: 0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .pagos-pagination-links {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Page Link General Style */
    .pagos-page-link {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px; /* Slightly squarish rounded as per modern UI */
        background: transparent;
        color: var(--text-secondary);
        text-decoration: none;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        font-weight: 600;
        cursor: pointer;
        border: 1px solid transparent; /* matches paginacion.css */
        font-size: 0.9rem;
    }

    .pagos-page-link i {
        font-size: 0.8rem;
    }

    /* Hover State */
    .pagos-page-link:hover:not(.disabled) {
        background: rgba(72, 52, 212, 0.1); /* Purple tint */
        color: var(--primary-color);
        border-color: rgba(72, 52, 212, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 4px 6px -1px rgba(72, 52, 212, 0.1);
    }

    /* Active State - Purple Solid */
    .pagos-page-link.active {
        background: var(--primary-color);
        color: #fff;
        box-shadow: 0 4px 12px rgba(72, 52, 212, 0.3);
        border-color: var(--primary-color);
    }

    /* Disabled State */
    .pagos-page-link.disabled {
        opacity: 0.4;
        cursor: not-allowed;
        pointer-events: none;
        color: var(--text-muted);
    }

    /* Ghost Page (Placeholder) */
    .pagos-page-link.ghost-page {
        opacity: 0.2;
        background: rgba(255, 255, 255, 0.02);
        border: 1px dashed rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
    }

    /* Dark Mode Overrides if needed (though variables should handle it) */
    body.dark-mode .pagos-pagination-nav {
        background: var(--bg-surface);
        border-color: var(--border-color);
    }
</style>

<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagos-pagination-nav">
    <div class="pagos-pagination-links">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="pagos-page-link disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <i class="fas fa-chevron-left"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagos-page-link" aria-label="@lang('pagination.previous')">
                <i class="fas fa-chevron-left"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="pagos-page-link disabled" aria-disabled="true">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="pagos-page-link active" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="pagos-page-link">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Ghost Pages (Fill up to 5) --}}
        @php
            $totalPages = $paginator->lastPage();
            $minPages = 5;
        @endphp

        @if ($totalPages < $minPages)
            @for ($i = $totalPages + 1; $i <= $minPages; $i++)
                <span class="pagos-page-link disabled ghost-page" aria-disabled="true">{{ $i }}</span>
            @endfor
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagos-page-link" aria-label="@lang('pagination.next')">
                <i class="fas fa-chevron-right"></i>
            </a>
        @else
            <span class="pagos-page-link disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <i class="fas fa-chevron-right"></i>
            </span>
        @endif
    </div>
</nav>
