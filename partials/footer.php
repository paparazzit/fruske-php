

    
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
										Staza Zdravlja 24, <br>
										Banja Vrdnik, Srbija
									</address>
									<div class="contact">
										<a href="tel:+381 21 443 195"><span>tel: </span>+381 21 443 195</a> <br>
										<a href="tel:+381 63 566 680"><span>mob: </span>+381 63 566 680</a> <br>
										<a href="mailto:info@fruskeresidence.rs">info@fruskeresidence.rs</a>
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
								<li><a href="lokacija.php">Lokacija</a></li>
								<li><a href="resort.php">Resort</a></li>
								<li><a href="apartmani.php">Apartmani</a></li>
								<li><a href="nacionalniPark.php">Nacionalni park</a></li>
								<li><a href="#"   onclick="show_video(event)" 
							data-src ='https://player.vimeo.com/video/667824551?h=39030031b3&autoplay=1'>Video</a></li>
								<li><a href="investitor.php">Investitor</a></li>
								<li><a href="#">Brošura</a></li>
								<li><a href="kontakt.php">Kontakt</a></li>
							</ul>
							<p class="copyRight">
								<span>&copy;2021 Promont Group D.O.O.</span>  <span>/</span>  <span><a href="http://www.aspectcommunications.net/" target="_blank">Design And Development: Aspect Communications</a></span>
							</p>
							
						</div>
						
					</div>
					
				</footer>
                <?php if($pageTitle !== "kontakt"):?>
				<div class="contact_badge">
					<div class="contact-wrapper">
						
						<a href="kontakt.php" class="mail"><img src="assets/icons/mail_white.svg" alt=""></a>
						<a href="tel:+381 63 566 680" class="phone"><img src="assets/icons/phone.svg" alt=""></a>
						
					</div>
				</div>
                <?php endif;?>

				<div class="video_wrapper" onclick="close_video()" >
						<div class="close" onclick="close_video()"><span class="_1"></span> <span class="_2"></span></div>
						<iframe   src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
		


			
		</main>
	
		<script src="js/slider.js"></script>
		<script src="js/map_opp.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
