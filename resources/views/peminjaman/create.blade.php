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
        <form action="{{ route('peminjaman.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label>Tanggal</label>
                <input class="form-control" type="date" name="tgl_pinjam" value="{{ old('tgl_pinjam', date('Y-m-d')) }}" />
            </div>
            <div class="mb-3">
                <label>Buku</label>
                <select class="form-select" name="id_buku" onchange="hitung()">
                    @foreach ($books as $buku)
                        @if (old('id_buku') == $buku->id_buku)
                            <option value="{{ $buku->id_buku }}" data-stok="{{ $buku->stok }}" selected> {{ $buku->nama_buku}}
                            </option>
                        @else
                          <option value="{{ $buku->id_buku }}" data-stok="{{ $buku->stok }}"> {{ $buku->nama_buku}} </option>  
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Jumlah Pinjam</label>
                <input class="form-control" type="text" name="jumlah_pinjam" value="{{ old('jumlah_pinjam') }}" />
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input class="form-control" type="text" name="stok" value="{{ old('stok') }}" readonly />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                <a class="btn btn-danger" href="{{ route('peminjaman.index') }}"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
        </form>
        </div>
    </div>
    <script>
        function hitung() {
            let stok = $('select[name=id_buku]').find(':selected').data('stok')
            $('input[name=stok]').val(stok);
        }
    </script>
@endsection
