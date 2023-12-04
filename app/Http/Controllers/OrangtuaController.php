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
        $data = DB::select(DB::raw('select * from orang_tua'));
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
            'id_user' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',


        ]);

        // Insert data into the database
        DB::insert("INSERT INTO Orangtua (id_user, username, password, level) VALUES (uuid(), ?, ?)", [
            $request->id_user,
            $request->username,
            $request->password,
            $request->level,


        ]);

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
        // You can implement this method if needed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('Orangtua')->where('id', $id)->first();
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
            'id_user' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',


        ]);

        // Update data in the database
        DB::update("UPDATE Orangtua SET id_user=?, username=?, password=?, level=?, WHERE id=?", [
            $request->id_user,
            $request->username,
            $request->password,
            $request->level,
            $id,
        ]);

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
        DB::table('Orangtua')->where('id', $id)->delete();

        return redirect()->route('Orangtua.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}