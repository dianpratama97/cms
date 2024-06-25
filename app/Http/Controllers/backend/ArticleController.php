<?php

namespace App\Http\Controllers\backend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Article\ArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $data = Article::with('Category')->latest()->get();
            return datatables()->of($data)
                //nomor
                ->addIndexColumn()
                //relasi table
                ->addColumn('category_id', function ($data) {
                    return $data->Category->name;
                })
                // pengkondisian
                ->addColumn('status', function ($data) {
                    if ($data->status == 0) {
                        return ' <span class="badge bg-danger">Private</span>';
                    } else {
                        return '<span class="badge bg-primary">Publish</span>';
                    }
                })
                // tombol
                ->addColumn('button', function ($data) {
                    return
                        '<div class="text-center">
                         <a href="/admin/article/' . $data->id . '" class="btn btn-outline-primary btn-sm"><i class="ti ti-eye"></i></a>
                         <a href="/admin/article/' . $data->id . '/edit" class="btn btn-outline-warning btn-sm"><i class="ti ti-pencil"></i></a>
                         <a href="#" onclick="hapus(this)" data-id="' . $data->id . '" class="btn btn-outline-danger btn-sm"><i class="ti ti-trash"></i></i></a>
                        </div>';
                })
                ->rawColumns(['category_id', 'status', 'button'])
                ->make(true);
        }
        $data = Article::with('Category')->latest()->get();
        return view('backend.article.index');
    }

    public function create()
    {
        return view('backend.article.create', [
            'categories' => Category::get()
        ]);
    }

    public function store(ArticleRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('img'); //ambil file
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
        $file->storeAs('public/gambar/backend/article', $fileName); //lokasi file

        $data['img'] = $fileName;
        $data['slug'] = Str::slug($data['title']);
        Article::create($data);
        Alert::success('Berhasil', 'Data di Tambah.');
        return redirect()->route('article.index');
    }

    public function show(string $id)
    {
        return view('backend.article.detail', [
            'article' => Article::find($id)
        ]);
    }

    public function edit(string $id)
    {
        return view('backend.article.edit', [
            'categories' => Category::get(),
            'article' => Article::find($id)
        ]);
    }

    public function update(UpdateArticleRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img'); //ambil file
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); //ambil extensi
            $file->storeAs('public/gambar/backend/article', $fileName); //lokasi file
            //hapus gambar lama
            Storage::delete('public/gambar/backend/article/' . $request->oldImg);
            $data['img'] = $fileName;
        } else {
            $data['img'] = $request->oldImg;
        }

        $data['slug'] = Str::slug($data['title']);
        Article::find($id)->update($data);
        Alert::success('Berhasil', 'Data di Edit.');
        return redirect()->route('article.index');
    }

    public function destroy(string $id)
    {
        $data = Article::find($id);
        Storage::delete('public/gambar/backend/article/' . $data->img);
        $data->delete();
        return response()->json();
    }
}
