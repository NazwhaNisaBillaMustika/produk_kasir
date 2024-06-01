<?php

namespace App\Http\Controllers;

use App\Models\DataPembelian;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Menu;

class DataPembelianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dataPembelian = DataPembelian::orderBy('id','desc')->get();
        return view('dataPembelian.index', compact('dataPembelian'));
    }
    public function create()
    {
         $dataPembelian = DataPembelian::all();
         $pegawai = Pegawai::all();
         $menu = Menu::all();
         return view('dataPembelian.create',compact('dataPembelian','pegawai','menu'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pembeli' => 'required',
            'id_menu' => 'required',
            'id_pegawai' => 'required',
            'metode_pembayaran' => 'required',
            'uang_tunai' => 'required',
            'tanggal' => 'required',
        ]);

        $dataPembelian = new DataPembelian();
        $dataPembelian->nama_pembeli = $request->nama_pembeli;
        $dataPembelian->id_menu = $request->id_menu;
        $dataPembelian->id_pegawai = $request->id_pegawai;
        $dataPembelian->metode_pembayaran = $request->metode_pembayaran;
        $dataPembelian->uang_tunai = $request->uang_tunai;
        $dataPembelian->tanggal = $request->tanggal;
        $dataPembelian->save();

        return redirect()->route('dataPembelian.index')
            ->with('success', 'data berhasil ditambahkan');

    }
    public function show($id)
    {
        $dataPembelian = DataPembelian::findOrFail($id);
        return view('dataPembelian.show', compact('dataPembelian'));
    }
    public function edit($id)
    {
        $dataPembelian = DataPembelian::findOrFail($id);
        return view('dataPembelian.edit', compact('dataPembelian'));
    }
    public function update(Request $request, DataPembelian $dataPembelian)
    {
        $validated = $request->validate([
            'nama_pembeli' => 'required',
            'id_menu' => 'required',
            'id_pegawai' => 'required',
            'metode_pembayaran' => 'required',
            'uang_tunai' => 'required',
            'tanggal' => 'required',
        ]);

        $dataPembelian = new DataPembelian();
        $dataPembelian->nama_pembeli = $request->nama_pembeli;
        $dataPembelian->id_menu = $request->id_menu;
        $dataPembelian->id_pegawai = $request->id_pegawai;
        $dataPembelian->metode_pembayaran = $request->metode_pembayaran;
        $dataPembelian->uang_tunai = $request->uang_tunai;
        $dataPembelian->tanggal = $request->tanggal;
        $dataPembelian->save();

        return redirect()->route('dataPembelian.index')
            ->with('success', 'data berhasil diubah');
    }
    public function destroy($id)
    {
        $dataPembelian = DataPembelian::findOrFail($id);
        $dataPembelian->delete();

        return redirect()->route('dataPembelian.index')
            ->with('success', 'data berhasil dihapus');
    }
}
