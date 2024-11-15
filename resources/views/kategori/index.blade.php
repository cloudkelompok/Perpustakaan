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
                    <a class="btn btn-success" href="{{ route('kategori.create') }}"><i class="fa fa-plus"></i></a>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead class="table-info">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php //$no = 1; ?>
            @foreach ($ktg as $kategori)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href=" {{ route('kategori.edit', $kategori) }}"><i class="fa fa-edit"></i></a>
                        <form method="POST" class="d-inline" action="{{ route('kategori.destroy', $kategori) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @if ($ktg->hasPages())
        <div class="card-footer">
            {{ $ktg->links() }}
        </div>
    @endif
</div>
@endsection
