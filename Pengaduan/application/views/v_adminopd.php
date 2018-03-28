

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Data OPD</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>OPD</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		
		
	<!-- Table
		======================================-->
	<div class="row">
		
		<div class="col-md-12">

			<h4 class="headline margin-top-5 margin-bottom-30">Organisasi Perangkat Daerah</h4><br>
			<a href="<?php echo base_url();?>admin/tambahopd"><button class="btn btn-info btn-sm" style="margin-right:5px;margin-bottom: 20px;" type="button">Tambah Data OPD</button></a>
			<table class="basic-table">

				<tr>
					<th>Nama Dinas</th>
					<th>No HP</th>
					<th>Alamat</th>
					<th>Email</th>
					<th>Aksi</th>
				</tr>
				<?php					
				foreach ($opd as $baris) {  ?>

				<tr>
					<td data-label="Column 1"><?php echo $baris->nama_opd; ?></td>
					<td data-label="Column 2"><?php echo $baris->notelp_opd; ?></td>
					<td data-label="Column 3"><?php echo $baris->alamat_opd; ?></td>
					<td data-label="Column 4"><?php echo $baris->email_opd; ?></td>
					<td data-label="Column 5"><button class="btn btn-success btn-sm" style="margin-right:5px;" type="button">UBAH</button><button class="btn btn-danger btn-sm" type="button">HAPUS</button></td>
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

