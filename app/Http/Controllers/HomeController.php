<?php

namespace App\Http\Controllers;

use App\Models\Game;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'games' => Game::latest('released_at')->where('active', true)->limit(4)->get(),
        ]);
    }
}
