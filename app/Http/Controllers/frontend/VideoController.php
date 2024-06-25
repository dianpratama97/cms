<?php

namespace App\Http\Controllers\frontend;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        return view('frontend.video.index',[
            'config' => Config::first(),
            'data' => Video::paginate(4)
        ]);
    }
}
