@extends('../template')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="text-primary mb-4">📝 Tambah Data Karyawan</h3>

            <a href="/karyawan" class="btn btn-secondary mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>

            <form action="/karyawan/store" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="kodepegawai" class="col-sm-3 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-9">
                        <input type="text" name="kodepegawai" class="form-control" maxlength="5" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" name="namalengkap" class="form-control" maxlength="50" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
                    <div class="col-sm-9">
                        <input type="text" name="divisi" class="form-control" maxlength="5" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="departemen" class="col-sm-3 col-form-label">Departemen</label>
                    <div class="col-sm-9">
                        <input type="number" name="departemen" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row mt-4">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
