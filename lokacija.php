<?php $pageTitle="location";
$title="Lokacija";
require "partials/header.php";
require 'partials/pageHeader.php';
?>
			<!-- HEADER -->
			<!-- <section class="pageHeader">
				<div class="page_logo">
					<img src="assets/hero_logo.svg" alt="" />
					<img src="assets/mob_logo_black.svg" class="logo_mob" alt="" />
				</div>
				<h2>Lokacija</h2>
			</section> -->

			<!-- SECTION HERO -->

			<section class="loc" id="loc">
				<div class="left">
					<div class="left_card">
						<h2>Fruške Residence</h2>
						<h3>Fruška Gora u dvorištu</h3>
						<p>
							Na samo 78 km od Beograda i 23 km od Novog Sada, Fruške Residence
							predstavljaju idealnu lokaciju za svakodnevni život na planini.
							Više ne morate da izgubite sate i sate da biste stigli do omiljene
							planine. Fruška gora je planina budućnosti, a idealna je kako za
							odmor tako i za život u zdravom i zelenom okruženju.
						</p>
					</div>
				</div>
				<div class="right">
					<div class="img_wrapper">
						<img src="assets/lokacija/lokacija_img.jpg" alt="" />
					</div>
				</div>
			</section>

			<!-- #region MAP -->
			<section class="map-section apear_scroll" id="map-section">
				<div class="container">
					<article class="map-legend">
						<h2>Premium lokacija</h2>

						<p>
							Na samo 103 km od Beograda i 40 km od Novog Sada, Fruške Residence
							predstavljaju idealnu lokaciju za svakodnevni život na planini.
						</p>
						<ol>
							<li class="location"><span>1.</span> Fruške Residence</li>
							<li class="location">
								<span>2.</span> Istorijski spomenik Vrdnička kula
							</li>
							<li class="location">
								<span>3.</span> Etno kompleks Vrdnička kula
							</li>
							<li class="location"><span>4.</span> Resort Fruške terme</li>
							<li class="location"><span>5.</span> Otvoreni bazeni</li>
							<li class="location"><span>6.</span> Hotel Premier Aqua</li>
							<li class="location"><span>7.</span> Sportski centar</li>
							<li class="location"><span>8.</span> Staza zdravlja</li>
						</ol>
						<a href="#" class="btn white mt-2"
							>Saznaj više <img src="assets/thin_big_right.png" alt=""
						/></a>
					</article>
					<article class="map-img" id="map_container">
						<img src="assets/map/map_img.png" alt="" />
						<div class="lamela_1 lamele" id="lamela_1"></div>
						<div class="lamela_2 lamele" id="lamela_2"></div>
						<div
							class="point_wrapper _1"
							data-point="1"
							data-top="44"
							data-left="53"
						>
							<img src="assets/map/map_marker.png" alt="" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _2"
							data-point="2"
							data-left="24"
							data-top="26"
						>
							<img src="assets/map/map_marker.png" alt="" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _3"
							data-point="3"
							data-left="41"
							data-top="33"
						>
							<img src="assets/map/map_marker.png" alt="" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _4"
							data-point="4"
							data-left="35"
							data-top="42"
						>
							<img src="assets/map/map_marker.png" alt="" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _5"
							data-point="5"
							data-left="38"
							data-top="58"
						>
							<img src="assets/map/map_marker.png" alt="" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _6"
							data-point="6"
							data-left="72.2"
							data-top="84"
						>
							<img src="assets/map/map_marker.png" alt="" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _7"
							data-point="7"
							data-left="63"
							data-top="90"
						>
							<img src="assets/map/map_marker.png" alt="" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _8"
							data-point="8"
							data-left="55.5"
							data-top="60"
						>
							<img src="assets/map/map_marker.png" alt="" />
							<h3></h3>
						</div>

						<div class="card-lamela" id="lamela_info">
							<div class="close_lml"><span></span> <span></span></div>
							<div class="img-wrapper">
								<img class="l-img" src="assets/map/lamela-1.png" alt="" />
							</div>
							<article>
								<h3 class="l-title">Frušle Residence</h3>
								<p class="subHeading l-sub">Premiere resort apartmani</p>
								<div class="card_text"></div>
							</article>
						</div>
					</article>
				</div>
			</section>
			<!-- PANO SECTION -->
			<section class="pano_loc pano" id="pano_loc">
				<div class="left">
					<iframe
						src="https://mag.archi/Ciklorama-Terme/"
						frameborder="0"
					></iframe>
					<a
						href="https://mag.archi/Ciklorama-Terme/"
						target="blank"
						class="fullScreen"
					>
						<div class="top"></div>
						<div class="bottom"></div>
					</a>
				</div>
				<div class="right">
					<div class="card_right">
						<p>
							Kondo naselje Fruške Residence okruženo je brojnim prirodnim,
							turističkim i kulturnim atrakcijama. Izgradite nove i zdrave
							životne navike, jer Fruška gora predstavlja nepresušni izvor
							prirode, reakcije i zdravih životnih navika.
						</p>
					</div>
				</div>
			</section>

			<!-- DIVISION CARD -->

			<section class="division_cards">
				<div class="promont_logo">
					<img src="assets/division_cards/division_logo.png" alt="" />
				</div>

				<div class="division_wrapper container">
					<div class="card_wrapper">
						<a href="#" alt="" class="card">
							<div class="card_img">
								<img src="assets/division_cards/card_1.jpg" alt="" />
							</div>
							<div class="overlay"></div>
							<div class="letter_overly">
								<img src="assets/division_cards/E.png" alt="" />
							</div>
							<h2>Energetika</h2>
						</a>
						<a href="#" class="card">
							<div class="card_img">
								<img src="assets/division_cards/card_2.jpg" alt="" />
							</div>
							<div class="overlay"></div>
							<div class="letter_overly">
								<img src="assets/division_cards/h.png" alt="" />
							</div>
							<h2>hotelijerstvo</h2>
						</a>
					</div>
					<div class="card_wrapper">
						<a href="#" class="card">
							<div class="card_img">
								<img src="assets/division_cards/card_3.jpg" alt="" />
							</div>
							<div class="overlay"></div>
							<div class="letter_overly">
								<img src="assets/division_cards/G.png" alt="" />
							</div>
							<h2>Destilerija</h2>
						</a>
						<a href="#" class="card">
							<div class="card_img">
								<img src="assets/division_cards/card_4.jpg" alt="" />
							</div>
							<div class="overlay"></div>
							<div class="letter_overly">
								<img src="assets/division_cards/P.png" alt="" />
							</div>
							<h2>Pivara</h2>
						</a>
					</div>
				</div>
			</section>

			<!-- FOOTER -->
			<?php require "partials/footer.php"?>
			<!-- <footer>
				<div class="footer_top">
					<div class="footer_wrapper">
						<div class="footer_logo_1">
							<img class="logo_1" src="assets/footer/Logo bottom.svg" alt="" />
							<img class="logo_2" src="assets/mob_logo_black.svg" alt="" />
						</div>
						<div class="footer_contact">
							<address>
								<span>Fruške Residence</span> <br />
								Potes pod kulom BB, <br />
								Vrdnik, Srbija
							</address>
							<div class="contact">
								<a href="tel:+381 22 123 456"
									><span>tel: </span>+381 22 123 456</a
								>
								<br />
								<a href="tel:+381 69 123 456"
									><span>mob: </span> +381 69 123 456</a
								>
								<br />
								<a href="mailto:sales@fruskeresidence.com"
									>sales@fruskeresidence.com</a
								>
							</div>
						</div>
						<div class="footer_socials">
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
				<div class="footer_logo_2">
					<img src="assets/footer/footer_logo_big.png" alt="" />
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
							<li><a href="#">Video</a></li>
							<li><a href="investitor.html">Investitor</a></li>
							<li><a href="#">Brošura</a></li>
							<li><a href="kontakt.html">Kontakt</a></li>
						</ul>
						<p class="copyRight">
							<span>&copy;2021 Promont Group d.o.o.</span> <span>/</span>
							<span>Design and Development: Aspect Communications</span>
						</p>
					</div>
				</div>
			</footer>
			<div class="contact_badge">
				<div class="contact-wrapper">
					<a href="kontakt.html" class="contact-text">Kontaktirajte nas</a>
					<a href="#" class="mail"
						><img src="assets/icons/mail_white.svg" alt=""
					/></a>
					<a href="#" class="phone"
						><img src="assets/icons/phone.svg" alt=""
					/></a>
				</div>
			</div>
		</main>
		<script src="js/map_opp.js"></script>
		<script src="js/main.js"></script>
	</body>
</html> -->
