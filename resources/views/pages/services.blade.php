@extends('layouts.public')

@section('title', 'Sourcing Services & Process | Texora Sourcing Bangladesh')
@section('meta_description', 'Discover Texora Sourcing eight pillars of customer satisfaction and our complete sourcing journey from sample development to factory inspection and on-time shipment.')

@section('content')
<!-- Header Banner (White & Off-White Blend) -->
<section class="bg-gradient-to-b from-slate-50 via-white to-slate-50 py-16 text-slate-900 relative overflow-hidden border-b border-slate-200/80">
    <div class="absolute inset-0 opacity-25 pointer-events-none" style="background-image: radial-gradient(#c7972d 0.75px, transparent 0.75px); background-size: 24px 24px;"></div>
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="max-w-3xl">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Our Services & Process</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-brand-navy mt-1">
                Customer Satisfaction Is Our Commitment
            </h1>
            <p class="text-base text-slate-600 mt-3 leading-relaxed">
                Texora Sourcing welcomes all prospective buyers to visit and evaluate our service. Discover our 8 sourcing pillars and disciplined execution from sample to shipment.
            </p>
        </div>
    </div>
</section>

<!-- The 8 Pillars of Customer Satisfaction (Slide 6) (Crisp White) -->
<section id="pillars" class="py-20 bg-white border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Service Excellence</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                The 8 Core Sourcing Pillars
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                Designed to deliver complete transparency, rapid communication, and zero-defect bulk execution for global retailers.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- 01 Enquiries & Orders -->
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <span class="text-2xl font-serif font-bold text-brand-gold-dark">01</span>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Enquiries & Orders</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Quick response to buyer enquiries and orders, handled simultaneously with automated tracking systems.
                </p>
            </div>

            <!-- 02 Buyer Visits -->
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <span class="text-2xl font-serif font-bold text-brand-gold-dark">02</span>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Buyer Visits</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We coordinate visits of foreign buyers to Bangladesh, including airport reception, hotel logistics, and guided factory tours.
                </p>
            </div>

            <!-- 03 Vendor Arrangement -->
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <span class="text-2xl font-serif font-bold text-brand-gold-dark">03</span>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Vendor Arrangement</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Vendors and manufacturing units strategically matched to your exact product type, volume requirements, and compliance level.
                </p>
            </div>

            <!-- 04 Factory Inspection -->
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-2xl font-serif font-bold text-brand-gold-dark">04</span>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Factory Inspection</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We arrange transparent factory inspections by the buyer, facilitating direct audits of machinery, worker safety, and environmental controls.
                </p>
            </div>

            <!-- 05 Material Sourcing -->
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <span class="text-2xl font-serif font-bold text-brand-gold-dark">05</span>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Material Sourcing</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Raw materials, labels, printing and fabric from import, local or buyer-nominated sources, ensuring absolute fiber authenticity.
                </p>
            </div>

            <!-- 06 Production & QC -->
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <span class="text-2xl font-serif font-bold text-brand-gold-dark">06</span>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Production & QC</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We monitor production daily with in-line and final QC inspections, sending structured digital photo updates directly to the buyer.
                </p>
            </div>

            <!-- 07 On-Time Shipment -->
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                        </svg>
                    </div>
                    <span class="text-2xl font-serif font-bold text-brand-gold-dark">07</span>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">On-Time Shipment</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We ensure on-time delivery and container shipment (45 days T/T, 60–90 days L/C) with complete export documentation and customs clearance.
                </p>
            </div>

            <!-- 08 Care for Every Buyer -->
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <span class="text-2xl font-serif font-bold text-brand-gold-dark">08</span>
                </div>
                <h3 class="text-base font-bold text-brand-navy mb-2">Care for Every Buyer</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    New buyers get the same care, transparency, and technical attention as our large volume recurring accounts.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Deep Dive: From Sample to Shipment Detailed Workflow (Off-White Section) -->
<section class="py-20 bg-slate-50 border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Step-by-Step Sourcing Workflow</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                The Complete Sourcing Journey
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                How an idea on a tech pack transforms into retail-ready apparel delivered to your port of destination.
            </p>
        </div>

        <div class="space-y-8 relative before:absolute before:inset-0 before:left-8 sm:before:left-1/2 before:w-0.5 before:bg-brand-gold/30">
            
            <!-- Step 1 -->
            <div class="relative flex flex-col sm:flex-row items-center">
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pr-8 pl-16 sm:pl-0">
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm w-full">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 01</span>
                        <h3 class="text-lg font-serif font-bold text-brand-navy mt-1">Factory Matching & Due Diligence</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            We evaluate each partner factory's capacity, needle lines, environmental control, electrical safety, and labor practices to confirm fit for the buyer's schedule.
                        </p>
                    </div>
                </div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-8 h-8 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center">1</div>
                <div class="hidden sm:block w-1/2"></div>
            </div>

            <!-- Step 2 -->
            <div class="relative flex flex-col sm:flex-row items-center">
                <div class="hidden sm:block w-1/2"></div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-8 h-8 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center">2</div>
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pl-8 pl-16">
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm w-full">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 02</span>
                        <h3 class="text-lg font-serif font-bold text-brand-navy mt-1">Fabric & Trim Sourcing</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            On order placement, we check and control yarn quality, knit/woven greige fabric, dyes, labels, zippers, and packaging trims from certified local or imported sources.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative flex flex-col sm:flex-row items-center">
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pr-8 pl-16 sm:pl-0">
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm w-full">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 03</span>
                        <h3 class="text-lg font-serif font-bold text-brand-navy mt-1">Proto & Pre-Production (PP) Sampling</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Samples follow the buyer's CAD design, fabric GSM, shrinkage allowance, and color fastness. Bulk cutting starts ONLY after buyer approved "Golden Sample".
                        </p>
                    </div>
                </div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-8 h-8 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center">3</div>
                <div class="hidden sm:block w-1/2"></div>
            </div>

            <!-- Step 4 -->
            <div class="relative flex flex-col sm:flex-row items-center">
                <div class="hidden sm:block w-1/2"></div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-8 h-8 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center">4</div>
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pl-8 pl-16">
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm w-full">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 04</span>
                        <h3 class="text-lg font-serif font-bold text-brand-navy mt-1">Bulk Production & In-Line QC</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Continuous in-line inspections by our 12 QC specialists. Quality Control Circles monitor needle points, stitch SPI, measurements, and seam strength daily.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="relative flex flex-col sm:flex-row items-center">
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pr-8 pl-16 sm:pl-0">
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm w-full">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 05</span>
                        <h3 class="text-lg font-serif font-bold text-brand-navy mt-1">Final AQL 2.5 Inspection & Shipment</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Comprehensive random sampling according to international AQL 2.5 level II standard. Needle detection, barcode verification, carton packing, and port logistics.
                        </p>
                    </div>
                </div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-8 h-8 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center">5</div>
                <div class="hidden sm:block w-1/2"></div>
            </div>

        </div>
    </div>
</section>

<!-- Dedicated Foreign Buyer Visit Coordination Section (Crisp White Card) -->
<section id="visit" class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="bg-slate-50 text-slate-800 rounded-3xl p-8 sm:p-12 border-2 border-brand-gold/30 shadow-xl relative overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <div class="lg:col-span-7 space-y-4">
                    <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Visiting Bangladesh?</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy">
                        Comprehensive Foreign Buyer Visit Coordination
                    </h2>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        "Texora Sourcing welcomes all prospective buyers to visit and evaluate our service." We take full care of your on-the-ground itinerary in Dhaka so you can inspect factories with zero hassle.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 text-xs">
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 shadow-sm">
                            <strong class="text-brand-navy block font-bold mb-1">Airport Reception:</strong>
                            Pick-up & drop-off from Hazrat Shahjalal International Airport (DAC), just 10 mins from our Uttara office.
                        </div>
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 shadow-sm">
                            <strong class="text-brand-navy block font-bold mb-1">Hotel Arrangements:</strong>
                            Recommendations and corporate rates at international 5-star hotels in Uttara / Gulshan / Banani.
                        </div>
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 shadow-sm">
                            <strong class="text-brand-navy block font-bold mb-1">Factory Floor Audits:</strong>
                            Escorted site visits to knitting, weaving, dyeing, printing, and automated laundry facilities.
                        </div>
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 shadow-sm">
                            <strong class="text-brand-navy block font-bold mb-1">Sample Showroom Reviews:</strong>
                            Direct fit sessions with live patternmakers and development merchandisers in our office.
                        </div>
                    </div>

                    <div class="pt-4 flex flex-wrap items-center gap-4">
                        <a href="https://wa.me/8801711234725?text=Hello%20Md.%20Ataul%20Hai,%20I%20am%20planning%20a%20buyer%20visit%20to%20Dhaka%20and%20would%20like%20to%20coordinate%20with%20Texora%20Sourcing." 
                           target="_blank"
                           class="px-6 py-3 rounded-xl bg-brand-gold text-brand-navy font-bold uppercase tracking-wider text-xs hover:bg-brand-gold-light transition-all shadow">
                            Coordinate Visit via WhatsApp &rarr;
                        </a>
                        <a href="{{ route('contact') }}#visit-form" class="px-5 py-3 rounded-xl bg-white text-brand-navy font-semibold text-xs border border-slate-300 hover:bg-slate-100 transition-all">
                            Submit Visit Schedule
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm space-y-4 text-xs text-slate-700">
                        <h4 class="font-bold text-brand-navy uppercase tracking-wider text-sm border-b pb-2">Dhaka Office Logistics</h4>
                        <div>
                            <span class="text-slate-500 block">Corporate Address:</span>
                            <span class="text-brand-navy font-semibold">33, Garib-E-Newaz Avenue, Sector-11, Uttara, Dhaka-1230, Bangladesh</span>
                        </div>
                        <div>
                            <span class="text-slate-500 block">Airport Proximity:</span>
                            <span class="text-emerald-700 font-bold">10–15 Minutes Drive from DAC Airport</span>
                        </div>
                        <div>
                            <span class="text-slate-500 block">Host & Contact:</span>
                            <span class="text-slate-900 font-bold">Md. Ataul Hai, Managing Director & CEO</span>
                            <span class="text-brand-gold-dark block font-mono font-bold">+88 01711234725</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
