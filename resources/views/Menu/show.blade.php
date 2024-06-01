@extends('master.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Menu
                        <a href="{{ route('menu.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Nama Produk:</label>
                            <b>{{ $menu->nama_produk }}</b>
                        </div>
                        <div class="mb-2">
                            <img src="{{ asset('/images/menu/' . $menu->gambar) }}" alt="" style="width: 200px;">
                        </div>
                        <div class="mb-2">
                            <label for="">Kategori:</label>
                            <b>{{ $menu->kategori }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Harga:</label>
                            <b>{{ $menu->harga }}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
