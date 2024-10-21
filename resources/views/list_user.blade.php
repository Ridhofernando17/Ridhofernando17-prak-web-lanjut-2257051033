@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Pengguna</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>


    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Foto</Th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td>
                    @if($user->foto)
                        <img src="{{ asset($user->foto) }}" alt="Foto {{ $user->nama }}" width="50" height="50">
                    @else
                        <img src="{{ asset('default-photo.png') }}" alt="Default Foto" width="50" height="50">
                    @endif
                </td>
             
                
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection