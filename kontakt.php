<?php 
$pageTitle="kontakt";
require "partials/header.php";

?>
			<section class="contact_header">
				<div class="header_top">
					<div class="header_logo">
						<img src="assets/hero_logo.png" alt="Hero logo" />
						<img src="assets/mob_logo_black.svg" class="logo_mob" alt="Main logo" />
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
									<input type="text" name="name"  />
								</div>
								<div class="email">
									<label for="email">email</label>
									<input type="email" name="email"  />
								</div>
								
									<input type="text" name="phone" hidden  />
								
								<div class="message">
									<label for="message">Poruka</label>
									<textarea name="message" id="" cols="30" rows="10"></textarea>
								</div>
								<div class="bottom">
									<!-- div report menja klase: sent (daje success), fail (daje fail), sending (daje loader) -->
									<div class="report"> 
										<div class="msg_loader">
											<p>Slanje<span>.</span><span>.</span><span>.</span><span>.</span><span>.</span></p>
										</div>
										<div class="msg_report " id="success">Poruka je poslata</div>
										<div class="msg_report " id="fail">Poruka nije poslata</div>
									</div>
									
									<button type="submit" class="btn green">Pošalji</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<?php require 'partials/divisionCards.php'?>

			

			
			<?php 

require "partials/footer.php"
?>