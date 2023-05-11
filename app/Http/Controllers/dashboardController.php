<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\post;

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
}
