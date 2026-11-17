@props([
    'variant' => 'dark', // 'dark' (for white/light background), 'light' (for navy/dark background)
    'size' => 'md', // 'sm', 'md', 'lg', 'xl'
])

@php
    $heightClass = match($size) {
        'sm' => 'h-14 sm:h-16',
        'lg' => 'h-24 sm:h-28',
        'xl' => 'h-28 sm:h-32 md:h-36',
        default => 'h-20 sm:h-24 md:h-28 lg:h-32',
    };
@endphp

<div {{ $attributes->merge(['class' => 'inline-flex items-center justify-center flex-shrink-0 select-none']) }}>
    <img src="{{ asset('images/logo.png') }}" 
         alt="Texora Sourcing Bangladesh" 
         class="{{ $heightClass }} w-auto object-contain transition-transform duration-200 hover:scale-105 {{ $variant === 'light' ? 'drop-shadow-[0_2px_10px_rgba(209,159,48,0.25)]' : 'drop-shadow-sm' }}"
         loading="eager">
</div>
