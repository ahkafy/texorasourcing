@props([
    'motif' => 'shears',
    'class' => 'absolute w-96 h-96 pointer-events-none select-none',
])

@php
    $motifMap = [
        'shears' => 'content_cut',
        'scissors' => 'content_cut',
        'mannequin' => 'design_services',
        'dress-form' => 'design_services',
        'sewing-machine' => 'precision_manufacturing',
        'needle-thread' => 'architecture',
        'needle' => 'architecture',
        'thread-spool' => 'palette',
        'spool' => 'palette',
        'hanger' => 'checkroom',
        'coat-hanger' => 'checkroom',
        'cotton-boll' => 'eco',
        'cotton' => 'eco',
        'measuring-tape' => 'straighten',
        'tape-measure' => 'straighten',
        'fabric-roll' => 'layers',
        'bolt' => 'layers',
        'weave' => 'texture',
        'fabric-grid' => 'texture',
        'button' => 'style',
    ];

    $symbol = $motifMap[$motif] ?? $motif;

    $fontSize = '280px';
    if (str_contains($class, 'w-44') || str_contains($class, 'w-48')) {
        $fontSize = '160px';
    } elseif (str_contains($class, 'w-64')) {
        $fontSize = '210px';
    } elseif (str_contains($class, 'w-72')) {
        $fontSize = '240px';
    } elseif (str_contains($class, 'w-80')) {
        $fontSize = '270px';
    } elseif (str_contains($class, 'w-[450px]') || str_contains($class, 'w-[460px]')) {
        $fontSize = '360px';
    } elseif (str_contains($class, 'w-[580px]')) {
        $fontSize = '420px';
    }
@endphp

<div {{ $attributes->merge(['class' => 'flex items-center justify-center ' . $class]) }} aria-hidden="true">
    <span class="material-symbols-outlined material-symbols-watermark leading-none" style="font-size: {{ $fontSize }};">{{ $symbol }}</span>
</div>
