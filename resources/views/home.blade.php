@extends('layouts.app')

@section('content')
    <div class="text-center mb-12">
        <a href="/jeu/nouveau" class="inline-block bg-gray-800 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-600 hover:scale-105 duration-200">Ajouter un jeu</a>
    </div>

    @if (session('message'))
        <p class="rounded shadow text-green-800 bg-green-300 text-center p-2 mb-9">
            {{ session('message') }}
        </p>
    @endif

    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
        {{-- le forelse pour gérer le message si le tableau est vide --}}
        @forelse ($games as $game)
            <div class="rounded-lg bg-white shadow-lg hover:{{ $loop->even ? '-' : '' }}rotate-2 duration-200 {{ ! $game->active ? 'opacity-50' : '' }}">
                <a href="/jeu/{{ $game->id }}-{{ $game->slug }}">
                    <img class="w-full rounded-t-lg" src="{{ $game->image }}" alt="{{ $game->name }}">
                </a>
                <div class="px-3 py-3">
                    <h2 class="truncate text-sm text-gray-900" title="{{ $game->name }}">{{ $game->name }}</h2>
                    <div class="mt-2 flex items-center justify-between gap-3">
                        <p class="text-xs text-gray-600 truncate" title="{{ $game->genres->implode(', ') }}">{{ $game->genres->implode(', ') }}</p>
                        <p class="text-xs text-gray-800">{{ $game->released_at->format('Y') }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-6">
                <h2 class="text-center text-2xl">Il n'y a pas de ressources</h2>
            </div>
        @endforelse
    </div>
@endsection
