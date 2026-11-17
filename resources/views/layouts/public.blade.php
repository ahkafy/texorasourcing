<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Texora Sourcing Bangladesh | Premium Apparel Buying House & Sourcing Partner')</title>
    <meta name="description" content="@yield('meta_description', 'Texora Sourcing is a premier garment buying house and apparel manufacturing platform in Dhaka, Bangladesh. We deliver knitwear, woven, and sweaters to global retailers across Canada, Brazil, USA, and Europe with end-to-end quality assurance.')">
    <meta name="keywords" content="Bangladesh buying house, apparel sourcing Bangladesh, garment manufacturer Dhaka, knitwear sourcing, woven shirts, sweater manufacturer, Texora Sourcing, OEM apparel Bangladesh, compliant garment factories">

    <!-- Open Graph / Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Texora Sourcing Bangladesh | Premium Apparel Buying House')">
    <meta property="og:description" content="Your strategic apparel sourcing partner in Dhaka, Bangladesh. End-to-end garment manufacturing from sample to shipment.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <!-- Google Fonts: Inter (Primary Typography Across Entire Site) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,300..900;1,14..32,300..900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Vite Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('styles')
</head>
<body class="font-sans text-slate-800 bg-white antialiased selection:bg-brand-gold selection:text-brand-navy flex flex-col min-h-screen"
      x-data="{ mobileMenuOpen: false, rfqModalOpen: false, selectedCategory: 'Knitwear' }">

    <!-- Main Navigation Bar (Grouped & Wide, Zero Overflow) -->
    <nav class="sticky top-0 z-30 bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-sm transition-all duration-200">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
            <div class="flex items-center justify-between h-20 sm:h-22 md:h-24">
                
                <!-- Logo Only (No App Name Beside - Exactly Placed) -->
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center py-2 group" title="Texora Sourcing Bangladesh">
                    <img src="{{ asset('images/logo.png') }}" 
                         alt="Texora Sourcing Bangladesh" 
                         class="h-14 sm:h-16 md:h-18 lg:h-20 w-auto object-contain transition-transform duration-200 group-hover:scale-105"
                         loading="eager">
                </a>

                <!-- Desktop Grouped Navigation Menu (5 Clean Main Groups + Home & Contact) -->
                <div class="hidden lg:flex items-center space-x-1 xl:space-x-3">
                    
                    <!-- 1. Home -->
                    <a href="{{ route('home') }}" 
                       class="px-3.5 py-2 text-sm font-semibold rounded-lg transition-all whitespace-nowrap {{ request()->routeIs('home') ? 'text-brand-navy bg-slate-100 font-bold' : 'text-slate-600 hover:text-brand-navy hover:bg-slate-50' }}">
                        Home
                    </a>

                    <!-- 2. Company Group (About, Leadership, Team, Profile Deck) -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button type="button" 
                                @click="open = !open"
                                class="px-3.5 py-2 text-sm font-semibold rounded-lg transition-all inline-flex items-center gap-1.5 whitespace-nowrap {{ request()->routeIs('about') || request()->routeIs('company-profile') ? 'text-brand-navy bg-slate-100 font-bold' : 'text-slate-600 hover:text-brand-navy hover:bg-slate-50' }}">
                            <span>Company</span>
                            <svg class="w-3.5 h-3.5 text-slate-400 transition-transform duration-200" :class="open ? 'rotate-180 text-brand-navy' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1"
                             class="absolute left-0 mt-1 w-72 bg-white rounded-2xl shadow-2xl border border-slate-100 p-2 z-50 divide-y divide-slate-100"
                             style="display: none;">
                            <div class="p-1 space-y-1">
                                <a href="{{ route('about') }}" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">About Texora Sourcing</div>
                                        <div class="text-[11px] text-slate-500">Established 2015 in Dhaka, mission & values.</div>
                                    </div>
                                </a>
                                <a href="{{ route('about') }}#leadership" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Executive Leadership</div>
                                        <div class="text-[11px] text-slate-500">Md. Ataul Hai, MD & CEO (19+ Yrs experience).</div>
                                    </div>
                                </a>
                                <a href="{{ route('about') }}#team" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Team & Organization</div>
                                        <div class="text-[11px] text-slate-500">34 in-house specialists & 12 QA controllers.</div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 pt-2">
                                <a href="{{ route('company-profile') }}" class="flex items-center justify-between p-2.5 rounded-xl bg-brand-navy/5 hover:bg-brand-navy hover:text-white transition-all group">
                                    <div class="text-xs font-bold text-brand-navy group-hover:text-brand-gold">Company Profile Slides</div>
                                    <span class="text-[10px] bg-brand-gold text-brand-navy font-bold px-2 py-0.5 rounded-full">13 Slides</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Products Group (Knit, Woven, Sweater, Denim, Workwear) -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button type="button" 
                                @click="open = !open"
                                class="px-3.5 py-2 text-sm font-semibold rounded-lg transition-all inline-flex items-center gap-1.5 whitespace-nowrap {{ request()->routeIs('products') ? 'text-brand-navy bg-slate-100 font-bold' : 'text-slate-600 hover:text-brand-navy hover:bg-slate-50' }}">
                            <span>Products</span>
                            <svg class="w-3.5 h-3.5 text-slate-400 transition-transform duration-200" :class="open ? 'rotate-180 text-brand-navy' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1"
                             class="absolute left-0 mt-1 w-80 bg-white rounded-2xl shadow-2xl border border-slate-100 p-2 z-50 divide-y divide-slate-100"
                             style="display: none;">
                            <div class="p-1 space-y-1">
                                <a href="{{ route('products') }}#knit" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        👕
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Knitwear Collection</div>
                                        <div class="text-[11px] text-slate-500">T-Shirts, Polos, Hoodies, Sweatshirts & Tops.</div>
                                    </div>
                                </a>
                                <a href="{{ route('products') }}#woven" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        👔
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Woven Garments</div>
                                        <div class="text-[11px] text-slate-500">Dress Shirts, Casual Shirts, Pants & Chinos.</div>
                                    </div>
                                </a>
                                <a href="{{ route('products') }}#sweater" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        🧶
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Sweater Collection</div>
                                        <div class="text-[11px] text-slate-500">Vests, Pullovers, Cardigans & Turtlenecks (3–14GG).</div>
                                    </div>
                                </a>
                                <a href="{{ route('products') }}#denim" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        👖
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Denim & Outerwear</div>
                                        <div class="text-[11px] text-slate-500">Jeans, Denim Jackets, Puffers & Parkas.</div>
                                    </div>
                                </a>
                                <a href="{{ route('products') }}#workwear" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        🦺
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Workwear & Uniforms</div>
                                        <div class="text-[11px] text-slate-500">High-vis apparel, Coveralls & Hospitality wear.</div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 pt-2">
                                <a href="{{ route('products') }}" class="block text-center py-2 text-xs font-bold text-brand-navy hover:text-brand-gold transition-colors">
                                    View Full Product Lineup & Specs &rarr;
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Sourcing & Quality Group (Process, 8 Pillars, QA Framework, Certifications) -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button type="button" 
                                @click="open = !open"
                                class="px-3.5 py-2 text-sm font-semibold rounded-lg transition-all inline-flex items-center gap-1.5 whitespace-nowrap {{ request()->routeIs('services') || request()->routeIs('quality-compliance') ? 'text-brand-navy bg-slate-100 font-bold' : 'text-slate-600 hover:text-brand-navy hover:bg-slate-50' }}">
                            <span>Sourcing & Quality</span>
                            <svg class="w-3.5 h-3.5 text-slate-400 transition-transform duration-200" :class="open ? 'rotate-180 text-brand-navy' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1"
                             class="absolute left-0 mt-1 w-80 bg-white rounded-2xl shadow-2xl border border-slate-100 p-2 z-50 divide-y divide-slate-100"
                             style="display: none;">
                            <div class="p-1 space-y-1">
                                <a href="{{ route('services') }}" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">From Sample to Shipment</div>
                                        <div class="text-[11px] text-slate-500">Step-by-step milestone sourcing journey.</div>
                                    </div>
                                </a>
                                <a href="{{ route('services') }}#pillars" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">The 8 Sourcing Pillars</div>
                                        <div class="text-[11px] text-slate-500">Customer satisfaction commitment.</div>
                                    </div>
                                </a>
                                <a href="{{ route('quality-compliance') }}" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Quality Assurance (5-Tier QA)</div>
                                        <div class="text-[11px] text-slate-500">In-line, yarn lab-testing & AQL 2.5 standard.</div>
                                    </div>
                                </a>
                                <a href="{{ route('quality-compliance') }}#certifications" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138z" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Factory Certifications</div>
                                        <div class="text-[11px] text-slate-500">Accord, WRAP, Sedex, BSCI, OEKO-TEX 100, GOTS.</div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-1 pt-2">
                                <a href="{{ route('services') }}#visit" class="block text-center py-2 text-xs font-bold text-brand-navy hover:text-brand-gold transition-colors">
                                    Foreign Buyer Visit Coordination in Dhaka &rarr;
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Global Buyers Group (Retailers, Policy, Terms, Banking) -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button type="button" 
                                @click="open = !open"
                                class="px-3.5 py-2 text-sm font-semibold rounded-lg transition-all inline-flex items-center gap-1.5 whitespace-nowrap {{ request()->routeIs('buyers') ? 'text-brand-navy bg-slate-100 font-bold' : 'text-slate-600 hover:text-brand-navy hover:bg-slate-50' }}">
                            <span>Global Buyers</span>
                            <svg class="w-3.5 h-3.5 text-slate-400 transition-transform duration-200" :class="open ? 'rotate-180 text-brand-navy' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1"
                             class="absolute left-0 mt-1 w-72 bg-white rounded-2xl shadow-2xl border border-slate-100 p-2 z-50 divide-y divide-slate-100"
                             style="display: none;">
                            <div class="p-1 space-y-1">
                                <a href="{{ route('buyers') }}" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Current Retail Buyers</div>
                                        <div class="text-[11px] text-slate-500">YM INC, Ardene, Suzy Shier, Sun Asia.</div>
                                    </div>
                                </a>
                                <a href="{{ route('buyers') }}#policy" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">Commercial Policy & Terms</div>
                                        <div class="text-[11px] text-slate-500">45 Days T/T & 60–90 Days L/C.</div>
                                    </div>
                                </a>
                                <a href="{{ route('buyers') }}#banking" class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                                    <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-navy group-hover:bg-brand-navy group-hover:text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" /></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900 group-hover:text-brand-navy">BRAC Bank Credentials</div>
                                        <div class="text-[11px] text-slate-500">SWIFT: BRAKBDDH for trade credit.</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Contact -->
                    <a href="{{ route('contact') }}" 
                       class="px-3.5 py-2 text-sm font-semibold rounded-lg transition-all whitespace-nowrap {{ request()->routeIs('contact') ? 'text-brand-navy bg-slate-100 font-bold' : 'text-slate-600 hover:text-brand-navy hover:bg-slate-50' }}">
                        Contact
                    </a>
                </div>

                <!-- Right Action Button: Request a Quote (Clean & Prominent) -->
                <div class="flex items-center space-x-2 sm:space-x-3">
                    <button @click="rfqModalOpen = true" 
                            type="button"
                            class="inline-flex items-center justify-center px-3 sm:px-4 xl:px-5 py-2 sm:py-2.5 text-[11px] sm:text-xs uppercase tracking-wider font-bold rounded-xl text-brand-navy bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 hover:from-amber-300 hover:to-amber-400 active:bg-brand-gold-dark shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5 whitespace-nowrap">
                        <svg class="w-3.5 h-3.5 mr-1.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span><span class="hidden sm:inline">Request a </span>Quote</span>
                    </button>

                    <!-- Mobile Hamburger -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" 
                            type="button" 
                            class="lg:hidden p-2 rounded-xl text-slate-700 hover:text-brand-navy hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-brand-gold"
                            aria-label="Toggle Navigation">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileMenuOpen">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileMenuOpen" style="display:none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer with Grouped Accordions -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="lg:hidden bg-white border-b border-slate-200 px-4 pt-3 pb-6 space-y-2 shadow-xl max-h-[80vh] overflow-y-auto"
             x-data="{ activeAccordion: null }"
             style="display: none;">
            
            <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('home') ? 'bg-brand-navy text-white' : 'text-slate-800 hover:bg-slate-100' }}">Home</a>
            
            <!-- Accordion: Company -->
            <div class="border-b border-slate-100 pb-1">
                <button @click="activeAccordion = activeAccordion === 'company' ? null : 'company'" 
                        class="w-full flex items-center justify-between px-3 py-2 text-sm font-semibold text-slate-800">
                    <span>Company</span>
                    <span class="text-xs text-brand-gold font-bold" x-text="activeAccordion === 'company' ? '−' : '+'">+</span>
                </button>
                <div x-show="activeAccordion === 'company'" class="pl-4 py-1 space-y-1 text-xs text-slate-600">
                    <a href="{{ route('about') }}" class="block py-1 hover:text-brand-navy">About Texora Sourcing (Est. 2015)</a>
                    <a href="{{ route('about') }}#leadership" class="block py-1 hover:text-brand-navy">Leadership: Md. Ataul Hai, CEO</a>
                    <a href="{{ route('about') }}#team" class="block py-1 hover:text-brand-navy">Team & Organization Structure</a>
                    <a href="{{ route('company-profile') }}" class="block py-1 font-semibold text-brand-gold">Company Profile Presentation (13 Slides)</a>
                </div>
            </div>

            <!-- Accordion: Products -->
            <div class="border-b border-slate-100 pb-1">
                <button @click="activeAccordion = activeAccordion === 'products' ? null : 'products'" 
                        class="w-full flex items-center justify-between px-3 py-2 text-sm font-semibold text-slate-800">
                    <span>Products & Portfolio</span>
                    <span class="text-xs text-brand-gold font-bold" x-text="activeAccordion === 'products' ? '−' : '+'">+</span>
                </button>
                <div x-show="activeAccordion === 'products'" class="pl-4 py-1 space-y-1 text-xs text-slate-600">
                    <a href="{{ route('products') }}" class="block py-1 font-semibold text-brand-navy">All Product Lines</a>
                    <a href="{{ route('products') }}#knit" class="block py-1 hover:text-brand-navy">Knitwear (T-Shirts, Polos, Hoodies)</a>
                    <a href="{{ route('products') }}#woven" class="block py-1 hover:text-brand-navy">Woven (Shirts, Chinos, Pants)</a>
                    <a href="{{ route('products') }}#sweater" class="block py-1 hover:text-brand-navy">Sweaters (Vests, Cardigans, Pullovers)</a>
                    <a href="{{ route('products') }}#denim" class="block py-1 hover:text-brand-navy">Denim & Outerwear</a>
                    <a href="{{ route('products') }}#workwear" class="block py-1 hover:text-brand-navy">Workwear & Uniforms</a>
                </div>
            </div>

            <!-- Accordion: Sourcing & Quality -->
            <div class="border-b border-slate-100 pb-1">
                <button @click="activeAccordion = activeAccordion === 'operations' ? null : 'operations'" 
                        class="w-full flex items-center justify-between px-3 py-2 text-sm font-semibold text-slate-800">
                    <span>Sourcing & Quality</span>
                    <span class="text-xs text-brand-gold font-bold" x-text="activeAccordion === 'operations' ? '−' : '+'">+</span>
                </button>
                <div x-show="activeAccordion === 'operations'" class="pl-4 py-1 space-y-1 text-xs text-slate-600">
                    <a href="{{ route('services') }}" class="block py-1 hover:text-brand-navy">From Sample to Shipment Workflow</a>
                    <a href="{{ route('services') }}#pillars" class="block py-1 hover:text-brand-navy">The 8 Sourcing Pillars</a>
                    <a href="{{ route('quality-compliance') }}" class="block py-1 hover:text-brand-navy">Quality Assurance (5-Tier QA)</a>
                    <a href="{{ route('quality-compliance') }}#certifications" class="block py-1 hover:text-brand-navy">Factory Certifications (Accord, BSCI)</a>
                    <a href="{{ route('services') }}#visit" class="block py-1 font-semibold text-brand-gold">Foreign Buyer Visits to Dhaka</a>
                </div>
            </div>

            <!-- Accordion: Global Buyers -->
            <div class="border-b border-slate-100 pb-1">
                <button @click="activeAccordion = activeAccordion === 'buyers' ? null : 'buyers'" 
                        class="w-full flex items-center justify-between px-3 py-2 text-sm font-semibold text-slate-800">
                    <span>Global Buyers</span>
                    <span class="text-xs text-brand-gold font-bold" x-text="activeAccordion === 'buyers' ? '−' : '+'">+</span>
                </button>
                <div x-show="activeAccordion === 'buyers'" class="pl-4 py-1 space-y-1 text-xs text-slate-600">
                    <a href="{{ route('buyers') }}" class="block py-1 hover:text-brand-navy">Retail Partners (YM Inc, Ardene, Suzy Shier, Sun Asia)</a>
                    <a href="{{ route('buyers') }}#policy" class="block py-1 hover:text-brand-navy">Commercial Policy & Lead Times (45d T/T, 60-90d L/C)</a>
                    <a href="{{ route('buyers') }}#banking" class="block py-1 hover:text-brand-navy">BRAC Bank Credentials & SWIFT</a>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('contact') ? 'bg-brand-navy text-white' : 'text-slate-800 hover:bg-slate-100' }}">Contact & Office Details</a>
            
            <div class="pt-3 border-t border-slate-100 space-y-2">
                <button @click="rfqModalOpen = true; mobileMenuOpen = false" 
                        class="w-full flex items-center justify-center px-4 py-3 rounded-xl text-brand-navy bg-brand-gold font-bold uppercase tracking-wider text-xs shadow">
                    Request Sourcing Quote (RFQ)
                </button>
                <a href="https://wa.me/8801711234725" target="_blank" 
                   class="w-full flex items-center justify-center px-4 py-2.5 rounded-xl text-emerald-700 bg-emerald-50 border border-emerald-200 font-semibold text-xs">
                    Direct WhatsApp (+88 01711234725)
                </a>
            </div>
        </div>
    </nav>

    <!-- Success Flash Notification Toast -->
    @if(session('success'))
        <div class="bg-emerald-600 text-white shadow-lg sticky top-20 sm:top-24 z-50 transition-all duration-300">
            <div class="max-w-screen-2xl mx-auto py-3.5 px-4 sm:px-6 lg:px-10 xl:px-12 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <svg class="h-6 w-6 text-emerald-200 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="font-medium text-sm sm:text-base">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="text-emerald-100 hover:text-white p-1">
                    <span class="sr-only">Dismiss</span>
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <!-- Main Content Yield -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Global Floating WhatsApp & RFQ Dock -->
    <aside aria-label="Quick Actions" class="fixed bottom-6 right-6 z-40 flex flex-col items-end space-y-3 pointer-events-auto">
        <button @click="rfqModalOpen = true" 
                class="hidden md:inline-flex items-center gap-2 px-4 py-2.5 bg-brand-navy hover:bg-brand-navy-light text-white text-xs font-bold uppercase tracking-wider rounded-full shadow-brand-lg border border-brand-gold/40 hover:scale-105 transition-all">
            <span class="w-2 h-2 rounded-full bg-brand-gold animate-ping"></span>
            <span>Fast Quote RFQ</span>
        </button>

        <a href="https://wa.me/8801711234725?text=Hello%20Md.%20Ataul%20Hai,%20I%20am%20an%20apparel%20buyer%20interested%20in%20Texora%20Sourcing." 
           target="_blank" 
           rel="noopener noreferrer" 
           class="flex items-center justify-center w-14 h-14 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full shadow-2xl hover:scale-110 transition-transform duration-200 group relative"
           aria-label="Direct WhatsApp with Managing Director">
            <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.698.077-1.137-.066-.35-.114-.764-.287-1.341-.536-1.523-.655-2.502-2.185-2.58-2.287-.075-.104-.616-.821-.616-1.565 0-.745.39-1.111.529-1.261.14-.15.304-.188.406-.188.102 0 .204.001.293.006.095.004.221-.036.346.264.128.307.439 1.071.478 1.15.039.078.065.17.013.272-.051.102-.078.167-.154.257-.077.09-.162.2-.232.269-.077.076-.157.16-.068.313.09.153.398.658.854 1.064.588.524 1.084.686 1.238.762.153.076.243.064.333-.04.09-.103.385-.448.487-.601.103-.154.205-.129.346-.077.141.051.897.423 1.05.5.154.077.256.115.295.18.038.064.038.371-.106.776z"/>
            </svg>
            <span class="absolute right-16 bg-slate-900 text-white text-xs font-semibold py-1 px-3 rounded shadow-md whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none">
                Chat on WhatsApp (+88 01711234725)
            </span>
        </a>
    </aside>

    <!-- Global RFQ Sourcing Modal -->
    <div x-show="rfqModalOpen" 
         class="fixed inset-0 z-50 overflow-y-auto" 
         aria-labelledby="modal-title" 
         role="dialog" 
         aria-modal="true" 
         style="display: none;">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Backdrop -->
            <div x-show="rfqModalOpen" 
                 x-transition:enter="ease-out duration-300" 
                 x-transition:enter-start="opacity-0" 
                 x-transition:enter-end="opacity-100" 
                 x-transition:leave="ease-in duration-200" 
                 x-transition:leave-start="opacity-100" 
                 x-transition:leave-end="opacity-0" 
                 @click="rfqModalOpen = false" 
                 class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm transition-opacity"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal Panel -->
            <div x-show="rfqModalOpen" 
                 x-transition:enter="ease-out duration-300" 
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
                 x-transition:leave="ease-in duration-200" 
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                 class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full border border-slate-200">
                
                <div class="bg-brand-navy px-6 py-5 text-white flex items-center justify-between">
                    <div>
                        <div class="flex items-center gap-2">
                            <x-textile-icon name="techpack" class="w-4 h-4 text-brand-gold" />
                            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">Direct Sourcing RFQ</span>
                        </div>
                        <h3 class="text-xl font-serif font-bold text-white mt-0.5">Request a Formal Sourcing Quote</h3>
                        <p class="text-xs text-slate-300 mt-1">Receive technical feasibility, costing & sample schedule within 24 hours.</p>
                    </div>
                    <button @click="rfqModalOpen = false" class="text-slate-400 hover:text-white p-2 rounded-lg hover:bg-white/10 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form action="{{ route('inquiry.store') }}" method="POST" class="p-6 space-y-4">
                    @csrf
                    <input type="hidden" name="inquiry_type" value="rfq">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Your Name *</label>
                            <input type="text" name="name" required placeholder="e.g. John Smith" 
                                   class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Corporate Email *</label>
                            <input type="email" name="email" required placeholder="john@retailbrand.com" 
                                   class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Company / Brand Name</label>
                            <input type="text" name="company_name" placeholder="e.g. Nordstrom, Ardene, YM INC..." 
                                   class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Buyer Country / Market</label>
                            <input type="text" name="country" placeholder="e.g. Canada, USA, UK, Germany, Brazil" 
                                   class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Product Category *</label>
                            <select name="product_category" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                                <option value="Knitwear">Knitwear (T-Shirts, Polos, Hoodies)</option>
                                <option value="Woven">Woven (Shirts, Pants, Outerwear)</option>
                                <option value="Sweaters">Sweaters (Vests, Pullovers, Cardigans)</option>
                                <option value="Denim">Denim & Workwear</option>
                                <option value="Accessories">Accessories & Home Textiles</option>
                                <option value="Comprehensive">Multiple / Comprehensive Range</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Target Quantity</label>
                            <select name="target_quantity" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                                <option value="1,000 - 3,000 pcs">1,000 – 3,000 pcs (Test order)</option>
                                <option value="3,000 - 10,000 pcs">3,000 – 10,000 pcs</option>
                                <option value="10,000 - 50,000 pcs">10,000 – 50,000 pcs</option>
                                <option value="50,000+ pcs">50,000+ pcs (Volume contract)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Preferred Payment</label>
                            <select name="payment_terms" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                                <option value="L/C">L/C at Sight (60-90 Days)</option>
                                <option value="T/T">T/T Deposit (45 Days Express)</option>
                                <option value="Negotiable">Negotiable</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Tech Pack Details / Specifications *</label>
                        <textarea name="message" rows="3" required placeholder="Describe fabric composition, GSM, target price per unit, expected delivery dates, wash requirements, or paste your tech pack specifications..." 
                                  class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold"></textarea>
                    </div>

                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 text-xs text-slate-500 flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-gold mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                        <span>We respect buyer confidentiality. Tech packs, styling details, and pricing discussions are strictly protected under non-disclosure terms.</span>
                    </div>

                    <div class="pt-2 flex items-center justify-end space-x-3">
                        <button @click="rfqModalOpen = false" type="button" class="px-4 py-2.5 rounded-xl border border-slate-300 text-slate-700 hover:bg-slate-50 text-sm font-semibold">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-2.5 rounded-xl bg-brand-gold hover:bg-brand-gold-light text-brand-navy font-bold uppercase tracking-wider text-sm shadow-md transition-all">
                            Submit Sourcing Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Corporate Footer (Wide Container) -->
    <footer class="bg-brand-navy text-slate-300 border-t-4 border-brand-gold mt-auto relative overflow-hidden">
        <!-- Subtle Tactile Fabric Background Texture -->
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('images/luxury/fabric-swatches-macro.jpg') }}" alt="" aria-hidden="true" class="w-full h-full object-cover object-center opacity-[0.07]">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-navy/90 via-brand-navy/95 to-brand-navy-dark"></div>
        </div>
        <!-- Atelier Textile Watermarks (Subtle White/Gold for Dark Navy) -->
        <x-textile-watermark motif="shears" class="absolute -right-16 -bottom-16 w-96 h-96 text-white/[0.025] pointer-events-none select-none z-0" />
        <x-textile-watermark motif="mannequin" class="absolute -left-16 top-10 w-96 h-96 text-brand-gold/[0.025] pointer-events-none select-none z-0" />
        <x-textile-watermark motif="sewing-machine" class="absolute left-1/3 -top-20 w-80 h-80 text-white/[0.015] pointer-events-none select-none z-0" />

        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 py-16 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
                
                <!-- Col 1: Logo & About -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="py-1">
                        <img src="{{ asset('images/logo.png') }}" 
                             alt="Texora Sourcing Bangladesh" 
                             class="h-16 sm:h-18 md:h-20 w-auto object-contain drop-shadow-[0_2px_8px_rgba(209,159,48,0.3)]">
                    </div>

                    <p class="text-sm text-slate-300 leading-relaxed max-w-md pt-1">
                        Texora Sourcing is an established apparel buying and manufacturing platform in Dhaka, Bangladesh. We bridge global retailers with compliant manufacturing excellence, delivering knitwear, woven apparel, and sweaters with uncompromised quality, strict timelines, and transparent pricing.
                    </p>

                    <div class="pt-2 flex flex-wrap items-center gap-2 text-xs">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white/10 text-brand-gold-light rounded-full border border-white/10 font-semibold">
                            <x-textile-icon name="sewing-machine" class="w-3.5 h-3.5" />
                            <span>Established 2015</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white/10 text-brand-gold-light rounded-full border border-white/10 font-semibold">
                            <x-textile-icon name="mannequin" class="w-3.5 h-3.5" />
                            <span>34 In-House Experts</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white/10 text-brand-gold-light rounded-full border border-white/10 font-semibold">
                            <x-textile-icon name="magnifier-fabric" class="w-3.5 h-3.5" />
                            <span>12 Full-Time QCs</span>
                        </span>
                    </div>

                    <div class="pt-2">
                        <p class="text-xs uppercase tracking-wider text-brand-gold font-bold mb-2">Trusted Retail Markets</p>
                        <div class="flex flex-wrap items-center gap-3 text-xs text-slate-200">
                            <span class="inline-flex items-center gap-1">🇨🇦 Canada (YM Inc, Ardene, Suzy Shier)</span>
                            <span class="inline-flex items-center gap-1">🇧🇷 Brazil (Sun Asia)</span>
                            <span class="inline-flex items-center gap-1">🇺🇸 USA & Europe</span>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-brand-gold mb-4">Navigation</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">About Us & Leadership</a></li>
                        <li><a href="{{ route('products') }}" class="hover:text-white transition-colors">Product Categories</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Sourcing Process & 8 Pillars</a></li>
                        <li><a href="{{ route('quality-compliance') }}" class="hover:text-white transition-colors">Quality & Compliance</a></li>
                        <li><a href="{{ route('buyers') }}" class="hover:text-white transition-colors">Global Buyers</a></li>
                        <li><a href="{{ route('company-profile') }}" class="hover:text-white transition-colors">Company Profile Deck</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact & Factory Tours</a></li>
                    </ul>
                </div>

                <!-- Col 3: Product Categories -->
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-brand-gold mb-4">Sourcing Categories</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li>
                            <a href="{{ route('products') }}#knit" class="hover:text-white transition-colors inline-flex items-center gap-1.5">
                                <x-textile-icon name="tshirt" class="w-3.5 h-3.5 text-brand-gold-light" />
                                <span>Knitwear (T-Shirts, Polos)</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}#woven" class="hover:text-white transition-colors inline-flex items-center gap-1.5">
                                <x-textile-icon name="shirt" class="w-3.5 h-3.5 text-brand-gold-light" />
                                <span>Woven (Shirts, Chinos, Pants)</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}#sweater" class="hover:text-white transition-colors inline-flex items-center gap-1.5">
                                <x-textile-icon name="sweater" class="w-3.5 h-3.5 text-brand-gold-light" />
                                <span>Sweaters & Cardigans</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}#denim" class="hover:text-white transition-colors inline-flex items-center gap-1.5">
                                <x-textile-icon name="denim-pocket" class="w-3.5 h-3.5 text-brand-gold-light" />
                                <span>Denim & Outerwear</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}#workwear" class="hover:text-white transition-colors inline-flex items-center gap-1.5">
                                <x-textile-icon name="jacket" class="w-3.5 h-3.5 text-brand-gold-light" />
                                <span>Workwear & Uniforms</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}#accessories" class="hover:text-white transition-colors inline-flex items-center gap-1.5">
                                <x-textile-icon name="button" class="w-3.5 h-3.5 text-brand-gold-light" />
                                <span>Accessories & Home Textiles</span>
                            </a>
                        </li>
                    </ul>
                    <div class="mt-6 pt-4 border-t border-white/10">
                        <span class="text-xs text-brand-gold-light font-semibold block">Commercial Production Timing:</span>
                        <span class="text-xs text-slate-300">45 Days for T/T | 60–90 Days for L/C</span>
                    </div>
                </div>

                <!-- Col 4: Corporate & Banking Due Diligence -->
                <div class="space-y-4">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-brand-gold mb-4">Corporate & Banking</h3>
                    <div class="space-y-2 text-xs text-slate-300">
                        <div>
                            <span class="text-slate-400 block font-medium">Head Office:</span>
                            <span class="text-white font-medium">33, Garib-E-Newaz Avenue, Sector-11, Uttara, Dhaka-1230, Bangladesh</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block font-medium">Managing Director & CEO:</span>
                            <span class="text-white font-medium">Md. Ataul Hai (19+ Yrs Apparel Experience)</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block font-medium">Bank Information:</span>
                            <span class="text-white font-medium">BRAC Bank PLC.</span>
                            <span class="block text-slate-400">Branch: Uttara Sonargaon Janapath</span>
                            <span class="block text-slate-400">SWIFT: <span class="text-brand-gold-light font-mono font-bold">BRAKBDDH</span></span>
                            <span class="block text-slate-400">Account: 2075560740001</span>
                        </div>
                        <div class="pt-2">
                            <span class="text-slate-400 block font-medium">Direct Inquiry:</span>
                            <span class="text-brand-gold-light block font-mono font-semibold">+88 01711234725</span>
                            <span class="text-slate-300 block font-mono">+88 01777556666</span>
                            <span class="text-slate-300 block">ataul@texorasourcingbd.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certified Accreditations Strip -->
            <div class="mt-12 pt-8 border-t border-white/10">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <span class="text-xs uppercase font-bold tracking-wider text-brand-gold block mb-1">Partner Factory Accreditations</span>
                        <p class="text-xs text-slate-400">Manufactured in Accord, BSCI, WRAP, Sedex, Higg Index, GOTS & OEKO-TEX Standard 100 certified facilities.</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-3 text-xs font-semibold text-slate-300">
                        <span class="px-2.5 py-1 bg-white/5 rounded border border-white/10">ACCORD / RSC</span>
                        <span class="px-2.5 py-1 bg-white/5 rounded border border-white/10">WRAP</span>
                        <span class="px-2.5 py-1 bg-white/5 rounded border border-white/10">Sedex SMETA</span>
                        <span class="px-2.5 py-1 bg-white/5 rounded border border-white/10">BSCI</span>
                        <span class="px-2.5 py-1 bg-white/5 rounded border border-white/10">OEKO-TEX 100</span>
                        <span class="px-2.5 py-1 bg-white/5 rounded border border-white/10">GOTS & GRS</span>
                        <span class="px-2.5 py-1 bg-white/5 rounded border border-white/10">ISO 9001</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright Strip -->
        <div class="bg-brand-navy-dark py-6 border-t border-brand-navy/80 text-xs text-slate-400">
            <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p>&copy; {{ date('Y') }} Texora Sourcing Bangladesh. All rights reserved. | www.texorasourcingbd.com</p>
                <div class="flex items-center space-x-6 text-slate-400">
                    <a href="{{ route('about') }}" class="hover:text-white transition-colors">Company Profile</a>
                    <a href="{{ route('quality-compliance') }}" class="hover:text-white transition-colors">Compliance Policy</a>
                    <a href="{{ route('contact') }}" class="hover:text-white transition-colors">Factory Visit Scheduling</a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

