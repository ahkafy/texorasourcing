@extends('layouts.public')

@section('title', 'Product Portfolio & Sourcing Capabilities | Texora Sourcing')
@section('meta_description', 'Explore Texora Sourcing apparel product categories: Knitwear (T-Shirts, Polos, Hoodies), Woven (Shirts, Chinos, Denim, Outerwear), and Sweaters (Cardigans, Pullovers, Vests).')

@section('content')
<!-- Page Header (White & Off-White Blend) -->
<section class="bg-gradient-to-b from-slate-50 via-white to-slate-50 py-16 text-slate-900 relative overflow-hidden border-b border-slate-200/80">
    <div class="absolute inset-0 opacity-25 pointer-events-none" style="background-image: radial-gradient(#c7972d 0.75px, transparent 0.75px); background-size: 24px 24px;"></div>
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12 relative z-10">
        <div class="max-w-3xl">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">Apparel Product Portfolio</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-brand-navy mt-1">
                Precision Manufacturing Across Knit, Woven & Sweater
            </h1>
            <p class="text-base text-slate-600 mt-3 leading-relaxed">
                From lightweight summer jerseys to heavy gauge winter knits and technical denim washes, we engineer apparel to your tech pack specifications.
            </p>
        </div>
    </div>
</section>

<!-- Product Category Filter & Portfolio Showcase (Alpine.js) (Off-White Blend) -->
<section class="py-20 bg-slate-50" x-data="{ activeTab: 'all' }">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        
        <!-- Filter Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-2 mb-12">
            <button @click="activeTab = 'all'" 
                    :class="activeTab === 'all' ? 'bg-brand-navy text-white shadow-md' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200'"
                    class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all">
                All Categories
            </button>
            <button @click="activeTab = 'knit'" 
                    :class="activeTab === 'knit' ? 'bg-brand-navy text-white shadow-md' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200'"
                    class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all">
                Knitwear
            </button>
            <button @click="activeTab = 'woven'" 
                    :class="activeTab === 'woven' ? 'bg-brand-navy text-white shadow-md' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200'"
                    class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all">
                Woven & Shirts
            </button>
            <button @click="activeTab = 'sweater'" 
                    :class="activeTab === 'sweater' ? 'bg-brand-navy text-white shadow-md' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200'"
                    class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all">
                Sweaters & Cardigans
            </button>
            <button @click="activeTab = 'denim'" 
                    :class="activeTab === 'denim' ? 'bg-brand-navy text-white shadow-md' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200'"
                    class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all">
                Denim & Outerwear
            </button>
            <button @click="activeTab = 'workwear'" 
                    :class="activeTab === 'workwear' ? 'bg-brand-navy text-white shadow-md' : 'bg-white text-slate-700 hover:bg-slate-100 border border-slate-200'"
                    class="px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all">
                Workwear & Seasonal
            </button>
        </div>

        <!-- Knitwear Detailed Section (Slide 7) -->
        <div id="knit" x-show="activeTab === 'all' || activeTab === 'knit'" class="mb-16 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-gold/10 text-brand-gold-dark rounded-full text-xs font-bold uppercase tracking-wider">
                        High Volume & Rapid Replenishment
                    </div>
                    <h2 class="text-3xl font-serif font-bold text-brand-navy">Knitwear Collection</h2>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Our knitwear manufacturing covers everything from basic promotional tees to premium retail heavyweight hoodies and luxury combed cotton polos.
                    </p>
                    
                    <div class="rounded-2xl overflow-hidden shadow-md border border-slate-200">
                        <img src="{{ asset('images/categories/knitwear.jpg') }}" 
                             alt="Knitwear Products: T-shirts, Polos, Tops" 
                             class="w-full h-64 object-cover object-center">
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Knitwear'" class="px-6 py-2.5 rounded-xl bg-brand-gold text-brand-navy font-bold uppercase tracking-wider text-xs hover:bg-brand-gold-light transition-all shadow">
                        Request Knitwear Sourcing Quote &rarr;
                    </button>
                </div>

                <div class="lg:col-span-7 space-y-4">
                    <h3 class="text-base font-bold text-brand-navy border-b pb-2">Technical Specifications & Capabilities</h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Product Lines:</h4>
                            <p class="text-slate-600">Basic & Fashion T-Shirts, Polo Shirts with Flat-Knit Collars, Pullover Hoodies, Zip Sweatshirts, Henley Tops, Tank Tops, Jogger Pants, Long Sleeve Tops.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Fabric Compositions:</h4>
                            <p class="text-slate-600">100% Combed/Carded Cotton, CVC (60/40), TC (65/35), 95/5 Cotton Spandex, Viscose, Modal, Recycled Polyester (GRS), Organic Cotton (GOTS).</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Fabric Weights (GSM):</h4>
                            <p class="text-slate-600">Single Jersey (130–220 GSM), Pique (180–240 GSM), Interlock (200–260 GSM), French Terry (240–320 GSM), Heavy Fleece (300–420 GSM).</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Washes & Finishes:</h4>
                            <p class="text-slate-600">Enzyme bio-wash, Silicon softener, Acid wash, Pigment garment dye, Carbon peach finish, Anti-pilling, Moisture-wicking finish.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 text-xs text-slate-700 flex items-center justify-between">
                        <span><strong>Minimum Order Quantity (MOQ):</strong> 1,000 pcs per style (Flexible for test orders)</span>
                        <span class="font-semibold text-brand-gold-dark">Lead Time: 45–60 Days</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Woven Detailed Section (Slide 7) -->
        <div id="woven" x-show="activeTab === 'all' || activeTab === 'woven'" class="mb-16 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-gold/10 text-brand-gold-dark rounded-full text-xs font-bold uppercase tracking-wider">
                        Tailored Precision & Durability
                    </div>
                    <h2 class="text-3xl font-serif font-bold text-brand-navy">Woven Garments</h2>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Pants, dress shirts, casual button-downs, cargo trousers, and utility bottom wear executed with crisp stitching and reliable dimensional stability.
                    </p>
                    
                    <div class="rounded-2xl overflow-hidden shadow-md border border-slate-200">
                        <img src="{{ asset('images/categories/woven.jpg') }}" 
                             alt="Woven Products: Pants, Shirts, Jackets" 
                             class="w-full h-64 object-cover object-center">
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Woven'" class="px-6 py-2.5 rounded-xl bg-brand-gold text-brand-navy font-bold uppercase tracking-wider text-xs hover:bg-brand-gold-light transition-all shadow">
                        Request Woven Sourcing Quote &rarr;
                    </button>
                </div>

                <div class="lg:col-span-7 space-y-4">
                    <h3 class="text-base font-bold text-brand-navy border-b pb-2">Technical Specifications & Capabilities</h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Product Lines:</h4>
                            <p class="text-slate-600">Formal Dress Shirts, Casual Oxford Button-Downs, Chino Pants, Cargo Trousers, Bermuda Shorts, Work Trousers, Lightweight Beach Shirts.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Woven Fabric Base:</h4>
                            <p class="text-slate-600">100% Cotton Poplin, Oxford Weave, Cotton Twill, Cotton/Linen blends, Flannel yarn-dyed checks, Dobby structures, Stretch Twill (98/2).</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Sewing & Stitching:</h4>
                            <p class="text-slate-600">18–20 SPI dress shirt precision, clean french seams, reinforced pocket corners, non-iron taped seams, pearlized buttons.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Garment Finishes:</h4>
                            <p class="text-slate-600">Garment enzyme wash, Vintage pigment wash, Wrinkle-resistant finish, Teflon water/stain repellent treatment.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 text-xs text-slate-700 flex items-center justify-between">
                        <span><strong>Minimum Order Quantity (MOQ):</strong> 1,200 pcs per style</span>
                        <span class="font-semibold text-brand-gold-dark">Lead Time: 60–75 Days</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sweaters Detailed Section (Slide 7) -->
        <div id="sweater" x-show="activeTab === 'all' || activeTab === 'sweater'" class="mb-16 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-gold/10 text-brand-gold-dark rounded-full text-xs font-bold uppercase tracking-wider">
                        Fine to Heavy Gauge Knitting
                    </div>
                    <h2 class="text-3xl font-serif font-bold text-brand-navy">Sweater Collection</h2>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Vests, pullovers, cardigans, and chunky winter knits produced on automated computerized flat knitting machines for flawless jacquard and cable execution.
                    </p>
                    
                    <div class="rounded-2xl overflow-hidden shadow-md border border-slate-200">
                        <img src="{{ asset('images/categories/sweater.jpg') }}" 
                             alt="Sweater Products: Vests, Pullovers, Cardigans" 
                             class="w-full h-64 object-cover object-center">
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Sweaters'" class="px-6 py-2.5 rounded-xl bg-brand-gold text-brand-navy font-bold uppercase tracking-wider text-xs hover:bg-brand-gold-light transition-all shadow">
                        Request Sweater Sourcing Quote &rarr;
                    </button>
                </div>

                <div class="lg:col-span-7 space-y-4">
                    <h3 class="text-base font-bold text-brand-navy border-b pb-2">Technical Specifications & Capabilities</h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Product Lines:</h4>
                            <p class="text-slate-600">Crewneck Pullovers, V-Neck Jumpers, Buttoned Cardigans, Knitted Vests, Turtlenecks, Cable Knits, Patterned Fair Isle Sweaters, Ponchos.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Knitting Gauges:</h4>
                            <p class="text-slate-600">3GG, 5GG, 7GG (Chunky / Heavy knits), 12GG, 14GG (Fine gauge retail sweaters) on computerized Shima Seiki / Stoll machines.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Yarn Types:</h4>
                            <p class="text-slate-600">100% Combed Cotton, Acrylic (Regular / Cashmilon), Cotton/Acrylic blends, Lambswool blends, Viscose/Nylon, Chenille, Bouclé yarns.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Stitch Structures:</h4>
                            <p class="text-slate-600">Intarsia, Multi-color Jacquard, Cable stitch, Rib knit, Ottoman stitch, Rice stitch, Milano rib, Drop-needle styling.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 text-xs text-slate-700 flex items-center justify-between">
                        <span><strong>Minimum Order Quantity (MOQ):</strong> 800 pcs per style / colorway</span>
                        <span class="font-semibold text-brand-gold-dark">Lead Time: 60–90 Days</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Denim & Outerwear -->
        <div id="denim" x-show="activeTab === 'all' || activeTab === 'denim'" class="mb-16 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-gold/10 text-brand-gold-dark rounded-full text-xs font-bold uppercase tracking-wider">
                        Specialized Laundry & Wet Processing
                    </div>
                    <h2 class="text-3xl font-serif font-bold text-brand-navy">Denim & Outerwear</h2>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Modern denim bottoms and outerwear jackets produced in facilities with sustainable ozone washing, laser whisker technology, and eco-friendly water recycling.
                    </p>
                    
                    <div class="rounded-2xl overflow-hidden shadow-md border border-slate-200">
                        <img src="{{ asset('images/categories/denim.jpg') }}" 
                             alt="Denim Jeanswear Apparel Texora Sourcing" 
                             class="w-full h-64 object-cover object-center">
                    </div>

                    <div class="p-4 bg-slate-50 text-slate-800 rounded-2xl space-y-2 text-xs border border-slate-200">
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Denim Weights:</span>
                            <span class="font-bold text-brand-navy">8.5 oz to 14.5 oz</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Outerwear:</span>
                            <span class="font-bold text-brand-navy">Puffers, Parkas, Bombers</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-500">Eco-Wash Tech:</span>
                            <span class="font-bold text-emerald-700">Ozone & Laser Wash</span>
                        </div>
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Denim'" class="px-6 py-2.5 rounded-xl bg-brand-gold text-brand-navy font-bold uppercase tracking-wider text-xs hover:bg-brand-gold-light transition-all shadow">
                        Inquire Denim & Jackets &rarr;
                    </button>
                </div>

                <div class="lg:col-span-7 space-y-4">
                    <h3 class="text-base font-bold text-brand-navy border-b pb-2">Denim Fits, Washes & Outerwear Construction</h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Denim Fits & Styles:</h4>
                            <p class="text-slate-600">Skinny, Slim, Regular, Relaxed, Wide-leg, Cargo denim, Mom jeans, Trucker denim jackets, Distressed denim shorts.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Wet & Dry Processing:</h4>
                            <p class="text-slate-600">Stone wash, Enzyme bleach, Hand scraping whiskers, Chevron effects, PP spray, 3D resin oven baking, Tinting, Laser patterning.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Outerwear Shells:</h4>
                            <p class="text-slate-600">Polyester micro-ripstop, Taslan nylon, Memory fabric, Sherpa fleece linings, TPU waterproof breathable membranes.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Hardware & Trims:</h4>
                            <p class="text-slate-600">Nickel-free antique brass shank buttons, YKK/SBS zippers, custom leather back patches, copper rivets.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200 text-xs text-slate-700 flex items-center justify-between">
                        <span><strong>Minimum Order Quantity (MOQ):</strong> 1,500 pcs per style / wash</span>
                        <span class="font-semibold text-brand-gold-dark">Lead Time: 60–90 Days</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Workwear & Seasonal Collections -->
        <div id="workwear" x-show="activeTab === 'all' || activeTab === 'workwear'" class="mb-16 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-gold/10 text-brand-gold-dark rounded-full text-xs font-bold uppercase tracking-wider">
                        Workwear, Weekend & Seasonal
                    </div>
                    <h2 class="text-3xl font-serif font-bold text-brand-navy">Workwear & Uniforms</h2>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        High-durability utility apparel, heavy twill coveralls, high-visibility reflective clothing, and seasonal capsule collections designed for heavy-duty commercial wear.
                    </p>

                    <div class="rounded-2xl overflow-hidden shadow-md border border-slate-200">
                        <img src="{{ asset('images/categories/workwear.jpg') }}" 
                             alt="Workwear Uniforms Industrial Apparel Texora Sourcing" 
                             class="w-full h-64 object-cover object-center">
                    </div>

                    <button @click="rfqModalOpen = true; selectedCategory = 'Workwear'" class="px-6 py-2.5 rounded-xl bg-brand-gold text-brand-navy font-bold uppercase tracking-wider text-xs hover:bg-brand-gold-light transition-all shadow">
                        Inquire Workwear & Corporate Uniforms &rarr;
                    </button>
                </div>

                <div class="lg:col-span-7 space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Workwear Items:</h4>
                            <p class="text-slate-600">Heavy Twill Cargo Work Pants, Industrial Coveralls, High-Vis Reflective Vests (EN 20471), Medical Scrubs, Hospitality Aprons, Security Jackets.</p>
                        </div>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <h4 class="font-bold text-slate-900 mb-1">Technical Finishes:</h4>
                            <p class="text-slate-600">Flame-retardant (FR), Oil & water repellent (Teflon), Anti-static, High tensile tear strength, Triple needle felled seams.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Sourcing Capabilities Matrix Summary Table (Crisp White Section) -->
<section class="py-16 bg-white border-t border-slate-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs uppercase font-bold tracking-widest text-brand-gold-dark">At A Glance</span>
            <h2 class="text-3xl font-serif font-bold text-brand-navy mt-1">Manufacturing Quick Reference</h2>
            <p class="text-xs text-slate-500 mt-1">Standard lead times, sampling turn-around, and order sizes.</p>
        </div>

        <div class="overflow-x-auto shadow-sm rounded-3xl border border-slate-200">
            <table class="w-full text-left text-xs sm:text-sm text-slate-700">
                <thead class="bg-slate-50 text-brand-navy border-b border-slate-200 text-xs uppercase tracking-wider font-bold">
                    <tr>
                        <th class="py-4 px-6">Product Category</th>
                        <th class="py-4 px-6">Key Garment Items</th>
                        <th class="py-4 px-6">Fabric / Gauge Range</th>
                        <th class="py-4 px-6">Sampling Lead Time</th>
                        <th class="py-4 px-6">Bulk Production (T/T | L/C)</th>
                        <th class="py-4 px-6 text-right">Inquire</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    <tr class="hover:bg-slate-50">
                        <td class="py-4 px-6 font-bold text-brand-navy">Knitwear</td>
                        <td class="py-4 px-6">T-Shirts, Polos, Hoodies, Tanks, Joggers</td>
                        <td class="py-4 px-6">130–380 GSM Single Jersey, Pique, Fleece</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">5–7 Days</td>
                        <td class="py-4 px-6 text-brand-gold-dark font-bold">45 Days (T/T) | 60 Days (L/C)</td>
                        <td class="py-4 px-6 text-right">
                            <button @click="rfqModalOpen = true; selectedCategory = 'Knitwear'" class="text-xs font-bold text-brand-navy hover:text-brand-gold-dark">RFQ &rarr;</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-4 px-6 font-bold text-brand-navy">Woven Garments</td>
                        <td class="py-4 px-6">Dress Shirts, Casual Shirts, Chinos, Cargo Pants</td>
                        <td class="py-4 px-6">Poplin, Oxford, Twill, Linen, Flannel</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">7–10 Days</td>
                        <td class="py-4 px-6 text-brand-gold-dark font-bold">45 Days (T/T) | 60–75 Days (L/C)</td>
                        <td class="py-4 px-6 text-right">
                            <button @click="rfqModalOpen = true; selectedCategory = 'Woven'" class="text-xs font-bold text-brand-navy hover:text-brand-gold-dark">RFQ &rarr;</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-4 px-6 font-bold text-brand-navy">Sweaters & Cardigans</td>
                        <td class="py-4 px-6">Pullovers, Vests, Cardigans, Turtlenecks</td>
                        <td class="py-4 px-6">3GG, 5GG, 7GG, 12GG, 14GG (Cotton, Acrylic, Wool)</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">7–10 Days</td>
                        <td class="py-4 px-6 text-brand-gold-dark font-bold">45 Days (T/T) | 70–90 Days (L/C)</td>
                        <td class="py-4 px-6 text-right">
                            <button @click="rfqModalOpen = true; selectedCategory = 'Sweaters'" class="text-xs font-bold text-brand-navy hover:text-brand-gold-dark">RFQ &rarr;</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-4 px-6 font-bold text-brand-navy">Denim & Outerwear</td>
                        <td class="py-4 px-6">Jeans, Denim Jackets, Puffers, Parkas</td>
                        <td class="py-4 px-6">8.5–14.5 oz Denim, Micro-ripstop Nylon, Taslan</td>
                        <td class="py-4 px-6 font-semibold text-slate-800">10–14 Days (wash approval)</td>
                        <td class="py-4 px-6 text-brand-gold-dark font-bold">45 Days (T/T) | 75–90 Days (L/C)</td>
                        <td class="py-4 px-6 text-right">
                            <button @click="rfqModalOpen = true; selectedCategory = 'Denim'" class="text-xs font-bold text-brand-navy hover:text-brand-gold-dark">RFQ &rarr;</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Bottom CTA (Off-White) -->
<section class="py-16 bg-slate-50 text-slate-800 text-center border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
        <h2 class="text-3xl font-serif font-bold text-brand-navy">Have a Specific Tech Pack or Garment Target?</h2>
        <p class="text-slate-600 text-sm max-w-xl mx-auto">
            Our patternmakers and merchandising team in Uttara, Dhaka are ready to evaluate your CAD designs, bill of materials, and target cost.
        </p>
        <div class="pt-2">
            <button @click="rfqModalOpen = true" class="px-8 py-3.5 rounded-xl bg-brand-gold text-brand-navy font-bold uppercase tracking-wider text-xs hover:bg-brand-gold-light transition-all shadow-md">
                Submit Tech Pack for Costing
            </button>
        </div>
    </div>
</section>
@endsection
