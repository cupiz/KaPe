

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Pengaduan Terkirim</h2>

				
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
		<div class="col-lg-12 col-md-12 padding-right-30">

			<!-- Toggles Container -->
			<div class="style-2" style="margin-bottom:25px;">

				<!-- Toggle 1 -->
				<div class="toggle-wrap">
					<span class="trigger "><a href="#">Daftar Pengaduan Anda yang sedang kami proses<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container">
					<p>
						<?php
						foreach ($tampiltindak as $baris) {  ?>
						<div class="col-lg-5">
						<a href="<?php echo base_url();?>pengguna/aduan/<?php echo $baris->no_pengaduan; ?>" class="listing-item-container compact">
							<div class="listing-item">
								<img src="<?php echo base_url();?>assets/images/<?php echo $baris->gambar_pengaduan; ?>" alt="">

								<div class="listing-badge now-open">
									<?php
									if ($baris->status_pengaduan=="2") {
										echo'
										Tindak Lanjuti
										';
									}elseif ($baris->status_pengaduan=="3") {
										echo'
										Selesai
										';
									}
									?>	

								</div>

								<div class="listing-item-content">
									
									<span><?php echo substr($baris->pesan_pengaduan,0,40).'...'; ?></span>
								</div>
								
							</div>
						</a>
						</div>
						<?php }?>

					</p>
					
					</div>
				</div>
				
			</div>
			
			<!-- Toggles Container / End -->
			

		</div>


	</div>
</div>
<!-- Container / End -->
<!-- Container -->
<div class="container">
	<div class="row">

		<!-- Content
		================================================== -->
		<div class="col-lg-12 col-md-12 padding-right-30">

			<!-- Toggles Container -->
			<div class="style-2" style="margin-bottom:25px;">
				<!-- Toggle 1 -->
				<div class="toggle-wrap">
					<span class="trigger "><a href="#">Daftar Pengaduan Anda yang sudah kami proses<i class="sl sl-icon-plus"></i></a></span>
					<div class="toggle-container">
						<p>
						<?php
						foreach ($tampilselesai as $baris) {  ?>
						<div class="col-lg-5">
						<a href="<?php echo base_url();?>pengguna/aduan/<?php echo $baris->no_pengaduan; ?>" class="listing-item-container compact">
							<div class="listing-item">
								<img src="<?php echo base_url();?>assets/images/<?php echo $baris->gambar_pengaduan; ?>" alt="">

								<div class="listing-badge now-open">
									<?php
									if ($baris->status_pengaduan=="2") {
										echo'
										Tindak Lanjuti
										';
									}elseif ($baris->status_pengaduan=="3") {
										echo'
										Selesai
										';
									}
									?>	

								</div>

								<div class="listing-item-content">
									
									<span><?php echo substr($baris->pesan_pengaduan,0,40).'...'; ?></span>
								</div>
								
							</div>
						</a>
						</div>
						<?php }?>

						</p>
					</div>
				</div>

			</div>
			
			<!-- Toggles Container / End -->
			

		</div>


	</div>
</div>
<!-- Container / End -->

