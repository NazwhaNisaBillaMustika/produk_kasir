<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $menu = Menu::orderBy('id','desc')->get();
        return view('menu.index', compact('menu'));
    }
    public function create()
    {
        $menu = Menu::all();
        return view('menu.create', compact('menu'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required',
            'gambar' => 'required|max:4000|mimes:png,jpg',
            'kategori' => 'required',
            'harga' => 'required',
        ]);

        $menu = new Menu();
        $menu->nama_produk = $request->nama_produk;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/menu/', $name);
            $menu->gambar = $name;
        }
        $menu->save();
        return redirect()->route('menu.index')
            ->with('success', 'data berhasil ditambahkan');
    }
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.show', compact('menu'));
    }
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.edit', compact('menu'));
    }
    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
        ]);

        $menu = new Menu();
        $menu->nama_produk = $request->nama_produk;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('/images/menu/', $name);
            $menu->gambar = $name;
        }

        $menu->save();
        return redirect()->route('menu.index')
            ->with('success', 'data berhasil diubah');
    }
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->deleteImage();
        $menu->delete();

        return redirect()->route('menu.index')
            ->with('success', 'data berhasil dihapus');
    }
}
