<?php

namespace App\Http\Controllers;

use View;
use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index(Request $request)
    {
        $tournament = Tournament::select('slug')->latest()->first();  

        return redirect()->route('show', [
            'tournament_slug' => $tournament->slug,
        ]);
    }

    public function show(Tournament $tournament)
    {
        return View::make('tournaments.show', [
            'tournament' => $tournament->toArray(),
        ]); 
    }

    public function rules()
    {
        return View::make('tournaments.rules'); 
    }
}
