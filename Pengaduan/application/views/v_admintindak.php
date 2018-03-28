

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Data Pengaduan</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Pengaduan</li>
							<li>Tindak Lanjuti</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		
		
	<!-- Table
		======================================-->
	<div class="row">
		
		<div class="col-md-12">

			<h4 class="headline margin-top-5 margin-bottom-30">Tindak Lanjuti</h4>
			<table class="basic-table" style="padding: 10px 10px;">

				<tr>
					<th>No Pengaduan</th>
					<th>Tipe Pengajuan</th>
					<th>Pengaju</th>
					<th>OPD</th>
					<th>Gambar</th>
					<th>Pesan</th>
					<th>Aksi</th>
					
				</tr>
				<?php					
				foreach ($pengaduan as $baris) {  ?>
				<tr>
					<td data-label="Column 1"><?php echo $baris->no_pengaduan; ?></td>
					<td data-label="Column 2"><?php echo $baris->tipe_pengaduan; ?></td>
					<td data-label="Column 3"><?php echo $baris->nama_pengguna; ?></td>
					<td data-label="Column 4"><?php echo $baris->nama_opd; ?></td>
					<td data-label="Column 5"><button class="btn btn-primary btn-sm" type="button">LIHAT</button></td>
					<td data-label="Column 6"><?php echo $baris->pesan_pengaduan; ?></td>
					<td data-label="Column 7">
						<a href="<?php echo base_url();?>admin/kirim/<?php echo $baris->no_pengaduan; ?>"><button class="btn btn-success btn-sm" style="margin-right:5px;" type="button"><i class="im im-icon-Email"></i></button></a>
						<button class="btn btn-success btn-sm" type="button"><i class="fa fa-whatsapp"></i></button></td>
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

