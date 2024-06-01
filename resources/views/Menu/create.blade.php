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
                        <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="">Nama Produk</label>
                                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror"
                                        name="nama_produk">
                                        @error('nama_produk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Foto</label>
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                        name="gambar" value="{{ old('gambar', $menu->gambar)}}">
                                        @error('gambar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="mb-2">
                                        <label for="">Kategori</label>
                                        <select name="kategori" class="form-control @error('kategori') is-invalid @enderror">
                                            <option value="">Kategori</option>
                                            <option value="minuman">Minuman</option>
                                            <option value="makanan">Makanan</option>
                                        </select>
                                        @error('kategori')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Harga</label>
                                        <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                        name="harga">
                                        @error('harga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <button class="btn btn-sm btn-success" type="submit">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
