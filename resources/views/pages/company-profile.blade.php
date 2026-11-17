@extends('layouts.public')

@section('title', 'Official Company Profile Presentation | Texora Sourcing')
@section('meta_description', 'View and download the official company profile presentation of Texora Sourcing Bangladesh. Complete 13-slide overview covering manufacturing capabilities, leadership, quality assurance, and global retail clients.')

@section('content')
<!-- Header Banner (Full-Bleed Luxury Editorial Hero) -->
<section class="relative py-20 bg-brand-navy text-white border-b border-brand-gold/30 overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/luxury/atelier-showroom.jpg') }}"
             alt="Texora Sourcing Company Profile"
             class="w-full h-full object-cover object-center opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-navy via-brand-navy/90 to-brand-navy/70"></div>
    </div>
    <x-textile-watermark motif="fabric-roll" class="absolute -right-16 -bottom-16 w-80 h-80 text-brand-gold/[0.06] pointer-events-none select-none z-0" />
    <x-textile-watermark motif="shears" class="absolute -left-12 -top-12 w-64 h-64 text-white/[0.03] pointer-events-none select-none z-0" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/30 backdrop-blur-md border border-brand-gold/40 text-xs uppercase font-bold tracking-[0.2em] text-brand-gold">
                    <x-textile-icon name="techpack" class="w-3.5 h-3.5 text-brand-gold" />
                    <span>Official Corporate Presentation</span>
                </span>
                <h1 class="text-3xl sm:text-4xl font-bold text-white mt-4 tracking-tight">
                    Texora Sourcing Company Profile
                </h1>
                <p class="text-sm text-slate-200 mt-2">
                    Established 2015 • Dhaka, Bangladesh • Comprehensive 13-Slide Executive Sourcing Deck
                </p>
            </div>
            <div class="flex items-center gap-3">
                <button @click="rfqModalOpen = true" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 text-brand-navy font-bold uppercase tracking-wider text-xs hover:from-amber-300 hover:to-amber-400 transition-all shadow-lg">
                    <x-textile-icon name="techpack" class="w-4 h-4" />
                    <span>Request Sourcing Quote</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Slide Presentation Viewer (Alpine.js) -->
<section class="py-16 bg-slate-100" 
         x-data="{ 
            currentSlide: 1, 
            totalSlides: 13,
            slides: [
                { id: 1, title: 'Company Profile Cover', file: 'slide-01-cover.jpg', desc: 'Your ultimate buying and sourcing destination in Bangladesh.' },
                { id: 2, title: 'Your End-to-End Sourcing Partner', file: 'slide-02-introduction.jpg', desc: 'Digitization, automation, and full-spectrum manufacturing platform.' },
                { id: 3, title: 'Mission, Vision & Values', file: 'slide-03-mission-vision.jpg', desc: 'A culture of trust, human dignity, and customer satisfaction.' },
                { id: 4, title: 'Organization & Team Structure', file: 'slide-04-organization-team.jpg', desc: '34 professionals, 12 QC controllers, 6 merchandisers.' },
                { id: 5, title: 'Company Details & Banking', file: 'slide-05-company-details.jpg', desc: 'BRAC Bank PLC SWIFT BRAKBDDH and corporate details.' },
                { id: 6, title: '8 Sourcing Services', file: 'slide-06-services.jpg', desc: 'Customer satisfaction is our commitment: enquiries to buyer visits.' },
                { id: 7, title: 'Product Portfolio', file: 'slide-07-product-portfolio.jpg', desc: 'What we source: Knitwear, Woven, and Sweaters.' },
                { id: 8, title: 'Quality Assurance System', file: 'slide-08-quality-assurance.jpg', desc: 'Quality you can rely on: 5-pillar QA framework.' },
                { id: 9, title: 'Business Policy & Lead Times', file: 'slide-09-business-policy.jpg', desc: 'Minimum price, maximum quality: 45 days T/T, 60/90 days L/C.' },
                { id: 10, title: 'From Sample to Shipment', file: 'slide-10-sample-to-shipment.jpg', desc: 'Supplier credibility, material sourcing, and sampling approval.' },
                { id: 11, title: 'Clients & Factory Certifications', file: 'slide-11-clients-certifications.jpg', desc: 'YM INC, Ardene, Suzy Shier, Sun Asia and global accreditations.' },
                { id: 12, title: 'Message from Managing Director & CEO', file: 'slide-12-leadership-ceo.jpg', desc: 'Md. Ataul Hai with 19+ years apparel manufacturing leadership.' },
                { id: 13, title: 'Thank You & Corporate Office', file: 'slide-13-thank-you-contact.jpg', desc: 'Let\'s build your next collection together in Uttara, Dhaka.' }
            ]
         }">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        
        <!-- Viewer Container -->
        <div class="bg-white rounded-3xl border border-slate-300 shadow-2xl overflow-hidden">
            
            <!-- Viewer Top Controls Bar -->
            <div class="bg-brand-navy px-6 py-4 text-white flex flex-wrap items-center justify-between gap-4 border-b border-brand-navy-light">
                <div class="flex items-center space-x-3">
                    <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">Slide <span x-text="currentSlide"></span> of <span x-text="totalSlides"></span></span>
                    <span class="text-slate-400">|</span>
                    <span class="text-xs sm:text-sm font-semibold text-white truncate max-w-xs sm:max-w-md" x-text="slides[currentSlide - 1].title"></span>
                </div>

                <!-- Next/Prev Buttons -->
                <div class="flex items-center space-x-2">
                    <button @click="currentSlide = currentSlide > 1 ? currentSlide - 1 : totalSlides" 
                            class="px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-white text-xs font-bold transition-colors inline-flex items-center gap-1">
                        &larr; Prev
                    </button>
                    <button @click="currentSlide = currentSlide < totalSlides ? currentSlide + 1 : 1" 
                            class="px-3 py-1.5 rounded-lg bg-brand-gold hover:bg-brand-gold-light text-brand-navy text-xs font-bold transition-colors inline-flex items-center gap-1">
                        Next &rarr;
                    </button>
                </div>
            </div>

            <!-- Slide Display Area -->
            <div class="p-4 sm:p-8 bg-slate-900/95 flex items-center justify-center min-h-[400px] sm:min-h-[580px] relative">
                <template x-for="slide in slides" :key="slide.id">
                    <div x-show="currentSlide === slide.id" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-98"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="w-full max-w-4xl flex flex-col items-center">
                        <img :src="'/images/profile-slides/' + slide.file" 
                             :alt="slide.title" 
                             class="w-full max-h-[560px] object-contain rounded-xl shadow-2xl border border-white/10 bg-white">
                        <p class="text-xs text-slate-300 mt-3 text-center" x-text="slide.desc"></p>
                    </div>
                </template>
            </div>

            <!-- Thumbnails Strip -->
            <div class="p-4 bg-slate-50 border-t border-slate-200 overflow-x-auto">
                <div class="flex items-center space-x-3 pb-2">
                    <template x-for="slide in slides" :key="slide.id">
                        <button @click="currentSlide = slide.id" 
                                :class="currentSlide === slide.id ? 'ring-2 ring-brand-gold border-brand-gold scale-105' : 'opacity-70 hover:opacity-100 border-slate-300'"
                                class="flex-shrink-0 w-24 h-16 rounded-lg overflow-hidden border bg-white shadow-sm transition-all focus:outline-none">
                            <img :src="'/images/profile-slides/' + slide.file" :alt="slide.title" class="w-full h-full object-cover">
                        </button>
                    </template>
                </div>
            </div>

        </div>

        <!-- Quick Summary Cards from the Slides -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-2 hover:border-brand-gold transition-colors">
                <div class="flex items-center gap-1.5 text-brand-gold font-bold text-xs uppercase">
                    <x-textile-icon name="mannequin" class="w-4 h-4 text-brand-gold-dark" />
                    <span>Leadership (Slide 12)</span>
                </div>
                <h3 class="text-lg font-serif font-bold text-brand-navy">Md. Ataul Hai, CEO</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    19+ years of hands-on technical understanding of garment manufacturing, bridging global buyers and local manufacturing excellence.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-2 hover:border-brand-gold transition-colors">
                <div class="flex items-center gap-1.5 text-brand-gold font-bold text-xs uppercase">
                    <x-textile-icon name="magnifier-fabric" class="w-4 h-4 text-brand-gold-dark" />
                    <span>Capacity & QA (Slide 4 & 8)</span>
                </div>
                <h3 class="text-lg font-serif font-bold text-brand-navy">34 Staff & 12 QCs</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Complete in-house structure comprising Merchandising, Technical & Quality, and HR/Compliance with daily on-line quality circles.
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-2 hover:border-brand-gold transition-colors">
                <div class="flex items-center gap-1.5 text-brand-gold font-bold text-xs uppercase">
                    <x-textile-icon name="fabric-roll" class="w-4 h-4 text-brand-gold-dark" />
                    <span>Commercial Delivery (Slide 9)</span>
                </div>
                <h3 class="text-lg font-serif font-bold text-brand-navy">45 Days T/T • 60–90 Days L/C</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Transparent, reliable delivery cycles backed by BRAC Bank PLC (SWIFT BRAKBDDH) and long-standing international retail trust.
                </p>
            </div>
        </div>

    </div>
</section>
@endsection
