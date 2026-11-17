@extends('layouts.public')

@section('title', 'Texora Sourcing Bangladesh | Premier Apparel Buying House & Sourcing Partner')
@section('meta_description', 'Texora Sourcing is a premier garment buying house in Dhaka, Bangladesh, delivering high-quality Knitwear, Woven, and Sweaters to global retailers across Canada, Brazil, USA, and Europe.')

@section('content')
<!-- Hero Section: Full-Width Background Image Slider -->
<section
    x-data="{
        slide: 0,
        slides: [
            {
                img: '{{ asset('images/luxury/atelier-showroom.jpg') }}',
                label: 'Dhaka Sourcing Atelier — Bespoke Apparel Solutions'
            },
            {
                img: '{{ asset('images/categories/knitwear.jpg') }}',
                label: 'Knitwear — T-Shirts, Polos & Hoodies'
            },
            {
                img: '{{ asset('images/categories/woven.jpg') }}',
                label: 'Woven — Shirts, Pants & Chinos'
            },
            {
                img: '{{ asset('images/categories/sweater.jpg') }}',
                label: 'Sweaters — Premium Knitwear'
            },
            {
                img: '{{ asset('images/categories/denim.jpg') }}',
                label: 'Denim — Jeans & Jackets'
            },
            {
                img: '{{ asset('images/categories/outerwear.jpg') }}',
                label: 'Outerwear — Jackets & Coats'
            }
        ],
        init() {
            setInterval(() => { this.slide = (this.slide + 1) % this.slides.length; }, 5000);
        }
    }"
    class="relative min-h-[82vh] lg:min-h-[88vh] flex items-center justify-center overflow-hidden bg-brand-navy text-white"
>
    <!-- Background Slides (Blade Pre-rendered with Alpine Transitions) -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        @php
            $heroSlides = [
                ['img' => asset('images/luxury/atelier-showroom.jpg'), 'label' => 'Dhaka Sourcing Atelier — Bespoke Apparel Solutions'],
                ['img' => asset('images/categories/knitwear.jpg'), 'label' => 'Knitwear — T-Shirts, Polos & Hoodies'],
                ['img' => asset('images/categories/woven.jpg'), 'label' => 'Woven — Shirts, Pants & Chinos'],
                ['img' => asset('images/categories/sweater.jpg'), 'label' => 'Sweaters — Premium Knitwear'],
                ['img' => asset('images/categories/denim.jpg'), 'label' => 'Denim — Jeans & Jackets'],
                ['img' => asset('images/categories/outerwear.jpg'), 'label' => 'Outerwear — Jackets & Coats'],
            ];
        @endphp
        @foreach ($heroSlides as $idx => $s)
            <div
                x-show="slide === {{ $idx }}"
                x-transition:enter="transition-opacity duration-1000 ease-in-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity duration-1000 ease-in-out"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0"
                @if ($idx > 0) style="display: none;" @endif
            >
                <img src="{{ $s['img'] }}" alt="{{ $s['label'] }}" class="w-full h-full object-cover object-center scale-105 transition-transform duration-[6000ms]" />
                <div class="absolute inset-0 bg-gradient-to-b from-brand-navy/75 via-brand-navy/55 to-brand-navy/85"></div>
            </div>
        @endforeach
    </div>

    <!-- Floating Atelier Fashion Watermarks -->
    <x-textile-watermark motif="mannequin" class="hidden lg:block absolute -left-12 top-1/4 w-80 h-80 text-white/[0.04] pointer-events-none select-none z-10" />
    <x-textile-watermark motif="shears" class="hidden lg:block absolute -right-12 top-1/3 w-80 h-80 text-brand-gold/[0.05] pointer-events-none select-none z-10" />
    <x-textile-watermark motif="measuring-tape" class="hidden md:block absolute left-1/3 -bottom-10 w-64 h-64 text-white/[0.03] pointer-events-none select-none z-10" />

    <!-- Prev / Next Arrow Controls -->
    <button
        @click="slide = (slide - 1 + slides.length) % slides.length"
        class="hidden sm:flex absolute left-3 md:left-6 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-black/30 hover:bg-brand-gold text-white hover:text-brand-navy backdrop-blur-md items-center justify-center transition-all duration-200 border border-white/20 shadow-xl"
        aria-label="Previous slide"
    >
        <span class="material-symbols-outlined" style="font-size: 22px;">chevron_left</span>
    </button>
    <button
        @click="slide = (slide + 1) % slides.length"
        class="hidden sm:flex absolute right-3 md:right-6 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-black/30 hover:bg-brand-gold text-white hover:text-brand-navy backdrop-blur-md items-center justify-center transition-all duration-200 border border-white/20 shadow-xl"
        aria-label="Next slide"
    >
        <span class="material-symbols-outlined" style="font-size: 22px;">chevron_right</span>
    </button>

    <!-- Dot Indicators -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex items-center gap-2">
        @foreach ($heroSlides as $idx => $s)
            <button
                @click="slide = {{ $idx }}"
                :class="slide === {{ $idx }} ? 'bg-gradient-to-r from-brand-gold to-amber-300 w-8 shadow-md' : 'bg-white/40 hover:bg-white/70 w-2.5'"
                class="h-2 rounded-full transition-all duration-300 {{ $idx === 0 ? 'bg-brand-gold w-8' : 'bg-white/40 w-2.5' }}"
                aria-label="Go to slide {{ $idx + 1 }}"
            ></button>
        @endforeach
    </div>

    <!-- Slide Label Badge -->
    <div class="absolute bottom-6 right-6 z-20 hidden md:block">
        <span
            x-text="slides[slide].label"
            class="text-[11px] font-semibold text-white/90 bg-black/40 backdrop-blur-md px-3.5 py-1.5 rounded-full border border-white/10 tracking-wider uppercase shadow-lg"
        ></span>
    </div>

    <!-- Hero Content (Centered & Mobile-Optimized) -->
    <div class="relative z-10 w-full max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 py-16 sm:py-20 lg:py-28">
        <div class="max-w-3xl mx-auto text-center space-y-6 sm:space-y-7">

            <!-- Luxury Gold Status Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-black/35 backdrop-blur-md border border-brand-gold/40 text-brand-gold text-[11px] sm:text-xs font-bold uppercase tracking-[0.2em] shadow-lg">
                <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                <span>Premier Apparel Buying House • Dhaka</span>
            </div>

            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white leading-tight tracking-tight drop-shadow-xl">
                Your Strategic
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-brand-gold to-amber-400">Apparel Sourcing</span>
                Partner in Bangladesh
            </h1>

            <p class="text-sm sm:text-base md:text-lg text-white/85 font-normal leading-relaxed max-w-2xl mx-auto drop-shadow">
                Texora Sourcing connects global retailers with world-class garment manufacturing. From concept and tech packs to lab testing, inline QC, and on-time international shipment.
            </p>

            <!-- Value Highlights (Responsive 1-col on phone, 2-col on sm+ with Bespoke Textile Icons) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3 text-xs sm:text-sm text-white/90 max-w-xl mx-auto text-left">
                <div class="flex items-center gap-2.5 bg-black/25 backdrop-blur-sm sm:bg-transparent px-3.5 py-2 sm:p-0 rounded-xl">
                    <span class="w-6 h-6 rounded-full bg-brand-gold/25 border border-brand-gold text-brand-gold flex items-center justify-center flex-shrink-0 shadow-sm">
                        <x-textile-icon name="shears" class="w-3.5 h-3.5" />
                    </span>
                    <span><strong class="text-white">Minimum Price</strong>, Maximum Quality</span>
                </div>
                <div class="flex items-center gap-2.5 bg-black/25 backdrop-blur-sm sm:bg-transparent px-3.5 py-2 sm:p-0 rounded-xl">
                    <span class="w-6 h-6 rounded-full bg-brand-gold/25 border border-brand-gold text-brand-gold flex items-center justify-center flex-shrink-0 shadow-sm">
                        <x-textile-icon name="magnifier-fabric" class="w-3.5 h-3.5" />
                    </span>
                    <span>12 In-House QC Controllers</span>
                </div>
                <div class="flex items-center gap-2.5 bg-black/25 backdrop-blur-sm sm:bg-transparent px-3.5 py-2 sm:p-0 rounded-xl">
                    <span class="w-6 h-6 rounded-full bg-brand-gold/25 border border-brand-gold text-brand-gold flex items-center justify-center flex-shrink-0 shadow-sm">
                        <x-textile-icon name="measuring-tape" class="w-3.5 h-3.5" />
                    </span>
                    <span>45 Days T/T · 60–90 Days L/C</span>
                </div>
                <div class="flex items-center gap-2.5 bg-black/25 backdrop-blur-sm sm:bg-transparent px-3.5 py-2 sm:p-0 rounded-xl">
                    <span class="w-6 h-6 rounded-full bg-brand-gold/25 border border-brand-gold text-brand-gold flex items-center justify-center flex-shrink-0 shadow-sm">
                        <x-textile-icon name="cotton-boll" class="w-3.5 h-3.5" />
                    </span>
                    <span>Accord, BSCI &amp; WRAP Certified</span>
                </div>
            </div>

            <!-- CTAs -->
            <div class="flex flex-wrap justify-center items-center gap-3 sm:gap-4 pt-2">
                <button @click="rfqModalOpen = true"
                        type="button"
                        class="w-full sm:w-auto px-7 py-3.5 rounded-xl bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 text-brand-navy font-bold uppercase tracking-wider text-xs shadow-xl hover:shadow-2xl transition-all transform hover:-translate-y-0.5 inline-flex items-center justify-center gap-2">
                    <x-textile-icon name="techpack" class="w-4 h-4" />
                    Request Sourcing Quote (RFQ)
                </button>

                <a href="{{ route('products') }}"
                   class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-white/15 hover:bg-white/25 text-white font-bold text-xs uppercase tracking-wider border border-white/40 backdrop-blur-md transition-all text-center inline-flex items-center justify-center gap-2">
                    <x-textile-icon name="hanger" class="w-4 h-4 text-brand-gold" />
                    <span>Browse Products &rarr;</span>
                </a>

                <a href="{{ asset('files/TEXORA_SOURCING_PROFILE.pdf') }}"
                   download="TEXORA_SOURCING_PROFILE.pdf"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 text-xs font-semibold text-brand-gold hover:text-amber-300 transition-colors underline underline-offset-4 py-2">
                    <x-textile-icon name="fabric-roll" class="w-4 h-4" />
                    Download Company Profile (PDF)
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Key Stats Counter Strip (Crisp White with Luxury Textile Metric Cards) -->
<section class="bg-white border-b border-slate-200/80 shadow-sm relative z-20">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 py-8">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6 text-center">
            <div class="p-4 rounded-lg bg-slate-50/80 border border-slate-100 hover:border-brand-gold/40 hover:bg-white hover:shadow-md transition-all duration-300 group">
                <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-navy mx-auto mb-2.5 flex items-center justify-center group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="sewing-machine" class="w-5 h-5" />
                </div>
                <div class="text-2xl sm:text-3xl font-serif font-bold text-brand-navy">2015</div>
                <div class="text-[11px] sm:text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Established in Dhaka</div>
            </div>
            <div class="p-4 rounded-lg bg-slate-50/80 border border-slate-100 hover:border-brand-gold/40 hover:bg-white hover:shadow-md transition-all duration-300 group">
                <div class="w-10 h-10 rounded-xl bg-brand-gold/10 text-brand-gold-dark mx-auto mb-2.5 flex items-center justify-center group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="mannequin" class="w-5 h-5" />
                </div>
                <div class="text-2xl sm:text-3xl font-serif font-bold text-brand-gold-dark">34</div>
                <div class="text-[11px] sm:text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">In-House Professionals</div>
            </div>
            <div class="p-4 rounded-lg bg-slate-50/80 border border-slate-100 hover:border-brand-gold/40 hover:bg-white hover:shadow-md transition-all duration-300 group">
                <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-navy mx-auto mb-2.5 flex items-center justify-center group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="magnifier-fabric" class="w-5 h-5" />
                </div>
                <div class="text-2xl sm:text-3xl font-serif font-bold text-brand-navy">12</div>
                <div class="text-[11px] sm:text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Quality Controllers (QC)</div>
            </div>
            <div class="p-4 rounded-lg bg-slate-50/80 border border-slate-100 hover:border-brand-gold/40 hover:bg-white hover:shadow-md transition-all duration-300 group">
                <div class="w-10 h-10 rounded-xl bg-brand-gold/10 text-brand-gold-dark mx-auto mb-2.5 flex items-center justify-center group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="techpack" class="w-5 h-5" />
                </div>
                <div class="text-2xl sm:text-3xl font-serif font-bold text-brand-gold-dark">6</div>
                <div class="text-[11px] sm:text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Merchandisers</div>
            </div>
            <div class="p-4 rounded-lg bg-slate-50/80 border border-slate-100 hover:border-brand-gold/40 hover:bg-white hover:shadow-md transition-all duration-300 group">
                <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-navy mx-auto mb-2.5 flex items-center justify-center group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="thread-spool" class="w-5 h-5" />
                </div>
                <div class="text-2xl sm:text-3xl font-serif font-bold text-brand-navy">45–90</div>
                <div class="text-[11px] sm:text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Days Delivery Cycles</div>
            </div>
            <div class="p-4 rounded-lg bg-slate-50/80 border border-slate-100 hover:border-brand-gold/40 hover:bg-white hover:shadow-md transition-all duration-300 group">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 mx-auto mb-2.5 flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <x-textile-icon name="cotton-boll" class="w-5 h-5" />
                </div>
                <div class="text-2xl sm:text-3xl font-serif font-bold text-emerald-600">100%</div>
                <div class="text-[11px] sm:text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Compliant Factories</div>
            </div>
        </div>
    </div>
</section>

<!-- Core Value Proposition: Minimum Price, Maximum Quality (Off-White Section with Watermarks) -->
<section class="py-20 sm:py-24 bg-slate-50 border-b border-slate-200/80 relative overflow-hidden">
    <!-- Background Watermark Icons: Craftsmanship Shears, Loom Weave, Mannequin & Bobbin -->
    <x-textile-watermark motif="shears" class="absolute -right-16 -bottom-16 w-96 h-96 text-brand-navy/[0.035] pointer-events-none select-none" />
    <x-textile-watermark motif="weave" class="absolute -left-12 -top-12 w-80 h-80 text-brand-gold/[0.04] pointer-events-none select-none" />
    <x-textile-watermark motif="mannequin" class="hidden md:block absolute right-1/4 -top-10 w-72 h-72 text-brand-gold/[0.03] pointer-events-none select-none" />
    <x-textile-watermark motif="thread-spool" class="hidden md:block absolute left-10 -bottom-10 w-72 h-72 text-brand-navy/[0.025] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold-dark">Our Business Policy</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Minimum Price, Maximum Quality
            </h2>
            <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mx-auto mt-3 rounded-full"></div>
            <p class="text-base text-slate-600 mt-3 leading-relaxed">
                Build long-term business relationships by offering the minimum price and providing maximum quality, serving as your dedicated, transparent buying partner in Bangladesh.
            </p>
        </div>

        <!-- 5 Buyer Benefits Grid (Slide 9 with Textile & Fashion Icons) -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
            
            <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="shears" class="w-6 h-6" />
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Sharper Company Focus</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Lower your internal overhead and operating costs while our Dhaka team manages factory floor follow-ups.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="sewing-machine" class="w-6 h-6" />
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">World-Class Capabilities</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Access automated stitching, laser cutting, eco-friendly laundry wash facilities, and skilled operators.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="cotton-boll" class="w-6 h-6" />
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Unmatched Resources</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Direct mill relationships for premium yarns, synthetic blends, sustainable fabrics, and custom trims.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="fabric-roll" class="w-6 h-6" />
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Multi-Country Sourcing</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Diversified range through strategic import of specialized fibers, nominated accessories, and labels.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <x-textile-icon name="measuring-tape" class="w-6 h-6" />
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Fast Trend Reaction</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Rapid sample turn-around and short lead-time replenishment to keep pace with changing retail demand.
                </p>
            </div>

        </div>

        <!-- Banner: End-to-End Statement (Luxury 2-Column Editorial Split Showcase) -->
        <div class="mt-14 bg-white rounded-lg overflow-hidden text-slate-800 border border-slate-200 shadow-lg grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-7 p-8 sm:p-12 flex flex-col justify-center space-y-4">
                <span class="inline-flex items-center gap-2 text-brand-gold-dark text-xs font-bold uppercase tracking-[0.2em]">
                    <span class="w-6 h-px bg-brand-gold"></span>
                    Introduction
                </span>
                <h3 class="text-2xl sm:text-3xl font-bold text-brand-navy tracking-tight">Your End-to-End Sourcing Partner</h3>
                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    "Digitization and automation are built into our processes for smarter decisions and faster response, while strong design sensibility and deep industry experience keep our products aligned with fast-changing consumer preferences."
                </p>
                <div class="flex flex-wrap items-center gap-2.5 pt-2">
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-slate-50 rounded-full text-xs font-semibold text-brand-navy border border-slate-200">
                        <x-textile-icon name="tshirt" class="w-3.5 h-3.5 text-brand-gold-dark" />
                        Apparel
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-slate-50 rounded-full text-xs font-semibold text-brand-navy border border-slate-200">
                        <x-textile-icon name="hanger" class="w-3.5 h-3.5 text-brand-gold-dark" />
                        Outerwear
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-slate-50 rounded-full text-xs font-semibold text-brand-navy border border-slate-200">
                        <x-textile-icon name="button" class="w-3.5 h-3.5 text-brand-gold-dark" />
                        Accessories
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-slate-50 rounded-full text-xs font-semibold text-brand-navy border border-slate-200">
                        <x-textile-icon name="weave" class="w-3.5 h-3.5 text-brand-gold-dark" />
                        Home Textiles
                    </span>
                </div>
            </div>
            <div class="lg:col-span-5 relative min-h-[280px] lg:min-h-full overflow-hidden group">
                <img src="{{ asset('images/luxury/atelier-showroom.jpg') }}"
                     alt="Texora Sourcing Luxury Dhaka Atelier Showroom"
                     class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-brand-navy/15 to-transparent flex items-end p-6">
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-lg px-4 py-3 text-white w-full">
                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gold block">Dhaka Buying Atelier</span>
                        <span class="text-xs font-medium text-white/95">Curated Showroom, Live Patternmaking & Mill Sourcing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Portfolio Section: What We Source (Crisp White Section with Watermarks) -->
<section class="py-20 sm:py-24 bg-white border-b border-slate-200/80 relative overflow-hidden">
    <!-- Background Watermark Icons: Garment Hanger, Textile Weave, Dress Form & Shears -->
    <x-textile-watermark motif="hanger" class="absolute -right-20 top-24 w-[460px] h-[460px] text-brand-gold/[0.035] pointer-events-none select-none" />
    <x-textile-watermark motif="weave" class="absolute -left-20 bottom-16 w-[400px] h-[400px] text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="shears" class="hidden md:block absolute -left-12 top-20 w-80 h-80 text-brand-gold/[0.03] pointer-events-none select-none" />
    <x-textile-watermark motif="mannequin" class="hidden md:block absolute right-10 -bottom-10 w-80 h-80 text-brand-navy/[0.025] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold-dark">Product Portfolio</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">What We Source</h2>
                <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mt-2.5 rounded-full"></div>
                <p class="text-sm text-slate-600 mt-2">Comprehensive garment categories engineered to international retail specifications.</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('products') }}" class="inline-flex items-center text-sm font-bold text-brand-navy hover:text-brand-gold-dark transition-colors group">
                    <span>View Full Product Lineup</span>
                    <span class="ml-1 transition-transform group-hover:translate-x-1">&rarr;</span>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Knitwear -->
            <div class="bg-white rounded-lg overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
                <div class="relative w-full h-56 sm:h-64 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/categories/knitwear.jpg') }}" 
                         alt="Knitwear Apparel Manufacturing Texora Sourcing" 
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-white/95 backdrop-blur-md rounded-full text-xs font-semibold text-brand-navy shadow-sm border border-slate-200">
                            Knit Division
                        </span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="text-2xl font-serif font-bold text-white tracking-wide">Knitwear</h3>
                        <p class="text-xs text-slate-200 mt-0.5">T-shirts, Sweatshirts, Polos & Casual Tops</p>
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                    <div class="space-y-2 text-xs text-slate-600">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Items:</span>
                            <span>Crewneck, Polo, Hoodie, Henley, Tanks</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Fabrics:</span>
                            <span>Single Jersey, Pique, Interlock, French Terry</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">GSM Range:</span>
                            <span>120 GSM to 380 GSM</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-slate-800">Washes:</span>
                            <span>Enzyme, Silicon, Bio-wash, Acid wash</span>
                        </div>
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Knitwear'" 
                            type="button" 
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm inline-flex items-center justify-center gap-1.5">
                        <x-textile-icon name="tshirt" class="w-4 h-4 text-brand-gold-dark" />
                        <span>Inquire Knitwear Sourcing &rarr;</span>
                    </button>
                </div>
            </div>

            <!-- Woven -->
            <div class="bg-white rounded-lg overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
                <div class="relative w-full h-56 sm:h-64 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/categories/woven.jpg') }}" 
                         alt="Woven Garments Shirts and Pants Texora Sourcing" 
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-white/95 backdrop-blur-md rounded-full text-xs font-semibold text-brand-navy shadow-sm border border-slate-200">
                            Woven Division
                        </span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="text-2xl font-serif font-bold text-white tracking-wide">Woven Garments</h3>
                        <p class="text-xs text-slate-200 mt-0.5">Formal Shirts, Oxford Tops & Tailored Pants</p>
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                    <div class="space-y-2 text-xs text-slate-600">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Items:</span>
                            <span>Chinos, Cargo Pants, Dress Shirts, Casual Oxford</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Fabrics:</span>
                            <span>Twill, Poplin, Oxford Weave, Cotton/Linen</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Stitching:</span>
                            <span>18–20 SPI Precision, Clean French Seams</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-slate-800">Finishes:</span>
                            <span>Wrinkle-free, Non-iron, Soft Enzyme Wash</span>
                        </div>
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Woven'" 
                            type="button" 
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm inline-flex items-center justify-center gap-1.5">
                        <x-textile-icon name="shirt" class="w-4 h-4 text-brand-gold-dark" />
                        <span>Inquire Woven Sourcing &rarr;</span>
                    </button>
                </div>
            </div>

            <!-- Sweater -->
            <div class="bg-white rounded-lg overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
                <div class="relative w-full h-56 sm:h-64 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/categories/sweater.jpg') }}" 
                         alt="Sweaters and Knitwear Pullovers Texora Sourcing" 
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-white/95 backdrop-blur-md rounded-full text-xs font-semibold text-brand-navy shadow-sm border border-slate-200">
                            Sweater Division
                        </span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="text-2xl font-serif font-bold text-white tracking-wide">Sweater & Cardigans</h3>
                        <p class="text-xs text-slate-200 mt-0.5">Vests, Pullovers, Cardigans & Cable Knits</p>
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                    <div class="space-y-2 text-xs text-slate-600">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Items:</span>
                            <span>Cardigans, Crewneck, V-neck, Turtleneck, Vests</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Gauges:</span>
                            <span>3GG, 5GG, 7GG, 12GG, 14GG (Computerized)</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Yarns:</span>
                            <span>100% Cotton, Acrylic, Cotton/Acrylic, Wool Blend</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-slate-800">Patterns:</span>
                            <span>Cable, Jacquard, Rib, Intarsia, Milano</span>
                        </div>
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Sweaters'" 
                            type="button" 
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm inline-flex items-center justify-center gap-1.5">
                        <x-textile-icon name="sweater" class="w-4 h-4 text-brand-gold-dark" />
                        <span>Inquire Sweater Sourcing &rarr;</span>
                    </button>
                </div>
            </div>

            <!-- Denim & Jeanswear -->
            <div class="bg-white rounded-lg overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
                <div class="relative w-full h-56 sm:h-64 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/categories/denim.jpg') }}" 
                         alt="Denim Jeanswear Apparel Texora Sourcing" 
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-white/95 backdrop-blur-md rounded-full text-xs font-semibold text-brand-navy shadow-sm border border-slate-200">
                            Denim Division
                        </span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="text-2xl font-serif font-bold text-white tracking-wide">Denim & Bottoms</h3>
                        <p class="text-xs text-slate-200 mt-0.5">5-Pocket Jeans, Denim Jackets & Shorts</p>
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                    <div class="space-y-2 text-xs text-slate-600">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Items:</span>
                            <span>Skinny, Slim, Straight, Relaxed, Wide-Leg</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Weights:</span>
                            <span>8.5 oz to 14.5 oz Cotton & Stretch Denim</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Eco-Wash Tech:</span>
                            <span>Laser Whiskers, Ozone Washing, Water Recycled</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-slate-800">Finishes:</span>
                            <span>Stone wash, Bleach, Whisker, PP spray, Tint</span>
                        </div>
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Denim'" 
                            type="button" 
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm inline-flex items-center justify-center gap-1.5">
                        <x-textile-icon name="denim-pocket" class="w-4 h-4 text-brand-gold-dark" />
                        <span>Inquire Denim Sourcing &rarr;</span>
                    </button>
                </div>
            </div>

            <!-- Outerwear & Jackets -->
            <div class="bg-white rounded-lg overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
                <div class="relative w-full h-56 sm:h-64 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/categories/outerwear.jpg') }}" 
                         alt="Outerwear Jackets Parkas Texora Sourcing" 
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-white/95 backdrop-blur-md rounded-full text-xs font-semibold text-brand-navy shadow-sm border border-slate-200">
                            Outerwear Division
                        </span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="text-2xl font-serif font-bold text-white tracking-wide">Outerwear & Jackets</h3>
                        <p class="text-xs text-slate-200 mt-0.5">Puffers, Parkas, Windbreakers & Bombers</p>
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                    <div class="space-y-2 text-xs text-slate-600">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Items:</span>
                            <span>Puffer Jackets, Windbreakers, Raincoats, Vests</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Shell Fabrics:</span>
                            <span>Nylon Ripstop, Poly Taslan, Softshell, Sherpa</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Insulation:</span>
                            <span>Recycled Polyfill, Faux Down, Thermal Fleece</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-slate-800">Performance:</span>
                            <span>DWR Water-Repellent, Windproof, Taped Seams</span>
                        </div>
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Outerwear'" 
                            type="button" 
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm inline-flex items-center justify-center gap-1.5">
                        <x-textile-icon name="jacket" class="w-4 h-4 text-brand-gold-dark" />
                        <span>Inquire Outerwear Sourcing &rarr;</span>
                    </button>
                </div>
            </div>

            <!-- Workwear & Uniforms -->
            <div class="bg-white rounded-lg overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
                <div class="relative w-full h-56 sm:h-64 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/categories/workwear.jpg') }}" 
                         alt="Workwear Uniforms Industrial Apparel Texora Sourcing" 
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-white/95 backdrop-blur-md rounded-full text-xs font-semibold text-brand-navy shadow-sm border border-slate-200">
                            Workwear Division
                        </span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="text-2xl font-serif font-bold text-white tracking-wide">Workwear & Uniforms</h3>
                        <p class="text-xs text-slate-200 mt-0.5">Industrial Overalls, Cargo Trousers & Safety</p>
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                    <div class="space-y-2 text-xs text-slate-600">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Items:</span>
                            <span>Heavy Cargo Pants, Overalls, Coveralls, Lab Coats</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Fabrics:</span>
                            <span>Poly/Cotton Heavy Twill (240–340 GSM), Canvas</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-1.5">
                            <span class="font-semibold text-slate-800">Compliance:</span>
                            <span>EN ISO 20471 Hi-Vis, 3M Scotchlite Reflective</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-slate-800">Reinforcement:</span>
                            <span>Triple Needle Stitching, Bar-tacked Pockets</span>
                        </div>
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Workwear'" 
                            type="button" 
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm inline-flex items-center justify-center gap-1.5">
                        <x-textile-icon name="sewing-machine" class="w-4 h-4 text-brand-gold-dark" />
                        <span>Inquire Workwear Sourcing &rarr;</span>
                    </button>
                </div>
            </div>

        </div>

        <!-- Collections Strip (Slide 7 footer) -->
        <div class="mt-10 bg-slate-50 rounded-lg p-6 text-slate-800 text-center sm:text-left flex flex-col sm:flex-row items-center justify-between gap-4 border border-slate-200">
            <div>
                <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark block">Versatile Range</span>
                <p class="text-lg font-serif font-bold text-brand-navy mt-0.5">
                    Workwear • Casualwear • Weekend • Seasonal Collections
                </p>
                <p class="text-xs text-slate-600 mt-1">Small to large quantity orders, with quality assurance and final inspection on behalf of the buyer.</p>
            </div>
            <button @click="rfqModalOpen = true" class="px-5 py-2.5 rounded-xl bg-brand-gold text-brand-navy font-bold uppercase tracking-wider text-xs whitespace-nowrap hover:bg-brand-gold-light transition-colors shadow">
                Request Tech Pack Review
            </button>
        </div>
    </div>
</section>

<!-- Sourcing Process: From Sample to Shipment (Off-White Section with Watermarks) -->
<section class="py-20 sm:py-24 bg-slate-50 border-b border-slate-200/80 relative overflow-hidden">
    <!-- Background Watermark Icons: Measuring Tape, Sewing Machine, Mannequin & Shears -->
    <x-textile-watermark motif="measuring-tape" class="absolute -right-16 top-10 w-96 h-96 text-brand-navy/[0.03] pointer-events-none select-none" />
    <x-textile-watermark motif="sewing-machine" class="absolute -left-12 -bottom-10 w-80 h-80 text-brand-gold/[0.04] pointer-events-none select-none" />
    <x-textile-watermark motif="mannequin" class="hidden md:block absolute -left-16 top-10 w-72 h-72 text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="shears" class="hidden md:block absolute right-10 -bottom-10 w-72 h-72 text-brand-gold/[0.035] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold-dark">Business Detail</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                From Sample to Shipment
            </h2>
            <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mx-auto mt-3 rounded-full"></div>
            <p class="text-sm text-slate-600 mt-2">
                A disciplined, milestone-driven sourcing workflow designed to protect your quality standards, delivery timeline, and commercial terms.
            </p>
        </div>

        <!-- 3 Primary Milestones (Slide 10 with Luxury Editorial Photography & Textile Icons) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            
            <div class="bg-white rounded-lg overflow-hidden border border-slate-200 shadow-sm relative group hover:border-brand-gold hover:shadow-xl transition-all duration-300 flex flex-col">
                <div class="relative h-52 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/luxury/modern-factory-floor.jpg') }}"
                         alt="Compliant Modern Garment Factory Floor"
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-brand-navy/20 to-transparent"></div>
                    <div class="absolute top-4 right-4 w-10 h-10 rounded-full bg-brand-navy/80 backdrop-blur-md border border-brand-gold/50 text-brand-gold font-bold text-sm flex items-center justify-center shadow-lg">
                        01
                    </div>
                    <div class="absolute bottom-4 left-6 flex items-center gap-2.5">
                        <div class="w-10 h-10 rounded-xl bg-brand-gold text-brand-navy flex items-center justify-center shadow-md">
                            <x-textile-icon name="sewing-machine" class="w-5 h-5" />
                        </div>
                        <span class="text-xs font-bold uppercase tracking-widest text-white drop-shadow">Factory Vetting</span>
                    </div>
                </div>
                <div class="p-7 flex-grow">
                    <h3 class="text-xl font-bold text-brand-navy mb-2.5">Supplier Credibility</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        We evaluate each factory's capacity and capability, plus environmental control, safety and labor practices, and confirm it can meet the buyer's schedule.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-lg overflow-hidden border border-slate-200 shadow-sm relative group hover:border-brand-gold hover:shadow-xl transition-all duration-300 flex flex-col">
                <div class="relative h-52 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/luxury/fabric-swatches-macro.jpg') }}"
                         alt="Luxury Combed Cotton, Cashmere & Twill Fabrics"
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-brand-navy/20 to-transparent"></div>
                    <div class="absolute top-4 right-4 w-10 h-10 rounded-full bg-brand-navy/80 backdrop-blur-md border border-brand-gold/50 text-brand-gold font-bold text-sm flex items-center justify-center shadow-lg">
                        02
                    </div>
                    <div class="absolute bottom-4 left-6 flex items-center gap-2.5">
                        <div class="w-10 h-10 rounded-xl bg-brand-gold text-brand-navy flex items-center justify-center shadow-md">
                            <x-textile-icon name="fabric-roll" class="w-5 h-5" />
                        </div>
                        <span class="text-xs font-bold uppercase tracking-widest text-white drop-shadow">Mill & Trim Control</span>
                    </div>
                </div>
                <div class="p-7 flex-grow">
                    <h3 class="text-xl font-bold text-brand-navy mb-2.5">Material Sourcing</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        On order placement we check and control yarn, fabric, accessories and labels, coordinate procurement timing, and let buyers choose accessories and labels.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-lg overflow-hidden border border-slate-200 shadow-sm relative group hover:border-brand-gold hover:shadow-xl transition-all duration-300 flex flex-col">
                <div class="relative h-52 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/luxury/tailoring-craft.jpg') }}"
                         alt="Bespoke Garment Pattern Drafting & Sampling"
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-brand-navy/20 to-transparent"></div>
                    <div class="absolute top-4 right-4 w-10 h-10 rounded-full bg-brand-navy/80 backdrop-blur-md border border-brand-gold/50 text-brand-gold font-bold text-sm flex items-center justify-center shadow-lg">
                        03
                    </div>
                    <div class="absolute bottom-4 left-6 flex items-center gap-2.5">
                        <div class="w-10 h-10 rounded-xl bg-brand-gold text-brand-navy flex items-center justify-center shadow-md">
                            <x-textile-icon name="hanger" class="w-5 h-5" />
                        </div>
                        <span class="text-xs font-bold uppercase tracking-widest text-white drop-shadow">Golden Sample Approval</span>
                    </div>
                </div>
                <div class="p-7 flex-grow">
                    <h3 class="text-xl font-bold text-brand-navy mb-2.5">Precision Sampling</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Samples follow the buyer's design, fabric, weight, shrinkage and color fastness, and are approved before production begins.
                    </p>
                </div>
            </div>

        </div>

        <!-- 4 Supporting Pillars (Clean Straight White Card with Textile Icons) -->
        <div class="bg-white rounded-lg p-6 sm:p-8 text-slate-800 border border-slate-200 shadow-sm grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="flex items-start space-x-3">
                <div class="w-7 h-7 rounded-full bg-brand-gold/20 text-brand-gold-dark flex-shrink-0 flex items-center justify-center font-bold text-xs mt-0.5">
                    <x-textile-icon name="mannequin" class="w-3.5 h-3.5" />
                </div>
                <div>
                    <h4 class="text-sm font-bold text-brand-navy">Sample Designs & Styling</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Rapid styling and counter-sample development on request.</p>
                </div>
            </div>
            <div class="flex items-start space-x-3">
                <div class="w-7 h-7 rounded-full bg-brand-gold/20 text-brand-gold-dark flex-shrink-0 flex items-center justify-center font-bold text-xs mt-0.5">
                    <x-textile-icon name="weave" class="w-3.5 h-3.5" />
                </div>
                <div>
                    <h4 class="text-sm font-bold text-brand-navy">Open to Developments</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Flexible handling of new enquiries, washes, and novel fabrics.</p>
                </div>
            </div>
            <div class="flex items-start space-x-3">
                <div class="w-7 h-7 rounded-full bg-brand-gold/20 text-brand-gold-dark flex-shrink-0 flex items-center justify-center font-bold text-xs mt-0.5">
                    <x-textile-icon name="measuring-tape" class="w-3.5 h-3.5" />
                </div>
                <div>
                    <h4 class="text-sm font-bold text-brand-navy">Strict Order Discipline</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Milestone management from L/C receipt to port container loading.</p>
                </div>
            </div>
            <div class="flex items-start space-x-3">
                <div class="w-7 h-7 rounded-full bg-brand-gold/20 text-brand-gold-dark flex-shrink-0 flex items-center justify-center font-bold text-xs mt-0.5">
                    <x-textile-icon name="needle-thread" class="w-3.5 h-3.5" />
                </div>
                <div>
                    <h4 class="text-sm font-bold text-brand-navy">Skilled Operators & QA</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Modern equipment backed by our 12 full-time QA controllers.</p>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('services') }}" class="text-sm font-bold text-brand-navy hover:text-brand-gold-dark transition-colors inline-flex items-center">
                Explore All 8 Sourcing Services & Buyer Visit Coordination &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Quality Assurance: Quality You Can Rely On (Crisp White Section with Watermarks) -->
<section class="py-20 sm:py-24 bg-white border-b border-slate-200/80 relative overflow-hidden">
    <!-- Background Watermark Icons: Fabric Roll, Shears, Mannequin & Needle -->
    <x-textile-watermark motif="fabric-roll" class="absolute -right-24 top-16 w-[450px] h-[450px] text-brand-gold/[0.035] pointer-events-none select-none" />
    <x-textile-watermark motif="shears" class="absolute -left-20 bottom-10 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="mannequin" class="hidden md:block absolute -left-12 top-20 w-80 h-80 text-brand-gold/[0.03] pointer-events-none select-none" />
    <x-textile-watermark motif="needle-thread" class="hidden md:block absolute right-16 -bottom-10 w-80 h-80 text-brand-navy/[0.025] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Editorial Luxury QA Lab Composition -->
            <div class="lg:col-span-5 relative space-y-4">
                <div class="relative rounded-lg overflow-hidden shadow-2xl border border-slate-200 group">
                    <img src="{{ asset('images/luxury/quality-lab-inspection.jpg') }}" 
                         alt="Quality Assurance Textile Laboratory Inspection Texora Sourcing" 
                         class="w-full h-[420px] sm:h-[460px] object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/90 via-brand-navy/20 to-transparent flex items-end p-6 sm:p-8">
                        <div class="text-white space-y-1">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-[0.2em] text-brand-gold">
                                <x-textile-icon name="magnifier-fabric" class="w-3.5 h-3.5" />
                                In-Line & Final Inspection
                            </span>
                            <h4 class="text-xl font-bold text-white">AQL 2.5 Workmanship Standards</h4>
                            <p class="text-xs text-slate-200 leading-relaxed">Daily in-line audits and full pre-shipment validation on behalf of international buyers.</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="relative rounded-lg overflow-hidden h-32 border border-slate-200 shadow-md group">
                        <img src="{{ asset('images/extracted/quality-sewing-inspection.jpg') }}"
                             alt="In-Line Sewing Floor Audit"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-transparent to-transparent flex items-end p-3">
                            <span class="text-[11px] font-semibold text-white">Sewing Line QC</span>
                        </div>
                    </div>
                    <div class="relative rounded-lg overflow-hidden h-32 border border-slate-200 shadow-md group">
                        <img src="{{ asset('images/luxury/tailoring-craft.jpg') }}"
                             alt="Precision Measurement & Pattern Check"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-transparent to-transparent flex items-end p-3">
                            <span class="text-[11px] font-semibold text-white">Spec Tolerance Check</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: 5 Quality Pillars (Slide 8 with Textile Icons) -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold-dark">Quality Assurance</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">Quality You Can Rely On</h2>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mt-2.5 rounded-full"></div>
                    <p class="text-sm text-slate-600 mt-2">
                        We safeguard your brand reputation through a 5-step quality verification cycle executed before any garment leaves the production line.
                    </p>
                </div>

                <div class="space-y-3.5">
                    <div class="flex items-start space-x-4 p-4 rounded-lg bg-slate-50 border border-slate-200 hover:border-brand-gold/60 transition-colors group">
                        <div class="w-9 h-9 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center flex-shrink-0 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                            <x-textile-icon name="techpack" class="w-4 h-4" />
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold px-2 py-0.5 bg-brand-navy/5 text-brand-navy rounded">Pillar 1</span>
                                <h4 class="text-sm font-bold text-brand-navy">Quality Policy</h4>
                            </div>
                            <p class="text-xs text-slate-600 mt-1">Maintained and shared with each buyer for optimum quality assurance as per their specific brand requirements.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-lg bg-slate-50 border border-slate-200 hover:border-brand-gold/60 transition-colors group">
                        <div class="w-9 h-9 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center flex-shrink-0 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                            <x-textile-icon name="magnifier-fabric" class="w-4 h-4" />
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold px-2 py-0.5 bg-brand-navy/5 text-brand-navy rounded">Pillar 2</span>
                                <h4 class="text-sm font-bold text-brand-navy">Dedicated Quality Team</h4>
                            </div>
                            <p class="text-xs text-slate-600 mt-1">A skilled team of 12 full-time quality assurance specialists, academically qualified in textile engineering with extensive hands-on experience.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-lg bg-slate-50 border border-slate-200 hover:border-brand-gold/60 transition-colors group">
                        <div class="w-9 h-9 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center flex-shrink-0 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                            <x-textile-icon name="sewing-machine" class="w-4 h-4" />
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold px-2 py-0.5 bg-brand-navy/5 text-brand-navy rounded">Pillar 3</span>
                                <h4 class="text-sm font-bold text-brand-navy">Quality Control Circles (QCC)</h4>
                            </div>
                            <p class="text-xs text-slate-600 mt-1">Adopted inside partner production facilities, dedicated to proactive troubleshooting and eliminating defects at root level.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-lg bg-slate-50 border border-slate-200 hover:border-brand-gold/60 transition-colors group">
                        <div class="w-9 h-9 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center flex-shrink-0 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                            <x-textile-icon name="measuring-tape" class="w-4 h-4" />
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold px-2 py-0.5 bg-brand-navy/5 text-brand-navy rounded">Pillar 4</span>
                                <h4 class="text-sm font-bold text-brand-navy">Checking & Maintenance</h4>
                            </div>
                            <p class="text-xs text-slate-600 mt-1">All goods checked before shipment, yarn lab-tested for count/strength, shrinkage controlled, with daily in-line and final AQL inspection.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-lg bg-slate-50 border border-slate-200 hover:border-brand-gold/60 transition-colors group">
                        <div class="w-9 h-9 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center flex-shrink-0 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                            <x-textile-icon name="hanger" class="w-4 h-4" />
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold px-2 py-0.5 bg-brand-navy/5 text-brand-navy rounded">Pillar 5</span>
                                <h4 class="text-sm font-bold text-brand-navy">In-House Inspection & Tech Pack Adherence</h4>
                            </div>
                            <p class="text-xs text-slate-600 mt-1">Full compliance with buyer tech packs, approved golden samples, color fastness ratings, and international workmanship standards in bulk production.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="{{ route('quality-compliance') }}" class="inline-flex items-center text-sm font-bold text-brand-navy hover:text-brand-gold-dark transition-colors">
                        Read Detailed Testing Protocols & Compliance Standards &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Clients & Certifications: Trusted by Global Retailers (Off-White Section with Watermarks) -->
<section class="py-20 sm:py-24 bg-slate-50 border-b border-slate-200/80 relative overflow-hidden">
    <!-- Background Watermark Icons: Cotton Boll, Garment Hanger, Textile Loom Weave & Shears -->
    <x-textile-watermark motif="cotton-boll" class="absolute -right-10 top-10 w-80 h-80 text-brand-gold/[0.04] pointer-events-none select-none" />
    <x-textile-watermark motif="hanger" class="absolute -left-10 bottom-10 w-80 h-80 text-brand-navy/[0.03] pointer-events-none select-none" />
    <x-textile-watermark motif="weave" class="absolute left-1/2 -translate-x-1/2 -bottom-20 w-[580px] h-[580px] text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="shears" class="hidden md:block absolute -left-12 top-10 w-72 h-72 text-brand-gold/[0.03] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold-dark">Clients & Certifications</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Trusted by Global Retailers
            </h2>
            <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mx-auto mt-3 rounded-full"></div>
            <p class="text-sm text-slate-600 mt-2">
                Our long-standing partnerships with top-tier Bangladeshi manufacturers combine expert craftsmanship, modern technology, and prestigious global certifications.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            <!-- Export Markets Box (Confidential Retail Footprint with Luxury Boutique Visual) -->
            <div class="lg:col-span-5 bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="relative h-44 overflow-hidden">
                        <img src="{{ asset('images/luxury/global-retail-boutique.jpg') }}"
                             alt="Global Retail Flagship Fashion Boutiques"
                             class="w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/90 via-brand-navy/40 to-transparent flex items-end p-6">
                            <div>
                                <span class="text-[11px] uppercase font-bold tracking-[0.2em] text-brand-gold block">Global Export Footprint</span>
                                <h3 class="text-xl font-bold text-white mt-0.5">Markets &amp; Retail Channels</h3>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 sm:p-8 space-y-3">
                        <p class="text-xs text-slate-500 pb-1">Delivering seasonal collections to major department stores, private-label brands, and fashion chains:</p>

                        <div class="flex items-center justify-between p-3.5 rounded-lg bg-slate-50 border border-slate-100 hover:border-brand-gold transition-colors">
                            <span class="font-bold text-sm text-brand-navy inline-flex items-center gap-2">
                                <x-textile-icon name="hanger" class="w-4 h-4 text-brand-gold-dark" />
                                Major Fashion Retailers
                            </span>
                            <span class="text-xs font-semibold px-3 py-1 bg-white rounded-md border text-slate-700">Canada &amp; USA</span>
                        </div>

                        <div class="flex items-center justify-between p-3.5 rounded-lg bg-slate-50 border border-slate-100 hover:border-brand-gold transition-colors">
                            <span class="font-bold text-sm text-brand-navy inline-flex items-center gap-2">
                                <x-textile-icon name="hanger" class="w-4 h-4 text-brand-gold-dark" />
                                Omnichannel &amp; Fast-Fashion
                            </span>
                            <span class="text-xs font-semibold px-3 py-1 bg-white rounded-md border text-slate-700">North America</span>
                        </div>

                        <div class="flex items-center justify-between p-3.5 rounded-lg bg-slate-50 border border-slate-100 hover:border-brand-gold transition-colors">
                            <span class="font-bold text-sm text-brand-navy inline-flex items-center gap-2">
                                <x-textile-icon name="hanger" class="w-4 h-4 text-brand-gold-dark" />
                                Womenswear &amp; Private Label
                            </span>
                            <span class="text-xs font-semibold px-3 py-1 bg-white rounded-md border text-slate-700">UK &amp; Europe</span>
                        </div>

                        <div class="flex items-center justify-between p-3.5 rounded-lg bg-slate-50 border border-slate-100 hover:border-brand-gold transition-colors">
                            <span class="font-bold text-sm text-brand-navy inline-flex items-center gap-2">
                                <x-textile-icon name="hanger" class="w-4 h-4 text-brand-gold-dark" />
                                Multi-Store Distribution
                            </span>
                            <span class="text-xs font-semibold px-3 py-1 bg-white rounded-md border text-slate-700">Brazil &amp; LATAM</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 sm:px-8 pb-6 text-xs text-slate-500 italic">
                    Client brand names are safeguarded under strict NDAs. Verified buyer references are available privately upon request.
                </div>
            </div>

            <!-- Certifications Box (Slide 11 right) -->
            <div class="lg:col-span-7 bg-white p-8 rounded-lg border border-slate-200 shadow-sm space-y-6 flex flex-col justify-between">
                <div class="space-y-6">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-xs uppercase font-bold tracking-wider text-brand-gold-dark">
                            <x-textile-icon name="cotton-boll" class="w-4 h-4 text-emerald-600" />
                            Compliance & Safety
                        </span>
                        <h3 class="text-xl font-bold text-brand-navy mt-1">Certified Partner Factories</h3>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                            We only allocate buyer orders to factories that have undergone thorough audits for structural integrity, electrical safety, fair labor practices, environmental emissions, and chemical restrictions.
                        </p>
                    </div>

                    <!-- Extracted Certifications Image from Slide 11 -->
                    <div class="p-4 bg-slate-50 rounded-lg border border-slate-200 flex items-center justify-center">
                        <img src="{{ asset('images/extracted/certifications-card-v2.png') }}" 
                             alt="Certified Partner Factories Logos: Accord, RSC, WRAP, Sedex, Higg Index, ISO, OEKO-TEX, GOTS" 
                             class="w-full max-h-36 object-contain">
                    </div>

                    <!-- Accreditation Badges -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-center text-[11px] font-semibold text-slate-700">
                        <div class="p-2.5 bg-slate-50 rounded-xl border border-slate-200/80">ACCORD / RSC</div>
                        <div class="p-2.5 bg-slate-50 rounded-xl border border-slate-200/80">WRAP Gold/Platinum</div>
                        <div class="p-2.5 bg-slate-50 rounded-xl border border-slate-200/80">Sedex SMETA 4-Pillar</div>
                        <div class="p-2.5 bg-slate-50 rounded-xl border border-slate-200/80">BSCI Audited</div>
                        <div class="p-2.5 bg-slate-50 rounded-xl border border-slate-200/80">OEKO-TEX Standard 100</div>
                        <div class="p-2.5 bg-slate-50 rounded-xl border border-slate-200/80">GOTS Organic</div>
                        <div class="p-2.5 bg-slate-50 rounded-xl border border-slate-200/80">GRS Recycled Standard</div>
                        <div class="p-2.5 bg-slate-50 rounded-xl border border-slate-200/80">Higg Index FEM/FSLM</div>
                    </div>
                </div>

                <!-- Factory Compliance Preview Strip -->
                <div class="relative rounded-lg overflow-hidden h-36 border border-slate-200 group">
                    <img src="{{ asset('images/luxury/modern-factory-floor.jpg') }}"
                         alt="Green Certified Compliant Factory Partners"
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-r from-brand-navy/85 via-brand-navy/50 to-transparent flex items-center p-6">
                        <div class="max-w-md text-white">
                            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gold block">100% Audited Network</span>
                            <p class="text-sm font-semibold text-white mt-0.5">Modern, sunlit, eco-compliant production units verified for global retail standards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Quote: Message from MD & CEO (Full-Bleed Atmospheric Luxury Midnight-Navy Section) -->
<section class="py-24 sm:py-28 bg-brand-navy text-white border-b border-brand-gold/30 relative overflow-hidden">
    <!-- Full-Bleed Architectural Background Image -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/luxury/executive-atelier-office.jpg') }}"
             alt="Texora Sourcing Executive Consultation Lounge"
             class="w-full h-full object-cover object-center opacity-25">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-navy via-brand-navy/90 to-brand-navy/75"></div>
    </div>

    <!-- Background Watermark: Shears, Mannequin & Needle Motifs -->
    <x-textile-watermark motif="shears" class="absolute right-6 -bottom-10 w-96 h-96 text-brand-gold/[0.06] pointer-events-none select-none z-0" />
    <x-textile-watermark motif="mannequin" class="hidden md:block absolute -left-12 -top-10 w-80 h-80 text-white/[0.03] pointer-events-none select-none z-0" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left: Stat & Bio -->
            <div class="lg:col-span-4 space-y-4">
                <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold">Executive Leadership</span>
                <div class="text-6xl sm:text-7xl font-bold text-white tracking-tight">19+</div>
                <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold via-amber-300 to-brand-gold rounded-full"></div>
                <div class="text-base text-slate-300 font-medium leading-relaxed">
                    years of hands-on experience in textiles and apparel manufacturing.
                </div>
                
                <div class="pt-4 border-t border-white/15">
                    <h3 class="text-xl font-bold text-white">Md. Ataul Hai</h3>
                    <div class="text-xs text-brand-gold uppercase tracking-wider font-semibold mt-0.5">Managing Director & CEO</div>
                    <div class="text-xs text-slate-400 mt-1">Texora Sourcing Bangladesh</div>
                </div>

                <div class="pt-2">
                    <a href="https://wa.me/8801711234725?text=Hello%20Mr.%20Md.%20Ataul%20Hai,%20I%20would%20like%20to%20discuss%20apparel%20sourcing." 
                       target="_blank"
                       class="inline-flex items-center text-xs text-emerald-400 hover:text-emerald-300 font-bold">
                        Direct WhatsApp with MD: +88 01711234725 &rarr;
                    </a>
                </div>
            </div>

            <!-- Right: Statement Card (Frosted Luxury Glass Card with Champagne Gold Border) -->
            <div class="lg:col-span-8 bg-white/10 backdrop-blur-xl rounded-lg p-8 sm:p-10 border border-brand-gold/40 shadow-2xl space-y-5">
                <blockquote class="text-lg sm:text-2xl font-semibold italic text-white leading-relaxed">
                    "My journey has been built on precision, partnership and a deep technical understanding of garment manufacturing."
                </blockquote>

                <p class="text-sm text-slate-200 leading-relaxed">
                    At Texora Sourcing, we bridge the gap between global buyers and local manufacturing excellence. Apparel sourcing is not merely transactional; it is built on collaborative partnerships, uncompromised quality, strict compliance and reliable execution.
                </p>

                <p class="text-sm text-slate-200 leading-relaxed">
                    Whether you are seeking high-quality knitwear, premium sweaters or comprehensive apparel solutions, we welcome you to partner with us and experience garment manufacturing delivered with integrity and excellence.
                </p>

                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 text-brand-navy font-bold text-xs uppercase tracking-wider hover:from-amber-300 hover:to-amber-400 transition-all shadow-lg">
                        <x-textile-icon name="mannequin" class="w-3.5 h-3.5 text-brand-navy" />
                        <span>Learn More About Our Team & Mission</span>
                    </a>
                    <a href="{{ route('contact') }}#visit" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-semibold text-xs border border-white/25 backdrop-blur-md transition-colors">
                        <x-textile-icon name="sewing-machine" class="w-3.5 h-3.5 text-brand-gold" />
                        <span>Plan a Factory Visit to Dhaka</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sourcing Lead-Time & Banking Due Diligence (Off-White Section with Watermarks) -->
<section class="py-20 sm:py-24 bg-slate-50 border-b border-slate-200/80 relative overflow-hidden">
    <!-- Background Watermark Icons: Measuring Tape, Fabric Roll & Thread Spool -->
    <x-textile-watermark motif="measuring-tape" class="absolute -right-12 top-6 w-80 h-80 text-brand-navy/[0.03] pointer-events-none select-none" />
    <x-textile-watermark motif="fabric-roll" class="absolute -left-12 -bottom-10 w-80 h-80 text-brand-gold/[0.035] pointer-events-none select-none" />
    <x-textile-watermark motif="thread-spool" class="hidden md:block absolute right-1/3 -bottom-10 w-64 h-64 text-brand-navy/[0.02] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold-dark">Commercial Confidence</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Transparent Lead Times & Banking Credentials
            </h2>
            <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mx-auto mt-3 rounded-full"></div>
            <p class="text-sm text-slate-600 mt-2">
                We know the value of time and keep our commitment. Full commercial terms designed for international trade security.
            </p>
        </div>

        <!-- Editorial Export Readiness Visual Strip -->
        <div class="mb-10 relative rounded-lg overflow-hidden shadow-xl border border-slate-200 h-56 sm:h-64 group">
            <img src="{{ asset('images/luxury/export-logistics-garments.jpg') }}"
                 alt="Export-Ready Garments on Brass Rolling Racks"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-navy/90 via-brand-navy/60 to-transparent flex items-center p-8 sm:p-12">
                <div class="max-w-lg text-white space-y-2">
                    <span class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-[0.2em] text-brand-gold">
                        <span class="w-5 h-px bg-brand-gold"></span>
                        Export Precision & Port Logistics
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">On-Time Container Dispatch Worldwide</h3>
                    <p class="text-xs sm:text-sm text-slate-200 leading-relaxed">
                        Pressed, poly-packed, needle-scanned, and dispatched directly from Chittagong Port or Dhaka Air Cargo with full FOB / CFR / CIF export compliance.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Lead Time Card 1 -->
            <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-sm flex flex-col justify-between group hover:border-brand-gold/60 transition-colors">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-navy mb-4 flex items-center justify-center group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                        <x-textile-icon name="fabric-roll" class="w-5 h-5" />
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Standard Mode</span>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy mt-1">Letter of Credit (L/C)</h3>
                    <div class="text-4xl font-serif font-bold text-brand-navy mt-4 mb-2">
                        60 – 90 <span class="text-base font-sans font-semibold text-slate-500">Days</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Production and export timeline calculated from the date of formal operative L/C receipt. Ideal for medium to large volume seasonal collections.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 text-xs text-slate-500">
                    Payment: Confirmed, Irrevocable L/C at Sight
                </div>
            </div>

            <!-- Lead Time Card 2 -->
            <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-sm hover:border-brand-gold/60 hover:shadow-md transition-all flex flex-col justify-between relative overflow-hidden group">
                <div class="relative z-10">
                    <div class="w-10 h-10 rounded-xl bg-brand-gold/15 text-brand-gold-dark mb-4 flex items-center justify-center group-hover:bg-brand-gold group-hover:text-brand-navy transition-colors">
                        <x-textile-icon name="measuring-tape" class="w-5 h-5" />
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Express Replenishment</span>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy mt-1">Telegraphic Transfer (T/T)</h3>
                    <div class="text-4xl font-serif font-bold text-brand-gold-dark mt-4 mb-2">
                        45 <span class="text-base font-sans font-semibold text-slate-600">Days</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Fast-track raw material procurement and sewing scheduling for urgent market rollouts, re-orders, and quick-turn capsule ranges.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 text-xs text-brand-gold-dark font-bold relative z-10">
                    Payment: Advance Deposit + Balance upon B/L Copy
                </div>
            </div>

            <!-- Due Diligence / Bank Details Card (Slide 5) -->
            <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-sm flex flex-col justify-between group hover:border-brand-gold/60 transition-colors">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-navy mb-4 flex items-center justify-center group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                        <x-textile-icon name="techpack" class="w-5 h-5" />
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Buyer Due Diligence</span>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy mt-1">Banking Information</h3>
                    
                    <div class="mt-4 space-y-2 text-xs text-slate-700">
                        <div class="flex justify-between border-b border-slate-100 pb-1">
                            <span class="text-slate-500">Bank Name:</span>
                            <span class="font-bold text-brand-navy">BRAC Bank PLC.</span>
                        </div>
                        <div class="flex justify-between border-b border-slate-100 pb-1">
                            <span class="text-slate-500">Branch:</span>
                            <span class="font-semibold text-slate-800">Uttara Sonargaon Janapath</span>
                        </div>
                        <div class="flex justify-between border-b border-slate-100 pb-1">
                            <span class="text-slate-500">SWIFT Code:</span>
                            <span class="font-mono font-bold text-brand-gold-dark">BRAKBDDH</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-500">Account No:</span>
                            <span class="font-mono font-bold text-slate-800">2075560740001</span>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-100 text-xs text-slate-500">
                    Company: <strong class="text-slate-800">Texora Sourcing Bangladesh</strong> (Est. 2015)
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Direct Sourcing Quote (RFQ) Section (Crisp White and Off-White Blend with Watermarks) -->
<section id="rfq" class="py-20 sm:py-24 bg-gradient-to-b from-white via-slate-50 to-white text-slate-800 relative overflow-hidden">
    <!-- Background Watermark: Mannequin, Sewing Machine, Shears & Thread -->
    <x-textile-watermark motif="mannequin" class="absolute -left-12 -bottom-12 w-96 h-96 text-brand-gold/[0.04] pointer-events-none select-none" />
    <x-textile-watermark motif="sewing-machine" class="absolute -right-16 top-12 w-80 h-80 text-brand-navy/[0.03] pointer-events-none select-none" />
    <x-textile-watermark motif="shears" class="hidden md:block absolute right-1/4 -bottom-10 w-72 h-72 text-brand-gold/[0.03] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5 space-y-6">
                <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold-dark">Fast Sourcing Consultation</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy">
                    Let's Build Your Next Collection Together
                </h2>
                <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 rounded-full"></div>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Submit your garment specifications, target unit pricing, or tech packs. Our merchandising and sampling team will analyze feasibility and revert within 24 hours.
                </p>

                <div class="space-y-4 pt-2 text-xs text-slate-700">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center font-bold flex-shrink-0">
                            <x-textile-icon name="thread-spool" class="w-4 h-4" />
                        </div>
                        <span>Fast price breakdown & costing sheets based on current yarn indices</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center font-bold flex-shrink-0">
                            <x-textile-icon name="mannequin" class="w-4 h-4" />
                        </div>
                        <span>Rapid prototype & counter-sample development with lab dip approvals</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center font-bold flex-shrink-0">
                            <x-textile-icon name="cotton-boll" class="w-4 h-4" />
                        </div>
                        <span>Full factory audit reports & compliance certification packages</span>
                    </div>
                </div>

                <!-- Luxury Consultation Lounge Photo -->
                <div class="pt-4">
                    <div class="relative rounded-lg overflow-hidden border border-slate-200 shadow-lg max-w-md group">
                        <img src="{{ asset('images/luxury/executive-atelier-office.jpg') }}" 
                             alt="Texora Sourcing Executive Consultation Lounge Dhaka" 
                             class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/85 via-brand-navy/15 to-transparent flex items-end p-5">
                            <div class="text-white">
                                <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gold block">Direct Merchandising Desk</span>
                                <span class="text-xs font-medium text-white/95">24-Hour Costing, Fabric Sourcing & Sample Feasibility</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RFQ Form Column -->
            <div class="lg:col-span-7">
                <div class="bg-white text-slate-800 rounded-lg p-8 sm:p-10 shadow-xl border border-slate-200">
                    <h3 class="text-2xl font-serif font-bold text-brand-navy">Request a Sourcing Quote</h3>
                    <p class="text-xs text-slate-500 mt-1 mb-6">Fill in your specifications below for a guaranteed response.</p>

                    <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="inquiry_type" value="rfq">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Your Name *</label>
                                <input type="text" name="name" required placeholder="e.g. Michael Chang" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Corporate Email *</label>
                                <input type="email" name="email" required placeholder="mchang@retailchain.com" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Brand / Company Name</label>
                                <input type="text" name="company_name" placeholder="e.g. Your Brand or Company Name" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Buyer Country</label>
                                <input type="text" name="country" placeholder="e.g. Canada, USA, UK, Brazil" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Category *</label>
                                <select name="product_category" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                                    <option value="Knitwear">Knitwear</option>
                                    <option value="Woven">Woven (Shirts, Pants, Denim)</option>
                                    <option value="Sweaters">Sweaters & Cardigans</option>
                                    <option value="Denim">Denim & Workwear</option>
                                    <option value="Accessories">Accessories & Home</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Target Quantity</label>
                                <select name="target_quantity" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                                    <option value="1,000 - 3,000 pcs">1,000 – 3,000 pcs</option>
                                    <option value="3,000 - 10,000 pcs">3,000 – 10,000 pcs</option>
                                    <option value="10,000 - 50,000 pcs">10,000 – 50,000 pcs</option>
                                    <option value="50,000+ pcs">50,000+ pcs</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Payment Term</label>
                                <select name="payment_terms" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                                    <option value="L/C">L/C at Sight</option>
                                    <option value="T/T">T/T Deposit</option>
                                    <option value="Negotiable">Negotiable</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Garment Specifications & Requirements *</label>
                            <textarea name="message" rows="4" required placeholder="Enter fabric composition (e.g. 100% combed cotton 180 GSM), sizes, target price, delivery month, and wash requirements..." 
                                      class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold"></textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="w-full py-4 rounded-xl bg-brand-gold hover:bg-brand-gold-light text-brand-navy font-bold uppercase tracking-wider text-sm shadow-md transition-all">
                                Submit Sourcing Inquiry (24hr Response)
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
