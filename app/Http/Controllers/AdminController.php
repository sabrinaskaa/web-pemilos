<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

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
        if(request()->ajax()){
            $siswa = User::skip(1)->take(PHP_INT_MAX)->orderBy('id')->latest()->get();
            return DataTables::of($siswa)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.import',[
            "active" => "import",
            "name" => "IMPORT SISWA",
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
}
