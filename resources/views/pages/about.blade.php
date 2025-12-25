@extends('layouts.app')

@section('title', 'Tentang Kami - UMKMMaju')

@section('content')
<!-- Hero -->
<div class="relative bg-white py-24 sm:py-32 overflow-hidden">
    <div class="absolute inset-y-0 right-0 w-1/2 bg-gray-50 hidden lg:block rounded-l-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <div class="mb-12 lg:mb-0">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-6 leading-tight">
                    Kami Percaya UMKM Adalah <span class="text-blue-600">Masa Depan.</span>
                </h1>
                <p class="text-xl text-gray-500 mb-8 leading-relaxed">
                    Berdiri sejak 2024, UMKMMaju memiliki satu misi sederhana: Mendemokratisasi teknologi agar bisnis kecil bisa bersaing dengan raksasa korporasi.
                </p>
                <div class="flex items-center space-x-8">
                     <div>
                         <span class="block text-3xl font-bold text-gray-900">500+</span>
                         <span class="text-gray-500 text-sm">Klien Happy</span>
                     </div>
                     <div class="w-px h-12 bg-gray-200"></div>
                     <div>
                         <span class="block text-3xl font-bold text-gray-900">3 Tahun</span>
                         <span class="text-gray-500 text-sm">Pengalaman</span>
                     </div>
                </div>
            </div>
            <div class="relative">
                 <div class="aspect-w-4 aspect-h-3 rounded-3xl overflow-hidden shadow-2xl transform rotate-2 hover:rotate-0 transition duration-500">
                      <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="Team meeting" class="object-cover w-full h-full">
                 </div>
                 <!-- Decorative Dots -->
                 <div class="absolute -bottom-10 -left-10 w-24 h-24 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
                 <div class="absolute -top-10 -right-10 w-24 h-24 bg-purple-100 rounded-full mix-blend-multiply filter blur-xl opacity-70"></div>
            </div>
        </div>
    </div>
</div>

<!-- Values -->
<div class="bg-slate-900 py-24 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold">DNA Perusahaan Kami</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-blue-500/40">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Kecepatan</h3>
                <p class="text-gray-400">Bisnis tidak bisa menunggu. Kami bekerja dengan speed startup.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-purple-500/40">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Kualitas</h3>
                <p class="text-gray-400">Kode bersih, desain premium, dan struktur SEO friendly.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-green-500/40">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Kejujuran</h3>
                <p class="text-gray-400">Kami merekomendasikan apa yang Anda butuhkan, bukan yang paling mahal.</p>
            </div>
        </div>
    </div>
</div>
@endsection
