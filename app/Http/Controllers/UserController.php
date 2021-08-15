<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = User::latest();
            
        if(request('search')){
            $daftar->where('nis', 'like', '%' . request('search'). '%')
                   ->orWhere('nama','like','%'.request('search').'%')
                   ->orWhere('kelas','like','%'.request('search').'%')
                   ->orWhere('status','like','%'.request('search').'%');
        }
        return view('admin.daftar',[
            "title" => "DAFTAR SISWA",
            "daftar" => $daftar->paginate(5)->withQueryString(),
            
        ])->with('i', (request()->input('page', 1) - 1) * 5);
        
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
