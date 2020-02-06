<?php
<h2>Tambah Data Wisatawan</h2> 
    <form action="{{ url('Wisatawan') }}" method="post">       
	@csrf       
<div class="form-group">
 	<label for="nisn" class="controllabel">NISN</label>         
 	<input name="nisn" type="text" class="formcontrol">       
</div> 
 
<div class="form-group">
	<label for="nama_siswa" class="controllabel">Nama</label>
	<input name="nama_siswa" type="text" class="formcontrol">
</div> 
      
<div class="form-group">
	<label for="tanggal_lahir" class="controllabel">Tanggal Lahir</label>
	<input name="tanggal_lahir" type="date" class="form-control">
</div> 
 
<div class="form-group">
	<label for="jenis_kelamin" class="controllabel">Jenis Kelamin</label>  
  <div class="form-check">
	<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
	<label class="form-check-label" for="jenis_kelamin">             Perempuan           </label>
  </div> 
 
  <div class="form-check">
	<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
	<label class="form-check-label" for="jenis_kelamin">             Laki-Laki           </label>
  </div>
</div>
<button type="submit" class="btn btnprimary">Submit</button>
</form> @stop