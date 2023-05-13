<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use App\Models\kepsek;

class dashboardController extends Controller
{
    public function index() {
        $postsByCategory = post::select('mainKategori', \DB::raw('count(*) as total'))
                               ->groupBy('mainKategori')
                               ->get();
        $total = post::count();
        $latest = post::latest()->get();
        $postsByDate = post::select(DB::raw("DAYNAME(created_at) as dayname"), DB::raw("count(*) as total"))
                        ->groupBy("dayname")
                        ->get();
    
        return view('dashboard', [
            'active' => 'dashboard',
            'latest' => $latest,
            'postsByCategory' => $postsByCategory,
            'total' => $total,
            'postsByDate' => $postsByDate
        ]);
    }

    public function kepsek(){
        $kepsek = kepsek::all()->first();
        return view('dashboard_kepsek', [
            'active' => 'dashboard',
            'kepsek' => $kepsek
        ]);
    }

    public function updateKepsek(Request $request, kepsek $kepsek){
        $kepsek = kepsek::where('id', $request->id)->first();
        $request->validate([
            'nama' => 'required|string',
            'nip' => 'required|string',
            'image' => 'image|file|max:2048'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $kepsek->image);
        }  
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $filename);
            $kepsek->image = $filename;
        }

        $kepsek->nama = $request->nama;
        $kepsek->nip = $request->nip;
        $kepsek->save();
        return redirect()->route('kepsek')->with('success','Kepala Sekolah Berhasil Diupdate!');
    }
}
