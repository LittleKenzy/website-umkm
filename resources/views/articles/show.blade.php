@extends('layouts.app')

@section('title', $article->title . ' - Blog UMKMMaju')

@section('content')
<div class="bg-white py-32">
    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="flex items-center justify-center space-x-2 text-sm text-blue-600 font-semibold uppercase tracking-wide mb-4">
                <span>Tips Bisnis</span>
                <span>&bull;</span>
                <span>{{ $article->published_at->format('d M Y') }}</span>
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-gray-900 leading-tight mb-8">{{ $article->title }}</h1>
            
            <div class="flex items-center justify-center">
                 <div class="flex-shrink-0">
                    <div class="h-12 w-12 text-white bg-blue-600 rounded-full flex items-center justify-center font-bold text-lg">
                        {{ substr($article->author, 0, 1) }}
                    </div>
                </div>
                <div class="ml-4 text-left">
                    <p class="text-base font-bold text-gray-900">{{ $article->author }}</p>
                    <p class="text-sm text-gray-500">Editor Content</p>
                </div>
            </div>
        </div>

        <!-- Featured Image -->
        <div class="mb-12 rounded-3xl overflow-hidden shadow-2xl">
            @if($article->thumbnail)
                 <img src="{{ asset('storage/' . $article->thumbnail) }}" class="w-full h-auto object-cover">
            @else
                 <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" class="w-full h-auto object-cover">
            @endif
        </div>

        <!-- Content -->
        <div class="prose prose-lg prose-blue mx-auto text-gray-600 leading-relaxed font-serif">
            {!! nl2br(e($article->content)) !!}
        </div>

        <!-- Share/Footer -->
        <div class="mt-16 pt-8 border-t border-gray-100 flex justify-between items-center">
            <a href="{{ route('articles.index') }}" class="text-blue-600 font-bold hover:underline flex items-center">
                 <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Kembali ke Artikel
            </a>
            <div class="flex space-x-4">
                <!-- Social Share placeholders -->
                <button class="text-gray-400 hover:text-blue-500 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></button>
            </div>
        </div>
    </article>
</div>
@endsection
