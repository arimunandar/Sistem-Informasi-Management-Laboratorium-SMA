<?php 	require_once('layout/header.php');	
		require_once('config/db.php');

?>
	
	<!-- BEGIN HOME -->
	<section id="home" class="page">
		<div class="container">
			<div class="content cover text-center">
				<div class="row">
					<div class="col-lg-2" style="padding-top: 30px;">
						<img src="gallery/sma.png" alt="">
					</div>
					<div class="col-lg-8" style="padding-top: 30px;">
						<label style="font-size:35px;">SISTEM INFORMASI LABORATORIUM KIMIA</label><br>
						<h3><label>SMAN 1 Lubuk Sikaping</label></h3>
					</div>
					<div class="col-lg-2" style="padding-top: 30px;">
						<img src="gallery/pasaman.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END HOME -->

	<!-- BEGIN ABOUT US -->
	<section id="about" class="page">
		<div class="container">
			<div class="content text-center">
				<div class="heading">
					<h2><i class="fa fa-paper-plane-o"></i>Teacher Profile</h2>
					<p>We are teacher on Laboratorium SMAN 1 Lubuk Sikaping.</p>
				</div>
				<div class="row">
					<?php 
						$guru =mysqli_query($koneksi,"SELECT * FROM users WHERE access='guru'");

						while ($data=mysqli_fetch_array($guru)) {
							
					?>
					<div class="col-md-3">
						<div class="profile">
							<img src="dashboard/<?php echo $data['foto']; ?>" alt="">
							<span class="name"><?php echo $data['name']; ?></span>
							<span class="contact">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</span>
						</div>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- END ABOUT US -->
	
	<!-- BEGIN PORTFOLIO -->
	<section id="portfolio" class="page">
		<div class="container">
			<div class="content text-center">
				<div class="heading">
					<h2><i class="fa fa-image"></i>Gallery Of Schools</h2>					
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="gallery">							
							<ul class="items popup-gallery list-unstyled clearfix">
								<?php 
									$gallery  = mysqli_query($koneksi,"SELECT * FROM galeri ORDER BY galeri_tgl DESC");

									while ($data=mysqli_fetch_array($gallery)) {
								?>
								<li class="item web">
									<a href="dashboard/<?php echo $data['galeri_link']; ?>" title="Portfolio 1">
										<img src="dashboard/<?php echo $data['galeri_link']; ?>" alt="">
										<div class="overlay"><span><?php echo $data['galeri_nama']; ?></span></div>
									</a>
								</li>
								<?php
									}
								?>															
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
	<!-- END PORTFOLIO -->
	
<?php 	require_once('layout/footer.php'); 	?>