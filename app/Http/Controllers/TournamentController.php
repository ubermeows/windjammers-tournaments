<?php

namespace App\Http\Controllers;

use View;
use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index(Request $request)
    {
        $tournament['title'] = 'Winter Cup 2021';
        $tournament['challonge_url'] = 'https://windjammersfr.challonge.com/fr/winterleague3';
        $tournament['started_at'] = '2021-01-10 21:00 CET';
        $tournament['localization']['description'] = 'blablabla c la description en francais Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $tournament['localization']['rules'] = [
            'qsd qsd qsd sqd qsd q',
            'qsd qsd qsd sqd qsd q',
            'qsd qsd qsd sqd qsd q',
        ];
        $tournament['video'] = 'https://www.youtube.com/watch?v=pMT9SYqoX94';
        $tournament['winners'] = [
            'qsdsq',
            'qsdsq',
            'qsdsq',
        ];
             
        return View::make('tournaments.show', [
            'tournament' => $tournament,
        ]); 
        
        // $tournament = Tournament::select('slug')->latest()->first();  

        // return redirect()->route('show', [
        //     'tournament_slug' => $tournament->slug,
        // ]);
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
