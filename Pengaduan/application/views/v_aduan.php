<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Pengaduan</h2>

				

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
				<?php
				foreach ($aduan as $baris) {  
					$no_pengaduan = $baris->no_pengaduan;
					?>
	<!-- Blog Posts -->
	<div class="blog-page">
	<div class="row">

		
		<!-- Post Content -->
		<div class="col-lg-9 col-md-8 padding-right-30">
			

			<!-- Blog Post -->
			<div class="blog-post single-post">
				
				<!-- Img -->
				<img class="post-img" src="<?php echo base_url();?>assets/images/<?php echo $baris->gambar_pengaduan; ?>" alt="">

				
				<!-- Content -->
				<div class="post-content">

					

					<p><?php echo $baris->pesan_pengaduan; ?> </p>

					<div class="clearfix"></div>

				</div>
			</div>
			<!-- Blog Post / End -->

<?php }?>

			<!-- About Author -->
			<div class="about-author">
				<img src="<?php echo base_url();?>assets/images/icon.png" alt="" />
				<div class="about-description">
					<h4>Admin</h4>
				<?php
					if ($tanggap==NULL) {
						echo'
							<p>Belum ada tanggapan dari OPD setempat
							</p>
							<br><br>
							';
					}else{
						foreach ($tanggap as $baris) { 
				
					
						
							echo'<p>';
								echo $baris->nama_opd; 
								echo' :<br>';
								echo $baris->isi_tanggapan;
							echo '</p>';
							
						}
						
				 	} ?>
				</div>
			</div>

			
	</div>
	<!-- Content / End -->
				<?php
				foreach ($aduan as $baris) {  
					$no_pengaduan = $baris->no_pengaduan;
					?>
<!-- Widgets -->
	<div class="col-lg-3 col-md-4">
		<div class="sidebar right">

			<!-- Verified Badge -->
			<div class="verified-badge">
				<i class="sl sl-icon-check"></i> <?php
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
						?>
			</div>

			<div class="boxed-widget margin-top-35">
				<div class="hosted-by-title">
					<h4><span>No Tiket</span> <a><?php echo $baris->no_pengaduan; ?></a></h4>
				</div>
			</div>

			<!-- Book Now -->
			<div class="boxed-widget booking-widget margin-top-35">
				<h3><i class="im im-icon-Office"></i>Di tunjukan kepada</h3>
				<ul>
					<?php echo $baris->nama_opd; ?>
				</ul>				
			</div>
			<!-- Book Now / End -->
		

			<!-- Opening Hours -->
			<div class="boxed-widget opening-hours margin-top-35">
				<h3><i class="fa fa-calendar-check-o"></i>Tanggal</h3>
				<ul>
					<li><?php 
							$CI =& get_instance();
							echo $CI->tgl_indo($baris->tanggal_pengaduan); ?></li>
				</ul>
			</div>
			<!-- Opening Hours / End -->


			<!-- Contact -->
			<div class="boxed-widget margin-top-35">
				<div class="hosted-by-title">
					<h4><span>Di kirim oleh</span> <a>
						<?php
							if ($baris->status_nama=="1") {
								echo $baris->nama_pengguna;
							}else{
								echo 'Anonim';
							}
						?>


					</a></h4>
					<a class="hosted-by-avatar">

						<?php
							if ($baris->status_nama=="1") {
								echo '<img src="'.base_url().'assets/images/'.$baris->foto_pengguna.'" alt="">';
							}else{
								echo '<img src="'.base_url().'assets/images/anoncoba.png" alt="">';
							}
						?>	
						


					</a>
				</div>
			</div>
			<!-- Contact / End-->



			<div class="clearfix"></div>
			<div class="margin-bottom-40"></div>
		</div>
	</div>

	
	</div>
	<!-- Sidebar / End -->


</div>

	<?php }?>
</div>

