

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Data Anggota</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Anggota</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		
		
	<!-- Table
		======================================-->
	<div class="row">
		
		<div class="col-md-12">

			<h4 class="headline margin-top-5 margin-bottom-30">Anggota</h4>
			<table class="basic-table">

				<tr>
					<th>Nama Lengkap</th>
					<th>No Handphone</th>
					<th>Alamat</th>
					<th>Foto</th>
					<th>Identitas</th>
					<th>Email</th>
					<th>Aksi</th>
				</tr>

				<?php					
				foreach ($anggota as $baris) {  ?>


				<tr>
					<td data-label="Column 1"><?php echo $baris->nama_pengguna; ?></td>
					<td data-label="Column 2"><?php echo $baris->notelp_pengguna; ?></td>
					<td data-label="Column 3"><?php echo $baris->alamat_pengguna; ?></td>
					<td data-label="Column 4">
							<a href="<?php echo base_url();?>assets/images/<?php echo $baris->foto_pengguna; ?>" target="_blank"><button class="btn btn-primary btn-sm" type="button">LIHAT</button></a>
					</td>
					<td data-label="Column 4">						
							<a href="<?php echo base_url();?>assets/images/<?php echo $baris->foto_verif_pengguna; ?>" target="_blank"><button class="btn btn-primary btn-sm" type="button">LIHAT</button></a>
					</td>
					<td data-label="Column 5"><?php echo $baris->email_pengguna; ?></td>
					<td data-label="Column 6">
						<a href="<?php echo base_url();?>admin/hapuspengguna/<?php echo $baris->no_pengguna; ?>"><button class="btn btn-danger btn-sm" type="button">HAPUS</button></a></td>
				</tr>

				<?php }?>

			</table>
		</div>

	</div>
	
	
	<!-- Table / End -->

		
		
	</div>
	<!-- Content / End -->

</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->

