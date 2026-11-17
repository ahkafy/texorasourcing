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
    class="relative min-h-[85vh] flex items-center overflow-hidden"
>
    <!-- Background Slides -->
    <template x-for="(s, i) in slides" :key="i">
        <div
            x-show="slide === i"
            x-transition:enter="transition-opacity duration-1000 ease-in-out"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-1000 ease-in-out"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0"
            style="display: none;"
        >
            <img :src="s.img" :alt="s.label" class="w-full h-full object-cover object-center" />
            <!-- Dark overlay for readability -->
            <div class="absolute inset-0 bg-brand-navy/60"></div>
        </div>
    </template>

    <!-- Prev / Next Arrow Controls -->
    <button
        @click="slide = (slide - 1 + slides.length) % slides.length"
        class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 backdrop-blur-sm text-white flex items-center justify-center transition-all border border-white/30"
        aria-label="Previous slide"
    >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>
    <button
        @click="slide = (slide + 1) % slides.length"
        class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white/20 hover:bg-white/40 backdrop-blur-sm text-white flex items-center justify-center transition-all border border-white/30"
        aria-label="Next slide"
    >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>

    <!-- Dot Indicators -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex items-center gap-2">
        <template x-for="(s, i) in slides" :key="i">
            <button
                @click="slide = i"
                :class="slide === i ? 'bg-brand-gold w-6' : 'bg-white/50 w-2'"
                class="h-2 rounded-full transition-all duration-300"
                :aria-label="'Go to slide ' + (i + 1)"
            ></button>
        </template>
    </div>

    <!-- Slide Label Badge -->
    <div class="absolute bottom-6 right-6 z-20 hidden md:block">
        <span
            x-text="slides[slide].label"
            class="text-[11px] font-semibold text-white/80 bg-black/30 backdrop-blur-sm px-3 py-1.5 rounded-full tracking-wide"
        ></span>
    </div>

    <!-- Hero Content (overlaid, centered) -->
    <div class="relative z-10 w-full max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 py-20 lg:py-28">
        <div class="max-w-3xl mx-auto text-center space-y-7">

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-serif font-bold text-white leading-tight tracking-tight drop-shadow-lg">
                Your Strategic
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold to-amber-300">Apparel Sourcing</span>
                Partner in Bangladesh
            </h1>

            <p class="text-base sm:text-lg text-white/80 font-normal leading-relaxed drop-shadow">
                Texora Sourcing connects global retailers with world-class garment manufacturing. From concept and tech packs to lab testing, inline QC, and on-time international shipment.
            </p>

            <!-- Value Highlights -->
            <div class="grid grid-cols-2 gap-3 text-sm text-white/90 max-w-xl mx-auto">
                <div class="flex items-center gap-2">
                    <span class="w-5 h-5 rounded-full bg-brand-gold/30 border border-brand-gold text-brand-gold flex items-center justify-center text-xs font-bold flex-shrink-0">✓</span>
                    <span><strong class="text-white">Minimum Price</strong>, Maximum Quality</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-5 h-5 rounded-full bg-brand-gold/30 border border-brand-gold text-brand-gold flex items-center justify-center text-xs font-bold flex-shrink-0">✓</span>
                    <span>12 In-House QC Controllers</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-5 h-5 rounded-full bg-brand-gold/30 border border-brand-gold text-brand-gold flex items-center justify-center text-xs font-bold flex-shrink-0">✓</span>
                    <span>45 Days T/T · 60–90 Days L/C</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-5 h-5 rounded-full bg-brand-gold/30 border border-brand-gold text-brand-gold flex items-center justify-center text-xs font-bold flex-shrink-0">✓</span>
                    <span>Accord, BSCI &amp; WRAP Certified</span>
                </div>
            </div>

            <!-- CTAs -->
            <div class="flex flex-wrap justify-center items-center gap-4 pt-2">
                <button @click="rfqModalOpen = true"
                        type="button"
                        class="px-7 py-3.5 rounded-xl bg-brand-gold hover:bg-amber-400 text-brand-navy font-bold uppercase tracking-wider text-xs shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-0.5 inline-flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Request Sourcing Quote (RFQ)
                </button>

                <a href="{{ route('products') }}"
                   class="px-6 py-3.5 rounded-xl bg-white/15 hover:bg-white/25 text-white font-bold text-xs uppercase tracking-wider border border-white/40 backdrop-blur-sm transition-all">
                    Browse Products &rarr;
                </a>

                <a href="{{ asset('files/TEXORA_SOURCING_PROFILE.pdf') }}"
                   download="TEXORA_SOURCING_PROFILE.pdf"
                   class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand-gold hover:text-amber-300 transition-colors underline underline-offset-4">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17v3a2 2 0 002 2h14a2 2 0 002-2v-3"/>
                    </svg>
                    Download Company Profile (PDF)
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Key Stats Counter Strip (Crisp White) -->
<section class="bg-white border-b border-slate-200 shadow-sm relative z-20">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 py-8">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 text-center divide-y md:divide-y-0 md:divide-x divide-slate-100">
            <div class="pt-2 md:pt-0">
                <div class="text-3xl font-serif font-bold text-brand-navy">2015</div>
                <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Established in Dhaka</div>
            </div>
            <div class="pt-2 md:pt-0">
                <div class="text-3xl font-serif font-bold text-brand-gold-dark">34</div>
                <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">In-House Professionals</div>
            </div>
            <div class="pt-2 md:pt-0">
                <div class="text-3xl font-serif font-bold text-brand-navy">12</div>
                <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Quality Controllers (QC)</div>
            </div>
            <div class="pt-2 md:pt-0">
                <div class="text-3xl font-serif font-bold text-brand-gold-dark">6</div>
                <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Merchandisers</div>
            </div>
            <div class="pt-2 md:pt-0">
                <div class="text-3xl font-serif font-bold text-brand-navy">45–90</div>
                <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Days Delivery Cycles</div>
            </div>
            <div class="pt-2 md:pt-0">
                <div class="text-3xl font-serif font-bold text-emerald-600">100%</div>
                <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Compliant Factories</div>
            </div>
        </div>
    </div>
</section>

<!-- Core Value Proposition: Minimum Price, Maximum Quality (Off-White Section) -->
<section class="py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Our Business Policy</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Minimum Price, Maximum Quality
            </h2>
            <p class="text-base text-slate-600 mt-3 leading-relaxed">
                Build long-term business relationships by offering the minimum price and providing maximum quality, serving as your dedicated, transparent buying partner in Bangladesh.
            </p>
        </div>

        <!-- 5 Buyer Benefits Grid (Slide 9) -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
            
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Sharper Company Focus</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Lower your internal overhead and operating costs while our Dhaka team manages factory floor follow-ups.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">World-Class Capabilities</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Access automated stitching, laser cutting, eco-friendly laundry wash facilities, and skilled operators.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Unmatched Resources</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Direct mill relationships for premium yarns, synthetic blends, sustainable fabrics, and custom trims.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Multi-Country Sourcing</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Diversified range through strategic import of specialized fibers, nominated accessories, and labels.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
                <div class="w-12 h-12 rounded-xl bg-brand-gold/10 text-brand-gold-dark flex items-center justify-center font-bold text-lg mb-4 group-hover:bg-brand-navy group-hover:text-brand-gold transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Fast Trend Reaction</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Rapid sample turn-around and short lead-time replenishment to keep pace with changing retail demand.
                </p>
            </div>

        </div>

        <!-- Banner: End-to-End Statement (Refined Ivory/White Card) -->
        <div class="mt-12 bg-white rounded-3xl p-8 sm:p-10 text-slate-800 border-2 border-brand-gold/30 shadow-lg relative overflow-hidden">
            <div class="absolute right-0 top-0 bottom-0 w-1/3 opacity-15 pointer-events-none">
                <img src="{{ asset('images/extracted/knitwear-fabrics.jpg') }}" class="w-full h-full object-cover" alt="Fabrics">
            </div>
            <div class="relative z-10 max-w-2xl space-y-2">
                <span class="text-brand-gold-dark text-xs font-bold uppercase tracking-widest">Introduction</span>
                <h3 class="text-2xl font-serif font-bold text-brand-navy">Your End-to-End Sourcing Partner</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    "Digitization and automation are built into our processes for smarter decisions and faster response, while strong design sensibility and deep industry experience keep our products aligned with fast-changing consumer preferences."
                </p>
                <div class="flex flex-wrap items-center gap-2 pt-3">
                    <span class="px-3.5 py-1 bg-slate-100 rounded-full text-xs font-semibold text-brand-navy border border-slate-200">Apparel</span>
                    <span class="px-3.5 py-1 bg-slate-100 rounded-full text-xs font-semibold text-brand-navy border border-slate-200">Footwear</span>
                    <span class="px-3.5 py-1 bg-slate-100 rounded-full text-xs font-semibold text-brand-navy border border-slate-200">Accessories</span>
                    <span class="px-3.5 py-1 bg-slate-100 rounded-full text-xs font-semibold text-brand-navy border border-slate-200">Home Textiles</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Portfolio Section: What We Source (Crisp White Section) -->
<section class="py-20 bg-white border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Product Portfolio</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">What We Source</h2>
                <p class="text-sm text-slate-600 mt-2">Comprehensive garment categories engineered to international retail specifications.</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('products') }}" class="inline-flex items-center text-sm font-bold text-brand-navy hover:text-brand-gold-dark transition-colors">
                    View Full Product Lineup &rarr;
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Knitwear -->
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
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
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm">
                        Inquire Knitwear Sourcing &rarr;
                    </button>
                </div>
            </div>

            <!-- Woven -->
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
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
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm">
                        Inquire Woven Sourcing &rarr;
                    </button>
                </div>
            </div>

            <!-- Sweater -->
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
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
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm">
                        Inquire Sweater Sourcing &rarr;
                    </button>
                </div>
            </div>

            <!-- Denim & Jeanswear -->
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
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
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm">
                        Inquire Denim Sourcing &rarr;
                    </button>
                </div>
            </div>

            <!-- Outerwear & Jackets -->
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
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
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm">
                        Inquire Outerwear Sourcing &rarr;
                    </button>
                </div>
            </div>

            <!-- Workwear & Uniforms -->
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 hover:border-brand-gold/60 transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col group">
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
                            class="w-full py-2.5 px-4 rounded-xl text-xs uppercase font-bold tracking-wider text-brand-navy bg-slate-100 hover:bg-brand-navy hover:text-white transition-colors text-center shadow-sm">
                        Inquire Workwear Sourcing &rarr;
                    </button>
                </div>
            </div>

        </div>

        <!-- Collections Strip (Slide 7 footer) -->
        <div class="mt-10 bg-slate-50 rounded-3xl p-6 text-slate-800 text-center sm:text-left flex flex-col sm:flex-row items-center justify-between gap-4 border border-slate-200">
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

<!-- Sourcing Process: From Sample to Shipment (Off-White Section) -->
<section class="py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Business Detail</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                From Sample to Shipment
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                A disciplined, milestone-driven sourcing workflow designed to protect your quality standards, delivery timeline, and commercial terms.
            </p>
        </div>

        <!-- 3 Primary Milestones (Slide 10) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm relative overflow-hidden group hover:border-brand-gold transition-colors">
                <span class="text-5xl font-serif font-bold text-brand-gold/15 absolute top-4 right-6 group-hover:text-brand-gold/30 transition-colors">01</span>
                <div class="w-12 h-12 rounded-2xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-brand-navy mb-3">Supplier Credibility</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    We evaluate each factory's capacity and capability, plus environmental control, safety and labor practices, and confirm it can meet the buyer's schedule.
                </p>
            </div>

            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm relative overflow-hidden group hover:border-brand-gold transition-colors">
                <span class="text-5xl font-serif font-bold text-brand-gold/15 absolute top-4 right-6 group-hover:text-brand-gold/30 transition-colors">02</span>
                <div class="w-12 h-12 rounded-2xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-brand-navy mb-3">Sourcing</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    On order placement we check and control yarn, fabric, accessories and labels, coordinate procurement timing, and let buyers choose accessories and labels.
                </p>
            </div>

            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm relative overflow-hidden group hover:border-brand-gold transition-colors">
                <span class="text-5xl font-serif font-bold text-brand-gold/15 absolute top-4 right-6 group-hover:text-brand-gold/30 transition-colors">03</span>
                <div class="w-12 h-12 rounded-2xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </div>
                <h3 class="text-xl font-serif font-bold text-brand-navy mb-3">Sampling</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Samples follow the buyer's design, fabric, weight, shrinkage and color fastness, and are approved before production begins.
                </p>
            </div>

        </div>

        <!-- 4 Supporting Pillars (White Card with Subtle Gold Border) -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 text-slate-800 border-2 border-brand-gold/30 shadow-md grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="flex items-start space-x-3">
                <div class="w-6 h-6 rounded-full bg-brand-gold/20 text-brand-gold-dark flex-shrink-0 flex items-center justify-center font-bold text-xs mt-0.5">✓</div>
                <div>
                    <h4 class="text-sm font-bold text-brand-navy">Sample Designs & Styling</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Rapid styling and counter-sample development on request.</p>
                </div>
            </div>
            <div class="flex items-start space-x-3">
                <div class="w-6 h-6 rounded-full bg-brand-gold/20 text-brand-gold-dark flex-shrink-0 flex items-center justify-center font-bold text-xs mt-0.5">✓</div>
                <div>
                    <h4 class="text-sm font-bold text-brand-navy">Open to Developments</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Flexible handling of new enquiries, washes, and novel fabrics.</p>
                </div>
            </div>
            <div class="flex items-start space-x-3">
                <div class="w-6 h-6 rounded-full bg-brand-gold/20 text-brand-gold-dark flex-shrink-0 flex items-center justify-center font-bold text-xs mt-0.5">✓</div>
                <div>
                    <h4 class="text-sm font-bold text-brand-navy">Strict Order Discipline</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Milestone management from L/C receipt to port container loading.</p>
                </div>
            </div>
            <div class="flex items-start space-x-3">
                <div class="w-6 h-6 rounded-full bg-brand-gold/20 text-brand-gold-dark flex-shrink-0 flex items-center justify-center font-bold text-xs mt-0.5">✓</div>
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

<!-- Quality Assurance: Quality You Can Rely On (Crisp White Section) -->
<section class="py-20 bg-white border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Sewing Machine Inspection Photo -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-xl border border-slate-200">
                    <img src="{{ asset('images/extracted/quality-sewing-inspection.jpg') }}" 
                         alt="Quality Assurance Sewing Inspection Texora Sourcing" 
                         class="w-full h-96 object-cover object-center">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent flex items-end p-6">
                        <div class="text-white">
                            <span class="text-xs font-bold uppercase tracking-wider text-brand-gold">In-Line & Final Inspection</span>
                            <h4 class="text-lg font-serif font-bold text-white">AQL 2.5 Workmanship Standards</h4>
                            <p class="text-xs text-slate-200 mt-1">Daily in-line audits and full pre-shipment validation on behalf of foreign buyers.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: 5 Quality Pillars (Slide 8) -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Quality Assurance</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">Quality You Can Rely On</h2>
                    <p class="text-sm text-slate-600 mt-2">
                        We safeguard your brand reputation through a 5-step quality verification cycle executed before any garment leaves the production line.
                    </p>
                </div>

                <div class="space-y-3.5">
                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <span class="w-8 h-8 rounded-xl bg-brand-navy/5 text-brand-gold-dark font-bold text-sm flex items-center justify-center flex-shrink-0">1</span>
                        <div>
                            <h4 class="text-sm font-bold text-brand-navy">Quality Policy</h4>
                            <p class="text-xs text-slate-600 mt-0.5">Maintained and shared with each buyer for optimum quality assurance as per their specific brand requirements.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <span class="w-8 h-8 rounded-xl bg-brand-navy/5 text-brand-gold-dark font-bold text-sm flex items-center justify-center flex-shrink-0">2</span>
                        <div>
                            <h4 class="text-sm font-bold text-brand-navy">Dedicated Quality Team</h4>
                            <p class="text-xs text-slate-600 mt-0.5">A skilled team of 12 full-time quality assurance specialists, academically qualified in textile engineering with extensive hands-on experience.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <span class="w-8 h-8 rounded-xl bg-brand-navy/5 text-brand-gold-dark font-bold text-sm flex items-center justify-center flex-shrink-0">3</span>
                        <div>
                            <h4 class="text-sm font-bold text-brand-navy">Quality Control Circles (QCC)</h4>
                            <p class="text-xs text-slate-600 mt-0.5">Adopted inside partner production facilities, dedicated to proactive troubleshooting and eliminating defects at root level.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <span class="w-8 h-8 rounded-xl bg-brand-navy/5 text-brand-gold-dark font-bold text-sm flex items-center justify-center flex-shrink-0">4</span>
                        <div>
                            <h4 class="text-sm font-bold text-brand-navy">Checking & Maintenance</h4>
                            <p class="text-xs text-slate-600 mt-0.5">All goods checked before shipment, yarn lab-tested for count/strength, shrinkage controlled, with daily in-line and final AQL inspection.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <span class="w-8 h-8 rounded-xl bg-brand-navy/5 text-brand-gold-dark font-bold text-sm flex items-center justify-center flex-shrink-0">5</span>
                        <div>
                            <h4 class="text-sm font-bold text-brand-navy">In-House Inspection & Tech Pack Adherence</h4>
                            <p class="text-xs text-slate-600 mt-0.5">Full compliance with buyer tech packs, approved golden samples, color fastness ratings, and international workmanship standards in bulk production.</p>
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

<!-- Clients & Certifications: Trusted by Global Retailers (Off-White Section) -->
<section class="py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Clients & Certifications</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Trusted by Global Retailers
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                Our long-standing partnerships with top-tier Bangladeshi manufacturers combine expert craftsmanship, modern technology, and prestigious global certifications.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <!-- Buyers Box (Slide 11 left) -->
            <div class="lg:col-span-5 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <div class="border-b border-slate-100 pb-4">
                    <span class="text-xs uppercase font-bold tracking-wider text-brand-gold-dark">Direct Experience</span>
                    <h3 class="text-xl font-serif font-bold text-brand-navy mt-1">Current Retail Buyers</h3>
                    <p class="text-xs text-slate-500 mt-1">Delivering seasonal collections to major department stores and fashion chains:</p>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-gold transition-colors">
                        <span class="font-bold text-base text-brand-navy">YM INC</span>
                        <span class="text-xs font-semibold px-3 py-1 bg-white rounded-md border text-slate-700">🇨🇦 Canada</span>
                    </div>

                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-gold transition-colors">
                        <span class="font-bold text-base text-brand-navy">ARDENE</span>
                        <span class="text-xs font-semibold px-3 py-1 bg-white rounded-md border text-slate-700">🇨🇦 Canada</span>
                    </div>

                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-gold transition-colors">
                        <span class="font-bold text-base text-brand-navy">SUZY SHIER</span>
                        <span class="text-xs font-semibold px-3 py-1 bg-white rounded-md border text-slate-700">🇨🇦 Canada</span>
                    </div>

                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-gold transition-colors">
                        <span class="font-bold text-base text-brand-navy">SUN ASIA</span>
                        <span class="text-xs font-semibold px-3 py-1 bg-white rounded-md border text-slate-700">🇧🇷 Brazil</span>
                    </div>
                </div>

                <div class="pt-2 text-xs text-slate-500 italic">
                    Also fulfilling volume inquiries for private label fashion brands across the United States, UK, and European Union.
                </div>
            </div>

            <!-- Certifications Box (Slide 11 right) -->
            <div class="lg:col-span-7 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
                <div>
                    <span class="text-xs uppercase font-bold tracking-wider text-brand-gold-dark">Compliance & Safety</span>
                    <h3 class="text-xl font-serif font-bold text-brand-navy mt-1">Certified Partner Factories</h3>
                    <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                        We only allocate buyer orders to factories that have undergone thorough audits for structural integrity, electrical safety, fair labor practices, environmental emissions, and chemical restrictions.
                    </p>
                </div>

                <!-- Extracted Certifications Image from Slide 11 -->
                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 flex items-center justify-center">
                    <img src="{{ asset('images/extracted/certifications-card-v2.png') }}" 
                         alt="Certified Partner Factories Logos: Accord, RSC, WRAP, Sedex, Higg Index, ISO, OEKO-TEX, GOTS" 
                         class="w-full max-h-36 object-contain">
                </div>

                <!-- Accreditation Badges -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-center text-[11px] font-semibold text-slate-700">
                    <div class="p-2 bg-slate-50 rounded-lg border">ACCORD / RSC</div>
                    <div class="p-2 bg-slate-50 rounded-lg border">WRAP Gold/Platinum</div>
                    <div class="p-2 bg-slate-50 rounded-lg border">Sedex SMETA 4-Pillar</div>
                    <div class="p-2 bg-slate-50 rounded-lg border">BSCI Audited</div>
                    <div class="p-2 bg-slate-50 rounded-lg border">OEKO-TEX Standard 100</div>
                    <div class="p-2 bg-slate-50 rounded-lg border">GOTS Organic</div>
                    <div class="p-2 bg-slate-50 rounded-lg border">GRS Recycled Standard</div>
                    <div class="p-2 bg-slate-50 rounded-lg border">Higg Index FEM/FSLM</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Quote: Message from MD & CEO (Luminous Off-White & Ivory Section) -->
<section class="py-20 bg-white border-b border-slate-200 relative overflow-hidden">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left: Stat & Bio -->
            <div class="lg:col-span-4 space-y-4">
                <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Leadership</span>
                <div class="text-6xl font-serif font-bold text-brand-navy">19+</div>
                <div class="text-base text-slate-600 font-medium">
                    years of hands-on experience in textiles and apparel manufacturing.
                </div>
                
                <div class="pt-4 border-t border-slate-200">
                    <h3 class="text-xl font-serif font-bold text-brand-navy">Md. Ataul Hai</h3>
                    <div class="text-xs text-brand-gold-dark uppercase tracking-wider font-semibold">Managing Director & CEO</div>
                    <div class="text-xs text-slate-500 mt-1">Texora Sourcing Bangladesh</div>
                </div>

                <div class="pt-2">
                    <a href="https://wa.me/8801711234725?text=Hello%20Mr.%20Md.%20Ataul%20Hai,%20I%20would%20like%20to%20discuss%20apparel%20sourcing." 
                       target="_blank"
                       class="inline-flex items-center text-xs text-emerald-700 hover:text-emerald-600 font-bold">
                        Direct WhatsApp with MD: +88 01711234725 &rarr;
                    </a>
                </div>
            </div>

            <!-- Right: Statement Card (White Ivory Card with Gold Border) -->
            <div class="lg:col-span-8 bg-slate-50 rounded-3xl p-8 sm:p-10 border-2 border-brand-gold/30 shadow-md space-y-5">
                <blockquote class="text-lg sm:text-xl font-serif italic text-brand-navy leading-relaxed">
                    "My journey has been built on precision, partnership and a deep technical understanding of garment manufacturing."
                </blockquote>

                <p class="text-sm text-slate-600 leading-relaxed">
                    At Texora Sourcing, we bridge the gap between global buyers and local manufacturing excellence. Apparel sourcing is not merely transactional; it is built on collaborative partnerships, uncompromised quality, strict compliance and reliable execution.
                </p>

                <p class="text-sm text-slate-600 leading-relaxed">
                    Whether you are seeking high-quality knitwear, premium sweaters or comprehensive apparel solutions, we welcome you to partner with us and experience garment manufacturing delivered with integrity and excellence.
                </p>

                <div class="pt-4 flex flex-wrap items-center gap-4">
                    <a href="{{ route('about') }}" class="px-5 py-2.5 rounded-xl bg-brand-navy text-white font-bold text-xs uppercase tracking-wider hover:bg-brand-navy-light transition-colors shadow">
                        Learn More About Our Team & Mission
                    </a>
                    <a href="{{ route('contact') }}#visit" class="px-5 py-2.5 rounded-xl bg-white text-brand-navy font-semibold text-xs border border-slate-300 hover:bg-slate-100 transition-colors">
                        Plan a Factory Visit to Dhaka
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sourcing Lead-Time & Banking Due Diligence (Off-White Section) -->
<section class="py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Commercial Confidence</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Transparent Lead Times & Banking Credentials
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                We know the value of time and keep our commitment. Full commercial terms designed for international trade security.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Lead Time Card 1 -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col justify-between">
                <div>
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
            <div class="bg-white p-8 rounded-3xl border-2 border-brand-gold/40 shadow-lg flex flex-col justify-between relative overflow-hidden">
                <div class="relative z-10">
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
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col justify-between">
                <div>
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

<!-- Direct Sourcing Quote (RFQ) Section (Crisp White and Off-White Blend) -->
<section id="rfq" class="py-20 bg-gradient-to-b from-white via-slate-50 to-white text-slate-800 relative">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5 space-y-6">
                <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Fast Sourcing Consultation</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy">
                    Let's Build Your Next Collection Together
                </h2>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Submit your garment specifications, target unit pricing, or tech packs. Our merchandising and sampling team will analyze feasibility and revert within 24 hours.
                </p>

                <div class="space-y-4 pt-2 text-xs text-slate-700">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center font-bold">1</div>
                        <span>Fast price breakdown & costing sheets based on current yarn indices</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center font-bold">2</div>
                        <span>Rapid prototype & counter-sample development with lab dip approvals</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-xl bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center font-bold">3</div>
                        <span>Full factory audit reports & compliance certification packages</span>
                    </div>
                </div>

                <!-- Handshake Photo from Slide 13 -->
                <div class="pt-4">
                    <div class="rounded-3xl overflow-hidden border border-slate-200 shadow-md max-w-sm">
                        <img src="{{ asset('images/extracted/partnership-handshake.jpg') }}" 
                             alt="Partnership Handshake Texora Sourcing" 
                             class="w-full h-44 object-cover">
                    </div>
                </div>
            </div>

            <!-- RFQ Form Column -->
            <div class="lg:col-span-7">
                <div class="bg-white text-slate-800 rounded-3xl p-8 sm:p-10 shadow-xl border border-slate-200">
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
                                <input type="text" name="company_name" placeholder="e.g. Nord Apparel, Montreal" 
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
