<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa = DB::select(DB::raw('select * from data_siswa'));
        return view('siswa.index', compact('dataSiswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'informasi_kesehatan'  => 'required',
            'data_pendidikan'      => 'required',
            'data_kontak'          => 'required',
            'data_konseling'       => 'required',
            'data_identitas_siswa' => 'required'
        ]);

        DB::insert("INSERT INTO data_siswa (id_siswa, informasi_kesehatan, data_pendidikan, data_kontak, data_konseling, data_identitas_siswa) 
        VALUES (uuid(), ?, ?, ?, ?, ?)", [
            $request->informasi_kesehatan,
            $request->data_pendidikan,
            $request->data_kontak,
            $request->data_konseling,
            $request->data_identitas_siswa,
        ]);
        return redirect()->route('siswa.index')->with(['success' => 'Data Siswa Berhasil Disimpan!']);
    }

    public function edit($id)
    {
        $siswa = DB::table('data_siswa')->where('id_siswa', $id)->first();
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'informasi_kesehatan'  => 'required',
            'data_pendidikan'      => 'required',
            'data_kontak'          => 'required',
            'data_konseling'       => 'required',
            'data_identitas_siswa' => 'required',
        ]);

        DB::table('data_siswa')->where('id_siswa', $id)->update([
            'informasi_kesehatan'  => $request->informasi_kesehatan,
            'data_pendidikan'      => $request->data_pendidikan,
            'data_kontak'          => $request->data_kontak,
            'data_konseling'       => $request->data_konseling,
            'data_identitas_siswa' => $request->data_identitas_siswa,
        ]);

        return redirect()->route('siswa.index')->with(['success' => 'Data Siswa Berhasil Diupdate!']);
    }

    public function destroy($id)
    {
        DB::table('data_siswa')->where('id_siswa', $id)->delete();
        return redirect()->route('siswa.index')->with(['success' => 'Data Siswa Berhasil Dihapus!']);
    }
}