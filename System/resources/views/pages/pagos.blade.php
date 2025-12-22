<style>
    /* Pagination CSS for Pagos Module */
    .pagos-pagination-container {
        display: flex;
        justify-content: flex-end; /* Right aligned */
        padding: 1.5rem 0;
        width: 100%;
    }

    .pagos-pagination-links {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: var(--bg-surface);
        padding: 0.5rem;
        border-radius: 16px;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border-color);
    }

    .pagos-page-link {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        color: var(--text-muted);
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.2s ease;
        border: 1px solid transparent;
        cursor: pointer;
    }

    .pagos-page-link:hover:not(.disabled) {
        background: var(--bg-surface-secondary);
        color: var(--primary-color);
        transform: translateY(-2px);
    }

    .pagos-page-link.active {
        background: linear-gradient(135deg, var(--primary-color), var(--primary-color-hover));
        color: white;
        box-shadow: 0 4px 10px rgba(72, 52, 212, 0.3);
    }

    .pagos-page-link.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .pagos-page-link.ghost-page {
        opacity: 0.2;
        background: var(--bg-surface-secondary);
        border: 1px dashed var(--border-color);
    }

    /* Dark Mode Adjustments */
    body.dark-mode .pagos-pagination-links {
        background: #1e1b2e; /* Darker surface */
        border-color: #2d2a45;
    }
    
    body.dark-mode .pagos-page-link {
        color: #a0a0b0;
    }
    
    body.dark-mode .pagos-page-link:hover:not(.disabled) {
        background: #2d2a45;
        color: #fff;
    }
</style>

<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagos-pagination-container">
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

<script>
    // Module specific JS for pagination interactivity if needed
    // Currently standard links work fine, but this block exists per requirement
    console.log('Pagos pagination loaded');
</script>
