

    
				<!-- FOOTER -->
				<footer>
					<div class="footer_top">
						<div class="footer_wrapper">
							<div class="footer_logo_1">
								<img class="logo_1" src="assets/footer/Logo bottom.svg" alt="">
								<img class="logo_2" src="assets/mob_logo_black.svg" alt="">
							</div>
							<div class="footer_contact">
							
									<address>
										<span>Fruške Residence</span> <br>
										Potes pod kulom BB, <br>
										Vrdnik, Srbija
									</address>
									<div class="contact">
										<a href="tel:+381 22 123 456"><span>tel: </span>+381 22 123 456</a> <br>
										<a href="tel:+381 69 123 456"><span>mob: </span> +381 69 123 456</a> <br>
										<a href="mailto:sales@fruskeresidence.com">sales@fruskeresidence.com</a>
									</div>
								
							</div>
							<div class="footer_socials">
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							
						</div>
						
		
					</div>
					<div class="footer_logo_2">
						<img src="assets/footer/footer_logo_big.png" alt="">
					</div>
					<div class="footer_bottom">
						<div class="container">
							<div class="footer_socials">
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							
							<ul>
								<!-- <li><a href="projekat.html">O projektu</a></li> -->
								<li><a href="lokacija.html">Lokacija</a></li>
								<li><a href="resort.html">Resort</a></li>
								<li><a href="apartmani.html">Apartmani</a></li>
								<li><a href="nacionalniPark.html">Nacionalni park</a></li>
								<li><a href="#"   onclick="show_video(event)" 
							data-src ='https://player.vimeo.com/video/667702731?h=4ea631c1d3&autoplay=1'>Video</a></li>
								<li><a href="investitor.html">Investitor</a></li>
								<li><a href="#">Brošura</a></li>
								<li><a href="kontakt.html">Kontakt</a></li>
							</ul>
							<p class="copyRight">
								<span>&copy;2021 Promont Group d.o.o.</span>  <span>/</span>  <span>Design and Development: Aspect Communications</span>
							</p>
							
						</div>
						
					</div>
					
				</footer>
                <?php if($pageTitle !== "kontakt"):?>
				<div class="contact_badge">
					<div class="contact-wrapper">
						
						<a href="kontakt.php" class="mail"><img src="assets/icons/mail_white.svg" alt=""></a>
						<a href="#" class="phone"><img src="assets/icons/phone.svg" alt=""></a>
						
					</div>
				</div>
                <?php endif;?>

				<div class="video_wrapper" onclick="close_video()" >
						<div class="close" onclick="close_video()"><span class="_1"></span> <span class="_2"></span></div>
						<iframe width="950" height="534" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
		


			
		</main>
	
		<script src="js/slider.js"></script>
		<script src="js/map_opp.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
