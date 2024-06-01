@extends('master.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">Data Menu
                    <a href="{{route('menu.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body" style="width: 100%">
                    <div class="table-reponsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Gambar</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            @php $no = 1; @endphp
                            <tbody>
                                @foreach ($menu as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_produk}}</td>
                                <td><img src="{{ asset('/images/menu/'.$item->gambar) }}" style="width: 100px"></td>
                                <td>{{$item->kategori}}</td>
                                <td>{{$item->harga}}</td>
                                <td>
                                    <form action="{{route('menu.destroy',$item->id)}}" id="dalete-data"
                                        method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('menu.edit',$item->id)}}" class="btn btn-sm btn-success">
                                            Edit
                                        </a>
                                        <a href="{{route('menu.show',$item->id)}}" class="btn btn-sm btn-warning">
                                            Show
                                        </a>

                                        <button class="btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            Delete
                                        </button>
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
