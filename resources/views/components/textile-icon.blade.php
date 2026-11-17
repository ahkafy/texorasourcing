@props([
    'name',
    'class' => 'w-5 h-5',
])

@php
    $iconMap = [
        'shears' => 'content_cut',
        'scissors' => 'content_cut',
        'mannequin' => 'design_services',
        'dress-form' => 'design_services',
        'sewing-machine' => 'precision_manufacturing',
        'needle-thread' => 'architecture',
        'needle' => 'architecture',
        'thread-spool' => 'palette',
        'spool' => 'palette',
        'bobbin' => 'palette',
        'hanger' => 'checkroom',
        'coat-hanger' => 'checkroom',
        'measuring-tape' => 'straighten',
        'tape-measure' => 'straighten',
        'cotton-boll' => 'eco',
        'cotton' => 'eco',
        'fabric-roll' => 'layers',
        'bolt' => 'layers',
        'weave' => 'texture',
        'fabric-grid' => 'texture',
        'button' => 'style',
        'tshirt' => 'apparel',
        'knit' => 'apparel',
        'shirt' => 'dry_cleaning',
        'woven' => 'dry_cleaning',
        'sweater' => 'iron',
        'denim-pocket' => 'laundry',
        'denim' => 'laundry',
        'jacket' => 'work',
        'outerwear' => 'checkroom',
        'zipper' => 'linear_scale',
        'magnifier-fabric' => 'troubleshoot',
        'qc' => 'troubleshoot',
        'techpack' => 'assignment',
        'care-label' => 'sell',
    ];

    $symbol = $iconMap[$name] ?? $name;

    $fontSize = '20px';
    if (str_contains($class, 'w-3.5')) {
        $fontSize = '16px';
    } elseif (str_contains($class, 'w-4')) {
        $fontSize = '18px';
    } elseif (str_contains($class, 'w-5')) {
        $fontSize = '21px';
    } elseif (str_contains($class, 'w-6')) {
        $fontSize = '24px';
    } elseif (str_contains($class, 'w-7')) {
        $fontSize = '28px';
    } elseif (str_contains($class, 'w-8')) {
        $fontSize = '32px';
    }
@endphp

<span {{ $attributes->merge(['class' => 'material-symbols-outlined leading-none flex-shrink-0 ' . $class]) }}
      style="font-size: {{ $fontSize }};"
      aria-hidden="true">{{ $symbol }}</span>
