<!DOCTYPE html>

<!-- Mirrored from www.vasterad.com/themes/listeo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2018 13:45:37 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title><?php echo $judul;?> - ADMIN Aspirasi Purbalingga</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colors/main.css" id="colors">
<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/icon.png"/>


</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="<?php echo base_url();?>admin"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
					<a href="<?php echo base_url();?>admin" class="dashboard-logo"><img src="<?php echo base_url();?>assets/images/logo2.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="<?php echo base_url();?>assets/images/icon.png" alt=""></span>Admin Aspirasi</div>
						<ul>
							<li><a href="<?php echo base_url();?>"><i class="sl sl-icon-power"></i> Keluar</a></li>
						</ul>
					</div>

					
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Utama">
				<li class="<?php if($this->uri->segment('1')=="admin" and $this->uri->segment('2')==""){echo 'active';}?>"><a href="<?php echo base_url();?>admin"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				
			
			
			
				<li><a><i class="sl sl-icon-layers"></i> Pengaduan</a>
					<ul>
						<li class="<?php if($this->uri->segment('1')=="admin" and $this->uri->segment('2')=="proses"){echo 'active';}?>"><a href="<?php echo base_url();?>admin/proses">Proses <span class="nav-tag green"></span></a></li>
						<li class="<?php if($this->uri->segment('1')=="admin" and $this->uri->segment('2')=="tindaklanjuti"){echo 'active';}?>"><a href="<?php echo base_url();?>admin/tindaklanjuti">Tindak Lanjuti <span class="nav-tag yellow"></span></a></li>
						<li class="<?php if($this->uri->segment('1')=="admin" and $this->uri->segment('2')=="selesai"){echo 'active';}?>"><a href="<?php echo base_url();?>admin/selesai">Selesai <span class="nav-tag red"></span></a></li>
					</ul>	
				</li>
				<li class="<?php if($this->uri->segment('1')=="admin" and $this->uri->segment('2')=="anggota"){echo 'active';}?>"><a href="<?php echo base_url();?>admin/anggota"><i class="sl sl-icon-user"></i> Anggota</a></li>
				<li class="<?php if($this->uri->segment('1')=="admin" and $this->uri->segment('2')=="opd"){echo 'active';}?>"><a href="<?php echo base_url();?>admin/opd"><i class="fa fa-user-secret"></i> OPD</a></li>				
				
			</ul>	

			<ul data-submenu-title="Akun">
				<li><a href="<?php echo base_url();?>admin/profile"><i class="sl sl-icon-user"></i> Profil Admin</a></li>
				<li><a href="<?php echo base_url();?>"><i class="sl sl-icon-power"></i> Keluar</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->
