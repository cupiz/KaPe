<div class="mfp-bg my-mfp-zoom-in mfp-ready"></div>
<div class="mfp-wrap mfp-close-btn-in mfp-auto-cursor my-mfp-zoom-in mfp-ready" tabindex="-1" style="top: 0px; position: absolute; height: 257px;"><div class="mfp-container mfp-inline-holder" style="height: 0%;">
	<div class="mfp-content">
		<div id="sign-in-dialog">

				<div class="small-dialog-header">
					<h3>Masuk Sebagai Petugas</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					
					<div class="tabs-container alt">
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
						<!-- Login -->
						<div class="tab-content" id="tab1" style="border: none;border-top: 0;padding: 0px 0 0 0;">
							<form method="post" action="<?php echo base_url();?>admin/ceklogin" class="login">

								<p class="form-row form-row-wide">
									<label for="username">Email Petugas:
										<i class="im im-icon-Male"></i>
										<input class="input-text" name="email_petugas" id="username" value="" type="text">
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" name="password" id="password" type="password">
									</label>
								
								</p>

								<div class="form-row">
									<input class="button border margin-top-5" name="login" value="Masuk" type="submit">
								</div>
								
							</form>
						</div>

						

					</div>
				</div>
			</div>
		</div>