@extends('layouts.app')

@section('title', 'Portfolio - UMKMMaju')

@section('content')
<div class="bg-white py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16">
            <div class="max-w-2xl">
                 <span class="text-blue-600 font-bold tracking-wider uppercase text-sm mb-2 block">Our Work</span>
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Karya & Kolaborasi</h1>
                <p class="mt-6 text-xl text-gray-500">Kami bangga menjadi bagian dari kisah sukses ratusan UMKM di seluruh Indonesia.</p>
            </div>
            <div class="mt-6 md:mt-0">
                <!-- Filter Placeholder (Visual only for now) -->
                <div class="inline-flex rounded-lg bg-gray-100 p-1">
                    <button class="px-4 py-2 rounded-md bg-white shadow-sm text-sm font-medium text-gray-900">Semua</button>
                    <button class="px-4 py-2 rounded-md text-sm font-medium text-gray-500 hover:text-gray-900">Website</button>
                    <button class="px-4 py-2 rounded-md text-sm font-medium text-gray-500 hover:text-gray-900">Branding</button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($portfolios as $portfolio)
            <div class="group relative rounded-2xl overflow-hidden cursor-pointer h-96 shadow-lg hover:shadow-2xl hover:shadow-blue-500/20 transition duration-500 transform hover:-translate-y-1">
                 <a href="{{ route('portfolios.show', $portfolio) }}">
                    @if($portfolio->image_path)
                        <img src="{{ asset('storage/' . $portfolio->image_path) }}" class="absolute inset-0 w-full h-full object-cover transition duration-700 transform group-hover:scale-110">
                    @else
                         <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="absolute inset-0 w-full h-full object-cover transition duration-700 transform group-hover:scale-110 filter grayscale group-hover:grayscale-0">
                    @endif
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent opacity-60 group-hover:opacity-80 transition duration-300"></div>
                    
                    <div class="absolute bottom-0 left-0 p-8 w-full translate-y-4 group-hover:translate-y-0 transition duration-300">
                         <p class="text-blue-400 text-xs font-bold uppercase tracking-wider mb-2">{{ $portfolio->client }}</p>
                         <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-blue-200 transition">{{ $portfolio->title }}</h3>
                         <div class="h-0.5 w-12 bg-blue-500 group-hover:w-full transition-all duration-500"></div>
                    </div>
                    
                    <!-- Hover Arrow -->
                    <div class="absolute top-6 right-6 w-10 h-10 bg-white/20 backdrop-blur rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition duration-300 delay-100">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                 </a>
            </div>
            @endforeach
        </div>
        
        <div class="mt-16">
            {{ $portfolios->links() }}
        </div>
    </div>
</div>
@endsection
