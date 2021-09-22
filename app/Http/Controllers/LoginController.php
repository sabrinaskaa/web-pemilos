<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login',[
            "title" => "Pemilihan Ketua Osis"
        ]);
    }
    public function process_login(Request $request){
        request()->validate([
                "nis" => "required",
                "password" => "required",
            ]);

            $credent = $request->only('nis', 'password');

            if (Auth::attempt($credent)){
                $user = Auth::user();
                
                if ($user->roles == 'admin'){
                    return redirect()->intended('/hasil');
                } elseif ($user->roles == 'voter'){
                    return redirect()->intended('voting');
                }
                $request->session()->regenerate();
                
                return redirect()->intended('/login');
            }
        return back()->withErrors([
            'nis' => "<script>Swal.fire({
                title: 'YOU FAIL BOZO!',
                text: 'C\'MON REMEMBER IT AGAIN',
                icon: 'error',
                confirmButtonText: 'OK'
              })</script>"
        ]);
    }
}
