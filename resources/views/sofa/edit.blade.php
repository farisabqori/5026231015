@extends('../template')

@section('content')

<h3>Edit Sofa</h3>

<a href="/sofa" class="btn btn-info">Kembali</a>
<br/><br/>

<form action="/sofa/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $sofa->id }}">

    <div class="form-group">
        <label>Merk Sofa</label>
        <input type="text" name="nama" class="form-control" value="{{ $sofa->nama }}" required>
    </div>

    <div class="form-group">
        <label>Harga Sofa</label>
        <input type="number" name="harga" class="form-control" value="{{ $sofa->harga }}" required>
    </div>

    <div class="form-group">
        <label>Tersedia</label>
        <input type="number" name="tersedia" min="0" max="1" class="form-control" value="{{ $sofa->tersedia }}" required>
    </div>

    <div class="form-group">
        <label>Berat</label>
        <input type="number" step="0.01" name="berat" class="form-control" value="{{ $sofa->berat }}" required>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-primary">
</form>

@endsection
