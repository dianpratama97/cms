<?php

namespace App\Http\Controllers\frontend;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        return view('frontend.galley.index', [
            'config' => Config::first(),
            'data' => Gallery::paginate(20)
        ]);
    }
}
