<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show(Request $request)
    {
        $triggeredView = 'events.' . $request->event; 

        if (! View::exists($triggeredView)) {
            abort(404);
        }

        return View::make($triggeredView); 
    }
}
