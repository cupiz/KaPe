<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Verifikasi Akun</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Beranda</a></li>
							<li><a href="#">Verifikasi Akun</a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
	
			<!-- Profile -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Arahkan KTP Ke Kamera</h4>
					<div class="dashboard-list-box-static">
						<!-- Details -->
						<div class="my-profile">
						<video id="video" width="425" height="300" autoplay></video>
						</div>						
						<button id="snap" class="button margin-top-15">Ambil Gambar</button>

					</div>
				</div>
			</div>

			<!-- Change Password -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Hasil Gambar</h4>
					<div class="dashboard-list-box-static">

					<canvas id="canvas" width="425" height="300"></canvas>
					<img src="" id="gambare">
					<button id="save" class="button margin-top-15">Simpan & Verifikasi</button>

					</div>
				</div>
			</div>


			<!-- Change Password -->
			<div class="col-lg-12 col-md-12" style="margin-top: 30px;">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Cara Verifikasi Akun</h4>
					<div class="dashboard-list-box-static">
					  	<div class="my-profile">
					  		<div class="row">
								<div class="col-md-6">
									<div class="numbered color filled">
										<ol>
											<li>Pilih "Allow" atau "Izinkan" browser anda mengakses Kamera</li>
											<li>Arahkan KTP (depan) anda ke kamera</li>
											<li>Tekan tombol <b>Ambil Gambar</b></li>
											<li>Lihat hasilnya dan pastikan NIK terlihat (lihat contoh)</li>
											<li>Jika NIK sudah terlihat dengan jelas, tekan <b>Simpan & Verifikasi</b></li>
											<li>Selamat akun anda terverifikasi dan bisa digunakan</li>
										</ol>
									</div>
								</div>
								<div class="col-md-6">
									<h3>Contoh Hasil</h3>
									<img src="<?php echo base_url();?>assets/images/contohktp.png">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	


		</div>

	</div>
	<!-- Content / End -->