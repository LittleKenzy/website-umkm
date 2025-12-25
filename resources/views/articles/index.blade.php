@extends('layouts.app')

@section('title', 'Blog & Wawasan - UMKMMaju')

@section('content')
<div class="bg-white py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="text-blue-600 font-bold tracking-wider uppercase bg-blue-50 px-4 py-2 rounded-full text-sm">Knowledge Hub</span>
            <h1 class="mt-6 text-4xl font-extrabold text-gray-900 sm:text-5xl">Wawasan Bisnis & Digital</h1>
             <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">Tips, trik, dan strategi terbaru untuk mengembangkan bisnis Anda di era digital.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($articles as $article)
            <article class="flex flex-col rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-blue-500/10 transition duration-500 bg-white border border-gray-100 group">
                <div class="flex-shrink-0 relative overflow-hidden h-56">
                    @if($article->thumbnail)
                        <img class="h-full w-full object-cover transform group-hover:scale-110 transition duration-700" src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}">
                    @else
                         <img class="h-full w-full object-cover transform group-hover:scale-110 transition duration-700" src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" alt="Placeholder">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/90 backdrop-blur text-xs font-bold text-gray-900 rounded-full">Tips Bisnis</span>
                    </div>
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <div class="text-sm font-medium text-blue-600 mb-2">
                             {{ $article->published_at->format('d M Y') }}
                        </div>
                        <a href="{{ route('articles.show', $article) }}" class="block mt-2">
                            <h3 class="text-xl font-bold text-gray-900 hover:text-blue-600 transition line-clamp-2">{{ $article->title }}</h3>
                            <p class="mt-3 text-base text-gray-500 line-clamp-3 leading-relaxed">{{ $article->excerpt }}</p>
                        </a>
                    </div>
                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <span class="sr-only">{{ $article->author }}</span>
                            <div class="h-10 w-10 text-white bg-blue-600 rounded-full flex items-center justify-center font-bold text-sm">
                                {{ substr($article->author, 0, 1) }}
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                {{ $article->author }}
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="{{ $article->published_at }}">{{ $article->published_at->diffForHumans() }}</time>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        
        <div class="mt-16">
            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection
