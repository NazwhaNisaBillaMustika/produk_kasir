@extends('master.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Pembelian
                        <a href="{{ route('dataPembelian.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Nama Produk:</label>
                            <b>{{ $dataPembelian->nama_produk }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Id Menu:</label>
                            <b>{{ $dataPembelian->id_menu }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Id Pegawai:</label>
                            <b>{{ $dataPembelian->id_menu }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Metode Pembayaran:</label>
                            <b>{{ $dataPembelian->metode_pembayaran }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Uang Tunai:</label>
                            <b>{{ $dataPembelian->uang_tunai }}</b>
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal:</label>
                            <b>{{ $dataPembelian->tanggal }}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
