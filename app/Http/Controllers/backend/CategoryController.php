<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::latest()->paginate(5);
        return view('backend.category.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $data['slug'] = Str::slug($data['name']);
        Category::create($data);
        Alert::success('Berhasil.', 'Data Berhasil Di Tambah.');
        return back();
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $data['slug'] = Str::slug($data['name']);
        Category::find($id)->update($data);
        Alert::success('Berhasil', 'Data di Edit.');
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        Category::find($id)->delete();
        Alert::success('Berhasil', 'Data di Hapus.');
        return redirect()->back();
    }
}
