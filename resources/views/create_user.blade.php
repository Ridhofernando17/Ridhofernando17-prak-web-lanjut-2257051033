<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            width: 200px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: inline-block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="form-container">
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm">
        </div>
        <div class="form-group">
          
            <label for="id_kelas">Kelas:</label><br>
            <select name="kelas_id" id="kelas_id" required>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
            </select>

        </div>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
