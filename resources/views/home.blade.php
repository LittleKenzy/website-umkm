@extends('layouts.app')

@section('title', 'UMKM Maju - Solusi Digital Terbaik untuk Bisnis Anda')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-white overflow-hidden min-h-screen flex items-center">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
             <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Office Background" class="w-full h-full object-cover">
             <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-transparent/20"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-20">
            <div class="lg:w-2/3">
                <div class="inline-block px-4 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-blue-600 font-semibold text-sm mb-6 animate-fade-in-up">
                    🚀 Partner Digital #1 untuk UMKM Indonesia
                </div>
                <h1 class="text-5xl tracking-tight font-extrabold text-gray-900 sm:text-6xl md:text-7xl mb-6 leading-tight">
                    Bawa Bisnis Anda <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Terbang Lebih Tinggi</span>
                </h1>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-0 mb-10 leading-relaxed">
                    Transformasi digital tanpa ribet. Kami bantu buatkan website, sistem kasir, dan branding profesional agar omzet Anda melesat naik.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="flex items-center justify-center px-8 py-4 text-lg font-bold rounded-xl text-white bg-blue-600 hover:bg-blue-700 transition duration-300 shadow-xl shadow-blue-500/30 transform hover:-translate-y-1">
                        Konsultasi Gratis
                    </a>
                    <a href="{{ route('portfolios.index') }}" class="flex items-center justify-center px-8 py-4 text-lg font-bold rounded-xl text-gray-700 bg-white border border-gray-200 hover:bg-gray-50 transition duration-300 shadow-md transform hover:-translate-y-1">
                       <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Lihat Video Intro
                    </a>
                </div>
                
                <div class="mt-12 flex items-center gap-6 text-gray-400 grayscale opacity-70">
                    <!-- Client Logos Placeholder -->
                    <span class="font-bold text-xl">Dipercaya oleh:</span>
                    <div class="flex gap-4">
                        <div class="h-8 w-30 bg-gray-200 rounded">LittleKenzy</div>
                        <div class="h-8 w-30 bg-gray-200 rounded">LittleKenzy</div>
                        <div class="h-8 w-30 bg-gray-200 rounded">LittleKenzy</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section id="problem" class="py-32 bg-gray-50 relative overflow-hidden">
        <!-- Abstract Shapes -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-blue-600 font-semibold tracking-wide uppercase mb-2">Masalah Umum</h2>
                <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Bisnis Masih "Manual"?</h2>
                <p class="mt-4 text-xl text-gray-500">Jangan biarkan kompetitor menyalip Anda hanya karena teknologi.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Card 1 -->
                <div class="bg-white p-10 rounded-3xl shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-blue-500/10 transition duration-500 transform hover:-translate-y-2 border border-gray-100 group">
                    <div class="w-16 h-16 bg-red-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-red-500 transition duration-500">
                        <svg class="w-8 h-8 text-red-500 group-hover:text-white transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Pencatatan Semrawut</h3>
                    <p class="text-gray-500 leading-relaxed">Stok sering selisih, uang kas bocor halus, dan tidak tahu untung/rugi harian secara pasti.</p>
                </div>
                <!-- Card 2 -->
                 <div class="bg-white p-10 rounded-3xl shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-blue-500/10 transition duration-500 transform hover:-translate-y-2 border border-gray-100 group">
                    <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-orange-500 transition duration-500">
                        <svg class="w-8 h-8 text-orange-500 group-hover:text-white transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Gaib di Google</h3>
                    <p class="text-gray-500 leading-relaxed">Calon pelanggan mencari produk Anda di internet, tapi yang muncul malah toko sebelah.</p>
                </div>
                <!-- Card 3 -->
                 <div class="bg-white p-10 rounded-3xl shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-blue-500/10 transition duration-500 transform hover:-translate-y-2 border border-gray-100 group">
                    <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-purple-500 transition duration-500">
                         <svg class="w-8 h-8 text-purple-500 group-hover:text-white transition duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Biaya Boncos</h3>
                    <p class="text-gray-500 leading-relaxed">Operasional tinggi karena kerja manual yang lambat dan rawan human error.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <span class="text-blue-600 font-bold tracking-wider uppercase bg-blue-50 px-4 py-2 rounded-full text-sm">Solusi Kami</span>
                <h2 class="mt-6 text-4xl font-extrabold text-gray-900 sm:text-5xl">All-in-One Digital</h2>
                <p class="mt-4 text-xl text-gray-500">Cukup satu vendor untuk semua kebutuhan digital Anda.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="group relative bg-white border border-gray-100 rounded-3xl p-8 hover:shadow-2xl hover:shadow-blue-500/10 transition duration-500 overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition duration-500 transform group-hover:scale-110 group-hover:-rotate-12">
                         <svg class="w-32 h-32 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-2.5 1.25L12 17.25l7.5-5-2.5-1.25-5 2.5z"/></svg>
                    </div>
                    
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 text-white shadow-lg shadow-blue-500/30">
                        @if(Str::contains($service->slug, 'website'))
                             <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                        @elseif(Str::contains($service->slug, 'kasir'))
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        @else
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        @endif
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 relative z-10">{{ $service->title }}</h3>
                    <p class="text-gray-500 mb-6 relative z-10 text-sm leading-relaxed h-12 line-clamp-2">{{ $service->description }}</p>
                    
                    <!-- Features List -->
                    <ul class="mb-8 space-y-3 relative z-10">
                        @if(Str::contains($service->slug, 'website'))
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Desain Premium & Responsive
                            </li>
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Gratis Domain & Hosting 1 Thn
                            </li>
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                SEO Basic Google
                            </li>
                             <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Revisi Unlimited
                            </li>
                        @elseif(Str::contains($service->slug, 'kasir'))
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Manajemen Stok & Produk
                            </li>
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Laporan Harian Otomatis
                            </li>
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Support Printer Thermal
                            </li>
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Bisa Offline & Online
                            </li>
                        @else
                             <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Riset Keyword
                            </li>
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Konten Feed & Story IG
                            </li>
                            <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Optimasi Google Maps
                            </li>
                             <li class="flex items-center text-gray-600 text-sm">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Laporan Bulanan
                            </li>
                        @endif
                    </ul>
                    
                    <div class="flex items-center justify-between mt-auto relative z-10 pt-6 border-t border-gray-50">
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-semibold">Mulai Dari</p>
                            <p class="text-blue-600 font-bold text-lg">{{ $service->price_display }}</p>
                        </div>
                        <a href="{{ route('services.show', $service) }}" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-blue-600 hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-16 text-center">
                <a href="{{ route('services.index') }}" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition">
                    Lihat Semua Layanan
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Us Section (Dark Mode) -->
    <section class="py-32 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20">
             <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" class="w-full h-full object-cover">
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div>
                     <h2 class="text-blue-400 font-bold tracking-wider uppercase mb-2">Kenapa Kami?</h2>
                     <h2 class="text-4xl font-extrabold mb-6 leading-tight">Solusi Enterprise,<br>Harga UMKM</h2>
                     <p class="text-gray-300 text-lg mb-10 leading-relaxed">
                         Kami menggunakan teknologi stack yang sama dengan startup unicorn (Laravel, Cloud Server), namun dikemas khusus untuk efisiensi budget UMKM.
                     </p>
                     
                     <div class="space-y-8">
                         <div class="flex items-start">
                             <div class="flex-shrink-0">
                                 <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-blue-600/20 text-blue-400 border border-blue-500/30">
                                     <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                 </div>
                             </div>
                             <div class="ml-6">
                                 <h3 class="text-xl font-bold text-white">Super Cepat</h3>
                                 <p class="mt-2 text-gray-400">Website live dalam 3-5 hari. Sistem kasir siap pakai instan.</p>
                             </div>
                         </div>
                         <div class="flex items-start">
                             <div class="flex-shrink-0">
                                 <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-600/20 text-indigo-400 border border-indigo-500/30">
                                     <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                 </div>
                             </div>
                             <div class="ml-6">
                                 <h3 class="text-xl font-bold text-white">Harga Transparan</h3>
                                 <p class="mt-2 text-gray-400">Tidak ada biaya tersembunyi. Bayar sesuai paket yang Anda pilih.</p>
                             </div>
                         </div>
                     </div>
                </div>
                
                <div class="bg-slate-800/50 backdrop-blur-md rounded-3xl p-8 border border-slate-700/50 shadow-2xl">
                    <h3 class="text-2xl font-bold mb-8 text-white">Cara Kerja</h3>
                    
                    <div class="space-y-8">
                        <!-- Step 1 -->
                        <div class="flex gap-5 group">
                            <div class="flex-shrink-0 relative">
                                <div class="w-12 h-12 rounded-full bg-slate-900/80 border-2 border-slate-700 group-hover:border-blue-500 transition duration-300 flex items-center justify-center relative z-10">
                                    <span class="text-blue-500 font-bold text-lg">1</span>
                                </div>
                                <div class="absolute top-12 left-1/2 -translate-x-1/2 h-full w-0.5 bg-slate-700/50 -mb-8"></div>
                            </div>
                            <div class="pt-2">
                                <h4 class="text-lg font-bold text-white group-hover:text-blue-400 transition">Konsultasi</h4>
                                <p class="text-sm text-gray-400 mt-1">Diskusi kebutuhan bisnis Anda via WhatsApp atau Zoom meeting.</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex gap-5 group">
                             <div class="flex-shrink-0 relative">
                                <div class="w-12 h-12 rounded-full bg-slate-900/80 border-2 border-slate-700 group-hover:border-blue-500 transition duration-300 flex items-center justify-center relative z-10">
                                    <span class="text-blue-500 font-bold text-lg">2</span>
                                </div>
                                <div class="absolute top-12 left-1/2 -translate-x-1/2 h-full w-0.5 bg-slate-700/50 -mb-8"></div>
                            </div>
                            <div class="pt-2">
                                <h4 class="text-lg font-bold text-white group-hover:text-blue-400 transition">Development</h4>
                                <p class="text-sm text-gray-400 mt-1">Tim ahli kami membangun sistem & website impian Anda.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex gap-5 group">
                             <div class="flex-shrink-0 relative">
                                <div class="w-12 h-12 rounded-full bg-slate-900/80 border-2 border-slate-700 group-hover:border-blue-500 transition duration-300 flex items-center justify-center relative z-10">
                                    <span class="text-blue-500 font-bold text-lg">3</span>
                                </div>
                            </div>
                            <div class="pt-2">
                                <h4 class="text-lg font-bold text-white group-hover:text-blue-400 transition">Serah Terima</h4>
                                <p class="text-sm text-gray-400 mt-1">Selesai! Training penggunaan & Anda siap Go Digital.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-16">
                 <div class="max-w-xl">
                     <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Karya Terbaru</h2>
                     <p class="mt-4 text-xl text-gray-500">Lihat hasil kerja keras kami untuk UMKM Indonesia.</p>
                 </div>
                 <a href="{{ route('portfolios.index') }}" class="hidden md:inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition">
                    Lihat Semua
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($portfolios as $index => $portfolio)
                <div class="group relative rounded-2xl overflow-hidden shadow-lg h-80">
                    <img src="{{ $portfolio->image_path ? asset('storage/' . $portfolio->image_path) : 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60' }}" 
                         class="absolute inset-0 w-full h-full object-cover transition duration-700 transform group-hover:scale-110 group-hover:rotate-1">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-80 group-hover:opacity-90 transition duration-300"></div>
                    
                    <div class="absolute bottom-0 left-0 p-8 translate-y-4 group-hover:translate-y-0 transition duration-300">
                        <p class="text-blue-400 text-xs font-bold uppercase tracking-wider mb-2">{{ $portfolio->client }}</p>
                        <h3 class="text-2xl font-bold text-white mb-2">{{ $portfolio->title }}</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition duration-300 delay-100 line-clamp-2">
                            {{ $portfolio->description }}
                        </p>
                        <a href="{{ route('portfolios.show', $portfolio) }}" class="inline-block mt-4 text-white font-medium border-b border-white pb-0.5 hover:text-blue-300 hover:border-blue-300 transition">Lihat Case Study &rarr;</a>
                    </div>
                </div>
                 @endforeach
            </div>
            
            <div class="mt-10 text-center md:hidden">
                 <a href="{{ route('portfolios.index') }}" class="inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition">
                    Lihat Semua
                </a>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-24 bg-blue-600 relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-indigo-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-5xl mb-8">Siap Go Digital Hari Ini?</h2>
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">Konsultasikan kebutuhan Anda gratis. Tidak jadi beli tidak masalah, yang penting Anda dapat solusinya dulu.</p>
            
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-5 text-xl font-bold rounded-2xl text-blue-600 bg-white hover:bg-blue-50 transition duration-300 shadow-xl transform hover:-translate-y-1">
                Hubungi Kami Sekarang
            </a>
            
            <p class="mt-6 text-blue-200 text-sm">Respon cepat via WhatsApp (09.00 - 17.00 WIB)</p>
        </div>
    </section>
@endsection
