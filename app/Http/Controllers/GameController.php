<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::orderBy('created_at', 'desc')->get();

        return view('game.index')->with('games', $games);
    }

    public function show(string $slug)
    {
        $game = Game::where('slug', $slug)->firstOrFail();
        $offers = $game->offers()
            ->with('platform')
            ->where('is_active', true)
            ->get();

        return view('game.show', compact('game', 'offers'));
    }
}
