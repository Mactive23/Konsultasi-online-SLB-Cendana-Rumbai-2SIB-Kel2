<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select(DB::raw("select * from informasi"));
        return view('informasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informasi.create');
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
            'judul'  =>'required',
            'deskripsi' =>'required'
        ]);
            DB::insert("INSERT INTO `informasi` (`id_informasi`, `judul`, `deskripsi`) VALUES (uuid(), ?, ?)",
            [$request->judul,$request->deskripsi]);
            return redirect()->route('informasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $data = DB::table('informasi')->where('id_informasi', $id)->first();
        return view('informasi.edit', compact('data'));
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
            'judul'  =>'required',
            'deskripsi' =>'required'
        ]);
            DB::update(
                "UPDATE `informasi` SET `judul`=?,`deskripsi`=? WHERE id_informasi=?",
                [$request->judul, $request->deskripsi, $id]
            );
        return redirect()->route('informasi.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('informasi')->where('id_informasi', $id)->delete();
        //redirect to index
        return redirect()->route('informasi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
