<!-- BEGIN TOP-FOOTER -->
	<section id="top-footer">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-4">
						<h3>About Me</h3>
						<table>
							<tr>
								<td width="40%">Nama</td>
								<td width="10%">:</td>
								<td width="50%">Ferdika S</td>
							</tr>
							<tr>
								<td width="40%">NPM</td>
								<td width="10%">:</td>
								<td width="50%">1110013231121</td>
							</tr>
							<tr>
								<td width="40%">Pembimbing 1</td>
								<td width="10%">:</td>
								<td width="50%">Ir. Eddy Soesilo, M.Eng</td>
							</tr>
							<tr>
								<td width="40%">Pembimbing 2</td>
								<td width="10%">:</td>
								<td width="50%">Karmila Suryani, M.Kom</td>
							</tr>
						</table>
					</div>
					<div class="col-md-2">
						<?php 
							if (!isset($_SESSION['username'])) {
						?>
						<img src="assets/img/me.jpg" alt="" style="height:100%;width:100%;padding-top:20%;">
						<?php
							}
						?>						
					</div>							
					<div class="col-md-6">
					<?php 
						if (isset($_SESSION['access'])) {
							if ($_SESSION['access'] == 'admin' OR 'guru' OR 'siswa') {
					?>
						<div class="col-md-3">
							<h3>My Profile</h3>
							<ul class="fa-ul">
								<li><i class="fa fa-li fa-user"></i> <?php echo $_SESSION['name']; ?></li>
							</ul>
						</div>
						<div class="col-md-3">
							<img src="dashboard/<?php echo $_SESSION['foto']; ?>" alt="" style="height:100%;width:100%;padding-top:20%;">
						</div>
					<?php
							}
						}else {
					?>
						<h3>Please Sign In !</h3>
						<!-- BEGIN BASIC FORM -->
						<div class="col-md-12">
							<div class="grid">								
								<div class="grid-body">
									<form role="form" method="POST" action="login.php">
										<div class="form-group">
											<label>Username</label>
											<input type="text" name="username" class="form-control" placeholder="Enter Username">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
										<div class="btn-group">
											<button type="submit" name="signin" class="btn btn-primary">Sign In</button>
											<button type="reset" class="btn btn-default">Cancel</button>
										</div>
									</form>									
								</div>
							</div>
						</div>
						<!-- END BASIC FORM -->
					<?php
						}
					?>						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END TOP-FOOTER -->
	
	<!-- BEGIN BOTTOM-FOOTER -->
	<section id="bottom-footer">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-12">
						<span class="copyright">&copy; 2015 All Rights Reserved.</span>

						<span class="pull-right">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END BOTTOM-FOOTER -->
	
	<div class="scroll-to-top"></div>

	<!-- BEGIN JS FRAMEWORK -->
	<script src="dashboard/html/assets/plugins/jquery-2.1.0.min.js"></script>
	<script src="dashboard/html/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- END JS FRAMEWORK -->
	
	<!-- BEGIN JS PLUGIN -->
	<script src="dashboard/html/assets/plugins/pace/pace.min.js"></script>
	<script src="dashboard/html/assets/plugins/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.nav.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<!-- END JS PLUGIN -->

	<!-- BEGIN JS TEMPLATE -->
	<script src="assets/js/main.js"></script>
	<!-- END JS TEMPLATE -->
</body>
</html>