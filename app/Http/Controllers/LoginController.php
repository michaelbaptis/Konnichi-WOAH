<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request){
       $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
       ]);

        if(Auth::attempt($credentials)){
            $match_user = DB::table('users')->where('email', $credentials['email'])->get();
            if($match_user[0]->userIsTeacher) {
                $request->session()->regenerate();
                return redirect()->intended('/homeTeacher');
            } elseif($match_user[0]->userIsAdmin){
                $request->session()->regenerate();
                return redirect()->intended('/homeAdmin');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/homeStudent');
            }
        }
        // dd('berhasil login teacher');
        return back()->with('loginError','Login Failed');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
