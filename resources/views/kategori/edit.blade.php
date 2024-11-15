@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-info">
                    <ul>
                        @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form action="{{ route('kategori.update', $kategori) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                <a class="btn btn-danger" href="{{ route('kategori.index') }}"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
        </form>
        </div>
    </div>
@endsection
