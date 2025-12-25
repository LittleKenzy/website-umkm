@extends('layouts.app')

@section('title', $portfolio->title . ' - Portfolio')

@section('content')
<!-- Full Width Hero Parallax -->
<div class="relative h-[60vh] overflow-hidden">
    @if($portfolio->image_path)
        <img src="{{ asset('storage/' . $portfolio->image_path) }}" class="absolute inset-0 w-full h-full object-cover attachment-fixed">
    @else
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" class="absolute inset-0 w-full h-full object-cover">
    @endif
    <div class="absolute inset-0 bg-gray-900/60 flex items-center justify-center">
        <div class="text-center px-4 max-w-4xl mx-auto">
             <p class="text-blue-400 font-bold uppercase tracking-wider mb-4">{{ $portfolio->client }}</p>
             <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight">{{ $portfolio->title }}</h1>
        </div>
    </div>
</div>

<div class="bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 -mt-20 relative z-10">
        <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 border border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 border-b border-gray-100 pb-12 mb-12">
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Tentang Project</h3>
                    <div class="prose prose-lg text-gray-600">
                        <p class="leading-relaxed">{{ $portfolio->description }}</p>
                        <p>Tantangan utama dalam proyek ini adalah menciptakan identitas digital yang tidak hanya menarik secara visual, tetapi juga fungsional untuk mendukung operasional bisnis sehari-hari.</p>
                    </div>
                </div>
                <!-- Sidebar Info -->
                <div class="space-y-8">
                    <div>
                        <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-1">Klien</h4>
                        <p class="text-lg font-semibold text-gray-900">{{ $portfolio->client }}</p>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-1">Tanggal Selesai</h4>
                        <p class="text-lg font-semibold text-gray-900">{{ $portfolio->completion_date ? $portfolio->completion_date->format('d F Y') : '-' }}</p>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-1">Layanan</h4>
                        <p class="text-lg font-semibold text-gray-900">Web Development</p>
                    </div>
                     @if($portfolio->url)
                    <div class="pt-4">
                        <a href="{{ $portfolio->url }}" target="_blank" class="inline-flex w-full items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-blue-600 hover:bg-blue-700 transition">
                            Kunjungi Website
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            
            <!-- Gallery Placeholder (Static Unsplash) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="rounded-xl shadow-md w-full h-64 object-cover">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="rounded-xl shadow-md w-full h-64 object-cover">
            </div>

            <div class="mt-16 pt-12 border-t border-gray-100 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Tertarik membuat project seperti ini?</h3>
                <a href="{{ route('contact') }}" class="inline-flex items-center text-blue-600 font-bold hover:underline text-lg">
                    Mulai Konsultasi Gratis &rarr;
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
