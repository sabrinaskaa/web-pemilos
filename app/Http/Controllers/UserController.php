<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {   
        if(request()->ajax()){
            $siswa = User::query();
            return DataTables::eloquent($siswa)
            ->addColumn('action', function($siswa){
                return view('admin.delete',[
                    'siswa' => $siswa,
                    'delete' => route('daftar.destroy', $siswa->id)
                ]);
            })
            ->addIndexColumn()
            ->make(true);
        }   

        return view('admin.daftar',[
            "title" => "DAFTAR SISWA",
            "active" => "daftar",
            "name" => "DAFTAR SISWA",
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $daftar)
    {
        $daftar->delete();
        return redirect()->route('daftar.index')->with('success', 'deleted successfully');
    }
}
