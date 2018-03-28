
<!-- Content
================================================== -->
<div class="container">
	<div class="row">
		
		

		<div class="col-md-12" >

			

			<div class="row" style="margin-top:25px;">
				<?php
				foreach ($tampilpengaduan as $baris) {  ?>

				<!-- Listing Item -->
				<div class="col-lg-4 col-md-6">
					<a href="<?php echo base_url();?>home/aduan/<?php echo $baris->no_pengaduan; ?>" class="listing-item-container compact">
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
				<!-- Listing Item / End -->
				
				<?php }?>
			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-20 margin-bottom-40">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="current-page">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>

