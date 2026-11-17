@props([
    'variant' => 'dark', // 'dark' (for white/light background), 'light' (for navy/dark background)
    'size' => 'md', // 'sm', 'md', 'lg', 'xl'
])

@php
    $heightClass = match($size) {
        'sm' => 'h-10 sm:h-12',
        'lg' => 'h-16 sm:h-20',
        'xl' => 'h-20 sm:h-24',
        default => 'h-14 sm:h-16',
    };
@endphp

<div {{ $attributes->merge(['class' => 'inline-flex items-center justify-center flex-shrink-0 select-none']) }}>
    <img src="{{ asset('images/logo.png') }}" 
         alt="Texora Sourcing Bangladesh" 
         class="{{ $heightClass }} w-auto object-contain transition-transform duration-200 hover:scale-105 {{ $variant === 'light' ? 'drop-shadow-[0_2px_10px_rgba(209,159,48,0.25)]' : 'drop-shadow-sm' }}"
         loading="eager">
</div>
