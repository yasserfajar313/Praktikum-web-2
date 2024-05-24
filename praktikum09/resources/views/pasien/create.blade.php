<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pegawai Baru</title>
</head>
<body>
    <h1>Tambah Pegawai Baru</h1>
    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
