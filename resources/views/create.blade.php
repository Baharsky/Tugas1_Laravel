@extends('template') 
 
@section('main')

<div class="container-fluid">
	<div class="row">
		<div class="col-x1-12">
			<div class="card shadow mb-4">
				
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Input Wisatawan</h6>
				</div>

				<div class="card-body">
					<form class="p-4 mb-4" method="POST" action="{{ url('/wisatawan') }}" autocomplete="off" enctype="multipart/form-data">
						@csrf

							<div class="col-md-12">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
							</div>
							<div class="form-group">
								<label>Gender</label>
								<!-- <input type="text" name="gender" class="form-control" id="gender" placeholder="Gender" required> -->
								<select class="form-control" name="gender">
									<option value="" hidden>Pilih Gender</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label>Umur</label>
								<input type="text" name="umur" class="form-control" id="umur" placeholder="Umur" required>
							</div>
							<div class="form-group">
								<label>Asal</label>
								<input type="text" name="asal" class="form-control" id="asal" placeholder="Asal" required>
							</div>
							<div class="form-group">
								<label>Foto</label><br>
								<input type="text" name="foto" class="form-control" id="foto" placeholder="Foto" required>
								<!-- <input type="file" name="foto" id="foto" accept=".jpg, .png"> -->
							</div>
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