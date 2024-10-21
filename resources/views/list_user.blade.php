@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f4f4f4;
        font-family: 'Arial', sans-serif;
    }
    .container {
        margin-top: 50px;
    }
    .table {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .table th {
        background-color: #007bff;
        color: white;
    }
    h2 {
        color: #007bff;
        text-align: center;
        margin-bottom: 20px;
    }
    .btn-primary {
        background-color: #007bff;
        color: white;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-danger {
        background-color: #dc3545;
        color: white;
    }
    .btn-danger:hover {
        background-color: #c82333;
    }
    .profile-image {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto;
        background-color: #f5f5f5;
    }
    .profile-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<div class="container">
    <h2 class="mb-4">Daftar Pengguna</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Foto</th>
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
                        <div class="profile-image">
                            @if($user->foto)
                                <img src="{{ asset($user->foto) }}" alt="Foto {{ $user->nama }}">
                            @else
                                <img src="{{ asset('default-photo.png') }}" alt="Default Foto">
                            @endif
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('users.show', $user['id']) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus User Ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
