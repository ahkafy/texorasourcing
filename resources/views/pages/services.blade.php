@extends('layouts.public')

@section('title', 'Sourcing Services & Process | Texora Sourcing Bangladesh')
@section('meta_description', 'Discover Texora Sourcing eight pillars of customer satisfaction and our complete sourcing journey from sample development to factory inspection and on-time shipment.')

@section('content')
<!-- Header Banner (Full-Bleed Luxury Editorial Hero with Background Image) -->
<section class="relative py-24 sm:py-28 bg-brand-navy text-white overflow-hidden border-b border-brand-gold/30">
    <!-- Full-Bleed Architectural Background -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/luxury/modern-factory-floor.jpg') }}"
             alt="Modern Compliant Apparel Manufacturing Floor"
             class="w-full h-full object-cover object-center opacity-35">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-navy via-brand-navy/85 to-brand-navy/65"></div>
    </div>

    <!-- Textile Atelier Watermarks -->
    <x-textile-watermark motif="fabric-roll" class="absolute -right-12 -bottom-12 w-96 h-96 text-brand-gold/[0.06] pointer-events-none select-none z-0" />
    <x-textile-watermark motif="sewing-machine" class="absolute -left-12 -top-12 w-80 h-80 text-white/[0.03] pointer-events-none select-none z-0" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/30 backdrop-blur-md border border-brand-gold/40 text-xs uppercase font-bold tracking-[0.2em] text-brand-gold">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                Our Services & Process
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mt-4 tracking-tight">
                Customer Satisfaction Is Our Commitment
            </h1>
            <div class="w-14 h-0.5 bg-gradient-to-r from-brand-gold via-amber-300 to-brand-gold mt-4 rounded-full"></div>
            <p class="text-base sm:text-lg text-slate-200 mt-4 leading-relaxed">
                Texora Sourcing welcomes all prospective buyers to visit and evaluate our service. Discover our 8 sourcing pillars and disciplined execution from sample to shipment.
            </p>
        </div>
    </div>
</section>

<!-- The 8 Pillars of Customer Satisfaction (Slide 6) (Crisp White with Editorial Visuals) -->
<section id="pillars" class="py-20 bg-white border-b border-slate-200/80 relative overflow-hidden">
    <!-- Watermarks: Multi-Motif Atelier Theme -->
    <x-textile-watermark motif="shears" class="absolute -right-16 top-10 w-96 h-96 text-brand-gold/[0.035] pointer-events-none select-none" />
    <x-textile-watermark motif="mannequin" class="absolute -left-16 bottom-10 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="thread-spool" class="absolute left-1/2 -top-20 -translate-x-1/2 w-80 h-80 text-brand-gold/[0.025] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold-dark">Service Excellence</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-brand-navy mt-1">
                The 8 Core Sourcing Pillars
            </h2>
            <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold-dark via-brand-gold to-amber-300 mx-auto mt-3 rounded-full"></div>
            <p class="text-sm text-slate-600 mt-2">
                Designed to deliver complete transparency, rapid communication, and zero-defect bulk execution for global retailers.
            </p>
        </div>

        <!-- Editorial Dual Photo Gallery Banner -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 mb-12">
            <div class="md:col-span-7 relative rounded-3xl overflow-hidden h-64 sm:h-72 shadow-lg border border-slate-200 group">
                <img src="{{ asset('images/luxury/atelier-showroom.jpg') }}"
                     alt="Apparel Development & Merchandising Atelier"
                     class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-brand-navy/20 to-transparent flex items-end p-6">
                    <div class="text-white">
                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gold block">Merchandising & Development</span>
                        <p class="text-sm sm:text-base font-semibold">Dedicated account merchandisers managing every tech pack and colorway.</p>
                    </div>
                </div>
            </div>
            <div class="md:col-span-5 relative rounded-3xl overflow-hidden h-64 sm:h-72 shadow-lg border border-slate-200 group">
                <img src="{{ asset('images/luxury/tailoring-craft.jpg') }}"
                     alt="Bespoke Pattern Drafting and Sample Craftsmanship"
                     class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-brand-navy/20 to-transparent flex items-end p-6">
                    <div class="text-white">
                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gold block">Technical Mastery</span>
                        <p class="text-sm sm:text-base font-semibold">Precision pattern cutting and fit engineering before bulk launch.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- 01 Enquiries & Orders -->
            <div class="bg-slate-50 rounded-3xl p-6 border border-slate-200 hover:border-brand-gold hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold group-hover:scale-110 transition-transform">
                        <x-textile-icon name="techpack" class="w-5 h-5 text-brand-gold-dark" />
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
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold group-hover:scale-110 transition-transform">
                        <x-textile-icon name="mannequin" class="w-5 h-5 text-brand-gold-dark" />
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
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold group-hover:scale-110 transition-transform">
                        <x-textile-icon name="sewing-machine" class="w-5 h-5 text-brand-gold-dark" />
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
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold group-hover:scale-110 transition-transform">
                        <x-textile-icon name="magnifier-fabric" class="w-5 h-5 text-brand-gold-dark" />
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
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold group-hover:scale-110 transition-transform">
                        <x-textile-icon name="fabric-roll" class="w-5 h-5 text-brand-gold-dark" />
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
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold group-hover:scale-110 transition-transform">
                        <x-textile-icon name="measuring-tape" class="w-5 h-5 text-brand-gold-dark" />
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
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold group-hover:scale-110 transition-transform">
                        <x-textile-icon name="hanger" class="w-5 h-5 text-brand-gold-dark" />
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
                    <div class="w-10 h-10 rounded-xl bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold group-hover:scale-110 transition-transform">
                        <x-textile-icon name="cotton-boll" class="w-5 h-5 text-brand-gold-dark" />
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
<section class="py-20 bg-slate-50 border-b border-slate-200 relative overflow-hidden">
    <!-- Watermarks: Workflow & Craftsmanship -->
    <x-textile-watermark motif="weave" class="absolute -left-16 top-16 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="fabric-roll" class="absolute -right-16 bottom-16 w-96 h-96 text-brand-gold/[0.035] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Step-by-Step Sourcing Workflow</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                The Complete Sourcing Journey
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                How an idea on a tech pack transforms into retail-ready apparel delivered to your port of destination.
            </p>
        </div>

        <div class="space-y-10 relative before:absolute before:inset-0 before:left-8 sm:before:left-1/2 before:w-0.5 before:bg-brand-gold/30">
            
            <!-- Step 1 -->
            <div class="relative flex flex-col sm:flex-row items-center gap-6 sm:gap-0">
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pr-10 pl-16 sm:pl-0">
                    <div class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm w-full hover:border-brand-gold transition-colors">
                        <div class="flex items-center gap-2 mb-1">
                            <x-textile-icon name="sewing-machine" class="w-4 h-4 text-brand-gold-dark" />
                            <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 01</span>
                        </div>
                        <h3 class="text-lg font-bold text-brand-navy mt-1">Factory Matching & Due Diligence</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            We evaluate each partner factory's capacity, needle lines, environmental control, electrical safety, and labor practices to confirm fit for the buyer's schedule.
                        </p>
                    </div>
                </div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-9 h-9 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center shadow-md z-10">1</div>
                <div class="w-full sm:w-1/2 sm:pl-10 pl-16">
                    <div class="rounded-3xl overflow-hidden h-48 sm:h-52 border border-slate-200 shadow-md group">
                        <img src="{{ asset('images/luxury/modern-factory-floor.jpg') }}" alt="Factory Floor Due Diligence" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative flex flex-col sm:flex-row items-center gap-6 sm:gap-0">
                <div class="w-full sm:w-1/2 sm:pr-10 pl-16 sm:pl-0 order-2 sm:order-1">
                    <div class="rounded-3xl overflow-hidden h-48 sm:h-52 border border-slate-200 shadow-md group">
                        <img src="{{ asset('images/luxury/fabric-swatches-macro.jpg') }}" alt="Luxury Fabric and Trim Sourcing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-9 h-9 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center shadow-md z-10">2</div>
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pl-10 pl-16 order-1 sm:order-2">
                    <div class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm w-full hover:border-brand-gold transition-colors">
                        <div class="flex items-center gap-2 mb-1">
                            <x-textile-icon name="fabric-roll" class="w-4 h-4 text-brand-gold-dark" />
                            <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 02</span>
                        </div>
                        <h3 class="text-lg font-bold text-brand-navy mt-1">Fabric & Trim Sourcing</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            On order placement, we check and control yarn quality, knit/woven greige fabric, dyes, labels, zippers, and packaging trims from certified local or imported sources.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative flex flex-col sm:flex-row items-center gap-6 sm:gap-0">
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pr-10 pl-16 sm:pl-0">
                    <div class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm w-full hover:border-brand-gold transition-colors">
                        <div class="flex items-center gap-2 mb-1">
                            <x-textile-icon name="shears" class="w-4 h-4 text-brand-gold-dark" />
                            <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 03</span>
                        </div>
                        <h3 class="text-lg font-bold text-brand-navy mt-1">Proto & Pre-Production (PP) Sampling</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Samples follow the buyer's CAD design, fabric GSM, shrinkage allowance, and color fastness. Bulk cutting starts ONLY after buyer approved "Golden Sample".
                        </p>
                    </div>
                </div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-9 h-9 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center shadow-md z-10">3</div>
                <div class="w-full sm:w-1/2 sm:pl-10 pl-16">
                    <div class="rounded-3xl overflow-hidden h-48 sm:h-52 border border-slate-200 shadow-md group">
                        <img src="{{ asset('images/luxury/tailoring-craft.jpg') }}" alt="Proto and Pre-Production Sampling" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative flex flex-col sm:flex-row items-center gap-6 sm:gap-0">
                <div class="w-full sm:w-1/2 sm:pr-10 pl-16 sm:pl-0 order-2 sm:order-1">
                    <div class="rounded-3xl overflow-hidden h-48 sm:h-52 border border-slate-200 shadow-md group">
                        <img src="{{ asset('images/luxury/quality-lab-inspection.jpg') }}" alt="Bulk Production In-Line QC" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-9 h-9 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center shadow-md z-10">4</div>
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pl-10 pl-16 order-1 sm:order-2">
                    <div class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm w-full hover:border-brand-gold transition-colors">
                        <div class="flex items-center gap-2 mb-1">
                            <x-textile-icon name="measuring-tape" class="w-4 h-4 text-brand-gold-dark" />
                            <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 04</span>
                        </div>
                        <h3 class="text-lg font-bold text-brand-navy mt-1">Bulk Production & In-Line QC</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Continuous in-line inspections by our 12 QC specialists. Quality Control Circles monitor needle points, stitch SPI, measurements, and seam strength daily.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="relative flex flex-col sm:flex-row items-center gap-6 sm:gap-0">
                <div class="flex items-center justify-start w-full sm:w-1/2 sm:pr-10 pl-16 sm:pl-0">
                    <div class="bg-white p-6 sm:p-7 rounded-3xl border border-slate-200 shadow-sm w-full hover:border-brand-gold transition-colors">
                        <div class="flex items-center gap-2 mb-1">
                            <x-textile-icon name="magnifier-fabric" class="w-4 h-4 text-brand-gold-dark" />
                            <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Milestone 05</span>
                        </div>
                        <h3 class="text-lg font-bold text-brand-navy mt-1">Final AQL 2.5 Inspection & Shipment</h3>
                        <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                            Comprehensive random sampling according to international AQL 2.5 level II standard. Needle detection, barcode verification, carton packing, and port logistics.
                        </p>
                    </div>
                </div>
                <div class="absolute left-8 sm:left-1/2 -translate-x-1/2 w-9 h-9 rounded-full bg-brand-navy border-4 border-brand-gold text-white font-bold text-xs flex items-center justify-center shadow-md z-10">5</div>
                <div class="w-full sm:w-1/2 sm:pl-10 pl-16">
                    <div class="rounded-3xl overflow-hidden h-48 sm:h-52 border border-slate-200 shadow-md group">
                        <img src="{{ asset('images/luxury/export-logistics-garments.jpg') }}" alt="Final AQL Inspection and Global Shipment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Dedicated Foreign Buyer Visit Coordination Section (Crisp White Card) -->
<section id="visit" class="py-20 bg-white relative overflow-hidden">
    <!-- Watermarks: Hospitality & Atelier -->
    <x-textile-watermark motif="mannequin" class="absolute -right-16 bottom-8 w-96 h-96 text-brand-gold/[0.03] pointer-events-none select-none" />
    <x-textile-watermark motif="measuring-tape" class="absolute -left-16 -top-16 w-80 h-80 text-brand-navy/[0.025] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
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
                            <div class="flex items-center gap-1.5 mb-1 text-brand-navy font-bold">
                                <x-textile-icon name="hanger" class="w-4 h-4 text-brand-gold-dark" />
                                <strong>Airport Reception:</strong>
                            </div>
                            <span class="text-slate-600">Pick-up & drop-off from Hazrat Shahjalal International Airport (DAC), just 10 mins from our Uttara office.</span>
                        </div>
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 shadow-sm">
                            <div class="flex items-center gap-1.5 mb-1 text-brand-navy font-bold">
                                <x-textile-icon name="care-label" class="w-4 h-4 text-brand-gold-dark" />
                                <strong>Hotel Arrangements:</strong>
                            </div>
                            <span class="text-slate-600">Recommendations and corporate rates at international 5-star hotels in Uttara / Gulshan / Banani.</span>
                        </div>
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 shadow-sm">
                            <div class="flex items-center gap-1.5 mb-1 text-brand-navy font-bold">
                                <x-textile-icon name="sewing-machine" class="w-4 h-4 text-brand-gold-dark" />
                                <strong>Factory Floor Audits:</strong>
                            </div>
                            <span class="text-slate-600">Escorted site visits to knitting, weaving, dyeing, printing, and automated laundry facilities.</span>
                        </div>
                        <div class="p-3.5 bg-white rounded-2xl border border-slate-200 shadow-sm">
                            <div class="flex items-center gap-1.5 mb-1 text-brand-navy font-bold">
                                <x-textile-icon name="mannequin" class="w-4 h-4 text-brand-gold-dark" />
                                <strong>Sample Showroom Reviews:</strong>
                            </div>
                            <span class="text-slate-600">Direct fit sessions with live patternmakers and development merchandisers in our office.</span>
                        </div>
                    </div>

                    <div class="pt-4 flex flex-wrap items-center gap-4">
                        <a href="https://wa.me/8801711234725?text=Hello%20Md.%20Ataul%20Hai,%20I%20am%20planning%20a%20buyer%20visit%20to%20Dhaka%20and%20would%20like%20to%20coordinate%20with%20Texora%20Sourcing." 
                           target="_blank"
                           class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand-gold text-brand-navy font-bold uppercase tracking-wider text-xs hover:bg-brand-gold-light transition-all shadow">
                            <x-textile-icon name="mannequin" class="w-4 h-4" />
                            <span>Coordinate Visit via WhatsApp &rarr;</span>
                        </a>
                        <a href="{{ route('contact') }}#visit-form" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-white text-brand-navy font-semibold text-xs border border-slate-300 hover:bg-slate-100 transition-all">
                            <x-textile-icon name="techpack" class="w-4 h-4 text-brand-gold-dark" />
                            <span>Submit Visit Schedule</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 space-y-5">
                    <div class="relative rounded-3xl overflow-hidden h-52 shadow-lg border border-slate-200 group">
                        <img src="{{ asset('images/luxury/executive-atelier-office.jpg') }}"
                             alt="Texora Sourcing Executive Lounge Uttara Dhaka"
                             class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/85 via-transparent to-transparent flex items-end p-5">
                            <span class="text-xs font-semibold text-white">Executive Sample Review & Consultation Lounge</span>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm space-y-4 text-xs text-slate-700">
                        <h4 class="font-bold text-brand-navy uppercase tracking-wider text-sm border-b pb-2 flex items-center justify-between">
                            <span>Dhaka Office Logistics</span>
                            <x-textile-icon name="cotton-boll" class="w-4 h-4 text-brand-gold-dark" />
                        </h4>
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
