@extends('layouts.public')

@section('title', 'Global Retail Buyers & Commercial Terms | Texora Sourcing')
@section('meta_description', 'Discover how Texora Sourcing serves leading retail buyers across Canada (YM INC, Ardene, Suzy Shier), Brazil (Sun Asia), and worldwide with transparent 45-90 day lead times and bank credentials.')

@section('content')
<!-- Header Banner (White & Off-White Blend with Watermarks) -->
<section class="bg-gradient-to-b from-slate-50 via-white to-slate-50 py-16 sm:py-20 text-slate-900 border-b border-slate-200/80 relative overflow-hidden">
    <!-- Watermark: Global World Map / Network -->
    <div class="absolute -right-16 -bottom-16 w-96 h-96 text-brand-gold/[0.04] pointer-events-none select-none">
        <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.6">
            <circle cx="12" cy="12" r="10"/>
            <line x1="2" y1="12" x2="22" y2="12"/>
            <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
        </svg>
    </div>

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50/80 border border-brand-gold/30 text-xs uppercase font-bold tracking-[0.2em] text-brand-navy shadow-sm">
                <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                Global Footprint & Commercial Policy
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-brand-navy mt-3">
                Trusted by Global Retailers
            </h1>
            <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mt-3 rounded-full"></div>
            <p class="text-base text-slate-600 mt-3 leading-relaxed">
                Discover our present retail buyers across North and South America, our "Minimum Price, Maximum Quality" business policy, and transparent commercial banking credentials.
            </p>
        </div>
    </div>
</section>

<!-- Current Retail Partners (Slide 11) (Crisp White with Watermark) -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Watermark: Handshake / Partnership Shield -->
    <div class="absolute -left-16 bottom-10 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none">
        <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
    </div>

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold">Retail Partnerships</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Present International Retailers
            </h2>
            <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mx-auto mt-3 rounded-full"></div>
            <p class="text-sm text-slate-600 mt-2">
                Delivering high-volume seasonal collections, fast-fashion replenishment, and staple basics to prominent international fashion chains.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Buyer 1: YM INC -->
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold text-brand-gold uppercase tracking-wider">Major Fashion Retailer</span>
                        <span class="text-xs font-semibold px-2.5 py-1 bg-white rounded-md border text-slate-700">🇨🇦 Canada</span>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy group-hover:text-brand-gold transition-colors">YM INC</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        One of North America's leading apparel retail powerhouses operating hundreds of stores with diverse private label fashion divisions.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-200 text-xs text-slate-500">
                    Sourcing: Knitwear, Tops & Outerwear
                </div>
            </div>

            <!-- Buyer 2: ARDENE -->
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold text-brand-gold uppercase tracking-wider">Fast-Fashion Chain</span>
                        <span class="text-xs font-semibold px-2.5 py-1 bg-white rounded-md border text-slate-700">🇨🇦 Canada</span>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy group-hover:text-brand-gold transition-colors">ARDENE</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Fast-growing Canadian omnichannel retailer known for trendy, youthful apparel, casualwear essentials, and seasonal collections.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-200 text-xs text-slate-500">
                    Sourcing: Knit Basics, Sweaters & Loungewear
                </div>
            </div>

            <!-- Buyer 3: SUZY SHIER -->
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold text-brand-gold uppercase tracking-wider">Womenswear Brand</span>
                        <span class="text-xs font-semibold px-2.5 py-1 bg-white rounded-md border text-slate-700">🇨🇦 Canada</span>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy group-hover:text-brand-gold transition-colors">SUZY SHIER</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Iconic Canadian women's fashion destination catering to modern working women with tailored woven separates, blouses, and refined knits.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-200 text-xs text-slate-500">
                    Sourcing: Blouses, Sweaters & Woven Separates
                </div>
            </div>

            <!-- Buyer 4: SUN ASIA -->
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold text-brand-gold uppercase tracking-wider">Latin America Distribution</span>
                        <span class="text-xs font-semibold px-2.5 py-1 bg-white rounded-md border text-slate-700">🇧🇷 Brazil</span>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy group-hover:text-brand-gold transition-colors">SUN ASIA</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Major South American importer and apparel distributor supplying multi-store retail channels across Brazil and Latin America.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-200 text-xs text-slate-500">
                    Sourcing: Denim, Casual Polos & Seasonal Knits
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Business Policy & What You Gain (Slide 9) -->
<section class="py-20 bg-slate-50 border-t border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5 space-y-6">
                <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">Our Core Policy</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy">
                    Minimum Price, Maximum Quality
                </h2>
                <div class="p-6 bg-white rounded-2xl border border-slate-200 border-l-4 border-l-brand-gold shadow-sm space-y-2">
                    <span class="text-xs uppercase font-bold tracking-wider text-brand-gold">The Texora Commitment</span>
                    <p class="text-sm text-slate-700 leading-relaxed italic font-serif">
                        "Build long-term business relationships by offering the minimum price and providing the maximum quality, as a buying partner to clients worldwide."
                    </p>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    By eliminating unnecessary intermediary layers, consolidating raw material yarn purchasing, and utilizing automated production cells in Dhaka, we pass direct margin savings back to our retail buyers.
                </p>
            </div>

            <!-- What You Gain 5 Pillars (Slide 9) -->
            <div class="lg:col-span-7 space-y-3">
                <h3 class="text-base font-bold text-brand-navy uppercase tracking-wider text-xs mb-4">What You Gain as an International Buyer</h3>

                <div class="flex items-start space-x-3 p-4 bg-white rounded-xl border border-slate-200 shadow-sm">
                    <div class="w-7 h-7 rounded-full bg-brand-gold text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">1</div>
                    <div>
                        <h4 class="text-sm font-bold text-brand-navy">Sharper Company Focus and Lower Operating Costs</h4>
                        <p class="text-xs text-slate-600 mt-0.5">Free up your internal team's bandwidth while our 34 in-house specialists handle Dhaka factory monitoring.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3 p-4 bg-white rounded-xl border border-slate-200 shadow-sm">
                    <div class="w-7 h-7 rounded-full bg-brand-gold text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">2</div>
                    <div>
                        <h4 class="text-sm font-bold text-brand-navy">Access to World-Class Capabilities</h4>
                        <p class="text-xs text-slate-600 mt-0.5">Benefit from automated computerized knitting, laser washing, automated spreaders, and certified QA laboratories.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3 p-4 bg-white rounded-xl border border-slate-200 shadow-sm">
                    <div class="w-7 h-7 rounded-full bg-brand-gold text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">3</div>
                    <div>
                        <h4 class="text-sm font-bold text-brand-navy">Access to Resources Not Available Internally</h4>
                        <p class="text-xs text-slate-600 mt-0.5">Leverage direct mill allocations for specialty cottons, sustainable fibers, and imported technical trims.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3 p-4 bg-white rounded-xl border border-slate-200 shadow-sm">
                    <div class="w-7 h-7 rounded-full bg-brand-gold text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">4</div>
                    <div>
                        <h4 class="text-sm font-bold text-brand-navy">Diversified Range Through Multi-Country Sourcing</h4>
                        <p class="text-xs text-slate-600 mt-0.5">Flexibility to blend local fabrics with nominated overseas yarns and accessories for brand consistency.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3 p-4 bg-white rounded-xl border border-slate-200 shadow-sm">
                    <div class="w-7 h-7 rounded-full bg-brand-gold text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">5</div>
                    <div>
                        <h4 class="text-sm font-bold text-brand-navy">Quick Reaction to Changing Consumer Demand</h4>
                        <p class="text-xs text-slate-600 mt-0.5">Rapid sampling turnaround and 45-day express T/T replenishment to capture in-season selling peaks.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Commercial Terms & Bank Due Diligence (Slide 5 & 9) -->
<section class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">Financial Security</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Commercial Terms & Banking Credentials
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                Clear, transparent payment modes and premier banking partners for complete financial reliability.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            
            <!-- Payment Methods Card -->
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 shadow-sm space-y-4">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-gold">Mode of Payment</span>
                <h3 class="text-2xl font-serif font-bold text-brand-navy">Accepted Payment Modes</h3>
                
                <div class="space-y-4 text-xs text-slate-700 pt-2">
                    <div class="p-4 bg-white rounded-xl border">
                        <strong class="text-brand-navy block text-sm font-bold mb-1">1. Irrevocable Letter of Credit (L/C) at Sight</strong>
                        <p class="text-slate-600">Standard international trade method. Bulk production lead time is <strong>60 to 90 days</strong> after receipt of operative L/C.</p>
                    </div>
                    <div class="p-4 bg-white rounded-xl border">
                        <strong class="text-brand-navy block text-sm font-bold mb-1">2. Telegraphic Transfer (T/T)</strong>
                        <p class="text-slate-600">Accelerated production cycle. Bulk export lead time is <strong>45 days</strong> for fast replenishment and capsule collections.</p>
                    </div>
                </div>
                <p class="text-[11px] text-slate-500 italic">
                    "Timing depends on product quantity. We know the value of time and keep our commitment."
                </p>
            </div>

            <!-- Official Bank Details Card (Slide 5) -->
            <div class="bg-slate-50 p-8 rounded-2xl border-2 border-brand-gold/40 shadow-sm space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gold">Banking Due Diligence</span>
                    <span class="px-2.5 py-0.5 rounded-full bg-amber-100 text-amber-900 text-[11px] font-bold">Tier-1 Bank</span>
                </div>
                <h3 class="text-2xl font-serif font-bold text-brand-navy">BRAC Bank PLC.</h3>
                
                <div class="space-y-2.5 text-xs text-slate-700 pt-2 font-mono">
                    <div class="flex justify-between border-b border-slate-200 pb-1.5 font-sans">
                        <span class="text-slate-500">Company Legal Name:</span>
                        <span class="text-brand-navy font-bold">Texora Sourcing Bangladesh</span>
                    </div>
                    <div class="flex justify-between border-b border-slate-200 pb-1.5 font-sans">
                        <span class="text-slate-500">Bank Name:</span>
                        <span class="text-brand-navy font-semibold">BRAC Bank PLC.</span>
                    </div>
                    <div class="flex justify-between border-b border-slate-200 pb-1.5 font-sans">
                        <span class="text-slate-500">Branch:</span>
                        <span class="text-brand-navy">Uttara Sonargaon Janapath Branch</span>
                    </div>
                    <div class="flex justify-between border-b border-slate-200 pb-1.5">
                        <span class="text-slate-500 font-sans">SWIFT Code:</span>
                        <span class="text-brand-navy font-bold text-sm tracking-wider bg-amber-50 px-2 py-0.5 rounded border border-brand-gold/30">BRAKBDDH</span>
                    </div>
                    <div class="flex justify-between pt-1">
                        <span class="text-slate-500 font-sans">Account Number:</span>
                        <span class="text-brand-navy font-bold text-sm bg-slate-100 px-2 py-0.5 rounded">2075560740001</span>
                    </div>
                </div>

                <div class="mt-4 pt-3 border-t border-slate-200 text-[11px] text-slate-600 font-sans">
                    BRAC Bank is one of Bangladesh's premier tier-1 international commercial banks, accredited by global financial regulators.
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Prospective Buyer FAQ -->
<section class="py-16 bg-slate-50 border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">Common Inquiries</span>
            <h2 class="text-3xl font-serif font-bold text-brand-navy mt-1">Frequently Asked by Global Buyers</h2>
        </div>

        <div class="space-y-4" x-data="{ openFaq: null }">
            
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-brand-navy">
                    <span>What are your standard Minimum Order Quantities (MOQ)?</span>
                    <span class="text-brand-gold font-bold text-base" x-text="openFaq === 1 ? '−' : '+'">+</span>
                </button>
                <div x-show="openFaq === 1" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Our standard MOQs are typically 1,000 pcs for knitwear, 1,200 pcs for woven shirts/pants, and 800 pcs for sweaters per style. However, for new retail buyers testing the market, we frequently accommodate flexible trial quantities and multi-colorway allocations.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-brand-navy">
                    <span>How long does counter-sampling and lab dip approval take?</span>
                    <span class="text-brand-gold font-bold text-base" x-text="openFaq === 2 ? '−' : '+'">+</span>
                </button>
                <div x-show="openFaq === 2" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Proto samples in available stock fabric are dispatched within 5 to 7 days. Lab dips (Pantone color match approvals) take 3 to 5 days. Full pre-production (PP) samples in actual bulk yardage take 10 to 14 days.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-brand-navy">
                    <span>What shipping incoterms do you operate under?</span>
                    <span class="text-brand-gold font-bold text-base" x-text="openFaq === 3 ? '−' : '+'">+</span>
                </button>
                <div x-show="openFaq === 3" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    We commonly quote FOB Chittagong Port or FOB Dhaka Airport. We also handle CFR (Cost & Freight) or CIF (Cost, Insurance & Freight) upon buyer request, working closely with global freight forwarders like Maersk, MSC, Expeditors, and DHL Global Forwarding.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-brand-navy">
                    <span>Can our third-party auditing agency inspect the factory?</span>
                    <span class="text-brand-gold font-bold text-base" x-text="openFaq === 4 ? '−' : '+'">+</span>
                </button>
                <div x-show="openFaq === 4" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Absolutely. We actively welcome third-party audits by SGS, Intertek, Bureau Veritas, QIMA, or the buyer’s nominated audit team. We coordinate all logistics, factory line access, and documentation reviews seamlessly.
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-16 bg-white text-center border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 border border-brand-gold/30 text-xs uppercase font-bold tracking-widest text-brand-navy shadow-sm">
            Commercial Partnership
        </span>
        <h2 class="text-3xl font-serif font-bold text-brand-navy">Ready to Discuss Your Buying Program?</h2>
        <p class="text-slate-600 text-sm max-w-xl mx-auto">
            Connect directly with our Managing Director & CEO, Md. Ataul Hai, for commercial discussions, costing inquiries, or trial orders.
        </p>
        <div class="pt-2 flex flex-wrap items-center justify-center gap-4">
            <button @click="rfqModalOpen = true" class="px-7 py-3 rounded-xl bg-brand-navy text-brand-gold font-bold uppercase tracking-wider text-xs hover:bg-brand-navy-light transition-all shadow-md">
                Submit RFQ Inquiry
            </button>
            <a href="https://wa.me/8801711234725" target="_blank" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs uppercase tracking-wider transition-all shadow-md">
                Direct WhatsApp (+88 01711234725)
            </a>
        </div>
    </div>
</section>
@endsection
