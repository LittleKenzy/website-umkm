@extends('layouts.app')

@section('title', 'Layanan - UMKMMaju')

@section('content')
<div class="bg-gray-50 py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-6">Investasi Cerdas untuk Masa Depan</h1>
            <p class="text-xl text-gray-500">Pilih paket layanan yang sesuai dengan skala bisnis Anda saat ini. Kami siap tumbuh bersama Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="group relative bg-white border border-gray-100 rounded-3xl p-8 hover:shadow-2xl hover:shadow-blue-500/10 transition duration-500 overflow-hidden flex flex-col h-full transform hover:-translate-y-1">
                <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition duration-500 transform group-hover:scale-110 group-hover:-rotate-12">
                     <svg class="w-32 h-32 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-2.5 1.25L12 17.25l7.5-5-2.5-1.25-5 2.5z"/></svg>
                </div>
                
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 text-white shadow-lg shadow-blue-500/30">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-3 relative z-10">{{ $service->title }}</h2>
                <p class="text-gray-500 mb-8 relative z-10 flex-1">{{ $service->description }}</p>
                
                <div class="mt-auto relative z-10 pt-6 border-t border-gray-50">
                    <p class="text-xs text-gray-400 uppercase font-semibold mb-1">Mulai Dari</p>
                    <div class="flex items-center justify-between">
                        <p class="text-blue-600 font-bold text-xl">{{ $service->price_display }}</p>
                        <a href="{{ route('services.show', $service) }}" class="px-6 py-2 rounded-full bg-gray-50 text-gray-600 font-medium hover:bg-blue-600 hover:text-white transition duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <a href="{{ route('services.show', $service) }}" class="absolute inset-0 z-0"></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
