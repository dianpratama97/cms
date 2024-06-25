<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.user.index', [
            'data' => User::get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email'],
            'role' => 'required',
            'password' => 'required|min:6',
        ]);
        User::create([
            'name'     => $request->name,
            'email'      => $request->email,
            'role'      => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('message', 'Users Ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.user.edit', [
            'data' => $user
        ]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email'],
            'role' => 'required',
        ]);

        $user = User::find($id);
        if ($request->password == null) {
            $pass = Auth::user()->password;
        } else {
            $pass = Hash::make($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $pass;
        $user->save();
        return back()->with('success', 'Data Berhasil di Ganti.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        Alert::success('Berhasil', 'Data Berhasil di Hapus');
        return response()->json();
    }
}
