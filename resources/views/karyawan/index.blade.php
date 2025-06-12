@extends('../template')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="text-primary mb-4">📋 Data Karyawan</h3>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Kode Pegawai</th>
                        <th>Nama Lengkap</th>
                        <th>Divisi</th>
                        <th>Departemen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($karyawan as $k)
                    <tr>
                        <td>{{ $k->kodepegawai }}</td>
                        <td class="text-uppercase">{{ $k->namalengkap }}</td>
                        <td>{{ $k->divisi }}</td>
                        <td class="text-lowercase">{{ $k->departemen }}</td>
                        <td>
                            <form action="/karyawan/delete/{{ $k->kodepegawai }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $karyawan->links() }}

            <div class="mt-4">
                <a href="/karyawan/tambah" class="btn btn-success btn-lg btn-block">
                    <i class="fas fa-plus-circle"></i> Tambah Data
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
