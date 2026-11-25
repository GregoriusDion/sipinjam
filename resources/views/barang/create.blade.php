<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang SIPINJAM</h1>

    <form action="/barang" method="POST">
        @csrf

        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" required>

        <br><br>

        <label>Jumlah:</label>
        <input type="number" name="jumlah" min="1" required>

        <br><br>

        <label>Kondisi:</label>
        <select name="kondisi" required>
            <option value="Baik">Baik</option>
            <option value="Rusak">Rusak</option>
        </select>

        <br><br>

        <button type="submit">Simpan Barang</button>
    </form>

    <br>
    <a href="/barang">Kembali</a>
</body>
</html>