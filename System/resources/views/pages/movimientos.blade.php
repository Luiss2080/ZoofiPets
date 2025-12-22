<style>
    /* Integrated Pagination Styles for Movimientos Module - High Contrast Version */

    .movimientos-pagination-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        background: #ffffff !important; /* Force White Background */
        border: 1px solid var(--border-color);
        border-radius: 16px;
        width: 100%;
        margin-top: 0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .movimientos-pagination-links {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Page Link General Style */
    .movimientos-page-link {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        background: transparent;
        color: #000000 !important; /* Pure Black Text */
        text-decoration: none;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        font-weight: 800; /* Extra Bold */
        cursor: pointer;
        border: 1px solid transparent;
        font-size: 1rem; 
    }

    .movimientos-page-link i {
        font-size: 0.95rem;
        color: #000000 !important; /* Pure Black Icons */
    }

    /* Hover State */
    .movimientos-page-link:hover:not(.disabled) {
        background: rgba(72, 52, 212, 0.1); 
        color: var(--primary-color) !important;
        border-color: rgba(72, 52, 212, 0.2);
        transform: translateY(-2px);
    }

    /* Active State */
    .movimientos-page-link.active {
        background: var(--primary-color) !important;
        color: #ffffff !important; /* White on Purple */
        border-color: var(--primary-color);
        box-shadow: 0 4px 12px rgba(72, 52, 212, 0.3);
    }

    /* Disabled State */
    .movimientos-page-link.disabled {
        opacity: 0.3;
        cursor: not-allowed;
        pointer-events: none;
        color: #000000 !important;
    }

    /* Ghost Page */
    .movimientos-page-link.ghost-page {
        opacity: 0.1;
        background: rgba(0, 0, 0, 0.05);
        color: #000000 !important;
    }

    /* Dark Mode Overrides */
    body.dark-mode .movimientos-pagination-nav {
        background: #1e1b2e !important; 
        border-color: #2d2a45;
    }
    
    body.dark-mode .movimientos-page-link:not(.active) {
        color: #ffffff !important; 
    }
    
    body.dark-mode .movimientos-page-link i {
        color: #ffffff !important;
    }
</style>

<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="movimientos-pagination-nav">
    <div class="movimientos-pagination-links">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="movimientos-page-link disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <i class="fas fa-chevron-left"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="movimientos-page-link" aria-label="@lang('pagination.previous')">
                <i class="fas fa-chevron-left"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="movimientos-page-link disabled" aria-disabled="true">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="movimientos-page-link active" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="movimientos-page-link">{{ $page }}</a>
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
                <span class="movimientos-page-link disabled ghost-page" aria-disabled="true">{{ $i }}</span>
            @endfor
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="movimientos-page-link" aria-label="@lang('pagination.next')">
                <i class="fas fa-chevron-right"></i>
            </a>
        @else
            <span class="movimientos-page-link disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <i class="fas fa-chevron-right"></i>
            </span>
        @endif
    </div>
</nav>
