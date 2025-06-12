@extends('../template')

@section('content')

<h3>Tambah Sofa Baru</h3>

<a href="/sofa" class="btn btn-info">Kembali</a>
<br/><br/>

<form action="/sofa/store" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label>Merk Sofa</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Harga Sofa</label>
        <input type="number" name="harga" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Tersedia</label>
        <input type="number" name="tersedia" min="0" max="1" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Berat</label>
        <input type="number" step="0.01" name="berat" class="form-control" required>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-primary">
</form>

@endsection
