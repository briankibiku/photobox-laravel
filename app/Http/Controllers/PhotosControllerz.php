<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotosController extends Controller
{
    public function index()
    {
        return view('photos.index');
    }
    public function photos()
    {
        $all_photos = DB::select('select * from pictures'); 
        // dd($all_photos);
        return view('photos.index', ['all_photos' => $all_photos]);
    }
}