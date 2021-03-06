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
						Na samo 80 km od Beograda I 20 km od Novog Sada, Fruške Residence predstavljaju idealnu lokaciju za svakodnevni život na planini.
						</p>
						
						<p>Fruška gora predstavlja planinu koja nudi sve –sat vremena vožnje od Beograda, 45 minuta od medjunarodnog aerodoma, i sa bogatom ponudom koja je aktuelna 365 dana u godini.</p>
					</div>
				</div>
				<div class="right">
					<div class="img_wrapper">
						<img src="assets/lokacija/lokacija_img.jpg" alt="Fruške Residence" />
					</div>
				</div>
			</section>

			<!-- #region MAP -->
			<section class="map-section map_loc apear_scroll" id="map-section">
				<div class="container" onclick="void(0);">
					<article class="map-legend">
						<h2>Premium <br> lokacija</h2>

						<!-- <p>
							Na samo 103 km od Beograda i 40 km od Novog Sada, Fruške Residence
							predstavljaju idealnu lokaciju za svakodnevni život na planini.
						</p> -->
						<ol>
							<li class="location" data-point="1"><span>1.</span> Fruške Residence</li>
							<li class="location" data-point="2">
								<span>2.</span> Istorijski spomenik Vrdnička kula
							</li>
							<li class="location" data-point="3">
								<span>3.</span> Etno kompleks Vrdnička kula
							</li>
							<li class="location" data-point="4"><span>4.</span> Wellness & Spa Resort Fruške Terme</li>
							<li class="location" data-point="5"><span>5.</span> Termalna Rivijera</li>
							<li class="location" data-point="6"><span>6.</span> Hotel Premier Aqua</li>
							<li class="location" data-point="7"><span>7.</span> Sportski tereni</li>
							<li class="location" data-point="8"><span>8.</span> Staza zdravlja</li>
						</ol>
						<a href="https://goo.gl/maps/o3q2HnajHN1KcVTD6" target="_blank" class="btn white mt-2"
							><img src="assets/icons/google.png" alt="google maps"> Pogledaj na Google mapi</a>
					</article>
					<article class="map-img" id="map_container">
						<img src="assets/map/map_img.png" alt="mapa fruske gore" />
						<a href="apartmani.php" class="lamela_1 lamele" id="lamela_1"></a>
						<a href="apartmani.php" class="lamela_2 lamele" id="lamela_2"></a>
						<div
							class="point_wrapper _1"
							data-point="1"
							data-top="44"
							data-left="53"
						>
							<img src="assets/map/map_marker.png" alt="map marker fruska gora" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _2"
							data-point="2"
							data-left="24"
							data-top="26"
						>
							<img src="assets/map/map_marker.png" alt="map marker fruska gora" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _3"
							data-point="3"
							data-left="41"
							data-top="33"
						>
							<img src="assets/map/map_marker.png" alt="map marker fruska gora" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _4"
							data-point="4"
							data-left="35"
							data-top="42"
						>
							<img src="assets/map/map_marker.png" alt="map marker fruska gora" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _5"
							data-point="5"
							data-left="38"
							data-top="58"
						>
							<img src="assets/map/map_marker.png" alt="map marker fruska gora" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _6"
							data-point="6"
							data-left="72.2"
							data-top="84"
						>
							<img src="assets/map/map_marker.png" alt="map marker fruska gora" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _7"
							data-point="7"
							data-left="63"
							data-top="90"
						>
							<img src="assets/map/map_marker.png" alt="map marker fruska gora" />
							<h3></h3>
						</div>

						<div
							class="point_wrapper _8"
							data-point="8"
							data-left="55.5"
							data-top="60"
						>
							<img src="assets/map/map_marker.png" alt="map marker fruska gora" />
							<h3></h3>
						</div>

						
					</article>
					<a href="https://goo.gl/maps/o3q2HnajHN1KcVTD6" target="_blank" class="btn white mt-2"
							><img src="assets/icons/google.png" alt="google maps"> Pogledaj na Google mapi</a>
				</div>
			</section>

			<div class="card-lamela" id="lamela_info" onclick="map_1.close_card()">
								<div class="close_lml" onclick="map_1.close_card()"><span></span> <span></span></div>
								<div class="img-wrapper">
									<img class="l-img" src="assets/map/lamela-1.png" alt="Map marker info image" />
								</div>
								<article>
									<h3 class="l-title">Frušle Residence</h3>
									
									<div class="card_text">
										
									</div>
								</article>
							</div>
			
			<!-- PANO SECTION -->
			<section class="pano_loc pano" id="pano_loc">
				<div class="left">
				<img src="assets/pano_1.jpg" alt="Panorama" class="pano_img">
					<div class="pano_wrapper">
					</div>
					<!-- <iframe
						src="https://mag.archi/Ciklorama-Terme/"
						frameborder="0"
					></iframe> -->
					<div class="overlay_pano" data-frame = "https://mag.archi/Ciklorama-Terme/" >
					<hgroup class="hg_pano"  >
							<h2>Panorama</h2>
							<p>pogledajte</p>
						</hgroup>
					</div>
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
						Kondo naselje Fruške Residence okruženo je brojnim prirodnim i turističkim atrakcijama i kulturnim i
rekreativnim sadržajima. Iskoristite sve prednosti koje nudi naša lokacija i izgradite nove i zdravije navike
u zdravom i opuštajućem životnom ambijentu.
						</p>
					</div>
				</div>
			</section>

			<!-- DIVISION CARD -->

			<?php require "partials/divisionCards.php"?>

			<!-- FOOTER -->
			<?php require "partials/footer.php"?>
			