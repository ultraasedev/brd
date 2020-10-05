<?php include "inc/_header.php";?>
		<!-- Begin page-name -->
		<section class="page-name v-separator mb-xs-20 mb-md-25 mb-lg-65">
			<div class="dark-line"></div>
			<div class="page-name-content">
				<div class="container">
					<h1>Artiste</h1>
					<ul class="bread-crumbs">
						<li><a href="imdex.php">Acceuil</a></li>
						<li><p>Artiste</p></li>
					</ul>
				</div>
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" class="page-name__bg lazy" data-src="./img/page-name_bg.jpg" alt="bg">
			</div>
		</section>

		<section class="block-bg-projects parralax-section v-separator pt-xs-25 pt-md-25 pt-lg-60 pb-xs-25 pb-md-25 pb-lg-60">
				<div class="ovh">
					<div class="container pt-xs-25 pt-md-25 pt-lg-60 pb-xs-25 pb-md-25 pb-lg-60">
						<div class="row">
							<div class="col-12">
								<div class="section-header">
									<p>Voici les artistes de notre maison de disque</p>
								</div>
								<div class="project-slider arrow-outside"
									 data-slick='{
									 	"slidesToShow": 3,
									 	"swipeToSlide": true,
									 	"responsive": [
									 		{
									 			"breakpoint": 1200,
									 			"settings": {
									 				"slidesToShow": 3,
									 				"arrows": false,
									 				"dots": true
									 			}
									 		},
									 		{
									 			"breakpoint": 768,
									 			"settings": {
									 				"slidesToShow": 2,
									 				"arrows": false,
									 				"dots": true
									 			}
									 		},
									 		{
									 			"breakpoint": 481,
									 			"settings": {
									 				"slidesToShow": 1,
									 				"arrows": false,
									 				"dots": true
									 			}
									 		}
									 	]
									 }'>
									
								
									<div class="tt-slide">
										<div class="project-card">
											<a href="atr/kenshin.php" class="project-cart_logo">
												<picture>
													<source type="image/webp" srcset="img/atr-1.webp" height="297" width="297" >
													<source type="image/jpeg" srcset="img/atr-1.jpg"height="297" width="297">
													<img src="img/atr-1.jpg" alt="img">
												</picture>
											</a>
											<a href="#" class="theme-color" style="font-weight:bold;letter-spacing:2px;">Kenshin</a>

											
											<div class="socialslinks" id="socialslinks">
											<span class="fab fa-spotify" href=""></span>
											<span  class="fab fa-bandcamp"  href=""></span>
											<span class="fab fa-instagram" href=""></span>
											</div>
										</div>
									</div>
									<div class="tt-slide">
										<div class="project-card">
											<a href="atr/tindo.php" class="project-cart_logo">
												<picture>
													<source type="image/webp" srcset="img/atr-2.jpg" height="297" width="297">
													<source type="image/jpeg" srcset="img/atr-2.jpg" height="297" width="297">
													<img src="img/atr-2.jpg" alt="img">
												</picture>
											</a>
											
											<a href="#" class="theme-color" style="font-weight:bold;letter-spacing:2px;">Tindo</a>

											<div class="socialslinks" id="socialslinks">
											<span class="fab fa-spotify" href=""></span>
											<span  class="fab fa-bandcamp"  href=""></span>
											<span class="fab fa-instagram" href=""></span>
											</div>

										</div>
									</div>
									</div>
									
									
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End artiste -section -->

        <?php include "inc/_footer.php";?>