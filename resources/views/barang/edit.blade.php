<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>

    <form action="/barang/{{ $barang->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Barang:</label>
        <input
            type="text"
            name="nama_barang"
            value="{{ $barang->nama_barang }}"
            required
        >

        <br><br>

        <label>Jumlah:</label>
        <input
            type="number"
            name="jumlah"
            value="{{ $barang->jumlah }}"
            min="1"
            required
        >

        <br><br>

        <label>Kondisi:</label>
        <select name="kondisi">
            <option value="Baik" {{ $barang->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
            <option value="Rusak" {{ $barang->kondisi == 'Rusak' ? 'selected' : '' }}>Rusak</option>
        </select>

        <br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>