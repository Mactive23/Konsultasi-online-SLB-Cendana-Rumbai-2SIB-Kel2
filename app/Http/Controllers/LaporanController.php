<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select(DB::raw("select * from laporan"));
        return view('laporan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporan.create');
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
            'perkembangan_anak'  =>'required',
            'rekomendasi' =>'required'
        ]);
            DB::insert("INSERT INTO `laporan` (`id_laporan`, `perkembangan_anak`, `rekomendasi`) VALUES (uuid(), ?, ?)",
            [$request->perkembangan_anak,$request->rekomendasi]);
            return redirect()->route('laporan.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $data = DB::table('laporan')->where('id_laporan', $id)->first();
        return view('laporan.edit', compact('data'));
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
            'perkembangan_anak'  =>'required',
            'rekomendasi' =>'required'
        ]);
            DB::update(
                "UPDATE `laporan` SET `perkembangan_anak`=?,`rekomendasi`=? WHERE id_laporan=?",
                [$request->perkembangan_anak, $request->rekomendasi, $id]
            );
        return redirect()->route('laporan.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('laporan')->where('id_laporan', $id)->delete();
        //redirect to index
        return redirect()->route('laporan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
