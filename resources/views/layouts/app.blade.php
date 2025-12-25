<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'UMKM Digital'))</title>
    <meta name="description" content="@yield('meta_description', 'Layanan digital terpercaya untuk UMKM Indonesia.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-white">
    <!-- Navbar -->
    <header class="fixed w-full z-50 transition-all duration-300" x-data="{ atTop: true }" :class="{ 'bg-white/90 backdrop-blur-md shadow-sm py-2': !atTop, 'bg-transparent py-4': atTop }" @scroll.window="atTop = (window.pageYOffset < 20)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg group-hover:shadow-blue-500/30 transition duration-300">
                            U
                        </div>
                        <span class="text-2xl font-bold text-gray-900 tracking-tight">
                            UMKM<span class="text-blue-600">Maju</span>
                        </span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition duration-300 relative group">
                        Beranda
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition duration-300 origin-left"></span>
                    </a>
                    <a href="{{ route('about') }}" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition duration-300 relative group">
                        Tentang Kami
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition duration-300 origin-left"></span>
                    </a>
                    <a href="{{ route('services.index') }}" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition duration-300 relative group">
                        Layanan
                         <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition duration-300 origin-left"></span>
                    </a>
                    <a href="{{ route('portfolios.index') }}" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition duration-300 relative group">
                        Portfolio
                         <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition duration-300 origin-left"></span>
                    </a>
                    <a href="{{ route('articles.index') }}" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition duration-300 relative group">
                        Blog
                         <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition duration-300 origin-left"></span>
                    </a>
                    <a href="{{ route('contact') }}" class="px-6 py-2.5 rounded-full bg-slate-900 text-white text-sm font-medium hover:bg-blue-600 transition duration-300 shadow-lg hover:shadow-blue-500/25 transform hover:-translate-y-0.5">
                        Hubungi Kami
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden" x-data="{ open: false }">
                    <button type="button" @click="open = !open" class="text-gray-500 hover:text-gray-900 focus:outline-none p-2 rounded-md hover:bg-gray-100 transition">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <!-- Mobile Menu Dropdown -->
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         @click.away="open = false" 
                         class="absolute top-24 right-4 w-64 bg-white/95 backdrop-blur-xl border border-gray-100 rounded-2xl shadow-2xl p-6 flex flex-col space-y-4">
                        <a href="{{ route('home') }}" class="text-gray-800 hover:text-blue-600 font-medium text-lg">Beranda</a>
                        <a href="{{ route('about') }}" class="text-gray-800 hover:text-blue-600 font-medium text-lg">Tentang Kami</a>
                        <a href="{{ route('services.index') }}" class="text-gray-800 hover:text-blue-600 font-medium text-lg">Layanan</a>
                        <a href="{{ route('portfolios.index') }}" class="text-gray-800 hover:text-blue-600 font-medium text-lg">Portfolio</a>
                         <a href="{{ route('articles.index') }}" class="text-gray-800 hover:text-blue-600 font-medium text-lg">Blog</a>
                        <a href="{{ route('contact') }}" class="text-center py-3 bg-blue-600 text-white rounded-xl font-medium shadow-md">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer class="bg-gray-50 pt-16 pb-8 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-1">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">UMKMMaju</h3>
                    <p class="text-gray-500 leading-relaxed">
                        Kami membantu UMKM Indonesia Go Digital dengan solusi website dan sistem yang efektif, murah, dan profesional.
                    </p>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">Layanan</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('services.show', 'website-profil-umkm') }}" class="text-gray-500 hover:text-blue-600 transition">Website UMKM</a></li>
                        <li><a href="{{ route('services.show', 'sistem-kasir-order') }}" class="text-gray-500 hover:text-blue-600 transition">Sistem Kasir</a></li>
                        <li><a href="{{ route('services.show', 'digital-marketing') }}" class="text-gray-500 hover:text-blue-600 transition">Digital Marketing</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">Perusahaan</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('about') }}" class="text-gray-500 hover:text-blue-600 transition">Tentang Kami</a></li>
                        <li><a href="{{ route('portfolios.index') }}" class="text-gray-500 hover:text-blue-600 transition">Portfolio</a></li>
                        <li><a href="{{ route('career') }}" class="text-gray-500 hover:text-blue-600 transition">Karir</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">Kontak</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-500">littlekenzystore@gmail.com</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-gray-500">+62 823 9592 8309</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="text-gray-500">Sidoarjo, Jawa Timur</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-200 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} Little Kenzy. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="https://instagram.com/littlekenzy_store" target="_blank" class="text-gray-400 hover:text-pink-600 transition">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465 1.067-.047 1.407-.06 3.808-.06h.63zm1.146 1.843c-3.12 0-3.5.011-4.714.067-1.286.059-2.17.293-2.936.591a3.715 3.715 0 00-1.348.878 3.715 3.715 0 00-.878 1.348c-.298.766-.532 1.65-.591 2.936-.056 1.214-.067 1.594-.067 4.714s.011 3.5.067 4.714c.059 1.286.293 2.17.591 2.936.216.55.51 1.006.878 1.348.342.368.798.662 1.348.878.766.298 1.65.532 2.936.591 1.214.056 1.594.067 4.714.067s3.5-.011 4.714-.067c1.286-.059 2.17-.293 2.936-.591a3.715 3.715 0 001.348-.878 3.715 3.715 0 00.878-1.348c.298-.766.532-1.65.591-2.936.056-1.214.067-1.594.067-4.714s-.011-3.5-.067-4.714c-.059-1.286-.293-2.17-.591-2.936a3.715 3.715 0 00-.878-1.348 3.715 3.715 0 00-1.348-.878c-.766-.298-1.65-.532-2.936-.591-1.214-.056-1.594-.067-4.714-.067z"/></svg>
                    </a>
                    <a href="https://www.youtube.com/@litlekenzy" target="_blank" class="text-gray-400 hover:text-red-600 transition">
                        <span class="sr-only">YouTube</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                    <a href="https://www.tiktok.com/@littlekenzy_" target="_blank" class="text-gray-400 hover:text-black transition">
                        <span class="sr-only">TikTok</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
