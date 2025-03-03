<?php

namespace App\Http\Controllers;

use App\Models\Streamer;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function topStreamers()
    {
        $topStreamers = Streamer::orderBy('rank', 'desc')->take(10)->get();

        // Pass the data to the view
        return view('components.live-streaming', compact('topStreamers'));
    }
}
