<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'posisi' => 'required|string',
            'image' => 'image|file|max:2048',
            'nip' => 'required'
        ]);

        $filename = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $filename);
        }

        $guru = new guru();
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->posisi = $request->posisi;
        $guru->image = $filename;
        $guru->save();
        return redirect()->route('index.guru')->with('success','Data Guru Berhasil Dibuat!');
    }

    public function delete(guru $guru, Request $request){
        $guru = guru::where('id', $request->id)->first();
        $filename = $guru->image;
        $guru->delete();
        if ($filename && Storage::exists('public/' . $filename)) {
            Storage::delete('public/' . $filename);
        }
        return redirect()->route('index.guru')->with('success','Data Guru Berhasil Dihapus!');
    }
}
