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
        return redirect()->route('index.guru');
    }

    public function delete(guru $guru){
        $guru->delete();
        return redirect()->route('index.guru');
    }
}
