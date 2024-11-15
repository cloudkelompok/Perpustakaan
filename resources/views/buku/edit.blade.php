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
        <form action="{{ route('buku.update', $buku) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama_buku" value="{{ old('nama_buku', $buku->nama_buku) }}" />
            </div>
            <div class="mb-3">
                <label>Kategori</label>
                <select class="form-select" name="id_kategori">
                    @foreach ($kategoris as $kategori)
                        @if (old('id_kategori', $buku->id_kategori) == $kategori->id_kategori)
                            <option value="{{ $kategori->id_kategori }}" selected> {{ $kategori->nama_kategori}}
                            </option>
                        @else
                          <option value="{{ $kategori->id_kategori }}"> {{ $kategori->nama_kategori}} </option>  
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Tahun Terbit</label>
                <input class="form-control" type="text" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" />
            </div>
            <div class="mb-3">
                <label>Penulis</label>
                <input class="form-control" type="text" name="penulis" value="{{ old('penulis', $buku->penulis) }}" />
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input class="form-control" type="text" name="stok" value="{{ old('stok', $buku->stok) }}" />
            </div>
            <div class="mb-3">
                <label>Gambar</label>
                <input class="form-control" type="file" name="gambar" />
                <p class="form-text">Kosongkan jika tidak ingin mengubah gambar!</p>
                <img src="{{ $buku->getImage() }}" height="100">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                <a class="btn btn-danger" href="{{ route('buku.index') }}"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
        </form>
        </div>
    </div>
@endsection
