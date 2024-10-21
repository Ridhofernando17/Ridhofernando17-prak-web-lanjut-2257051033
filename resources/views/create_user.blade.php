@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f4f4f4;
        font-family: 'Arial', sans-serif;
    }
    .form-container {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        border: 2px solid #007bff;
    }
    h2 {
        color: #007bff;
        text-align: center;
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        font-weight: bold;
        color: #333;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.3s;
    }
    .form-control:focus {
        border-color: #007bff;
        outline: none;
    }
    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .text-danger {
        color: #dc3545;
    }
</style>

<div class="form-container">
    <h2>Form User</h2>
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf  <!-- Token CSRF Laravel -->
        
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="kelas_id">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="form-control" required>
                <option value="" disabled selected>Pilih kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
            @if ($errors->has('kelas_id'))
                <p class='text-danger'>{{ $errors->first('kelas_id') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="foto">Foto:</label><br>
            <input type="file" id="foto" name="foto" class="form-control">
            @if ($errors->has('foto'))
                <p class="text-danger">{{ $errors->first('foto') }}</p>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button><br><br>
    </form>
</div>
@endsection
