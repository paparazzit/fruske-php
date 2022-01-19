<?php 
$pageTitle="kontakt";
require "partials/header.php";

?>
			<section class="contact_header">
				<div class="header_top">
					<div class="header_logo">
						<img src="assets/hero_logo.png" alt="" />
						<img src="assets/mob_logo_black.svg" class="logo_mob" alt="" />
					</div>
					<div class="header_hdln">
						<h2>Kontakt</h2>
					</div>
				</div>
				<div class="header_bottom">
					<div class="container">
						<div class="contact_left">
							<div class="left_top">
								<h3>Pozovite nas</h3>
								<a href="tel:+381 22 123 456"
									><span>tel: </span>+381 22 123 456</a
								>
								<a href="tel:+381 69 123 456"
									><span>mob: </span>+381 69 123 456</a
								>
							</div>
							<div class="left_bottom">
								<p class="fruske">Fruške Residence</p>
								<p>Potes pod kulom BB, Vrdnik, Srbija</p>
								<a href="mailto:sales@fruskeresidence.com"
									>sales@fruskeresidence.com</a
								>
							</div>
						</div>
						<div class="contact_right">
							<form action="#">
								<h2>Pisite nam</h2>

								<div class="name">
									<label for="name">Ime i prezime</label>
									<input type="text" name="name" required />
								</div>
								<div class="email">
									<label for="email">email</label>
									<input type="email" name="email" required />
								</div>
								<div class="message">
									<label for="message">Poruka</label>
									<textarea name="message" id="" cols="30" rows="10"></textarea>
								</div>
								<div class="bottom">
									<div class="confirm">
										<input type="checkbox" name="checkbox" id="checkbox" />
										<label for="checkbox">Nisam Robot</label>
									</div>
									<div class="capta">
										<img src="assets/capta.png" alt="" />
									</div>
									<button type="submit" class="btn green">Pošalji</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

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
			<?php 

require "partials/footer.php"
?>