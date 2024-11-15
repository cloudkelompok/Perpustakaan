@extends('layout.app')
@section('content')
    @if (session()->has('message'))
        <p class="alert alert-info">{{ session('message') }}</p>
    @endif
<div class="card mb-3 shadow shadow-lg">
    <div class="card mb-3">
        <div class="card-header">
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" name="q" value="{{ $q }}" placeholder="Pencarian..."/>
                </div>
                <div class="col">
                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
                <div class="col">
                    <a class="btn btn-success" href="{{ route('buku.create') }}"><i class="fa fa-plus"></i></a>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead class="table-info">
                <tr>
                    <th>No</th>
                    <th>Nama Buku</th>
                    <th>Kategori</th>
                    <th>Tahun Terbit</th>
                    <th>Penulis</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php //$no = 1; ?>
            @foreach ($books as $buku)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $buku->nama_buku }}</td>
                    <td>{{ $buku->nama_kategori }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->stok }}</td>
                    <td>
                        <img src="{{ $buku->getImage() }}" height="100">
                    </td>
                    <td>
                        <a class="btn btn-sm btn-warning" href=" {{ route('buku.edit', $buku) }}"><i class="fa fa-edit"></i></a>
                        <form method="POST" class="d-inline" action="{{ route('buku.destroy', $buku) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @if ($books->hasPages())
        <div class="card-footer">
            {{ $books->links() }}
        </div>
    @endif
</div>
@endsection
