<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pegawai = Pegawai::orderBy('id','desc')->get();
        return view('pegawai.index', compact('pegawai'));
    }
    public function create()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.create', compact('pegawai'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'bio' => 'required',
        ]);

        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->bio = $request->bio;
        $pegawai->save();

        return redirect()->route('pegawai.index')
            ->with('success', 'data berhasil ditambahkan');
    }
    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'bio' => 'required',
        ]);

        $pegawai = pegawai::findOrFail($id);
        $pegawai->nama = $request->nama;
        $pegawai->bio = $request->bio;
        $pegawai->save();

        return redirect()->route('pegawai.index')
            ->with('success', 'data berhasil diubah');
    }
    public function destroy( $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')
            ->with('success', 'data berhasil dihapus');
    }
}
