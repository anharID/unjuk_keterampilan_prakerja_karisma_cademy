<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::where('role', '!=', 'admin')->get();
        // dd($data);
        return view('user/tampil', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $data = User::find($id);
        // dd($request);
        $data->update([
            'role' => $request->role
        ]);

        return redirect('user')->with('success', 'Hak akses berhasil diubah');
    }
}
