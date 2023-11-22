@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
        @foreach ($games as $game)
            <div class="rounded-lg bg-white shadow-lg hover:{{ $loop->even ? '-' : '' }}rotate-2 duration-200">
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
        @endforeach
    </div>
@endsection
