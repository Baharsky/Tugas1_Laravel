<?php 
	if(isset($_POST['nama'])){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$telp = $_POST['telp'];
		$tujuan = $_POST['tujuan'];
		$tgl_brkt = $_POST['tanggal'];
		$juml_orang = $_POST['juml_orang'];
		$alamat = $_POST['alamat'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="../images/icon/travello.png">
	<title>Cetak Tiket</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travello template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body onload="window.print()">

<div class="super_container" style="padding-top: 0px !important;">

	<!-- Contact -->

	<div class="contact" style="padding-top: 0px !important;">
		<div class="container">

				<!-- Contact Form -->
				<div class="col-lg-12">
					<div class="contact_form_container" style="color: black;">
						<form id="contact_form" class="contact_form">
						<center><h2 style="font-size: 35px; color: black;">BUKTI PEMESANAN</h2></center>
							<div style="margin-bottom: 18px">
								<label>Nama Pemesan :</label>
								<input type="text" class="contact_input contact_input_name inpt" value="<?php echo $nama; ?>" disabled>
							</div>
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div>
										<label>E-Mail :</label>
										<input type="text" class="contact_input contact_input_email inpt" value="<?php echo $email; ?>" disabled>
									</div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div>
										<label>No. Telpon</label>
										<input type="text" class="contact_input contact_input_subject inpt" value="<?php echo $telp; ?>" disabled>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px;">
									<div>
										<label>Tujuan :</label>
										<input type="text" class="contact_input contact_input_subject inpt" value="<?php echo $tujuan; ?>" disabled>
									</div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div>
										<label>Tanggal Berangkat :</label>
										<input type="text" class="contact_input contact_input_subject inpt" value="<?php echo $tgl_brkt; ?>" disabled>
									</div>
								</div>
							</div>
							<div style="margin-bottom: 18px">
								<label>Jumlah Orang :</label>
								<input type="text" class="contact_input contact_input_name inpt" value="<?php echo $juml_orang; ?>" disabled>
							</div>
							<div>
								<label>Alamat Penjemputan :</label>
								<textarea style="height: 100px !important;" class="contact_textarea contact_input inpt " disabled><?php echo $alamat; ?></textarea>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

</body>
</html>