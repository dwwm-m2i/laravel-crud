<?php

namespace App\Http\Controllers;

use App\Models\Game;
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
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:games',
            'content' => 'required|between:50,1000',
            'image' => 'required|url',
            'active' => 'boolean',
            'company' => 'required',
            'genres' => 'required|array',
            'genres.*' => 'required|in:'.implode(',', ['Aventure', 'Beat \'em up', 'FPS', 'MMO', 'RPG']),
            'released_at' => 'required|date',
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

        return redirect('/jeux')->with('message', 'Le jeu a été ajouté.');
    }
}
