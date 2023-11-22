@extends('layouts.app')

@section('content')
    <div class="md:flex items-center gap-6">
        <img class="w-full md:w-64 mb-12 md:mb-0" src="{{ $game->image }}" alt="{{ $game->name }}">
        <div>
            <a href="/" class="text-gray-500 flex gap-2 mb-3">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>                  
                Retour aux jeux
            </a>
            <h1 class="text-5xl font-bold text-gray-900 mb-3">{{ $game->name }}</h1>
            <p class="text-gray-800 mb-3">
                {{ $game->released_at->translatedFormat('d F Y') }}
                ({{ $game->released_at->diffForHumans() }})
            </p>
            <p class="mb-9 italic">{{ $game->company }}</p>
            <p class="mb-3"><strong>Genre</strong>: {{ $game->genres->implode(', ') }}</p>
            <div class="prose">
                {!! Str::markdown($game->content) !!}
            </div>
        </div>
    </div>
@endsection
