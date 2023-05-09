<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $post = post::all();
        return view('test', [
            'active' => 'home',
            'latest' => post::latest()->get(),
        ]);
    }

    public function show($kategori, $slug){
        $post = post::where('kategori', $kategori)->where('slug', $slug)->first();
        return view('detailpost', [
            'active' => 'home',
            'post' => $post
        ]);
    }
    

    public function filterPost($kategori){
        $post = post::where('kategori', $kategori)->paginate(8);
        $kategori = ucwords($kategori);
        return view('post', [
            'active' => 'home',
            'post' => $post,
            'kategori' => $kategori
        ]);
    }
}
