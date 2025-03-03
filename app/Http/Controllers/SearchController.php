<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

    public function search()
    {
        if (request()->isMethod('get')) {
            return view('components.search.search');
        }
    }
}
