<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            background: linear-gradient(to bottom, #0099ff 50%, #f0f0f0 50%);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background-color: white;
            width: 250px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            position: relative;
        }
        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 10px;
            overflow: hidden;
            margin: 0 auto;
            background-color: #f5f5f5;
        }
        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-info {
            margin-top: 15px;
        }
        .profile-info div {
            margin: 5px 0;
            font-size: 14px;
        }
        .profile-info .name {
            font-size: 18px;
            color: #333;
        }
        .profile-info .npm {
            color: #007bff;
        }
        .profile-info .class {
            font-size: 12px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <div class="profile-image">
        <img src="path-to-your-image" alt="Profile Picture">
    </div>
    <div class="profile-info">
    <h1>Profil User</h1>
        <p>Nama: {{ $nama }}</p>
        <p>NPM: {{ $npm }}</p>
        <p>Kelas: {{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</p>
    </div>
</div>

</body>
</html>
