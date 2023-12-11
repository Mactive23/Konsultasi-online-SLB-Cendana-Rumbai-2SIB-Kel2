<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required',
            'nid_laporan' => 'required',
            'laporan' => 'required',
        ]);

        siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa telah ditambahkan');
    }

    public function edit(siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, siswa $siswa)
    {
        $request->validate([
            'id_siswa' => 'required',
            'id_laporan' => 'required',
            'laporan' => 'required',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa telah di perbarui');
    }

    public function destroy(siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa telah di hapus');
    }
}