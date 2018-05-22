

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

				            <?php 
				              $yow = $this->session->flashdata('daftarberhasil');
				              if ($yow=='yes') {
				                echo'
				                	<div class="notification success closeable notif">
										<p><span><b>Berhasil!</b></span><br>Email telah terkirim.</p>
										<a class="close"></a>
									</div>
				                    ';
				              }
				            ?>		
		
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
					<td data-label="Column 5"><a href="<?php echo base_url();?>assets/images/<?php echo $baris->gambar_pengaduan; ?>" target="_blank"><button class="btn btn-primary btn-sm" type="button">LIHAT</button></a></td>
					<td data-label="Column 6"><?php echo $baris->pesan_pengaduan; ?></td>
					<td data-label="Column 7">
						
						<form method="post" action="<?php echo base_url();?>admin/kirim">
						<input type="hidden" name="no_pengaduan" value="<?php echo $baris->no_pengaduan; ?>">
						<input type="hidden" name="email_opd" value="<?php echo $baris->email_opd; ?>">
						<input type="hidden" name="pesan_pengaduan" value="<?php echo $baris->pesan_pengaduan; ?>">
						<input type="hidden" name="nama_opd" value="<?php echo $baris->nama_opd; ?>">
						<button class="btn btn-success btn-sm" style="margin-right:5px;" type="submit"><i class="im im-icon-Email"></i></button>
						</form>
							<a href="https://api.whatsapp.com/send?phone=<?php echo $baris->notelp_opd;?>&text=Kepada Yth <?php echo $baris->nama_opd;?>,%0AKami mendapatkan pesan aspirasi dari masyarakat. Yang berisi sebagai berikut : %0A%0A<?php echo $baris->pesan_pengaduan;?> .%0A%0ADengan detail pada website berada link berikut %0A<?php echo base_url();?>home/aduan/<?php echo $baris->no_pengaduan; ?>  %0AMohon segera di tindak lanjuti dengan membalas pesan ini. Terima kasih."><button class="btn btn-success btn-sm" type="button"><i class="fa fa-whatsapp">

						</i></button></a>
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

