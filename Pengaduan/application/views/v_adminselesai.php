

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
							<li>Selesai</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		
		
	<!-- Table
		======================================-->
	<div class="row">
				<div class="col-md-12">

			<h4 class="headline margin-top-5 margin-bottom-30">Pengaduan Belum Di Tanggapi</h4>
			<table class="basic-table">

				<tr>
					<th>No Pengaju</th>
					<th>Tipe Pengajuan</th>
					<th>Pengaju</th>
					<th>OPD</th>
					<th>Status</th>
					<th>Gambar</th>
					<th>Pesan</th>
					<th>Tanggapan</th>
					<th>Aksi</th>
					
				</tr>

				<?php					
				foreach ($pendingtanggap as $baris) {  ?>
				<tr>
					<td data-label="Column 1"><?php echo $baris->no_pengaduan; ?></td>
					<td data-label="Column 2"><?php echo $baris->tipe_pengaduan; ?></td>
					<td data-label="Column 3"><?php echo $baris->nama_pengguna; ?></td>
					<td data-label="Column 4"><?php echo $baris->nama_opd; ?></td>
					<td data-label="Column 5"><?php
							if ($baris->status_pengaduan=="2") {
								echo'
								Tindak Lanjuti
								';
							}elseif ($baris->status_pengaduan=="3") {
								echo'
								Selesai
								';
							}else{
								echo 'Proses';
							}
						?></td>
					<td data-label="Column 6">
						<a href="<?php echo base_url();?>assets/images/<?php echo $baris->gambar_pengaduan; ?>" target="_blank"><button class="btn btn-primary btn-sm" type="button">LIHAT</button></a>
					</td>
					<td data-label="Column 6"><?php echo substr($baris->pesan_pengaduan, 0,40).'...'; ?></td>
					<td data-label="Column 8">BELUM ADA TANGGAPAN</td>
					<td data-label="Column 9">
						<a href="<?php echo base_url();?>admin/tanggapan/<?php echo $baris->no_pengaduan; ?>"><button class="btn btn-info btn-sm" type="button">TANGGAPI</button></a><a href="<?php echo base_url();?>admin/hapuspengaduan/<?php echo $baris->no_pengaduan; ?>"><button class="btn btn-danger btn-sm" type="button">HAPUS</button></a>
						


					<a href="<?php echo base_url();?>home/aduan/<?php echo $baris->no_pengaduan; ?>"><button class="btn btn-default btn-sm" type="button">LINK</button></a></td>
				
				</tr>
				<?php }?>

			</table>
		</div>
		<div class="col-md-12">

			<h4 class="headline margin-top-5 margin-bottom-30">Pengaduan Selesai</h4>
			<table class="basic-table">

				<tr>
					<th>No Pengaju</th>
					<th>Tipe Pengajuan</th>
					<th>Pengaju</th>
					<th>OPD</th>
					<th>Status</th>
					<th>Gambar</th>
					<th>Pesan</th>
					<th>Tanggapan</th>
					<th>Aksi</th>
					
				</tr>

				<?php					
				foreach ($pengaduan as $baris) {  ?>
				<tr>
					<td data-label="Column 1"><?php echo $baris->no_pengaduan; ?></td>
					<td data-label="Column 2"><?php echo $baris->tipe_pengaduan; ?></td>
					<td data-label="Column 3"><?php echo $baris->nama_pengguna; ?></td>
					<td data-label="Column 4"><?php echo $baris->nama_opd; ?></td>
					<td data-label="Column 5"><?php
							if ($baris->status_pengaduan=="2") {
								echo'
								Tindak Lanjuti
								';
							}elseif ($baris->status_pengaduan=="3") {
								echo'
								Selesai
								';
							}else{
								echo 'Proses';
							}
						?></td>
					<td data-label="Column 6"><button class="btn btn-primary btn-sm" type="button">LIHAT</button></td>
					<td data-label="Column 7"><?php echo substr($baris->pesan_pengaduan, 0,40).'...'; ?></td>

					<td data-label="Column 8">SUDAH ADA TANGGAPAN</td>
					<td data-label="Column 9">
						<a href="<?php echo base_url();?>admin/tanggapan"></a><a href="<?php echo base_url();?>admin/hapuspengaduan/<?php echo $baris->no_pengaduan; ?>"><button class="btn btn-danger btn-sm" type="button">HAPUS</button></a>
						


					<a href="<?php echo base_url();?>home/aduan/<?php echo $baris->no_pengaduan; ?>"><button class="btn btn-default btn-sm" type="button">LINK</button></a></td>
				
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

