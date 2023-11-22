<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GameController extends Controller
{
    public function show($id, $slug)
    {
        // SELECT * FROM games WHERE id = :id AND slug = :slug
        $game = Game::where('id', $id)->where('slug', $slug)->first();

        abort_if(! $game, 404);

        return view('games/show', ['game' => $game]);
    }
}
