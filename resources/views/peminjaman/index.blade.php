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
                    <a class="btn btn-success" href="{{ route('peminjaman.create') }}"><i class="fa fa-plus"></i></a>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead class="table-info">
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Nama Buku</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Status Peminjaman</th>
                    <th>Denda</th>
                    <th>Jumlah Pinjam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php //$no = 1; ?>
            @foreach ($pjm as $peminjaman)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $peminjaman->nama_user }}</td>
                    <td>{{ $peminjaman->nama_buku }}</td>
                    <td>{{ $peminjaman->tgl_pinjam }}</td>
                    <td>{{ $peminjaman->tgl_kembali }}</td>
                    <td>{{ $peminjaman->status_peminjaman }}</td>
                    <td>{{ $peminjaman->denda }}</td>
                    <td>{{ $peminjaman->jumlah_pinjam }}</td>
                    <td>
                        <a href="{{ route('peminjaman.edit', $peminjaman)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        <form method="POST" class="d-inline" action="{{ route('peminjaman.destroy', $peminjaman) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @if ($pjm->hasPages())
        <div class="card-footer">
            {{ $pjm->links() }}
        </div>
    @endif
</div>
@endsection
