<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index(){
        return view('dashboard_pengaturan', [
            'active' => 'pengaturan'
        ]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'password' => 'nullable|string|min:8',
        ]);

        if (Hash::check($request->password, $user->password)) { 
            $user->fill([
             'password' => Hash::make($request->new_password)
             ])->save();
         
            $request->session()->flash('success', 'Password diubah!');
             return redirect()->route('index.setting');
         
         } else {
             $request->session()->flash('error', 'Password tidak sesuai!');
             return redirect()->route('index.setting');
         }
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'username' => 'Kredensial yang diberikan tidak cocok dengan catatan yang ada.',
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
