<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Config;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome',[
            'config' => Config::first()
        ]);
    }
}
