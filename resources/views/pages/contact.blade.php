@extends('layouts.app')

@section('title', 'Hubungi Kami - UMKMMaju')

@section('content')
<div class="min-h-screen bg-white flex items-center relative overflow-hidden pt-20">
    <!-- Background Decoration -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-slate-900 hidden lg:block skew-x-12 translate-x-32"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-12 lg:py-0 relative z-10">
        <div class="lg:grid lg:grid-cols-2 lg:gap-24 items-center">
            
            <!-- Left Column: Form -->
            <div class="mb-12 lg:mb-0">
                <span class="text-blue-600 font-bold tracking-wider uppercase text-sm mb-2 block">Konsultasi Gratis</span>
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-6">Mulai Transformasi Digital Anda.</h1>
                <p class="text-lg text-gray-500 mb-10">Isi formulir di bawah ini. Tim ahli kami akan menghubungi Anda dalam waktu kurang dari 24 jam kerja.</p>
                
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @if(session('success'))
                        <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6 rounded-r-lg">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-green-700 font-medium">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" required class="block w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-gray-50">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">No. WhatsApp</label>
                            <input type="number" name="phone" id="phone" class="block w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-gray-50">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Bisnis</label>
                        <input type="email" name="email" required class="block w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-gray-50">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ceritakan Kebutuhan Anda</label>
                        <textarea name="message" rows="4" required class="block w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-gray-50" placeholder="Contoh: Saya butuh website untuk toko kue saya..."></textarea>
                    </div>

                    <button type="submit" class="w-full flex justify-center py-4 px-6 border border-transparent rounded-xl shadow-lg text-lg font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition transform hover:-translate-y-1">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Right Column: Info (Dark) -->
            <div class="hidden lg:block text-white pl-44 relative z-20">
                <img src="https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" class="rounded-3xl shadow-2xl mb-10 w-full object-cover h-64 border-4 border-slate-700/50 relative z-20">
                
                <h3 class="text-2xl font-bold mb-6">Kantor Pusat</h3>
                <div class="space-y-6 text-gray-300">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 mr-4 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <div>
                            <p class="font-medium text-white">Little Kenzy HQ</p>
                            <p class="mt-1">Sidoarjo, Jawa Timur<br>Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="h-6 w-6 mr-4 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <p>littlekenzystore@gmail.com</p>
                    </div>
                     <div class="flex items-start">
                        <svg class="h-6 w-6 mr-4 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <p>+62 823 9592 8309</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
