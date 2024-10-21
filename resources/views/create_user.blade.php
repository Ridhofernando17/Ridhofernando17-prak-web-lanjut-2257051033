@extends('layouts.app')

@section('content')
<div>
    <!-- Isi Section -->
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
        </div>
        
        <div>
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm">
        </div>

        <div>
            <label for="kelas">Kelas:</label>
            <select name="kelas_id" id="kelas_id">
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
