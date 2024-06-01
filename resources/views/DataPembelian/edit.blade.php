@extends('master.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit DataPembelian
                        <a href="{{ route('dataPembelian.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dataPembelian.update', $dataPembelian->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="nis">Nama Pembelian</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama">
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div clas="mb-2">
                                        <label for="">Id Menu</label>
                                        <input type="text" class="form-control @error('id_menu') is-invalid @enderror"
                                        name="id_menu">
                                        @error('id_menu')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Id Pegawai/label>
                                        <input type="text" class="form-control @error('id_pegawai') is-invalid @enderror"
                                        name="id_pegawai">
                                        @error('id_pegawai')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="metode_pembayaran">Metode Pembayaran</label>
                                        <input type="text" class="form-control @error('metode_pembayaran') is-invalid @enderror"
                                        name="metode_pembayaran" value="{{ old('metode_pembayaran', $dataPembelian->metode_pembayaran)}}">
                                        @error('metode_pembayaran')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Uang Tunai/label>
                                        <input type="text" class="form-control @error('uang_tunai') is-invalid @enderror"
                                        name="uang_tunai">
                                        @error('uang_tunai')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Tanggal</label>
                                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                            name="tanggal"></input>
                                        @error('tanggal')
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
