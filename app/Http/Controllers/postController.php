<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        $posts = post::all();
        $chosenPost = post::where('isChosen', true)->get();
        $chosenPost2 = post::where('isChosen2', true)->get();
        return view('dashboard_post', [
            'active' => 'dashboardpost',
            'post' => $posts,
            'chosenPost' => $chosenPost,
            'chosenPost2' => $chosenPost2,
        ]);
    }

    public function getPosts($kategori)
    {
        $posts = post::where('kategori', $kategori)->get(['id', 'judul']);
        return response()->json($posts);
    }

    public function getPosts2($kategori)
    {
        $posts = post::where('kategori', $kategori)->get(['id', 'judul']);
        return response()->json($posts);
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
            'image' => 'image|file|max:2048',
            'konten' => 'required',
            'slug' => 'required'
        ]);

        $filename = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $filename);
        }
        
        $post = new post();
        $post->judul = $request->judul;
        $post->kategori = $request->kategori;
        $post->image = $filename;
        $post->konten = $request->konten;
        $post->slug = $request->slug;

        if($request->kategori == 'Tari' || $request->kategori == 'Pencaksilat' || $request->kategori == 'Qiroah'|| $request->kategori == 'Samproh' || $request->kategori == 'Pramuka'){
            $post->warna1 = "red";
            $post->warna2 = "yellow";
            $post->mainKategori = "Ekstrakurikuler";
        } elseif ($request->kategori == 'Ecoschool' || $request->kategori == 'Ecopreneur'){
            $post->warna1 = "green";
            $post->warna2 = "orange";
            $post->mainKategori = "Adiwiyata";
        } elseif ($request->kategori == 'Guru' || $request->kategori == 'Siswa'){
            $post->warna1 = "blue";
            $post->warna2 = "purple";
            $post->mainKategori = "Karya dan Prestasi";
        }

        $post->save();
        return redirect()->route('index.post');
    }

    public function edit($id)
    {
        $post = post::where('id', $id)->get();
        return view('dashboard_edit', [
            'active' => 'dashboardpost',
            'post' => $post
        ]);
    }

    public function update(Request $request, post $post)
    {
        $post = post::where('id', $request->id)->first();
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'image' => 'image|file|max:2048',
            'kategori' => 'required'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $post->image);
        }  
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $filename);
            $post->image = $filename;
        }              

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->kategori = $request->kategori;

        if($request->kategori == 'Tari' || $request->kategori == 'Pencaksilat' || $request->kategori == 'Qiroah'|| $request->kategori == 'Samproh' || $request->kategori == 'Pramuka'){
            $post->warna1 = "red";
            $post->warna2 = "yellow";
            $post->mainKategori = "Ekstrakurikuler";
        } elseif ($request->kategori == 'Ecoschool' || $request->kategori == 'Ecopreneur'){
            $post->warna1 = "green";
            $post->warna2 = "orange";
            $post->mainKategori = "Adiwiyata";
        } elseif ($request->kategori == 'Guru' || $request->kategori == 'Siswa'){
            $post->warna1 = "blue";
            $post->warna2 = "purple";
            $post->mainKategori = "Karya dan Prestasi";
        }

        $post->save();

        return redirect()->route('index.post');
    }


    public function destroy(Request $request, post $post)
    {
        $post = post::where('id', $request->id)->first();
        // Get the filename of the image associated with the post
        $filename = $post->image;

        // Delete the post from the database
        $post->delete();

        // Delete the image from storage if it exists
        if ($filename && Storage::exists('public/' . $filename)) {
            Storage::delete('public/' . $filename);
        }

        return redirect()->route('index.post');
    }

    public function updateSpecial(Request $request)
    {
        // Find all posts where isChosen is true
        $prevSelectedPosts = post::where('isChosen', true)->get();

        // If any such post(s) exist, set their isChosen attribute to false
        if ($prevSelectedPosts->count() > 0) {
            foreach ($prevSelectedPosts as $prevSelectedPost) {
                $prevSelectedPost->isChosen = false;
                $prevSelectedPost->save();
            }
        }

        // Find the newly selected post and set its isChosen attribute to true
        $post = post::findOrFail($request->id);
        $post->isChosen = true;
        $post->save();

        return response()->json(['success' => true], 200);
    }

    public function updateSpecial2(Request $request)
    {
        // Find all posts where isChosen is true
        $prevSelectedPosts2 = post::where('isChosen2', true)->get();

        // If any such post(s) exist, set their isChosen attribute to false
        if ($prevSelectedPosts2->count() > 0) {
            foreach ($prevSelectedPosts2 as $prevSelectedPost) {
                $prevSelectedPost->isChosen2 = false;
                $prevSelectedPost->save();
            }
        }

        // Find the newly selected post and set its isChosen attribute to true
        $post = post::findOrFail($request->id);
        $post->isChosen2 = true;
        $post->save();

        return response()->json(['success' => true], 200);
    }
}
