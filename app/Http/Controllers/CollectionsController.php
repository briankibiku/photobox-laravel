<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    public function index()
    {
        return view('collections.index');
    }
}