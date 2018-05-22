
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
							<li>Proses</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		
		
	<!-- Table
		======================================-->
	<div class="row">
		
		<div class="col-md-12">

			<h4 class="headline margin-top-5 margin-bottom-30">Pengaduan Proses</h4>
			<table class="basic-table">

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
					<td data-label="Column 5">
						<a href="<?php echo base_url();?>assets/images/<?php echo $baris->gambar_pengaduan; ?>" target="_blank"><button class="btn btn-primary btn-sm" type="button">LIHAT</button></a>
					</td>
					<td data-label="Column 6"><?php echo $baris->pesan_pengaduan; ?></td>
					<td data-label="Column 7">
						<a href="<?php echo base_url();?>admin/konfirmasipengaduan/<?php echo $baris->no_pengaduan; ?>"><button class="btn btn-success btn-sm" style="margin-right:5px;" type="button">KONFIRMASI</button></a>
						<a href="<?php echo base_url();?>admin/hapuspengaduan/<?php echo $baris->no_pengaduan; ?>"><button class="btn btn-danger btn-sm" type="button">TOLAK</button></a>
						<a href="<?php echo base_url();?>home/aduan/<?php echo $baris->no_pengaduan; ?>"><button class="btn btn-info btn-sm" type="button">LINK</button></a></td>
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
]