@extends('layouts.app')

@section('title', $service->title . ' - Layanan UMKMMaju')

@section('content')
<!-- Hero Header -->
<div class="relative bg-slate-900 py-32 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="text-blue-400 font-bold tracking-wider uppercase bg-blue-900/30 border border-blue-500/30 px-4 py-1.5 rounded-full text-sm">Layanan Premium</span>
        <h1 class="mt-8 text-4xl font-extrabold text-white sm:text-5xl md:text-6xl max-w-4xl mx-auto">{{ $service->title }}</h1>
        <p class="mt-6 text-xl text-gray-400 max-w-2xl mx-auto mb-10">{{ $service->description }}</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-20 relative z-20 pb-24">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Sidebar Pricing Card (Sticky) -->
        <div class="lg:col-span-1 lg:order-last">
            <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100 sticky top-24">
                <p class="text-gray-500 font-medium mb-2">Mulai dari</p>
                <div class="flex items-baseline mb-6">
                    <span class="text-3xl font-extrabold text-gray-900 tracking-tight">{{ $service->price_display }}</span>
                    <span class="ml-2 text-sm text-gray-500">/ project</span>
                </div>
                
                <div class="space-y-4 mb-8">
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Konsultasi Gratis</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Revisi Sepuasnya</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Garansi 30 Hari</span>
                    </div>
                </div>

                <a href="https://wa.me/6282395928309?text=Halo%20Little%20Kenzy,%20saya%20tertarik%20untuk%20mengambil%20paket%20{{ urlencode($service->title) }}%20mulai%20dari%20{{ urlencode($service->price_display) }}." target="_blank" class="block w-full py-4 px-6 bg-blue-600 hover:bg-blue-700 text-white font-bold text-center rounded-xl transition shadow-lg shadow-blue-500/30">
                    Ambil Paket Ini
                </a>
                <p class="mt-4 text-xs text-center text-gray-400">Tidak ada biaya tersembunyi.</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-8">
            <div class="bg-white rounded-3xl shadow-sm p-8 md:p-10 border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Detail Layanan</h3>
                <div class="prose prose-lg text-gray-600">
                    <p>Kami memahami bahwa setiap bisnis memiliki keunikan tersendiri. Layanan {{ $service->title }} kami dirancang untuk menjawab tantangan spesifik yang Anda hadapi.</p>
                    <p>Dengan pendekatan yang berpusat pada hasil, kami tidak hanya mengirimkan produk jadi, tetapi solusi yang benar-benar bekerja untuk pertumbuhan bisnis Anda.</p>
                    
                    <h4>Proses Pengerjaan:</h4>
                    <ol>
                        <li><strong>Analisa:</strong> Kami pelajari model bisnis Anda.</li>
                        <li><strong>Strategi:</strong> Merancang solusi paling efisien.</li>
                        <li><strong>Eksekusi:</strong> Development oleh tim ahli.</li>
                        <li><strong>Launch:</strong> Go live dan monitoring.</li>
                    </ol>
                </div>
            </div>

            <div class="bg-blue-50 rounded-3xl p-8 md:p-10 border border-blue-100">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                         <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-3.582 8-8 8a8.063 8.063 0 01-4-.066 1 1 0 00-.749.613l-2.028 5.617a1 1 0 01-1.996-1.748L5.27 18.04A8.056 8.056 0 011 12c0-4.418 3.582-8 8-8s8 3.582 8 8z"/></svg>
                         </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Butuh Penjelasan Lebih?</h3>
                        <p class="text-blue-700 mb-6">Tim konsultan kami siap menjelaskan detail teknis dengan bahasa yang mudah dimengerti.</p>
                        <a href="https://wa.me/6282395928309?text=Halo%20Little%20Kenzy,%20boleh%20tanya-tanya%20detail%20tentang%20layanan%20{{ urlencode($service->title) }}?" target="_blank" class="text-blue-600 font-bold hover:underline">Chat via WhatsApp &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
