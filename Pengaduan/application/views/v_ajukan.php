
<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Ajukan</h2>

				
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
		<form method="post" class="register" action="<?php echo base_url();?>pengguna/ajukanaduan" enctype="multipart/form-data">
		<div class="col-lg-8 col-md-8 padding-right-30">

			<h3 class="margin-top-0 margin-bottom-30">Kirim Pengaduan</h3>
				<?php
					foreach ($tampilakun as $baris) {  
						
					?>
			<div class="row">

				<div class="col-md-6">
					
					<label>Ajukan sebagai :</label>

					<select data-placeholder="Pilih tipe ajuan" class="chosen-select" name="tipe">
						<option label="blank"></option>	
						<option value="Saran">Saran</option>
						<option value="Kritik">Kritik</option>
						<option value="Pengaduan">Pengaduan</option>
						<option value="Pertanyaan">Pertanyaan</option>
					</select>
				</div>
					
				<div class="col-md-6">
					<label>Nama</label>
					<input type="text" name="nama" value="<?php echo $baris->nama_pengguna; ?>" disabled="">
				</div>

				<div class="col-md-12">
					<div class="input-with-icon medium-icons">
						<label>Alamat :</label>
						<input type="text" name="alamat" value="<?php echo $baris->alamat_pengguna; ?>" disabled="">
					</div>
				</div>
				<?php } ?>
				<div class="col-md-12">

					<label>Di tujukan kepada :</label>

					<select data-placeholder="Pilih" name="opd" class="chosen-select">
						<option label="blank"></option>	
						<?php
							foreach ($opd as $baris) {  
								
							?>
						<option value="<?php echo $baris->no_opd; ?>"><?php echo $baris->nama_opd; ?></option>

						<?php } ?>
					</select>
				</div>
				<?php
					foreach ($tampilakun as $baris) {  
						
					?>
				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>No telephone :</label>
						<input type="text" value="<?php echo $baris->notelp_pengguna; ?>" disabled="">
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>Lampirkan Gambar :</label>
						<input id="exampleInputFile2" type="file" name="foto" accept="image/x-png,image/gif,image/jpeg">
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="input-with-icon medium-icons">
						<label>Pesan :</label>
							<input type="text" name="pesan" id="notes" cols="30" rows="2">

					</div>
				</div>
			
			
			
			
			</div>

			<?php } ?>
			
			
		
			<button class="button booking-confirmation-btn margin-top-40 margin-bottom-65">Ajukan</button>
		</div>
		</form>

	</div>
</div>
<!-- Container / End -->



