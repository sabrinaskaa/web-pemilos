<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function hasil(){
        $candidates = Candidate::with('user')->paginate(3);
        $jumlah = User::where('status', 'sudah')->count();
        return view('admin.hasil', [
            "title" => "HASIL VOTING",
            "active" => 'hasil',
            "name" => "HASIL SUARA",
            "candidates" => $candidates,
            "jumlah" => $jumlah
        ]);
    }

    public function importExportView(){
        $siswa = User::latest()->orderBy('id');
        return view('admin.import',[
            "active" => "import",
            "name" => "IMPORT SISWA",
            "daftar" => $siswa->paginate(36)
        ]);
        
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'siswa.xlsx');
    }

    public function importSiswa(Request $request){

        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        Excel::import(new UsersImport, $file);

        Session::flash('sukses','Data Siswa Berhasil Diimport!');

        return back();
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
