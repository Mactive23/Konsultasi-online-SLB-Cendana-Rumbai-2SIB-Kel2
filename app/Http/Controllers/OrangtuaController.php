<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrangtuaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select(DB::raw("select * from Orangtua"));
        return view('Orangtua.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Orangtua.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username'  =>'required',
            'password'  =>'required',
            'level' =>'required'
        ]);
            DB::insert("INSERT INTO `Orangtua` (`id_user`, `username`, `password`, `level`) VALUES (uuid(), ?, ?, ?)",
            [$request->username,$request->password,$request->level]);
            return redirect()->route('Orangtua.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $data = DB::table('Orangtua')->where('id_user', $id)->first();
        return view('Orangtua.edit', compact('data'));
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
        $this->validate($request, [
            'username'  =>'required',
            'password'  =>'required',
            'level' =>'required'
        ]);
            DB::update(
                "UPDATE `Orangtua` SET `username`=?,`password`=?,`level`=? WHERE id_user=?",
                [$request->username, $request->password, $request->level, $id]
            );
        return redirect()->route('Orangtua.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('Orangtua')->where('id_user', $id)->delete();
        //redirect to index
        return redirect()->route('Orangtua.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}