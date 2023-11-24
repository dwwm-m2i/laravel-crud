<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function index()
    {
        return view('home', [
            'games' => Game::all(),
        ]);
    }

    public function show($id, $slug)
    {
        // SELECT * FROM games WHERE id = :id AND slug = :slug
        $game = Game::where('id', $id)->where('slug', $slug)->first();

        abort_if(! $game, 404);

        return view('games/show', ['game' => $game]);
    }

    public function create()
    {
        return view('games/create', [
            'genres' => ['Aventure', 'Beat \'em up', 'FPS', 'MMO', 'RPG'],
            'platforms' => Platform::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:games',
            'content' => 'required|between:50,10000',
            'image' => 'required|url',
            'active' => 'boolean',
            'company' => 'required',
            'genres' => 'required|array',
            'genres.*' => 'required|in:'.implode(',', ['Aventure', 'Beat \'em up', 'FPS', 'MMO', 'RPG']),
            'released_at' => 'required|date',
            'platforms' => 'required|array',
            'platforms.*' => 'required|exists:platforms,id',
        ]);

        $game = new Game();
        $game->name = $request->name;
        $game->slug = Str::slug($game->name);
        $game->content = $request->content;
        $game->image = $request->image;
        $game->active = (bool) $request->active;
        $game->company = $request->company;
        $game->genres = $request->genres;
        $game->released_at = $request->released_at;
        $game->save();
        $game->platforms()->sync($request->platforms);

        return redirect('/jeux')->with('message', 'Le jeu a été ajouté.');
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);

        return view('games/edit', [
            'game' => $game,
            'genres' => ['Aventure', 'Beat \'em up', 'FPS', 'MMO', 'RPG'],
            'platforms' => Platform::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:games,name,'.$game->id,
            'content' => 'required|between:50,10000',
            'image' => 'required|url',
            'active' => 'boolean',
            'company' => 'required',
            'genres' => 'required|array',
            'genres.*' => 'required|in:'.implode(',', ['Aventure', 'Beat \'em up', 'FPS', 'MMO', 'RPG']),
            'released_at' => 'required|date',
            'platforms' => 'required|array',
            'platforms.*' => 'required|exists:platforms,id',
        ]);

        $game->name = $request->name;
        $game->slug = Str::slug($game->name);
        $game->content = $request->content;
        $game->image = $request->image;
        $game->active = (bool) $request->active;
        $game->company = $request->company;
        $game->genres = $request->genres;
        $game->released_at = $request->released_at;
        $game->save();
        $game->platforms()->sync($request->platforms);

        return redirect('/jeux')->with('message', 'Le jeu a été modifié.');
    }

    public function destroy($id)
    {
        Game::destroy($id);

        return redirect('/jeux')->with('message', 'Le jeu a été supprimé.');
    }

    public function enable($id)
    {
        $game = Game::findOrFail($id);
        $game->active = !$game->active;
        $game->save();

        $newState = $game->active ? 'activé' : 'désactivé';

        return redirect('/jeux')->with('message', 'Le jeu a été '.$newState.'.');
    }
}
