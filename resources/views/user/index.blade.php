@extends('layout.app')
@section('content')
@if (session()->has('message'))
      <p class="alert alert-info">{{ session('message') }}</p>
@endif
      <div class="card mb-3">
          <div class="card-header">
              <form class="row row-cols-auto g-1">
                  <div class="col">
                      <input class="form-control" name="q" value="{{ $q }}" placeholder="Pencarian..."/>
                  </div>
                  <div class="col">
                      <button class="btn btn-success"><i class="fa fa-search"></i></button>
                  </div>
                  <div class="col">
                      <a class="btn btn-primary" href="{{ route('user.create') }}"><i class="fa fa-plus"></i></a>
                  </div>
              </form>
          </div>
    <div class="table-responsive">  
        <table class="table table-hover table-bordered table-striped m-0">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Telepon</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <?php $no = 1; ?>
            @foreach ($users as $user)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $user->nama_user }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->no_tlp }}</td>
                <td>{{ $user->level }}</td>
                <td>
                  <a href="{{ route('user.edit', $user)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                  <form action="{{ route('user.destroy', $user)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i></button>
                  </form>
              </td>
            </tr>
            @endforeach
          </table>
    </div>
    @if ($users->hasPages())
        <div class="card-footer">
          {{ $users->links()}}
        </div>
    @endif
@endsection