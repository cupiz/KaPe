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

						<li><a class="<?php if($this->uri->segment('1')=="" and $this->uri->segment('2')==""){echo 'current';}?>" href="<?php echo base_url();?>">Beranda</a>

						</li>

						<li>
							<a class="<?php if($this->uri->segment('1')=="home" and $this->uri->segment('2')=="ajukan"){echo 'current';}?>" href="<?php echo base_url();?>home/ajukan">Ajukan</a>
						</li>
						
						<li><a class="<?php if($this->uri->segment('1')=="home" and $this->uri->segment('2')=="pengaduan"){echo 'current';}?>" href="<?php echo base_url();?>home/pengaduan">Pengaduan</a>

						</li>

						<li><a class="<?php if($this->uri->segment('1')=="home" and $this->uri->segment('2')=="panduan"){echo 'current';}?>" href="<?php echo base_url();?>home/panduan">Panduan</a>

						</li>

						<li><a href="#">Situs Resmi Inspektorat</a>

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
					<?php 
					$no_pengguna = $this->session->userdata('no_pengguna');
  					if ($no_pengguna==NULL){
						echo '<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Masuk</a>';
					}else{
						echo '<a href="';
						echo base_url();
						echo 'pengguna/keluar"'; 
						echo 'class="sign-in"><i class="sl sl-icon-logout"></i> Keluar</a>';
					}
				   ?>
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
							<form method="post" action="<?php echo base_url();?>home/ceklogin" class="login">

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
									<input type="submit" class="button border margin-top-5" name="login" value="Masuk" />
									
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register" action="<?php echo base_url();?>home/prosesdaftar">
								
							<p class="form-row form-row-wide">
								<label for="username2">Nama Lengkap:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="nama_pengguna" id="username2" value="" required />
								</label>
							</p>
							<p class="form-row form-row-wide">
								<label for="username2">NIK (KTP):
									<i class="im im-icon-Credit-Card3"></i>
									<input type="text" class="input-text numeric" name="nik_pengguna" id="username2" value="" required />
								</label>
							</p>
							<p class="form-row form-row-wide">
								<label for="username2">No Telp:
									<i class="im im-icon-Phone-Wifi"></i>
									<input type="text" class="input-text numeric" name="notelp_pengguna" id="notelp_pengguna" value="" required />
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Alamat Email:
									<i class="im im-icon-Mail"></i>
									<input type="email" class="input-text" name="email_pengguna" id="email2" value="" required />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password_pengguna" id="password1" required/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Masukkan kode captcha berikut:
									
								</label>
							</p>
							<p class="form-row form-row-wide">
								<?php echo $captchaHtml; ?><br>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">
									<i class="im im-icon-QR-Code"></i>
									<input class="input-text" type="text" name="CaptchaCode" id="CaptchaCode" value=""  required=""/>
								</label>
							</p>
							
							<input type="submit" class="button border fw margin-top-10" name="register" value="Daftar" />
	
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
				              $yow = $this->session->flashdata('salahcapcha');
				              if ($yow=='yes') {
				                echo'
				                    <div class="notification error closeable notif">
										<p><span><b>Captcha Code Salah!</b></span><br>Silahkan ulangi melakukan pendaftaran dan pastikan semua terisi dengan benar.</p>
										<a class="close"></a>
									</div>
				                    ';
				              }
				            ?>
				            <?php 
				              $yow = $this->session->flashdata('emailsudahada');
				              if ($yow=='yes') {
				                echo'
				                	<div class="notification error closeable notif">
										<p><span><b>Mohon Maaf!</b></span><br>Email atau NIK (KTP) yang ada daftarkan sudah terdaftar dan terverifikasi disistem kami, silahkan masuk.</p>
										<a class="close"></a>
									</div>
				                    ';
				              }
				            ?>   
				            <?php 
				              $yow = $this->session->flashdata('daftarberhasil');
				              if ($yow=='yes') {
				                echo'
				                	<div class="notification success closeable notif">
										<p><span><b>Berhasil!</b></span><br>Terima kasih telah mendaftar, silahkan cek email anda untuk mengaktivasi akun anda.<br>
											Jika tidak muncul pada inbox, jangan lupa mengecek pada email SPAM.</p>
										<a class="close"></a>
									</div>
				                    ';
				              }
				            ?>    
				            <?php 
				              $yow = $this->session->flashdata('emailverifikasi');
				              if ($yow=='yes') {
				                echo'
				                	<div class="notification success closeable notif">
											<p><span><b>Berhasil!</b></span><br>Email anda telah terverifikasi, silahkan masuk.</p>
										<a class="close"></a>
									</div>
				                    ';
				              }
				            ?>    
								