<?php

	$nama="";
	$notelp="";
	$alamat="";
	$email="";

	foreach ($tampilakun as $baris) {
		$nama= $baris-> nama_pengguna;
		$notelp= $baris-> notelp_pengguna;
		$alamat= $baris-> alamat_pengguna;
		$email= $baris-> email_pengguna;
	}
	
	
?>
<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Ubah Profile</h2>

				
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="row">

		<!-- Content
		================================================== -->
		
		<form role="form" method="post" class="register" action="<?php echo base_url();?>pengguna/ubahpengguna" enctype="multipart/form-data">

		<div class="col-lg-8 col-md-8 padding-right-30">

			<h3 class="margin-top-0 margin-bottom-30"></h3>

			<div class="row">



				<div class="col-md-6">
					<label>Nama Lengkap :</label>
					<input type="text" name="nama" value="<?php echo $nama; ?>">
				</div>

				<div class="col-md-6">
					<label>No Telephone :</label>
					<input type="text" name="notelp" value="<?php echo $notelp; ?>">
				</div>

				<div class="col-md-12">
					<div class="input-with-icon medium-icons">
						<label>Alamat :</label>
						<input type="text" id="notes" cols="30" rows="2" name="alamat" value="<?php echo $alamat; ?>">

					</div>
				</div>

				<div class="col-md-6">
					<label>E-Mail :</label>
					<input type="text" name="email" value="<?php echo $email; ?>" disabled="">
				</div>

				<div class="col-md-6">
					<label for="exampleInputFile2" class="col-md-6">Foto</label>
					<div class="col-lg-10">
								<input id="exampleInputFile2" type="file" name="foto">
					</div>
				</div>

				

			
			
			
			
			</div>


			
			
		
			<button type="submit" class="button booking-confirmation-btn margin-top-40 margin-bottom-65">Ubah</button>
		</div>


		</form>
	</div>
</div>
<!-- Container / End -->


