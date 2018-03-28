
	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Tanggapi Pengaduan</h2>
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

		<!-- Tanggapan -->
			<div class="col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Tanggapi Pesan</h4>
					<form role="form" method="post" class="register" action="<?php echo base_url();?>admin/pesantanggap" enctype="multipart/form-data">
					<div class="dashboard-list-box-static">
						<?php
							foreach ($aduan as $baris) {  
								$no_pengaduan = $baris->no_pengaduan;
								?>
						<!-- Tanggapan -->
						<div class="my-profile">
							<label class="margin-top-0">No Tiket</label>
							<input type="text" name="nopengaduan" value="<?php echo $baris->no_pengaduan; ?>" readonly="">
							<label class="margin-top-0">Pesan Pengaduan</label>
							<textarea name="notes" id="notes" cols="30" rows="2" readonly=""><?php echo $baris->pesan_pengaduan; ?></textarea>
							<label class="margin-top-10">Pesan Tanggapan</label>
							<input type="text" name="pesantanggapan" id="notes" cols="30" rows="2">
							<button type="submit" class="button margin-top-15">Tanggapi</button>
						</div>
						<?php }?>
					</div>
				</form>

				</div>
			</div>
		
	

		
		
	</div>
	<!-- Content / End -->

</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->
