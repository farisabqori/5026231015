@extends('../template')

@section('content')
    <h3>Data Sofa</h3>

    <a href="/sofa/tambah" class="btn btn-success">+ Tambah Sofa Baru</a>

    <br/><br/>

    <form action="/sofa/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari sofa .." value="{{ request('cari') }}">
        <input type="submit" value="Cari">
    </form>

    <br/>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Harga</th>
                <th>Tersedia</th>
                <th>Berat (kg)</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sofa as $s)
            <tr>
                <td>{{ $s->nama}}</td>
                <td>{{ $s->harga }}</td>
                <td>{{ $s->tersedia ? 'Ya' : 'Tidak' }}</td>
                <td>{{ $s->berat }}</td>
                <td>
                    <a href="/sofa/edit/{{ $s->id }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/sofa/hapus/{{ $s->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $sofa->links() }}
@endsection
