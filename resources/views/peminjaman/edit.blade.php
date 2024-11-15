@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-7 m-auto border shadow">
              @if ($errors->any())
                <div class="alert alert-info">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif          
            <form action="{{route('peminjaman.update',$peminjaman)}}" method="post" class="m-5 p-5 rounded">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="buku" class="form-label">Buku</label>
                    <select name="id_buku" id="buku" class="form-select">
                        @foreach ($books as $book)
                            @if (old('id_buku',$peminjaman->id_buku)==$book->id_buku)
                                <option value="{{$book->id_buku}}" selected>{{$book->nama_buku}}</option>
                            @else
                                <option value="{{$book->id_buku}}">{{$book->nama_buku}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tgl_pinjam" placeholder="Masukkan tanggal pinjam" name='tgl_pinjam' value={{old('tgl_pinjam',$peminjaman->tgl_pinjam)}}>
                </div>
                <div class="mb-3">
                    <label for="kembali" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="tgl_kembali" placeholder="Masukkan tanggal pengembalian" name='tgl_kembali' value={{old('tgl_kembali',$peminjaman->tgl_kembali)}}>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" placeholder="Masukkan jumlah buku yang dipinjam" name='jumlah_pinjam' value={{old('jumlah_pinjam',$peminjaman->jumlah_pinjam)}}>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status Pengembalian</label>
                    <select name="status_peminjaman" id="status" class="form-select">
                        @foreach ($statuses as $status)
                            @if (old('status_peminjaman',$peminjaman->status_peminjaman)==$status)
                                <option value="{{$status}}" selected>{{$status}}</option>
                            @else
                                <option value="{{$status}}">{{$status}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div>
                <div class="mb-3">
                    <label for="denda" class="form-label">Denda</label>
                    <input type="number" class="form-control" id="denda" placeholder="Masukkan Denda" name='denda' value={{old('denda',$peminjaman->denda)}}>
                </div>
                   <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button> 
                   <a href="{{route('peminjaman.index')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection