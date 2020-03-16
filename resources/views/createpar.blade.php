@extends('template') 
 
@section('main')

<div class="container-fluid">
	<div class="row">
		<div class="col-x1-12">
			<div class="card shadow mb-4">
				
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Input Pariwisata</h6>
				</div>

				<div class="card-body">
					<form class="p-4 mb-4" method="POST" action="{{ url('/storepar') }}" autocomplete="off" enctype="multipart/form-data">
						@csrf

							<div class="col-md-12">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama_par" class="form-control" id="nama_par" placeholder="Nama Pariwisata" required>
							</div>
							<div class="form-group">
								<label>Lokasi</label>
								<input type="text" name="lokasi_par" class="form-control" id="lokasi_par" placeholder="Lokasi Pariwisata" required>
							</div>
							<div class="form-group">
								<label>Detail</label>
								<input type="text" name="detail_par" class="form-control" id="detail_par" placeholder="Detail Pariwisata" required>
							</div>
							<div class="form-group">
								<label>Foto</label><br>
								<input type="file" name="foto_par" id="foto_par" accept=".jpeg, .jpg, .png" >
							</div><br>
							<button type="submit" id="button1" class="btn btn-primary">Submit</button>
							</div>
						</form>
			</div>
		</div>
	</div>
	<div class="col-md-6" id="cardSection">
		
	</div>
</div>
</div>
@stop