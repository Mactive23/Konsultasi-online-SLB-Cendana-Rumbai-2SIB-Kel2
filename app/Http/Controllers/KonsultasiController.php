<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select(DB::raw("select * from konsultasi"));
        return view('konsultasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konsultasi.create');
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
            'opsi'  =>'required',
            'deskripsi' =>'required'
        ]);
            DB::insert("INSERT INTO `konsultasi` (`id_konsultasi`,`opsi`, `deskripsi`) VALUES (uuid(), ?, ?)",
            [$request->opsi,$request->deskripsi]);
            return redirect()->route('konsultasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $data = DB::table('konsultasi')->where('id_konsultasi', $id)->first();
        return view('konsultasi.edit', compact('data'));
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
            'opsi'  =>'required',
            'deskripsi' =>'required'
        ]);
            DB::update(
                "UPDATE `konsultasi` SET `opsi`=?,`deskripsi`=? WHERE id_konsultasi=?",
                [$request->opsi, $request->deskripsi, $id]
            );
        return redirect()->route('konsultasi.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('konsultasi')->where('id_konsultasi', $id)->delete();
        //redirect to index
        return redirect()->route('konsultasi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
