
	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Selamat Datang Admin Aspirasi Purbalingga !</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Dashboard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!-- Notice -->
		<div class="row">
			<div class="col-md-12">
				<div class="notification success closeable margin-bottom-30">
					<p>Jangan lupa untuk mengecek pengaduan.</p>
					<a class="close" href="#"></a>
				</div>
			</div>
		</div>

		<!-- Content -->
		<div class="row">

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-1">
					<div class="dashboard-stat-content"><h4><?php echo $jmlproses; ?></h4> <span>Pengaduan Proses</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Loading-2"></i></div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-2">
					<div class="dashboard-stat-content"><h4><?php echo $jmltindaklanjut; ?></h4> <span>Pengaduan Tindak Lanjuti</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Post-Office"></i></div>
				</div>
			</div>

			
			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-3">
					<div class="dashboard-stat-content"><h4><?php echo $jmlselesai; ?></h4> <span>Pengaduan Selesai</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-File-Bookmark"></i></div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-4">
					<div class="dashboard-stat-content"><h4><?php echo $jmlpengguna; ?></h4> <span>Anggota</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
				</div>
			</div>
		</div>


	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->
