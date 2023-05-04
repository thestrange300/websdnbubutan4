<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return view('dashboard_post', [
            'active' => 'dashboardpost',
            'post' => post::get()
        ]);
    }

    public function create()
    {
        return view('dashboard_create', [
            'active' => 'dashboardpost'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'konten' => 'required'
        ]);
        post::create($request->all());
        return redirect()->route('index.post');
    }

    public function edit()
    {
        return view('dashboard_edit', [
            'active' => 'dashboardpost',
            'post' => post::get()
        ]);
    }

    public function update(Request $request, post $post)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'kategori' => 'required'
        ]);

        $post->where('id', $request->id)->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'kategori' => $request->kategori
        ]);

        return redirect()->route('index.post');
    }

    public function destroy(Request $request, post $post)
    {
        $post->where('id', $request->id)->delete();
        return redirect()->route('index.post');
    }

}
