<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\kepsek;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('test', [
            'active' => 'home',
            'latest' => post::latest()->get(),
            'post1' => post::where('isChosen', 1)->first(),
            'post2' => post::where('isChosen2', 1)->first(),
            'kepsek' => kepsek::get()->first()
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
