@extends('master.layout')
@section('content')
<br>
<br>
<div class="contrainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pegawai
                    <a href="{{ route('pegawai.index') }}" class="btn btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Nama Pegawai</label>
                        <b>{{$pegawai->nama}}</b>
                    </div>
                    <div class="mb-2">
                        <label for="">Bio Pegawai</label>
                        <b>{{$pegawai->bio}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
