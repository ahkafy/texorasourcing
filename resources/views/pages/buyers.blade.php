@extends('layouts.public')

@section('title', 'Global Retail Markets & Commercial Terms | Texora Sourcing')
@section('meta_description', 'Discover how Texora Sourcing serves international retail buyers across North America, Europe, and Latin America with transparent 45-90 day lead times and tier-1 bank credentials.')

@section('content')
<!-- Header Banner (Full-Bleed Luxury Editorial Hero with Background Image) -->
<section class="relative py-24 sm:py-28 bg-brand-navy text-white border-b border-brand-gold/30 overflow-hidden">
    <!-- Full-Bleed International Flagship Boutique Background -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/luxury/global-retail-boutique.jpg') }}"
             alt="Global Luxury Fashion Retail Flagship Store"
             class="w-full h-full object-cover object-center opacity-35">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-navy via-brand-navy/85 to-brand-navy/60"></div>
    </div>

    <!-- Textile Watermarks -->
    <x-textile-watermark motif="fabric-roll" class="absolute -right-16 -bottom-16 w-96 h-96 text-brand-gold/[0.06] pointer-events-none select-none z-0" />
    <x-textile-watermark motif="shears" class="absolute -left-12 -top-12 w-80 h-80 text-white/[0.03] pointer-events-none select-none z-0" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/30 backdrop-blur-md border border-brand-gold/40 text-xs uppercase font-bold tracking-[0.2em] text-brand-gold shadow-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-gold animate-pulse"></span>
                Global Footprint & Commercial Policy
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mt-4 tracking-tight">
                Trusted by Global Retailers
            </h1>
            <div class="w-14 h-0.5 bg-gradient-to-r from-brand-gold via-amber-300 to-brand-gold mt-4 rounded-full"></div>
            <p class="text-base sm:text-lg text-slate-200 mt-4 leading-relaxed">
                Discover our global export markets across North America, Europe, and Latin America, our "Minimum Price, Maximum Quality" business policy, and transparent commercial banking credentials.
            </p>
        </div>
    </div>
</section>

<!-- Global Export Markets & Retail Channels (Crisp White with Watermark) -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Watermarks: Multi-Motif Atelier Theme -->
    <x-textile-watermark motif="mannequin" class="absolute -left-16 bottom-10 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="cotton-boll" class="absolute -right-16 top-10 w-96 h-96 text-brand-gold/[0.035] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold">Global Market Footprint</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-brand-navy mt-1">
                International Retail Segments We Serve
            </h2>
            <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mx-auto mt-3 rounded-full"></div>
            <p class="text-sm text-slate-600 mt-2">
                Delivering high-volume seasonal collections, fast-fashion replenishment, and staple basics to prominent international retail chains under strict buyer confidentiality.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Segment 1 -->
            <div class="bg-slate-50 p-8 rounded-lg border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold text-brand-gold-dark uppercase tracking-wider">Department Stores</span>
                        <span class="text-xs font-semibold px-2.5 py-1 bg-white rounded-md border text-slate-700">North America</span>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy group-hover:text-brand-gold-dark transition-colors">Major Fashion Retailers</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Partnering with leading North American apparel retail powerhouses operating multi-store networks with diverse private label fashion divisions.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-200 text-xs text-slate-600 flex items-center gap-1.5 font-medium">
                    <x-textile-icon name="tshirt" class="w-4 h-4 text-brand-gold-dark" />
                    <span>Sourcing: Knitwear, Tops &amp; Outerwear</span>
                </div>
            </div>

            <!-- Segment 2 -->
            <div class="bg-slate-50 p-8 rounded-lg border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold text-brand-gold-dark uppercase tracking-wider">Omnichannel Chains</span>
                        <span class="text-xs font-semibold px-2.5 py-1 bg-white rounded-md border text-slate-700">Canada &amp; USA</span>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy group-hover:text-brand-gold-dark transition-colors">Fast-Fashion &amp; Basics</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Supporting fast-growing omnichannel apparel brands known for trend-responsive casualwear essentials, loungewear, and seasonal drops.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-200 text-xs text-slate-600 flex items-center gap-1.5 font-medium">
                    <x-textile-icon name="sweater" class="w-4 h-4 text-brand-gold-dark" />
                    <span>Sourcing: Knit Basics, Sweaters &amp; Lounge</span>
                </div>
            </div>

            <!-- Segment 3 -->
            <div class="bg-slate-50 p-8 rounded-lg border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold text-brand-gold-dark uppercase tracking-wider">Specialty Brands</span>
                        <span class="text-xs font-semibold px-2.5 py-1 bg-white rounded-md border text-slate-700">Europe &amp; UK</span>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy group-hover:text-brand-gold-dark transition-colors">Womenswear &amp; Tailored</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Engineering refined woven separates, tailored blouses, and fine-gauge knits for modern womenswear and contemporary fashion houses.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-200 text-xs text-slate-600 flex items-center gap-1.5 font-medium">
                    <x-textile-icon name="shirt" class="w-4 h-4 text-brand-gold-dark" />
                    <span>Sourcing: Blouses, Sweaters &amp; Separates</span>
                </div>
            </div>

            <!-- Segment 4 -->
            <div class="bg-slate-50 p-8 rounded-lg border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold text-brand-gold-dark uppercase tracking-wider">Volume Importers</span>
                        <span class="text-xs font-semibold px-2.5 py-1 bg-white rounded-md border text-slate-700">Brazil &amp; LATAM</span>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy group-hover:text-brand-gold-dark transition-colors">Latin America Distribution</h3>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                        Supplying established South American apparel importers and wholesalers serving multi-store retail channels across Brazil and Latin America.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-200 text-xs text-slate-600 flex items-center gap-1.5 font-medium">
                    <x-textile-icon name="denim-pocket" class="w-4 h-4 text-brand-gold-dark" />
                    <span>Sourcing: Denim, Polos &amp; Seasonal Knits</span>
                </div>
            </div>

        </div>

        <div class="mt-8 text-center">
            <p class="text-xs text-slate-500 italic">
                Out of respect for our clients' commercial privacy and NDA commitments, individual retailer names are not disclosed publicly. Verified references are available during private consultations.
            </p>
        </div>
    </div>
</section>

<!-- Business Policy & What You Gain (Slide 9) -->
<section class="py-20 bg-slate-50 border-t border-b border-slate-200 relative overflow-hidden">
    <!-- Watermarks -->
    <x-textile-watermark motif="thread-spool" class="absolute -left-16 bottom-10 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="measuring-tape" class="absolute -right-16 top-10 w-96 h-96 text-brand-gold/[0.035] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5 space-y-6">
                <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">Our Core Policy</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy">
                    Minimum Price, Maximum Quality
                </h2>
                <div class="p-6 bg-white rounded-lg border border-slate-200 shadow-sm space-y-2">
                    <div class="flex items-center gap-2">
                        <span class="w-5 h-0.5 bg-brand-gold rounded-full"></span>
                        <span class="text-xs uppercase font-bold tracking-wider text-brand-gold-dark">The Texora Commitment</span>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed italic">
                        "Build long-term business relationships by offering the minimum price and providing the maximum quality, as a buying partner to clients worldwide."
                    </p>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    By eliminating unnecessary intermediary layers, consolidating raw material yarn purchasing, and utilizing automated production cells in Dhaka, we pass direct margin savings back to our retail buyers.
                </p>

                <!-- Editorial Atelier Visual -->
                <div class="relative rounded-lg overflow-hidden h-56 shadow-lg border border-slate-200 group">
                    <img src="{{ asset('images/luxury/atelier-showroom.jpg') }}"
                         alt="Texora Sourcing Merchandising Showroom"
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/85 via-transparent to-transparent flex items-end p-5">
                        <div class="text-white">
                            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gold block">Direct Margin Advantage</span>
                            <span class="text-xs font-medium text-white/95">Factory-Direct Costing with Full Technical Oversight</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- What You Gain 5 Pillars (Slide 9) -->
            <div class="lg:col-span-7 space-y-3">
                <h3 class="text-base font-bold text-brand-navy uppercase tracking-wider text-xs mb-4">What You Gain as an International Buyer</h3>

                <div class="flex items-start space-x-3.5 p-4 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-brand-gold transition-colors">
                    <div class="w-9 h-9 rounded-xl bg-brand-gold/20 text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">
                        <x-textile-icon name="techpack" class="w-5 h-5 text-brand-navy" />
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-brand-navy">Sharper Company Focus and Lower Operating Costs</h4>
                        <p class="text-xs text-slate-600 mt-0.5">Free up your internal team's bandwidth while our 34 in-house specialists handle Dhaka factory monitoring.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3.5 p-4 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-brand-gold transition-colors">
                    <div class="w-9 h-9 rounded-xl bg-brand-gold/20 text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">
                        <x-textile-icon name="sewing-machine" class="w-5 h-5 text-brand-navy" />
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-brand-navy">Access to World-Class Capabilities</h4>
                        <p class="text-xs text-slate-600 mt-0.5">Benefit from automated computerized knitting, laser washing, automated spreaders, and certified QA laboratories.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3.5 p-4 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-brand-gold transition-colors">
                    <div class="w-9 h-9 rounded-xl bg-brand-gold/20 text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">
                        <x-textile-icon name="fabric-roll" class="w-5 h-5 text-brand-navy" />
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-brand-navy">Access to Resources Not Available Internally</h4>
                        <p class="text-xs text-slate-600 mt-0.5">Leverage direct mill allocations for specialty cottons, sustainable fibers, and imported technical trims.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3.5 p-4 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-brand-gold transition-colors">
                    <div class="w-9 h-9 rounded-xl bg-brand-gold/20 text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">
                        <x-textile-icon name="weave" class="w-5 h-5 text-brand-navy" />
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-brand-navy">Diversified Range Through Multi-Country Sourcing</h4>
                        <p class="text-xs text-slate-600 mt-0.5">Flexibility to blend local fabrics with nominated overseas yarns and accessories for brand consistency.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3.5 p-4 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-brand-gold transition-colors">
                    <div class="w-9 h-9 rounded-xl bg-brand-gold/20 text-brand-navy flex-shrink-0 flex items-center justify-center font-bold text-xs">
                        <x-textile-icon name="measuring-tape" class="w-5 h-5 text-brand-navy" />
                    </div>
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
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Watermarks -->
    <x-textile-watermark motif="button" class="absolute -left-16 bottom-10 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="hanger" class="absolute -right-16 top-10 w-96 h-96 text-brand-gold/[0.035] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">Financial Security</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Commercial Terms & Banking Credentials
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                Clear, transparent payment modes and premier banking partners for complete financial reliability.
            </p>
        </div>

        <!-- Export Trade Logistics Visual Banner -->
        <div class="max-w-4xl mx-auto mb-10 relative rounded-lg overflow-hidden h-52 sm:h-60 shadow-xl border border-slate-200 group">
            <img src="{{ asset('images/luxury/export-logistics-garments.jpg') }}"
                 alt="Export Ready Apparel Shipments Worldwide"
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-navy/90 via-brand-navy/55 to-transparent flex items-center p-8">
                <div class="max-w-md text-white space-y-1.5">
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gold block">International Trade Security</span>
                    <h3 class="text-xl sm:text-2xl font-bold text-white">Reliable L/C & Express T/T Export Fulfillment</h3>
                    <p class="text-xs text-slate-200 leading-relaxed">Backed by BRAC Bank PLC. with seamless FOB Chittagong & Air Freight dispatch.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            
            <!-- Payment Methods Card -->
            <div class="bg-slate-50 p-8 rounded-lg border border-slate-200 shadow-sm space-y-4">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-gold">Mode of Payment</span>
                <h3 class="text-2xl font-serif font-bold text-brand-navy">Accepted Payment Modes</h3>
                
                <div class="space-y-4 text-xs text-slate-700 pt-2">
                    <div class="p-4 bg-white rounded-xl border">
                        <strong class="text-brand-navy block text-sm font-bold mb-1 flex items-center gap-1.5">
                            <x-textile-icon name="fabric-roll" class="w-4 h-4 text-brand-gold-dark" />
                            <span>1. Irrevocable Letter of Credit (L/C) at Sight</span>
                        </strong>
                        <p class="text-slate-600">Standard international trade method. Bulk production lead time is <strong>60 to 90 days</strong> after receipt of operative L/C.</p>
                    </div>
                    <div class="p-4 bg-white rounded-xl border">
                        <strong class="text-brand-navy block text-sm font-bold mb-1 flex items-center gap-1.5">
                            <x-textile-icon name="measuring-tape" class="w-4 h-4 text-brand-gold-dark" />
                            <span>2. Telegraphic Transfer (T/T)</span>
                        </strong>
                        <p class="text-slate-600">Accelerated production cycle. Bulk export lead time is <strong>45 days</strong> for fast replenishment and capsule collections.</p>
                    </div>
                </div>
                <p class="text-[11px] text-slate-500 italic">
                    "Timing depends on product quantity. We know the value of time and keep our commitment."
                </p>
            </div>

            <!-- Official Bank Details Card (Slide 5) -->
            <div class="bg-slate-50 p-8 rounded-lg border border-slate-200 shadow-sm space-y-4">
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
            
            <div class="bg-white rounded-lg border border-slate-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-brand-navy">
                    <span>What are your standard Minimum Order Quantities (MOQ)?</span>
                    <span class="text-brand-gold font-bold text-base" x-text="openFaq === 1 ? '−' : '+'">+</span>
                </button>
                <div x-show="openFaq === 1" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Our standard MOQs are typically 1,000 pcs for knitwear, 1,200 pcs for woven shirts/pants, and 800 pcs for sweaters per style. However, for new retail buyers testing the market, we frequently accommodate flexible trial quantities and multi-colorway allocations.
                </div>
            </div>

            <div class="bg-white rounded-lg border border-slate-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-brand-navy">
                    <span>How long does counter-sampling and lab dip approval take?</span>
                    <span class="text-brand-gold font-bold text-base" x-text="openFaq === 2 ? '−' : '+'">+</span>
                </button>
                <div x-show="openFaq === 2" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Proto samples in available stock fabric are dispatched within 5 to 7 days. Lab dips (Pantone color match approvals) take 3 to 5 days. Full pre-production (PP) samples in actual bulk yardage take 10 to 14 days.
                </div>
            </div>

            <div class="bg-white rounded-lg border border-slate-200 overflow-hidden shadow-sm">
                <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-brand-navy">
                    <span>What shipping incoterms do you operate under?</span>
                    <span class="text-brand-gold font-bold text-base" x-text="openFaq === 3 ? '−' : '+'">+</span>
                </button>
                <div x-show="openFaq === 3" class="px-5 pb-5 text-xs text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    We commonly quote FOB Chittagong Port or FOB Dhaka Airport. We also handle CFR (Cost & Freight) or CIF (Cost, Insurance & Freight) upon buyer request, working closely with global freight forwarders like Maersk, MSC, Expeditors, and DHL Global Forwarding.
                </div>
            </div>

            <div class="bg-white rounded-lg border border-slate-200 overflow-hidden shadow-sm">
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

<!-- Bottom CTA (Full-Bleed Luxury Executive Lounge Banner) -->
<section class="relative py-20 bg-brand-navy text-white text-center border-t border-brand-gold/30 overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/luxury/executive-atelier-office.jpg') }}"
             alt="Texora Sourcing Executive Consultation Lounge"
             class="w-full h-full object-cover object-center opacity-30">
        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy via-brand-navy/85 to-brand-navy/80"></div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5 relative z-10">
        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/30 backdrop-blur-md border border-brand-gold/40 text-xs uppercase font-bold tracking-[0.2em] text-brand-gold shadow-sm">
            Commercial Partnership
        </span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight">Ready to Discuss Your Buying Program?</h2>
        <p class="text-slate-200 text-sm sm:text-base max-w-xl mx-auto leading-relaxed">
            Connect directly with our Managing Director & CEO, Md. Ataul Hai, for commercial discussions, costing inquiries, or trial orders.
        </p>
        <div class="pt-2 flex flex-wrap items-center justify-center gap-4">
            <button @click="rfqModalOpen = true" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 text-brand-navy font-bold uppercase tracking-wider text-xs hover:from-amber-300 hover:to-amber-400 transition-all shadow-xl">
                <x-textile-icon name="techpack" class="w-4 h-4" />
                <span>Submit RFQ Inquiry</span>
            </button>
            <a href="https://wa.me/8801711234725" target="_blank" class="px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs uppercase tracking-wider transition-all shadow-xl">
                Direct WhatsApp (+88 01711234725)
            </a>
        </div>
    </div>
</section>
@endsection
