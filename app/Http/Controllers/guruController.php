<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index(){
        return view('dashboard_guru', [
            'active' => 'dashboardguru',
            'guru' => guru::get()
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'posisi' => 'required|string'
        ]);
        guru::create($request->all());
        return redirect()->route('index.guru')->with('success','Data Guru Berhasil Dibuat!');
    }

    public function delete(guru $guru, Request $request){
        $guru = guru::where('id', $request->id)->first();
        $guru->delete();
        return redirect()->route('index.guru')->with('success','Data Guru Berhasil Dihapus!');
    }
}
