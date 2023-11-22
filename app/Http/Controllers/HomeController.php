<?php

namespace App\Http\Controllers;

use App\Models\Game;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'games' => Game::all(),
        ]);
    }
}