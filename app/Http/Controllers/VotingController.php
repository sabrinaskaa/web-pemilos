<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotingController extends Controller
{
    public function voting(){
        return view('voting',[
            "title" => "Pemilihan Ketua Osis",
            "voting" => Candidate::all(),
        ]);
    }

    public function visimisi(Candidate $slug){

        return view('visimisi', [

            "visimisi" => $slug

        ]);
    }

    public function pilih(Request $request, $id){
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        $user->candidate_id = $request->get('candidate_id');
        $user->status = "sudah";
        $user->save();
        return redirect()->route('berhasil')->with('status','Kamu Sudah Memilih :)');
    }

    public function berhasil(){
        return view('submit', [
            "title" => "berhasil memilih",
        ]);
    }
}


