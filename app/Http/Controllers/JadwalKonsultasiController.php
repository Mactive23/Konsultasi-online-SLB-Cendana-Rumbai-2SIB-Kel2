<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalKonsultasi;

class JadwalKonsultasiController extends Controller
{
    public function index()
    {
        $jadwalKonsultasi = JadwalKonsultasi::all();
        return view('jadwal_konsultasi.index', compact('jadwalKonsultasi'));
    }

    public function create()
    {
        return view('jadwal_konsultasi.create');
    }

    public function store(Request $request)
    {
        $this->validateData($request);
    
        JadwalKonsultasi::create([
            'id_jadwal' => $request->input('id_jadwal'),
            'nama_murid' => $request->input('nama_murid'),
            'waktu_konsultasi' => $request->input('waktu_konsultasi'),
            'keterangan' => $request->input('keterangan'),
        ]);
    
        return redirect()->route('jadwal_konsultasi.index')->with(['success' => 'Jadwal Konsultasi Berhasil Disimpan!']);
    }
    

    public function edit($id)
    {
        $jadwalKonsultasi = JadwalKonsultasi::findOrFail($id);
        return view('jadwal_konsultasi.edit', compact('jadwalKonsultasi'));
    }

    public function update(Request $request, $id)
    {
        $this->validateData($request);

        JadwalKonsultasi::where('id_jadwal', $id)->update([
            'id_jadwal' => $request->input('id_jadwal'),
            'nama_murid' => $request->input('nama_murid'),
            'waktu_konsultasi' => $request->input('waktu_konsultasi'),
            'keterangan' => $request->input('keterangan'),
        ]);

        return redirect()->route('jadwal_konsultasi.index')->with(['success' => 'Jadwal Konsultasi Berhasil Diperbarui!']);
    }

    public function destroy($id)
    {
        $JadwalKonsultasi = JadwalKonsultasi::findOrFail($id);
        $JadwalKonsultasi->delete();

        return redirect()->route('jadwal_konsultasi.index')->with('success', 'Jadwal konsultasi berhasil dihapus');
    }

    protected function validateData(Request $request)
    {
        $request->validate([
            'id_jadwal' => 'required|numeric',
            'nama_murid' => 'required',
            'waktu_konsultasi' => 'required',
            'keterangan' => 'required',
        ]);
    }
}
