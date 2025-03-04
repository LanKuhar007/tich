<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopCategoryController extends Controller
{
    public function show($id)
    {
        return view('components.top-category.top-category', [
            'id' => $id
        ]);
    }
}
