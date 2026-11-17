@extends('layouts.public')

@section('title', 'Quality Assurance & Compliance Certifications | Texora Sourcing')
@section('meta_description', 'Discover Texora Sourcing 5-tier quality assurance system and certified partner factories adhering to Accord, RSC, WRAP, Sedex, BSCI, OEKO-TEX, GOTS, and ISO 9001 standards.')

@section('content')
<!-- Header Banner -->
<section class="bg-gradient-to-b from-slate-50 via-white to-slate-50 py-16 text-slate-900 border-b border-slate-200/80">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-50 border border-brand-gold/30 text-xs uppercase font-bold tracking-widest text-brand-navy">
                <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                Safety, Integrity & Standards
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-brand-navy mt-3">
                Quality You Can Rely On
            </h1>
            <p class="text-base text-slate-600 mt-3 leading-relaxed">
                Zero compromise on quality and international ethical standards. Discover our 5-pillar QA framework, laboratory testing protocols, and world-class factory certifications.
            </p>
        </div>
    </div>
</section>

<!-- 5-Tier Quality Assurance Framework (Slide 8) -->
<section class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200">
                    <img src="{{ asset('images/extracted/quality-sewing-inspection.jpg') }}" 
                         alt="Quality Assurance Sewing Inspection Texora Sourcing" 
                         class="w-full h-[480px] object-cover object-center">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/90 via-transparent to-transparent flex items-end p-6">
                        <div class="text-white space-y-1">
                            <span class="text-xs font-bold uppercase tracking-wider text-brand-gold">Quality Control Circles</span>
                            <h4 class="text-xl font-serif font-bold text-white">12 Dedicated QA Controllers</h4>
                            <p class="text-xs text-slate-300">Stationed daily on sewing lines, finishing sections, and packaging stations.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">5-Tier QA Framework</span>
                    <h2 class="text-3xl font-serif font-bold text-brand-navy mt-1">
                        How We Eliminate Defects Before Shipment
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        We operate an independent quality audit cell that reports directly to the Managing Director, ensuring that only certified, flawless garments are exported.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <div class="w-9 h-9 rounded-xl bg-brand-navy text-brand-gold font-bold text-sm flex items-center justify-center flex-shrink-0">
                            1
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-brand-navy">Quality Policy Alignment</h3>
                            <p class="text-xs text-slate-600 mt-0.5">
                                Maintained and shared with each buyer for optimum quality assurance as per their individual brand manuals, tolerances, and packaging requirements.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <div class="w-9 h-9 rounded-xl bg-brand-navy text-brand-gold font-bold text-sm flex items-center justify-center flex-shrink-0">
                            2
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-brand-navy">Academically Qualified Quality Team</h3>
                            <p class="text-xs text-slate-600 mt-0.5">
                                A skilled quality assurance team of 12 full-time inspectors with formal degrees in Textile Engineering and extensive apparel manufacturing experience.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <div class="w-9 h-9 rounded-xl bg-brand-navy text-brand-gold font-bold text-sm flex items-center justify-center flex-shrink-0">
                            3
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-brand-navy">Quality Control Circles (QCC)</h3>
                            <p class="text-xs text-slate-600 mt-0.5">
                                Continuous feedback loops adopted on factory production lines, dedicated to solving workplace problems, identifying bottlenecks, and eliminating seam defects.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <div class="w-9 h-9 rounded-xl bg-brand-navy text-brand-gold font-bold text-sm flex items-center justify-center flex-shrink-0">
                            4
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-brand-navy">Checking & Maintenance</h3>
                            <p class="text-xs text-slate-600 mt-0.5">
                                All goods checked before shipment, yarn lab-tested, daily in-line inspection (SPI, measurements, tension), and final inspection with metal/needle detection.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <div class="w-9 h-9 rounded-xl bg-brand-navy text-brand-gold font-bold text-sm flex items-center justify-center flex-shrink-0">
                            5
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-brand-navy">In-House Inspection & Tech Pack Adherence</h3>
                            <p class="text-xs text-slate-600 mt-0.5">
                                Full compliance with tech packs, approved golden counter-samples, and international workmanship standards in bulk production.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Laboratory Testing Protocols -->
<section class="py-16 bg-slate-50 border-t border-b border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">Physical & Chemical Testing</span>
            <h2 class="text-3xl font-serif font-bold text-brand-navy mt-1">
                Rigorous Laboratory Testing Standards
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                All raw fabrics and finished apparel undergo third-party laboratory verification (ITS, SGS, BV, or nominated labs) before export.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-xs text-slate-700">
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-2">
                <span class="font-bold text-brand-navy text-sm block">Color Fastness</span>
                <p class="text-slate-500">ISO 105 / AATCC 61 tested for fastness to home washing, perspiration, rubbing (wet & dry crocking), water, and artificial light.</p>
                <span class="text-brand-gold font-semibold block text-[11px]">Rating: Minimum Grade 4.0</span>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-2">
                <span class="font-bold text-brand-navy text-sm block">Dimensional Stability</span>
                <p class="text-slate-500">Shrinkage testing after 3 home washes (ISO 6330), torque/spirality verification, and stretch recovery retention.</p>
                <span class="text-brand-gold font-semibold block text-[11px]">Tolerance: Max ±3% to ±5%</span>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-2">
                <span class="font-bold text-brand-navy text-sm block">Fabric Physical Tests</span>
                <p class="text-slate-500">Bursting strength for knits, tensile & tear strength for woven garments, seam slippage, and Martindale pilling resistance.</p>
                <span class="text-brand-gold font-semibold block text-[11px]">Rating: Grade 3–4 after 2000 revs</span>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-2">
                <span class="font-bold text-brand-navy text-sm block">Safety & Chemical Limits</span>
                <p class="text-slate-500">OEKO-TEX 100 Class I/II limits: formaldehyde-free, azo dye-free, nickel-free metal snaps, lead-free zipper pulls, 9-point needle scan.</p>
                <span class="text-brand-gold font-semibold block text-[11px]">Standard: 100% Calibrated Needle Scan</span>
            </div>
        </div>
    </div>
</section>

<!-- Partner Factory Accreditations (Slide 11) -->
<section class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold">Global Compliance Standards</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Certified Partner Factories
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                "Our long-standing partnerships with top-tier Bangladeshi manufacturers combine expert craftsmanship, modern technology, and prestigious global certifications, so we can deliver sustainable, high-quality apparel to worldwide retail brands."
            </p>
        </div>

        <!-- Certifications Image from Slide 11 -->
        <div class="max-w-3xl mx-auto mb-12 p-6 bg-slate-50 rounded-3xl border border-slate-200 flex items-center justify-center">
            <img src="{{ asset('images/extracted/certifications-card-v2.png') }}" 
                 alt="Certified Partner Factories: Accord, RSC, WRAP, Sedex, BSCI, Higg Index, ISO, OEKO-TEX, GOTS" 
                 class="w-full max-h-40 object-contain">
        </div>

        <!-- Detailed Breakdown of 8 Key Certifications -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-brand-navy text-base">ACCORD / RSC</span>
                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 text-[10px] font-bold rounded">Safety</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    100% adherence to RMG Sustainability Council (RSC) fire, building, and electrical safety standards across all partner units.
                </p>
            </div>

            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-brand-navy text-base">WRAP</span>
                    <span class="px-2 py-0.5 bg-blue-100 text-blue-800 text-[10px] font-bold rounded">Social</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Worldwide Responsible Accredited Production (Gold & Platinum facilities) guaranteeing lawful, humane, and ethical manufacturing.
                </p>
            </div>

            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-brand-navy text-base">Sedex SMETA</span>
                    <span class="px-2 py-0.5 bg-purple-100 text-purple-800 text-[10px] font-bold rounded">Ethical</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    4-Pillar SMETA audits covering Labor Standards, Health & Safety, Environmental Assessment, and Business Ethics.
                </p>
            </div>

            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-brand-navy text-base">BSCI & C-TPAT</span>
                    <span class="px-2 py-0.5 bg-indigo-100 text-indigo-800 text-[10px] font-bold rounded">Security</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Business Social Compliance Initiative and Customs-Trade Partnership Against Terrorism security procedures for North American exports.
                </p>
            </div>

            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-brand-navy text-base">OEKO-TEX 100</span>
                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 text-[10px] font-bold rounded">Eco</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Testing of every thread, button, and fabric accessory for hundreds of regulated and non-regulated harmful chemicals.
                </p>
            </div>

            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-brand-navy text-base">GOTS & GRS</span>
                    <span class="px-2 py-0.5 bg-teal-100 text-teal-800 text-[10px] font-bold rounded">Sustainable</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Global Organic Textile Standard for certified organic fibers and Global Recycled Standard for recycled cotton/polyester chains of custody.
                </p>
            </div>

            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-brand-navy text-base">Higg Index</span>
                    <span class="px-2 py-0.5 bg-amber-100 text-amber-800 text-[10px] font-bold rounded">Verification</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Verified FEM (Environmental Module) and FSLM (Social & Labor Module) benchmarking carbon footprints, water consumption, and chemical management.
                </p>
            </div>

            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-brand-navy text-base">ISO 9001 & 14001</span>
                    <span class="px-2 py-0.5 bg-slate-100 text-slate-800 text-[10px] font-bold rounded">QMS</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Certified Quality Management and Environmental Management Systems delivering consistent process repeatability and waste reduction.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Buyer Audit Invitation CTA -->
<section class="py-16 bg-slate-50 text-center border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-brand-gold/30 text-xs uppercase font-bold tracking-widest text-brand-navy shadow-sm">
            Compliance & Audits
        </span>
        <h2 class="text-3xl font-serif font-bold text-brand-navy">Require Specific Factory Compliance Certifications?</h2>
        <p class="text-slate-600 text-sm max-w-xl mx-auto">
            Contact us to request current audit reports, RSC certificates, or schedule an in-person compliance audit for your retailer account.
        </p>
        <div class="pt-2">
            <button @click="rfqModalOpen = true" class="px-8 py-3.5 rounded-xl bg-brand-navy text-brand-gold font-bold uppercase tracking-wider text-xs hover:bg-brand-navy-light transition-all shadow-md">
                Request Factory Audit Documents
            </button>
        </div>
    </div>
</section>
@endsection
