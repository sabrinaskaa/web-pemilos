<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function hasil(){
        $candidates = Candidate::with('user')->paginate(3);
        $jumlah = User::where('status', 'sudah')->count();
        return view('admin.hasil', [
            "title" => "HASIL VOTING",
            "name" => "PEROLEHAN SUARA",
            "candidates" => $candidates,
            "jumlah" => $jumlah
        ]);
    }

    // public function daftar(){

    //     $daftar = User::latest();
        
    //     if(request('search')){
    //         $daftar->where('nis', 'like', '%' . request('search'). '%')
    //                ->orWhere('nama','like','%'.request('search').'%')
    //                ->orWhere('kelas','like','%'.request('search').'%')
    //                ->orWhere('status','like','%'.request('search').'%');
    //     }
    //     return view('admin.daftar',[
    //         "title" => "DAFTAR SISWA",
    //         "daftar" => $daftar->paginate(5)->withQueryString()
    //     ]);
    // }
}
