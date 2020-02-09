@extends('template') 
 
@section('main')

<div class="container-fluid">
	<div class="row">
		<div class="col-x1-12">
			<div class="card shadow mb-4">
				
				<div class="car-header py-3 d-flex felx-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Update Data Wisatawan</h6>
				</div>

				<div class="card-body">
					<form class="p-4 mb-4" method="post" action="{{ url('/updateStore/'. $datas->id) }}" autocomplete="off" enctype="multipart/form-data">
					@csrf
						<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="id" id="id" class="form-control" value="{{$datas->id}}" hidden="true">
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" value="{{$datas->nama}}" required>
						</div>
						<div class="form-group">
							<label>Gender</label>
							<select class="form-control" name="gender">
									<option value="" hidden>Pilih Gender</option>
									@if($datas->gender == 'Laki-laki')
										<option value="Laki-laki" selected>Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									@elseif($datas->gender == 'Perempuan')
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan" selected>Perempuan</option>
									@endif
								</select>
						</div>
						<div class="form-group">
							<label>Umur</label>
							<input type="text" name="umur" id="umur" class="form-control" value="{{$datas->umur}}" required>
						</div>
						<div class="form-group">
							<label>Asal</label>
							<input type="text" name="asal" id="asal" class="form-control" value="{{$datas->asal}}" required>
						</div>
						<div class="form-group">
							<label>Foto</label><br>
							<img src="{{ url('img/'.$datas->foto)}}" width="200px">
							<input type="file" name="foto" id="foto" accept=".jpg, .png, .jpeg">

						</div>
						<button type="submit" id="button1" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Submit</button>
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