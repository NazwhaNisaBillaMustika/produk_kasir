@extends('master.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card border-secondary">
                    <div class="card-header">Data Pembelian
                        <a href="{{ route('dataPembelian.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Id Menu</th>
                                        <th>Id Pegawai</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Uang Tunai</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                @php $no = 1; @endphp
                                <tbody>
                                    @foreach ($dataPembelian as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>ai
                                            <td>{{ $item->nama_produk }}</td>
                                            <td>{{ $item->metode_pembayaran }}</td>
                                            <td>
                                                <form action="{{ route('dataPembelian.destroy', $item->id) }}" id="delete-data"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="{{ route('dataPembelian.edit', $item->id) }}"
                                                        class="btn btn-sm btn-success">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('dataPembelian.show', $item->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        Show
                                                    </a>

                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                        Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
