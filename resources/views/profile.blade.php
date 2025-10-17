<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Mahasiswa</title>
</head>
<body style="text-align:center; font-family:sans-serif; margin-top:200px;">
    <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Foto Profil" width="100" style="border-radius:50%; background:#ccc;">
    
    <div style="margin-top:20px;">
        <div style="background:#ddd; padding:10px; margin:5px auto; width:200px;">Nama : {{ $nama }}</div>
        <div style="background:#ddd; padding:10px; margin:5px auto; width:200px;">Kelas : {{ $kelas }}</div>
        <div style="background:#ddd; padding:10px; margin:5px auto; width:200px;">NPM : {{ $npm }}</div>
    </div>
</body>
</html>
