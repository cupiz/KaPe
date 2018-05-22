

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Form Data OPD</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>OPD</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		
		
	<!-- Table
		======================================-->
	<div class="row">
		
		<div class="col-md-12">

			<h4 class="headline margin-top-5 margin-bottom-30">Organisasi Perangkat Daerah</h4><br>
			<form role="form" method="post" class="register" action="<?php echo base_url();?>admin/tambahopdquery" enctype="multipart/form-data">
					<div class="dashboard-list-box-static">
						
						<!-- Tanggapan -->
						<div class="my-profile">
							<label class="margin-top-0">Nama OPD</label>
							<input type="text" name="nama_opd" value="">
							<label class="margin-top-0">No HP</label>
							<input type="text" name="nohp_opd" value="">
							<label class="margin-top-10">Alamat</label>
							<input type="text" name="alamat_opd" id="notes" cols="30" rows="2">
							<label class="margin-top-10">Email</label>
							<input type="text" name="email_opd" id="notes" cols="30" rows="2">
							<button type="submit" class="button margin-top-15">Submit</button>
						</div>
						
					</div>
				</form>
		</div>

	</div>
	
	
	<!-- Table / End -->

		
		
	</div>
	<!-- Content / End -->

</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->

