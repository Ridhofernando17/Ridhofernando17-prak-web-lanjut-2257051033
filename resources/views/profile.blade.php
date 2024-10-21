<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Profil</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f4f4; /* Match background color to previous styles */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .profile-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            width: 500px;
            border: 2px solid #007bff; /* Add border to match theme */
        }

        .profile-avatar img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #007bff; /* Border color matches theme */
            margin-bottom: 20px;
        }

        .profile-info {
            color: #333;
        }

        .profile-name, .profile-class, .profile-npm {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 5px;
            transition: background 0.3s;
        }

        .profile-name:hover, .profile-class:hover, .profile-npm:hover {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5); /* Maintain hover effect */
        }

        .profile-card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }

        .profile-avatar img:hover {
            border-color: #0056b3; /* Hover effect for the border */
            transition: 0.3s;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-card">
            <div class="profile-avatar">
                <img src="{{ $user->foto ? asset($user->foto) : asset('assets/upload/img/default-foto.jpg') }}" alt="Profile">
            </div>
            <div class="profile-info">
                <p class="profile-name">Nama : <br>{{ $user->nama }}</p>
                <p class="profile-class">NPM: <br>{{ $user->npm }}</p>
                <p class="profile-npm">Kelas: <br>{{ $user->nama_kelas ?? 'Kelas Tidak ditemukan' }}</p>
            </div>
        </div>
    </div>
</body>
</html>
