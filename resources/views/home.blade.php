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
                <div class="flex justify-evenly mb-3">
                    @if ($game->active)
                    <a href="/jeu/{{ $game->id }}/modifier" title="Modifier">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                    </a>
                    <a href="/jeu/{{ $game->id }}/supprimer" title="Supprimer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </a>
                    <a href="/jeu/{{ $game->id }}/changer" title="Désactiver">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.412 15.655L9.75 21.75l3.745-4.012M9.257 13.5H3.75l2.659-2.849m2.048-2.194L14.25 2.25 12 10.5h8.25l-4.707 5.043M8.457 8.457L3 3m5.457 5.457l7.086 7.086m0 0L21 21" />
                        </svg>
                    </a>
                    @else
                    <a href="/jeu/{{ $game->id }}/changer" title="Activer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </a>
                    @endif
                </div>
            </div>
        @empty
            <div class="col-span-6">
                <h2 class="text-center text-2xl">Il n'y a pas de ressources</h2>
            </div>
        @endforelse
    </div>
@endsection
