@extends('layouts.public')

@section('title', 'Contact Corporate Office & Request Sourcing Quote | Texora Sourcing')
@section('meta_description', 'Contact Texora Sourcing corporate office in Uttara, Dhaka, Bangladesh. Inquire about apparel sourcing, book factory visits, or contact Managing Director & CEO Md. Ataul Hai on WhatsApp (+88 01711234725).')

@section('content')
<!-- Header Banner (Full-Bleed Luxury Editorial Hero with Background Image) -->
<section class="relative py-24 sm:py-28 bg-brand-navy text-white border-b border-brand-gold/30 overflow-hidden">
    <!-- Full-Bleed Executive Consultation Lounge Background -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/luxury/executive-atelier-office.jpg') }}"
             alt="Texora Sourcing Corporate Office Lounge Dhaka"
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
                Get In Touch
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mt-4 tracking-tight">
                Let's Build Your Next Collection Together
            </h1>
            <div class="w-14 h-0.5 bg-gradient-to-r from-brand-gold via-amber-300 to-brand-gold mt-4 rounded-full"></div>
            <p class="text-base sm:text-lg text-slate-200 mt-4 leading-relaxed">
                Connect directly with our corporate office in Uttara, Dhaka. We provide rapid price quotations, sample development, and foreign buyer visit coordination.
            </p>
        </div>
    </div>
</section>

<!-- Main Contact & Inquiry Section (Off-White with Watermark) -->
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <!-- Watermarks: Multi-Motif Atelier Theme -->
    <x-textile-watermark motif="mannequin" class="absolute -left-16 bottom-10 w-96 h-96 text-brand-navy/[0.025] pointer-events-none select-none" />
    <x-textile-watermark motif="sewing-machine" class="absolute -right-16 top-10 w-96 h-96 text-brand-gold/[0.035] pointer-events-none select-none" />

    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Column: Corporate Office & Direct Contacts (Slide 5 & 13) -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Contact Card -->
                <div class="bg-white p-8 rounded-lg border border-slate-200 shadow-sm space-y-6 relative overflow-hidden">
                    <x-textile-watermark motif="cotton-boll" class="absolute -right-8 -bottom-8 w-48 h-48 text-brand-gold/[0.03] pointer-events-none select-none" />
                    <div class="relative z-10">
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-gold">Headquarters</span>
                        <h2 class="text-2xl font-serif font-bold text-brand-navy mt-1">Corporate Details</h2>
                        <p class="text-xs text-slate-500 mt-1">Conveniently located 10 minutes from Dhaka International Airport.</p>
                    </div>

                    <div class="space-y-4 text-xs text-slate-700 relative z-10">
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                <x-textile-icon name="fabric-roll" class="w-4 h-4 text-brand-gold-dark" />
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 block">Corporate Office:</span>
                                <span class="text-slate-600 leading-relaxed block">
                                    33, Garib-E-Newaz Avenue, Sector-11, Uttara, Dhaka-1230, Bangladesh
                                </span>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-gold flex items-center justify-center flex-shrink-0 mt-0.5">
                                <x-textile-icon name="mannequin" class="w-4 h-4 text-brand-gold-dark" />
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 block">Contact Person:</span>
                                <span class="text-slate-800 font-semibold block">Md. Ataul Hai</span>
                                <span class="text-slate-500 block">Managing Director & CEO</span>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="material-symbols-outlined" style="font-size: 18px;">chat</span>
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 block">Direct WhatsApp & Mobile:</span>
                                <a href="https://wa.me/8801711234725" target="_blank" class="text-emerald-700 font-mono font-bold hover:underline block text-sm">
                                    +88 01711234725
                                </a>
                                <span class="text-slate-600 font-mono block">+88 01777556666</span>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="material-symbols-outlined" style="font-size: 18px;">mail</span>
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 block">Corporate Email:</span>
                                <a href="mailto:ataul@texorasourcingbd.com" class="text-brand-navy font-semibold hover:text-brand-gold block">
                                    ataul@texorasourcingbd.com
                                </a>
                                <a href="mailto:team@texorasourcingbd.com" class="text-slate-600 hover:text-brand-gold block">
                                    team@texorasourcingbd.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-navy/5 text-brand-gold-dark flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="material-symbols-outlined" style="font-size: 18px;">public</span>
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 block">Official Website:</span>
                                <span class="text-slate-600 block">www.texorasourcingbd.com</span>
                            </div>
                        </div>
                    </div>

                    <!-- Luxury Atelier Showroom Image -->
                    <div class="pt-4 border-t border-slate-100 relative z-10">
                        <div class="relative rounded-lg overflow-hidden shadow-lg group">
                            <img src="{{ asset('images/luxury/atelier-showroom.jpg') }}" 
                                 alt="Texora Sourcing Corporate Showroom Uttara Dhaka" 
                                 class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/85 via-transparent to-transparent flex items-end p-4">
                                <span class="text-xs font-semibold text-white">Uttara Sample Showroom & Consultation Lounge</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Banking Credentials Card (Slide 5) -->
                <div class="bg-white p-6 rounded-lg border border-slate-200 shadow-sm space-y-3 relative overflow-hidden">
                    <x-textile-watermark motif="thread-spool" class="absolute -right-8 -bottom-8 w-44 h-44 text-brand-gold/[0.03] pointer-events-none select-none" />
                    <div class="flex items-center justify-between relative z-10">
                        <span class="text-xs uppercase font-bold tracking-wider text-brand-gold">Banking Information</span>
                        <span class="px-2 py-0.5 rounded-full bg-amber-100 text-amber-900 text-[10px] font-bold">Tier-1 Bank</span>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-brand-navy relative z-10">BRAC Bank PLC.</h3>
                    
                    <div class="space-y-1.5 text-xs text-slate-700 font-mono relative z-10">
                        <div><span class="text-slate-500 font-sans">Branch:</span> Uttara Sonargaon Janapath Branch</div>
                        <div><span class="text-slate-500 font-sans">SWIFT Code:</span> <strong class="text-brand-navy font-bold bg-amber-50 px-2 py-0.5 rounded border border-brand-gold/30">BRAKBDDH</strong></div>
                        <div><span class="text-slate-500 font-sans">Account No:</span> <strong class="bg-slate-100 px-2 py-0.5 rounded">2075560740001</strong></div>
                        <div><span class="text-slate-500 font-sans">Mode of Payment:</span> <strong class="text-slate-900">L/C & T/T</strong></div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Sourcing Inquiry & Visit Booking Form -->
            <div class="lg:col-span-7">
                <div class="bg-white p-8 sm:p-10 rounded-lg border border-slate-200 shadow-xl space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-brand-gold">Direct Inquiry</span>
                        <h2 class="text-3xl font-serif font-bold text-brand-navy mt-1">Submit Your Sourcing Requirements</h2>
                        <p class="text-xs text-slate-500 mt-1">
                            Whether you need sample costing, tech pack consultation, or want to schedule an in-person factory visit in Dhaka, fill out the details below:
                        </p>
                    </div>

                    <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <!-- Inquiry Type Switcher -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">What is the purpose of your inquiry? *</label>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                <label class="flex items-center space-x-2 p-2.5 rounded-xl border border-slate-200 cursor-pointer hover:border-brand-gold has-[:checked]:border-brand-gold has-[:checked]:bg-brand-navy/5 text-xs font-semibold text-slate-700">
                                    <input type="radio" name="inquiry_type" value="rfq" checked class="text-brand-gold focus:ring-brand-gold">
                                    <x-textile-icon name="techpack" class="w-3.5 h-3.5 text-brand-gold-dark" />
                                    <span>Pricing RFQ</span>
                                </label>
                                <label class="flex items-center space-x-2 p-2.5 rounded-xl border border-slate-200 cursor-pointer hover:border-brand-gold has-[:checked]:border-brand-gold has-[:checked]:bg-brand-navy/5 text-xs font-semibold text-slate-700">
                                    <input type="radio" name="inquiry_type" value="visit" class="text-brand-gold focus:ring-brand-gold">
                                    <x-textile-icon name="mannequin" class="w-3.5 h-3.5 text-brand-gold-dark" />
                                    <span>Factory Visit</span>
                                </label>
                                <label class="flex items-center space-x-2 p-2.5 rounded-xl border border-slate-200 cursor-pointer hover:border-brand-gold has-[:checked]:border-brand-gold has-[:checked]:bg-brand-navy/5 text-xs font-semibold text-slate-700">
                                    <input type="radio" name="inquiry_type" value="sample" class="text-brand-gold focus:ring-brand-gold">
                                    <x-textile-icon name="shears" class="w-3.5 h-3.5 text-brand-gold-dark" />
                                    <span>Sampling</span>
                                </label>
                                <label class="flex items-center space-x-2 p-2.5 rounded-xl border border-slate-200 cursor-pointer hover:border-brand-gold has-[:checked]:border-brand-gold has-[:checked]:bg-brand-navy/5 text-xs font-semibold text-slate-700">
                                    <input type="radio" name="inquiry_type" value="general" class="text-brand-gold focus:ring-brand-gold">
                                    <x-textile-icon name="cotton-boll" class="w-3.5 h-3.5 text-brand-gold-dark" />
                                    <span>General</span>
                                </label>
                            </div>
                        </div>

                        <!-- Name & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Your Full Name *</label>
                                <input type="text" name="name" required placeholder="e.g. David Miller" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Corporate Work Email *</label>
                                <input type="email" name="email" required placeholder="david@retailbrand.com" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                        </div>

                        <!-- Phone / WhatsApp & Company -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Phone / WhatsApp Number</label>
                                <input type="text" name="phone" placeholder="e.g. +1 416 555 0192" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Brand / Company Name</label>
                                <input type="text" name="company_name" placeholder="e.g. Your Brand or Company Name" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                        </div>

                        <!-- Country & Product Category -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Buyer Country / Market</label>
                                <input type="text" name="country" placeholder="e.g. Canada, USA, Brazil, UK, Germany" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Product Category</label>
                                <select name="product_category" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                                    <option value="Knitwear">Knitwear (T-Shirts, Polos, Hoodies)</option>
                                    <option value="Woven">Woven (Shirts, Chinos, Pants)</option>
                                    <option value="Sweaters">Sweaters & Cardigans</option>
                                    <option value="Denim">Denim & Outerwear</option>
                                    <option value="Workwear">Workwear & Uniforms</option>
                                    <option value="Multiple">Multiple Categories / Comprehensive</option>
                                </select>
                            </div>
                        </div>

                        <!-- Target Quantity & Delivery Date -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Estimated Order Quantity</label>
                                <select name="target_quantity" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                                    <option value="1,000 - 3,000 pcs">1,000 – 3,000 pcs (Test order)</option>
                                    <option value="3,000 - 10,000 pcs">3,000 – 10,000 pcs</option>
                                    <option value="10,000 - 50,000 pcs">10,000 – 50,000 pcs</option>
                                    <option value="50,000+ pcs">50,000+ pcs (Volume contract)</option>
                                    <option value="Sample only">Sample development first</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Target In-Store Delivery Date</label>
                                <input type="text" name="target_delivery_date" placeholder="e.g. Q3 / August 2026" 
                                       class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold">
                            </div>
                        </div>

                        <!-- Message / Tech Pack Details -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                                Garment Specifications / Tech Pack / Visit Details *
                            </label>
                            <textarea name="message" rows="5" required placeholder="Please describe fabric composition (e.g., 100% Cotton 180 GSM Single Jersey), wash effects, sizes, packaging specs, or proposed factory visit dates..." 
                                      class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brand-gold focus:border-brand-gold"></textarea>
                        </div>

                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-200 text-xs text-slate-500">
                            <strong>Confidentiality Guarantee:</strong> All proprietary design tech packs, artwork, and pricing discussions are strictly safeguarded under international non-disclosure standards.
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit" class="w-full py-4 rounded-xl bg-brand-gold hover:bg-brand-gold-light text-brand-navy font-bold uppercase tracking-wider text-sm shadow-xl transition-all">
                                Send Inquiry to Merchandising Team
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- Google Maps & Dhaka Airport Proximity -->
        <div class="mt-16 bg-white p-6 rounded-lg border border-slate-200 shadow-sm space-y-4">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b pb-4">
                <div>
                    <span class="text-xs uppercase font-bold text-brand-gold">Location Map</span>
                    <h3 class="text-xl font-serif font-bold text-brand-navy">Texora Sourcing Corporate Office Location</h3>
                    <p class="text-xs text-slate-500">33, Garib-E-Newaz Avenue, Sector-11, Uttara, Dhaka-1230, Bangladesh</p>
                </div>
                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-800 text-xs font-semibold border border-emerald-200">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    10 Mins from Hazrat Shahjalal Int'l Airport (DAC)
                </div>
            </div>

            <!-- Embed Map -->
            <div class="w-full h-80 rounded-lg overflow-hidden border border-slate-200 relative">
                <iframe 
                    title="Texora Sourcing Location Map Uttara Dhaka"
                    class="w-full h-full border-0" 
                    loading="lazy" 
                    allowfullscreen 
                    src="https://maps.google.com/maps?q=33%20Garib-E-Newaz%20Avenue%20Sector-11%20Uttara%20Dhaka%201230%20Bangladesh&t=&z=14&ie=UTF8&iwloc=&output=embed">
                </iframe>
            </div>
        </div>

    </div>
</section>
@endsection
