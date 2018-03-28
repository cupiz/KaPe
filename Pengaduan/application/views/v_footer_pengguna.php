<!-- Footer
================================================== -->
<div id="footer" class="dark">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="<?php echo base_url();?>assets/images/logo2.png" alt="">
				<br><br>
				<p>Sistem Informasi Pengaduan Rakyat Kabupaten Purbalingga.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				
				<div class="clearfix"></div>
			</div>

			<div class="col-md-3  col-sm-12">
				<h4>Kontak Kami</h4>
				<div class="text-widget">
					<span>Jl. Letkol Isdiman No. 73 B, Purbalingga Wetan, Bancar, Kec. Purbalingga, Kabupaten Purbalingga, Jawa Tengah 53317</span> <br>
					Telephone: <span>(0281) 891022 </span><br>
					<br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				</ul>

			</div>

		</div>

		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2018 Aspirasi Rakyat Kabupaten Purbalingga</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/chosen.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/counterup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/custom.js"></script>

 <?php 
	if ($this->uri->segment('2')=="verifikasiakun") {					
?>
<script type="text/javascript">
	
	// Grab elements, create settings, etc.
	var video = document.getElementById('video');

	// Get access to the camera!
	if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
	    // Not adding `{ audio: true }` since we only want video now
	    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
	        video.src = window.URL.createObjectURL(stream);
	        video.play();
	    });
	}


	// Elements for taking the snapshot
	var canvas = document.getElementById('canvas');
	var context = canvas.getContext('2d');
	var video = document.getElementById('video');

	// Trigger photo take
	document.getElementById("snap").addEventListener("click", function() {
		context.drawImage(video, 0, 0, 425, 300);
	});
	document.getElementById("save").addEventListener("click", function() {
			var canvas = document.getElementById('canvas');
			var dataURL = canvas.toDataURL();
			$.ajax({
			  type: "POST",
			  url: "<?php echo base_url();?>pengguna/simpangambar",
			  data: { 
			     imgBase64: dataURL
			  }
			}).done(function(o) {
				window.location.replace("<?php echo base_url();?>pengguna");
			  console.log('saved'); 
			  // If you want the file to be visible in the browser 
			  // - please modify the callback in javascript. All you
			  // need is to return the url to the file, you just saved 
			  // and than put the image in your browser.
			});
	});
	
</script>
<?php } ?>

</html>