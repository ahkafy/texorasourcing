@props([
    'motif' => 'shears',
    'class' => 'absolute w-96 h-96 pointer-events-none select-none',
    'strokeWidth' => '0.6',
])

<div {{ $attributes->merge(['class' => $class]) }}>
    @switch($motif)
        @case('shears')
        @case('scissors')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="6" cy="6" r="3"/>
                <circle cx="6" cy="18" r="3"/>
                <line x1="20" y1="4" x2="8.12" y2="15.88"/>
                <line x1="14.47" y1="14.48" x2="20" y2="20"/>
                <line x1="8.12" y1="8.12" x2="12" y2="12"/>
                <circle cx="12" cy="12" r="0.8" fill="currentColor"/>
            </svg>
            @break

        @case('mannequin')
        @case('dress-form')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <path d="M10 2h4v1.5h-4z"/>
                <path d="M10 3.5c-2 .5-3.8 2-4.3 4.5-.4 2-.2 4 .5 6 .6 1.8 1.4 2.5 1.8 3h8c.4-.5 1.2-1.2 1.8-3 .7-2 .9-4 .5-6-.5-2.5-2.3-4-4.3-4.5"/>
                <line x1="12" y1="3.5" x2="12" y2="21"/>
                <path d="M8.5 11c1 .8 2.2 1.2 3.5 1.2s2.5-.4 3.5-1.2"/>
                <line x1="9" y1="21" x2="15" y2="21"/>
                <line x1="12" y1="17" x2="9" y2="22"/>
                <line x1="12" y1="17" x2="15" y2="22"/>
            </svg>
            @break

        @case('sewing-machine')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 19h20v2H2z"/>
                <path d="M18 19V8c0-1.5-1-2.5-2.5-2.5H7.5C6 5.5 5 6.5 5 8v3h3V8"/>
                <line x1="7" y1="11" x2="7" y2="17"/>
                <path d="M5.5 17h3"/>
                <line x1="20" y1="7" x2="20" y2="12"/>
                <line x1="15" y1="5.5" x2="15" y2="3"/>
                <rect x="14" y="3" width="2" height="1.5" rx="0.5"/>
            </svg>
            @break

        @case('needle-thread')
        @case('needle')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" y1="5" x2="5" y2="19"/>
                <ellipse cx="18" cy="6" rx="1.5" ry="0.8" transform="rotate(-45 18 6)"/>
                <path d="M19 5c2-2 3.5-1 3.5 1s-1.5 2.5-3 2.5-3-1-4.5 0-2 2.5-3 4-2 2-4 2-3-1-4-2"/>
            </svg>
            @break

        @case('thread-spool')
        @case('spool')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 4h10v2H7zM7 18h10v2H7z"/>
                <path d="M8 6h8v12H8z"/>
                <line x1="8" y1="9" x2="16" y2="9"/>
                <line x1="8" y1="12" x2="16" y2="12"/>
                <line x1="8" y1="15" x2="16" y2="15"/>
                <path d="M16 17c2 1 3 3 3 4"/>
            </svg>
            @break

        @case('hanger')
        @case('coat-hanger')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 4a2 2 0 10-2 2c1.5 0 2 .5 2 2v2"/>
                <path d="M12 10L3.5 15.5A1.5 1.5 0 004.5 18h15a1.5 1.5 0 001-2.5L12 10z"/>
            </svg>
            @break

        @case('cotton-boll')
        @case('cotton')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22v-3"/>
                <path d="M9 19c0-3 3-4 3-4s3 1 3 4"/>
                <circle cx="8.5" cy="11.5" r="3.5"/>
                <circle cx="15.5" cy="11.5" r="3.5"/>
                <circle cx="12" cy="7.5" r="3.5"/>
                <circle cx="12" cy="13.5" r="3"/>
                <path d="M6 16c2-1 4-1 6 0s4 1 6 0"/>
            </svg>
            @break

        @case('measuring-tape')
        @case('tape-measure')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 17c3-8 9-12 15-8 4 3 4 8 0 11s-9 0-11-3-2-6 0-9"/>
                <line x1="6" y1="12" x2="7.5" y2="13"/>
                <line x1="9" y1="9" x2="10.5" y2="10"/>
                <line x1="12" y1="7.5" x2="13" y2="9"/>
                <line x1="15" y1="7" x2="15.5" y2="8.8"/>
                <line x1="18" y1="8" x2="17.8" y2="10"/>
            </svg>
            @break

        @case('fabric-roll')
        @case('bolt')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <ellipse cx="6" cy="9" rx="3" ry="5"/>
                <path d="M6 4h12c1.66 0 3 2.24 3 5s-1.34 5-3 5H6"/>
                <path d="M6 14v5c0 1 2 2 6 2h6c2 0 4-1 4-3v-5"/>
                <ellipse cx="6" cy="9" rx="1.5" ry="2.5"/>
            </svg>
            @break

        @case('weave')
        @case('fabric-grid')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="2"/>
                <line x1="8" y1="3" x2="8" y2="21"/>
                <line x1="12" y1="3" x2="12" y2="21"/>
                <line x1="16" y1="3" x2="16" y2="21"/>
                <line x1="3" y1="8" x2="21" y2="8"/>
                <line x1="3" y1="12" x2="21" y2="12"/>
                <line x1="3" y1="16" x2="21" y2="16"/>
            </svg>
            @break

        @case('button')
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="9"/>
                <circle cx="12" cy="12" r="6"/>
                <circle cx="9.5" cy="9.5" r="0.75" fill="currentColor"/>
                <circle cx="14.5" cy="9.5" r="0.75" fill="currentColor"/>
                <circle cx="9.5" cy="14.5" r="0.75" fill="currentColor"/>
                <circle cx="14.5" cy="14.5" r="0.75" fill="currentColor"/>
                <line x1="9.5" y1="9.5" x2="14.5" y2="14.5"/>
                <line x1="14.5" y1="9.5" x2="9.5" y2="14.5"/>
            </svg>
            @break

        @default
            <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $strokeWidth }}" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="6" cy="6" r="3"/>
                <circle cx="6" cy="18" r="3"/>
                <line x1="20" y1="4" x2="8.12" y2="15.88"/>
                <line x1="14.47" y1="14.48" x2="20" y2="20"/>
            </svg>
    @endswitch
</div>
