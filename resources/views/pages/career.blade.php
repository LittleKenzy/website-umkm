@extends('layouts.app')

@section('title', 'Karir - UMKMMaju')

@section('content')
<div class="bg-white py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-6">Bergabung Bersama Kami</h1>
        <p class="text-xl text-gray-500 mb-12 max-w-2xl mx-auto">
            Kami selalu mencari talenta berbakat yang ingin membantu UMKM Indonesia naik kelas.
        </p>

        <div class="bg-blue-50 rounded-3xl p-12 pointer-events-none border border-blue-100 relative overflow-hidden">
            <div class="relative z-10">
                <svg class="w-16 h-16 text-blue-600 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Belum Ada Lowongan Dibuka</h2>
                <p class="text-gray-600 mb-8">
                    Saat ini tim kami sudah lengkap. Namun, kami terus berkembang.<br>Pantau terus halaman ini atau follow sosial media kami untuk info terbaru.
                </p>
                <a href="{{ route('home') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-xl text-blue-700 bg-blue-100 hover:bg-blue-200 transition pointer-events-auto">
                    Kembali ke Beranda
                </a>
            </div>
            
            <!-- Decor -->
            <div class="absolute top-0 right-0 -mr-10 -mt-10 w-40 h-40 bg-blue-200 rounded-full mix-blend-multiply filter blur-2xl opacity-50"></div>
            <div class="absolute bottom-0 left-0 -ml-10 -mb-10 w-40 h-40 bg-purple-200 rounded-full mix-blend-multiply filter blur-2xl opacity-50"></div>
        </div>
    </div>
</div>
@endsection
