

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Data Petugas</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Petugas</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		
		
	<!-- Table
		======================================-->
	<div class="row">
		
		<div class="col-md-12">

			<h4 class="headline margin-top-5 margin-bottom-30">Petugas</h4><br>
			<a href="<?php echo base_url();?>admin/tambahpetugas"><button class="btn btn-info btn-sm" style="margin-right:5px;margin-bottom: 20px;" type="button">Tambah Data Petugas</button></a>
			<table class="basic-table">

				<tr>
					<th>No Petugas</th>
					<th>Nama Petugas</th>
					<th>E-Mail</th>
				</tr>
				<?php					
				foreach ($petugas as $baris) {  ?>

				<tr>
					<td data-label="Column 1"><?php echo $baris->no_petugas; ?></td>
					<td data-label="Column 2"><?php echo $baris->nama_petugas; ?></td>
					<td data-label="Column 3"><?php echo $baris->email_petugas; ?></td>
				</tr>
				<?php }?>
			

			</table>
		</div>

	</div>
	
	
	<!-- Table / End -->

		
		
	</div>
	<!-- Content / End -->

</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->

