<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Article;
use App\Models\Category;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.index', [
            'pesan' => Pesan::where('status', 0)->count(),
            'user' => User::count(),
            'artikel' => Article::count(),
            'kategori' => Category::count(),
            'alumni' => Alumni::count(),
        ]);
    }
}
