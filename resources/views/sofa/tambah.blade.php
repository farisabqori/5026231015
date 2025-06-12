@extends('../template')

@section('content')
    <h3>Tambah Sofa</h3>

    <a href="/sofa" class="btn btn-info">Kembali</a>
    <br /><br />

    <form action="/sofa/store" method="POST">
        @csrf
        <label>Nama Sofa:</label>
        <input type="text" name="nama" required>

        <label>Harga:</label>
        <input type="number" name="harga" required>

        <label>Tersedia:</label>
        <select name="tersedia">
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>

        <label>Berat (kg):</label>
        <input type="number" step="0.01" name="berat" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
