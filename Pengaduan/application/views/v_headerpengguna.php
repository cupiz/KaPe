<!DOCTYPE html>

<!-- Mirrored from www.vasterad.com/themes/listeo/pages-blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2018 13:47:50 GMT -->
<head>

<!-- Basic Page
================================================== -->
<title><?php echo $judul; ?> - Aspirasi Rakyat Purbalingga</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colors/main.css" id="colors">
<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/icon.png"/>

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a class="<?php if($this->uri->segment('1')=="pengguna" and $this->uri->segment('2')==""){echo 'current';}?>" href="<?php echo base_url();?>pengguna">Beranda</a>

						</li>

						<li><a class="<?php if($this->uri->segment('1')=="pengguna" and $this->uri->segment('2')=="ajukan"){echo 'current';}?>" href="<?php echo base_url();?>pengguna/ajukan">Ajukan</a>

						</li>
						
						<li><a class="<?php if($this->uri->segment('1')=="pengguna" and $this->uri->segment('2')=="pengaduan"){echo 'current';}?>" href="<?php echo base_url();?>pengguna/pengaduan">Pengaduan</a>

						</li>

						<li><a class="<?php if($this->uri->segment('1')=="home" and $this->uri->segment('2')=="panduan"){echo 'current';}?>" href="<?php echo base_url();?>pengguna/panduan">Panduan</a>

						</li>

						<li><a href="#">Situs Resmi Inspektorat</a>

						</li>


						<li><a href="#">Akun</a>
							<ul>
								<li><a class="<?php if($this->uri->segment('1')=="pengguna" and $this->uri->segment('2')=="ubah"){echo 'current';}?>" href="<?php echo base_url();?>pengguna/ubah">Ubah Profile</a></li>
								<li><a class="<?php if($this->uri->segment('1')=="pengguna" and $this->uri->segment('2')=="lihat"){echo 'current';}?>" href="<?php echo base_url();?>pengguna/lihat">Pengaduan Terkirim</a></li>
							</ul>
						</li>
						

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget">
					<a href="<?php echo base_url();?>pengguna/keluar" class="sign-in"><i class="sl sl-icon-logout"></i> Keluar</a>
				</div>
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Masuk</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Masuk</a></li>
						<li><a href="#tab2">Daftar</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<?php 
							$yow = $this->session->flashdata('gagallogin');
							if ($yow=='yes') {
								echo'
								<div class="notification error closeable">
									<p><span><b>Gagal Masuk!</b></span><br>Email atau password yang anda masukkan salah..</p>
									<a class="close"></a>
								</div>
								';
							}
							?>
							<form method="post" action="<?php echo base_url();?>beranda/ceklogin" class="login">

								<p class="form-row form-row-wide">
									<label for="username">Email:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="email" id="username" value="" />
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password"/>
									</label>
								
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Masuk" /><img style="float: right;" src="<?php echo base_url();?>assets/images/uid.png">
									
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<label for="username2">Nama Lengkap:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username2" value="" />
								</label>
							</p>
							<p class="form-row form-row-wide">
								<label for="username2">NIK (KTP):
									<i class="im im-icon-Credit-Card3"></i>
									<input type="text" class="input-text" name="username" id="username2" value="" />
								</label>
							</p>
							<p class="form-row form-row-wide">
								<label for="username2">No Telp:
									<i class="im im-icon-Phone-Wifi"></i>
									<input type="text" class="input-text" name="username" id="username2" value="" />
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Alamat Email:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email2" value="" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password1" id="password1"/>
								</label>
							</p>

							
							<input type="submit" class="button border fw margin-top-10" name="register" value="Daftar" /> <img style="float: right;" src="<?php echo base_url();?>assets/images/uid.png">
	
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
		<?php 

			if ($this->session->userdata('status_verifikasi')=="EMAIL SUKSES") {
			 ?>
				<div class="row">
					<div class="col-md-12">
						<div class="dashboard-stat color-4" style="background-color: #f4bc42">
							<div class="dashboard-stat-content"><h3 style="color: #fff">AKUN BELUM TERVERIFIKASI</h3> <span>Anda dapat menggunakan mengajukan pengaduan setelah akun terverifikasi.
								</span></div>
							<div class="dashboard-stat-icon" style="opacity: 1"><a style="float: right;background-color: #fff;color: #f4bc42;border-color: #fff;" href="<?php echo base_url();?>pengguna/verifikasiakun" class="button medium border"> Verifikasi Sekarang</a></div>
						</div>
					</div>
				</div>
		<?php	}
		?>

						<?php 
				              $yow = $this->session->flashdata('suksesverif');
				              if ($yow=='yes') {
				                echo'
				                <div class="row">
									<div class="col-md-12">
				                	<div class="notification success closeable">
										<p><span><b>Selamat, akun anda telah TERVERIFIKASI</b></span><br>Silahkan anda telah dapat menggunakan layanan dalam website ini.</p>
										<a class="close"></a>
									</div>
									</div>
								</div>
				                    ';
				              }
				            ?>   

				            <?php 
				              $yow = $this->session->flashdata('daftarberhasil1');
				              if ($yow=='yes') {
				                echo'
				                <div class="row">
									<div class="col-md-12">
				                	<div class="notification success closeable">
										<p><span><b>Terima kasih ajukan anda sedang kami proses. Simpan no tiket anda. No tiket :</p>
										<a class="close"></a>
									</div>
									</div>
								</div>
				                    ';
				              }
				            ?>    
		


