@extends('../template')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card mt-5">
				<div class="card-body">
					<h3 class="text-center">Form Input Sofa</h3>
					<br/>

					@if(count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<br/>

					<form action="/sofa/proses" method="post">
						{{ csrf_field() }}
						<div class="form-group mb-3">
							<label for="merksofa">Merk Sofa</label>
							<input class="form-control" type="text" name="merksofa" value="{{ old('merksofa') }}">
						</div>
						<div class="form-group mb-3">
							<label for="hargasofa">Harga Sofa</label>
							<input class="form-control" type="number" name="hargasofa" value="{{ old('hargasofa') }}">
						</div>
						<div class="form-group mb-3">
							<label for="tersedia">Tersedia</label>
							<select class="form-control" name="tersedia">
								<option value="">-- Pilih --</option>
								<option value="1" {{ old('tersedia') == '1' ? 'selected' : '' }}>Ya</option>
								<option value="0" {{ old('tersedia') == '0' ? 'selected' : '' }}>Tidak</option>
							</select>
						</div>
						<div class="form-group mb-3">
							<label for="berat">Berat (kg)</label>
							<input class="form-control" type="number" step="0.01" name="berat" value="{{ old('berat') }}">
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="Proses">
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
