@extends('layouts.public')

@section('title', 'About Us & Leadership | Texora Sourcing Bangladesh')
@section('meta_description', 'Learn about Texora Sourcing, founded in 2015 in Dhaka, Bangladesh. Led by Md. Ataul Hai with 19+ years of apparel experience and 34 in-house textile professionals.')

@section('content')
<!-- Page Header Banner (Full-Bleed Luxury Editorial Hero with Background Image) -->
<section class="relative py-24 sm:py-28 bg-brand-navy text-white overflow-hidden border-b border-brand-gold/30">
    <!-- Full-Bleed Architectural Background -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/luxury/atelier-showroom.jpg') }}"
             alt="Texora Sourcing Dhaka Fashion Atelier"
             class="w-full h-full object-cover object-center opacity-35">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-navy via-brand-navy/85 to-brand-navy/65"></div>
    </div>

    <!-- Textile Watermarks -->
    <x-textile-watermark motif="mannequin" class="absolute -right-10 -bottom-10 w-96 h-96 text-brand-gold/[0.06] pointer-events-none select-none z-0" />
    <x-textile-watermark motif="shears" class="absolute -left-12 -top-12 w-80 h-80 text-white/[0.03] pointer-events-none select-none z-0" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/30 backdrop-blur-md border border-brand-gold/40 text-xs uppercase font-bold tracking-[0.2em] text-brand-gold">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                About Texora Sourcing
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mt-4 tracking-tight">
                Your Trusted Global-Local Partner in Garment Sourcing
            </h1>
            <div class="w-14 h-0.5 bg-gradient-to-r from-brand-gold via-amber-300 to-brand-gold mt-4 rounded-full"></div>
            <p class="text-base sm:text-lg text-slate-200 mt-4 leading-relaxed">
                Founded in 2015 in Dhaka, Bangladesh, Texora Sourcing has built a legacy of technical precision, strict compliance, and collaborative retail partnerships.
            </p>
        </div>
    </div>
</section>

<!-- Company Background & Introduction (Slide 2 & 3) (Crisp White with Watermarks) -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Watermarks: Multi-Motif Atelier Theme -->
    <x-textile-watermark motif="sewing-machine" class="absolute -right-16 top-10 w-96 h-96 text-brand-gold/[0.035] pointer-events-none select-none" />
    <x-textile-watermark motif="measuring-tape" class="absolute -left-16 bottom-10 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none" />
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Our Foundation</span>
                <h2 class="text-3xl font-serif font-bold text-brand-navy">
                    Built on Integrity, Reliability, and Operational Discipline
                </h2>
                
                <p class="text-slate-600 text-sm leading-relaxed">
                    Texora Sourcing Bangladesh is an end-to-end sourcing and manufacturing platform serving leading international fashion brands and department stores across Canada, Brazil, the United States, and Europe.
                </p>

                <p class="text-slate-600 text-sm leading-relaxed">
                    We bridge the critical gap between overseas retail buyers and high-capacity Bangladeshi production units. Apparel sourcing is not merely transactional; it requires disciplined hands-on execution, constant on-site technical inspection, and transparent supply chain management.
                </p>

                <div class="p-5 bg-slate-50 rounded-lg border border-slate-200 space-y-2">
                    <h4 class="font-bold text-sm text-brand-navy flex items-center gap-1.5">
                        <x-textile-icon name="cotton-boll" class="w-4 h-4 text-brand-gold-dark" />
                        <span>Strategic Dhaka Location</span>
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Headquartered in Uttara, Dhaka—just 10 minutes from Hazrat Shahjalal International Airport—our team coordinates factory visits, sample showroom reviews, and mill audits seamlessly for international delegations.
                    </p>
                </div>

                <div class="flex items-center gap-6 pt-2">
                    <div>
                        <div class="text-3xl font-serif font-bold text-brand-navy flex items-center gap-1.5">
                            <x-textile-icon name="sewing-machine" class="w-6 h-6 text-brand-gold-dark" />
                            <span>2015</span>
                        </div>
                        <div class="text-xs text-slate-500 font-semibold uppercase">Year Established</div>
                    </div>
                    <div class="h-10 w-px bg-slate-200"></div>
                    <div>
                        <div class="text-3xl font-serif font-bold text-brand-gold-dark flex items-center gap-1.5">
                            <x-textile-icon name="mannequin" class="w-6 h-6 text-brand-navy" />
                            <span>34</span>
                        </div>
                        <div class="text-xs text-slate-500 font-semibold uppercase">Textile Specialists</div>
                    </div>
                    <div class="h-10 w-px bg-slate-200"></div>
                    <div>
                        <div class="text-3xl font-serif font-bold text-emerald-600 flex items-center gap-1.5">
                            <x-textile-icon name="magnifier-fabric" class="w-6 h-6 text-emerald-600" />
                            <span>12</span>
                        </div>
                        <div class="text-xs text-slate-500 font-semibold uppercase">Full-Time QCs</div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-4">
                <div class="relative rounded-lg overflow-hidden shadow-2xl border border-slate-200 group">
                    <img src="{{ asset('images/luxury/atelier-showroom.jpg') }}" 
                         alt="Apparel Textiles Showroom Texora Sourcing" 
                         class="w-full h-80 sm:h-96 object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/90 via-brand-navy/20 to-transparent flex items-end p-8">
                        <div class="text-white">
                            <blockquote class="italic text-base sm:text-lg font-medium text-brand-gold-light">
                                "Our ultimate target is quality product and customer satisfaction!"
                            </blockquote>
                            <p class="text-xs text-slate-300 mt-1">Established 2015 • Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="relative rounded-lg overflow-hidden h-36 border border-slate-200 shadow-md group">
                        <img src="{{ asset('images/luxury/tailoring-craft.jpg') }}" alt="Tailoring Craftsmanship" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-transparent to-transparent flex items-end p-3.5">
                            <span class="text-xs font-semibold text-white">Pattern & Craft Mastery</span>
                        </div>
                    </div>
                    <div class="relative rounded-lg overflow-hidden h-36 border border-slate-200 shadow-md group">
                        <img src="{{ asset('images/luxury/modern-factory-floor.jpg') }}" alt="Compliant Partner Factories" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-transparent to-transparent flex items-end p-3.5">
                            <span class="text-xs font-semibold text-white">Certified Production Units</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Mission, Vision & Values (Full-Bleed Dark Textile Luxury Backdrop) -->
<section id="mission" class="py-24 bg-brand-navy border-t border-b border-brand-gold/30 relative overflow-hidden">
    <!-- Full-Bleed Luxury Fabric Background -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/luxury/fabric-swatches-macro.jpg') }}"
             alt="Luxury Apparel Textile Swatches"
             class="w-full h-full object-cover object-center opacity-25">
        <div class="absolute inset-0 bg-gradient-to-b from-brand-navy/90 via-brand-navy/85 to-brand-navy/95"></div>
    </div>

    <!-- Watermarks: Guiding Principles -->
    <x-textile-watermark motif="weave" class="absolute -right-16 -top-16 w-96 h-96 text-brand-gold/[0.05] pointer-events-none select-none z-0" />
    <x-textile-watermark motif="thread-spool" class="absolute -left-12 -bottom-12 w-80 h-80 text-white/[0.03] pointer-events-none select-none z-0" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold">Guiding Principles</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-1">
                Mission, Vision & Core Values
            </h2>
            <div class="w-12 h-0.5 bg-gradient-to-r from-brand-gold via-amber-300 to-brand-gold mx-auto mt-3 rounded-full"></div>
            <p class="text-sm text-slate-300 mt-3">
                A culture grounded in trust, human dignity, and long-term sustainable partnership.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Mission Card -->
            <div class="bg-white rounded-lg p-8 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-brand-gold transition-colors group">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold mb-6 group-hover:scale-110 transition-transform">
                        <x-textile-icon name="techpack" class="w-6 h-6 text-brand-gold-dark" />
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Our Mission</span>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy mt-1 mb-4">Mission</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        To be a trusted global-local partner in the apparel and fashion industry by delivering quality products with integrity, continuous automation and operational excellence, while upholding the highest standards of compliance, commitment, social responsibility and human dignity.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 text-xs text-brand-gold-dark font-semibold">
                    Global Quality • Local Mastery
                </div>
            </div>

            <!-- Vision Card -->
            <div class="bg-white rounded-lg p-8 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-brand-gold transition-colors group">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center font-bold mb-6 group-hover:scale-110 transition-transform">
                        <x-textile-icon name="mannequin" class="w-6 h-6 text-brand-gold-dark" />
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Our Vision</span>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy mt-1 mb-4">Vision</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        To build long-term partnerships grounded in integrity, responsibility and trust, creating value for our customers, empowering our communities, and conducting our business with deep respect for people, the environment and future generations.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 text-xs text-brand-gold-dark font-semibold">
                    Sustainability & Ethical Growth
                </div>
            </div>

            <!-- Values Card -->
            <div class="bg-white rounded-lg p-8 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-brand-gold/60 hover:shadow-md transition-all group">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-brand-gold/15 text-brand-gold-dark flex items-center justify-center font-bold mb-6 group-hover:scale-110 transition-transform">
                        <x-textile-icon name="cotton-boll" class="w-6 h-6 text-brand-gold-dark" />
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gold-dark">Foundational Values</span>
                    <h3 class="text-2xl font-serif font-bold text-brand-navy mt-1 mb-4">Values</h3>
                    
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                            <span><strong>Loyalty:</strong> Committed to lasting buyer trust</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                            <span><strong>Respect:</strong> Valuing workers and partners</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                            <span><strong>Honesty:</strong> Transparent costing and updates</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                            <span><strong>Teamwork:</strong> Collaborative execution</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                            <span><strong>Customer focus:</strong> Your timeline is our commitment</span>
                        </li>
                    </ul>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 text-xs text-brand-gold-dark italic font-semibold">
                    "A culture of trust and partnership."
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Leadership Profile: Md. Ataul Hai (Slide 12) (Luminous White Card) -->
<section id="leadership" class="py-20 bg-white relative overflow-hidden">
    <!-- Watermarks -->
    <x-textile-watermark motif="fabric-roll" class="absolute -right-16 -bottom-16 w-96 h-96 text-brand-gold/[0.035] pointer-events-none select-none" />
    <x-textile-watermark motif="shears" class="absolute -left-16 -top-16 w-80 h-80 text-brand-navy/[0.025] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="bg-brand-navy rounded-lg p-8 sm:p-12 text-white relative overflow-hidden shadow-2xl border border-brand-gold/40">
            <div class="absolute inset-0 z-0 pointer-events-none">
                <img src="{{ asset('images/luxury/executive-atelier-office.jpg') }}"
                     alt="Executive Consultation Studio"
                     class="w-full h-full object-cover object-center opacity-20">
                <div class="absolute inset-0 bg-gradient-to-r from-brand-navy via-brand-navy/90 to-brand-navy/75"></div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center relative z-10">
                
                <div class="lg:col-span-4 text-center lg:text-left space-y-4">
                    <span class="text-xs uppercase font-bold tracking-[0.2em] text-brand-gold">Executive Leadership</span>
                    <div class="text-7xl font-bold text-white tracking-tight">19+</div>
                    <div class="text-sm text-slate-300 font-medium">
                        Years of Hands-On Experience in Textiles and Apparel
                    </div>
                    <div class="pt-4 border-t border-white/15">
                        <h3 class="text-2xl font-bold text-white">Md. Ataul Hai</h3>
                        <p class="text-xs text-brand-gold uppercase tracking-wider font-bold">Managing Director & CEO</p>
                        <p class="text-xs text-slate-400 mt-1">Texora Sourcing Bangladesh</p>
                    </div>
                    <div class="pt-2">
                        <a href="https://wa.me/8801711234725" target="_blank" class="inline-flex items-center gap-1.5 px-4 py-2.5 bg-emerald-600 hover:bg-emerald-500 rounded-xl text-xs font-bold text-white transition-colors shadow-lg">
                            <x-textile-icon name="mannequin" class="w-3.5 h-3.5" />
                            <span>WhatsApp: +88 01711234725</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-8 bg-white/10 backdrop-blur-xl p-8 sm:p-10 rounded-lg border border-brand-gold/30 shadow-xl space-y-4">
                    <blockquote class="text-xl sm:text-2xl font-semibold italic text-white leading-relaxed">
                        "My journey has been built on precision, partnership and a deep technical understanding of garment manufacturing."
                    </blockquote>
                    <p class="text-sm text-slate-200 leading-relaxed">
                        "At Texora Sourcing, we bridge the gap between global buyers and local manufacturing excellence. Apparel sourcing is not merely transactional; it is built on collaborative partnerships, uncompromised quality, strict compliance and reliable execution."
                    </p>
                    <p class="text-sm text-slate-200 leading-relaxed">
                        "Whether you are seeking high-quality knitwear, premium sweaters or comprehensive apparel solutions, we welcome you to partner with us and experience garment manufacturing delivered with integrity and excellence."
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Organizational Structure & Team by Function (Slide 4) (Off-White Section) -->
<section id="team" class="py-20 bg-slate-50 border-t border-slate-200 relative overflow-hidden">
    <!-- Watermarks: Multi-Motif Team & Operations -->
    <x-textile-watermark motif="shears" class="absolute -left-16 bottom-10 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="fabric-roll" class="absolute -right-16 top-10 w-96 h-96 text-brand-gold/[0.035] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Our People</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-brand-navy mt-1">
                Organization & Team Structure
            </h2>
            <p class="text-sm text-slate-600 mt-2">
                A 34-member multidisciplinary organization dedicated to flawless merchandising, technical QA, and logistics.
            </p>
        </div>

        <!-- 3 Big Team Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-12">
            <div class="bg-white text-slate-800 p-6 rounded-lg text-center border border-slate-200 shadow-sm hover:shadow-md hover:border-brand-gold/60 transition-all">
                <div class="text-4xl font-bold text-brand-navy flex items-center justify-center gap-2">
                    <x-textile-icon name="mannequin" class="w-8 h-8 text-brand-gold-dark" />
                    <span>34</span>
                </div>
                <div class="text-xs uppercase tracking-wider font-semibold text-slate-500 mt-1">In-House Professionals</div>
            </div>
            <div class="bg-white text-slate-800 p-6 rounded-lg text-center border border-slate-200 shadow-sm hover:shadow-md hover:border-brand-gold/60 transition-all">
                <div class="text-4xl font-bold text-brand-gold-dark flex items-center justify-center gap-2">
                    <x-textile-icon name="magnifier-fabric" class="w-8 h-8 text-brand-gold" />
                    <span>12</span>
                </div>
                <div class="text-xs uppercase tracking-wider font-semibold text-slate-500 mt-1">Quality Controllers (QC)</div>
            </div>
            <div class="bg-white text-slate-800 p-6 rounded-lg text-center border border-slate-200 shadow-sm hover:shadow-md hover:border-brand-gold/60 transition-all">
                <div class="text-4xl font-bold text-brand-navy flex items-center justify-center gap-2">
                    <x-textile-icon name="techpack" class="w-8 h-8 text-brand-navy" />
                    <span>6</span>
                </div>
                <div class="text-xs uppercase tracking-wider font-semibold text-slate-500 mt-1">Dedicated Merchandisers</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Org Hierarchy Chart (Slide 4 Left) -->
            <div class="lg:col-span-7 bg-white p-6 sm:p-8 rounded-lg border border-slate-200 shadow-sm space-y-4">
                <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                    <div>
                        <span class="text-xs uppercase font-bold tracking-wider text-brand-gold-dark">Management Hierarchy</span>
                        <h3 class="text-xl font-serif font-bold text-brand-navy mt-0.5">Corporate Structure</h3>
                    </div>
                    <x-textile-icon name="sewing-machine" class="w-5 h-5 text-brand-gold-dark" />
                </div>
                
                <div class="p-2 bg-slate-50 rounded-lg border border-slate-200">
                    <img src="{{ asset('images/extracted/org-structure-chart.png') }}" 
                         alt="Texora Sourcing Organization Chart" 
                         class="w-full object-contain">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2 text-xs text-slate-600">
                    <div class="p-3 bg-slate-50 rounded-xl border">
                        <strong class="text-slate-900 block font-bold mb-1 flex items-center gap-1">
                            <x-textile-icon name="techpack" class="w-3.5 h-3.5 text-brand-gold-dark" />
                            <span>Merchandising:</span>
                        </strong>
                        Marketing, Development & Production Merchandisers.
                    </div>
                    <div class="p-3 bg-slate-50 rounded-xl border">
                        <strong class="text-slate-900 block font-bold mb-1 flex items-center gap-1">
                            <x-textile-icon name="magnifier-fabric" class="w-3.5 h-3.5 text-brand-gold-dark" />
                            <span>Technical & Quality:</span>
                        </strong>
                        Quality Controllers (QC) & Research & Development (R&D).
                    </div>
                    <div class="p-3 bg-slate-50 rounded-xl border">
                        <strong class="text-slate-900 block font-bold mb-1 flex items-center gap-1">
                            <x-textile-icon name="hanger" class="w-3.5 h-3.5 text-brand-gold-dark" />
                            <span>HR & Operations:</span>
                        </strong>
                        Admin, Accounts, Commercial & Logistics tracking.
                    </div>
                </div>
            </div>

            <!-- Team by Function Breakdown (Slide 4 Right) -->
            <div class="lg:col-span-5 bg-white p-6 sm:p-8 rounded-lg border border-slate-200 shadow-sm space-y-4">
                <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                    <div>
                        <span class="text-xs uppercase font-bold tracking-wider text-brand-gold-dark">Operational Allocation</span>
                        <h3 class="text-xl font-serif font-bold text-brand-navy mt-0.5">Team by Function</h3>
                    </div>
                    <x-textile-icon name="measuring-tape" class="w-5 h-5 text-brand-gold-dark" />
                </div>

                <div class="p-2 bg-slate-50 rounded-lg border border-slate-200">
                    <img src="{{ asset('images/extracted/team-function-chart.png') }}" 
                         alt="Team by Function Bar Chart" 
                         class="w-full object-contain">
                </div>

                <div class="space-y-2 pt-2 text-xs">
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 border hover:border-brand-gold transition-colors">
                        <span class="font-semibold text-slate-700 flex items-center gap-1.5">
                            <x-textile-icon name="magnifier-fabric" class="w-4 h-4 text-brand-gold-dark" />
                            <span>Quality Control (QC):</span>
                        </span>
                        <span class="font-bold text-brand-gold-dark text-sm">12 Specialists</span>
                    </div>
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 border hover:border-brand-gold transition-colors">
                        <span class="font-semibold text-slate-700 flex items-center gap-1.5">
                            <x-textile-icon name="techpack" class="w-4 h-4 text-brand-gold-dark" />
                            <span>Merchandising:</span>
                        </span>
                        <span class="font-bold text-brand-navy text-sm">6 Merchandisers</span>
                    </div>
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 border hover:border-brand-gold transition-colors">
                        <span class="font-semibold text-slate-700 flex items-center gap-1.5">
                            <x-textile-icon name="fabric-roll" class="w-4 h-4 text-brand-gold-dark" />
                            <span>Research & Development (R&D):</span>
                        </span>
                        <span class="font-bold text-brand-navy text-sm">4 Experts</span>
                    </div>
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 border hover:border-brand-gold transition-colors">
                        <span class="font-semibold text-slate-700 flex items-center gap-1.5">
                            <x-textile-icon name="hanger" class="w-4 h-4 text-brand-gold-dark" />
                            <span>Commercial & Logistics:</span>
                        </span>
                        <span class="font-bold text-brand-navy text-sm">4 Officers</span>
                    </div>
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 border hover:border-brand-gold transition-colors">
                        <span class="font-semibold text-slate-700 flex items-center gap-1.5">
                            <x-textile-icon name="shears" class="w-4 h-4 text-brand-gold-dark" />
                            <span>Product Development & Technical:</span>
                        </span>
                        <span class="font-bold text-brand-navy text-sm">4 Patternmakers</span>
                    </div>
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 border hover:border-brand-gold transition-colors">
                        <span class="font-semibold text-slate-700 flex items-center gap-1.5">
                            <x-textile-icon name="care-label" class="w-4 h-4 text-brand-gold-dark" />
                            <span>HR, Compliance, Admin & Accounts:</span>
                        </span>
                        <span class="font-bold text-brand-navy text-sm">4 Professionals</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action (Full-Bleed Luxury Editorial Banner) -->
<section class="relative py-20 bg-brand-navy text-white text-center border-t border-brand-gold/30 overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/luxury/global-retail-boutique.jpg') }}"
             alt="Global Retail Fashion Partners"
             class="w-full h-full object-cover object-center opacity-30">
        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy via-brand-navy/85 to-brand-navy/80"></div>
    </div>
    <!-- Watermarks -->
    <x-textile-watermark motif="cotton-boll" class="absolute -left-12 -bottom-12 w-80 h-80 text-white/[0.03] pointer-events-none select-none z-0" />
    <x-textile-watermark motif="sewing-machine" class="absolute -right-12 -top-12 w-80 h-80 text-brand-gold/[0.05] pointer-events-none select-none z-0" />

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 relative z-10">
        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/30 backdrop-blur-md border border-brand-gold/40 text-xs uppercase font-bold tracking-[0.2em] text-brand-gold">
            Start Your Sourcing Partnership
        </span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight">Partner with Our Dhaka Merchandising Team</h2>
        <p class="text-slate-200 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
            Whether you want to audit our partner factories in person or submit a test order for sampling, we are ready to assist.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
            <button @click="rfqModalOpen = true" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-gradient-to-r from-amber-400 via-brand-gold to-amber-500 text-brand-navy font-bold text-xs uppercase tracking-wider hover:from-amber-300 hover:to-amber-400 transition-all shadow-xl">
                <x-textile-icon name="techpack" class="w-4 h-4" />
                <span>Request a Sourcing Quote</span>
            </button>
            <a href="{{ route('contact') }}#visit" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 text-white font-semibold text-xs border border-white/25 backdrop-blur-md transition-all">
                <x-textile-icon name="mannequin" class="w-4 h-4 text-brand-gold" />
                <span>Schedule Dhaka Factory Visit</span>
            </a>
        </div>
    </div>
</section>
@endsection
