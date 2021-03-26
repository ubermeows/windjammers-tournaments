<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function show()
    {
    	return View::make('tournaments.show'); 
    }

    public function rules()
    {
    	return View::make('tournaments.rules'); 
    }
}
