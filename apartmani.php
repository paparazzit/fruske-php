
<?php 
$pageTitle ="apartmani";
$title = 'Apartmani';
require "partials/header.php";
require "partials/pageHeader.php";
?>
			

			<section class="apartmani_hero">
				<div class="img_wrapper">
					<img src="assets/apartmani/apartmani_hero.jpg" alt="" />
					<div class="card_pointer lml_1">
                        <div class="pointer_bubble">
                            <h2>B</h2>
                            <p>LAMELA</p>
                        </div>
                        <div class="bubble_line"></div>
                    </div>
                    <div class="card_pointer lml_2">
                        <div class="pointer_bubble">
                            <h2>A</h2>
                            <p>LAMELA</p>
                        </div>
                        <div class="bubble_line"></div>
                    </div>

					
				<div class="apartmani_card">
					<h2>Fruške Residence</h2>
					<h3>U dodiru sa prirodom</h3>
					<p>
						Fruške Residence se sastoji od 140 apartmana, za ličnu upotrebu ili
						za izdavanje – izbor je isključivo Vaš!
					</p>
					<p>
						Apartmani nude udobnost i potpuni komfor za svakodnevni život, ali
						na drugačiji način od života u gradu.
					</p>
					<p>
						Kompletno opremljeni apartmani, razlikuju se po površini, broju soba
						i geometriji.
					</p>
				</div>
			</section>

            <!-- APARTAMNI DETAILS -->

            <section class="details" id="details">
                <div class="container">
                    <div class="detalji_opt">
						<div class="detalji_text">
							<p>Proverite detalje i dostupnost apartmana</p></div>
							<div class="select_container" >
									
										<div class="options" id="opt_lml">
										
										</div>
									
									<div class="selected" data-drop-button>Izaberi Lamelu </div>
												
								
							</div>
							<div class="select_container">
								
									<div class="options" id="opt_tip">
										
									</div>
									<div class="selected" data-drop-button>Izaberi Tip </div>
												
								
							</div>
                    </div>
                    <div class="apart_details">
                        <div class="row">
                            <div class="tlc_wrapper">
                                <img src="assets/apartmani/tlocrt_1.png" alt="">
                            </div>
                            <div class="apart_desc">
                                <h2>Dvosoban apartman 001</h2>
                                <div class="tip_lg">
                                    <p>Tip A1</p>
                                    <div class="dostupnost">
                                        <p><span class="povrsina">54.30</span> <span class="unit">m<sup>2</sup> </span></p>
                                        <p class="dost">DOSTUPNO</p>
                                    </div>
                                    
                                </div>
                                <div class="apartman_text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio rem dolores saepe harum sit laboriosam quisquam, a aliquam quaerat consequatur.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut in eligendi suscipit cum minima quae!</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>

                            </div>
                        </div>
                        <div class="row" id="drop_row">
                            <div class="apartman_table tbl_shadow">
                                <h2>Apartman 001</h2>
                                <table id="info_apartman_table" >
                                    <thead>
                                        <tr>
                                            <th>Oznaka</th>
                                            <th>Prostorija</th>
                                            <th>P(m<sup>2</sup>)</th>
                                            <th>Obrada poda</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Predsoblje</td>
                                            <td>7</td>
                                            <td>Parket</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Kupatilo</td>
                                            <td>7</td>
                                            <td>Ker. pločice</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Kuhinja</td>
                                            <td>7</td>
                                            <td>Ker. pločice</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Dnevni boravak</td>
                                            <td>7</td>
                                            <td>Parket</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Spavaća soba</td>
                                            <td>7</td>
                                            <td>Parket</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Terasa</td>
                                            <td>7</td>
                                            <td>Ker. pločice</td>
                                        </tr>
                                        <tr>
                                            <td class="invisible"></td>
                                            
                                            <td  >Ukupno:</td>
                                            <td class="m2">55.98</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="invisible"></td>
                                            <td >P-3%(m<sup>2</sup>)</td>
                                            <td class="m2">55.98</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="napomena">
                                    <h3>Napomena:</h3>
                                    <p>
                                        Postoji mogućnost da iz konstruktivnih razloga, kao i usled izvođačkih detalja dođe do minimalnih odstupanja od crteža i površina prikazanih u komercijalnoj skici.</p>
                                </div>
                            </div>
                            <div class="right_cell">
                                <div class="lamela_table tbl_shadow">
                                    <h2>Lamela A</h2>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Suteren - 1</th>
                                                <th>Prizemlje</th>
                                                <th>Sprat + 1</th>
                                                <th>Sprat + 2</th>
                                                <th>Potkrovlje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>A1</td>
                                                <td>7</td>
                                                <td>7</td>
                                                <td>7</td>
                                                <td>5</td>
                                                <td>/</td>
                                            </tr>
                                            <tr>
                                                <td class="invisible"></td>
                                                <td class="invisible"></td>
                                                <td class="invisible"></td>
                                                <td class="invisible"></td>
                                                <td  >Ukupno:</td>
                                                <td  class="m2" >26</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="contact_form tbl_shadow">
                                   <div class="contact_desc">
                                       <h2>Zanima me</h2>
                                       <p>Pošaljite nam poruku i naš tim će Vas kontaktirati u najkraćem roku</p>
                                   </div>
                                   <form action="#">
                                    <div class="name">
                                        <label for="name">Ime i prezime</label>
                                        <input type="text" name="name" >
                                    </div>
                                    <div class="email">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" >
                                    </div>
                                    <div class="name">
                                        <label for="message">Ime i prezime</label>
                                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="buttons"><button type="submit" class="btn green">Pošalji</button></div>
                                    
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="toggle_btn">
                            <h3 class="more_less" data-toggle="false">Vise detalja</h3>
                        </div>
                    </div>
                </div>
            </section>

           

            <!-- SECTION RENDER -->
            <section class="render_apart">
                <div class="container">
                    
                <div class="pano_wrapper">
                    <img src="assets/apartmani/reneder_ph.jpg" alt="">
                    <a href="https://configurator.mag.archi/projects/terme-a/" target="blank" class="fullScreen">
                        <div class="top"></div>
                        <div class="bottom"></div>
                    </a>
                </div>
                </div>
            </section>

            <!-- SLIDER -->

            
				<section class="sliderSection apart_slider" id="mySlide1">
					<div class="slider" id="slider1">
						<div class="touchLeft"></div>
						<div class="touchRight"></div>
						<div class="items_container">
							<div class="item">
								<img src="assets/slider/img_1.jpg" alt="" />
								<img class="slider_num" src="assets/slider_nums/01.png" alt="">
							</div>
							<div class="item">
								<img src="assets/slider/img_2.jpg" alt="" />
								<img class="slider_num" src="assets/slider_nums/02.png" alt="">
							</div>
							<div class="item">
								<img src="assets/slider/img_3.jpg" alt="" />
								<img class="slider_num" src="assets/slider_nums/03.png" alt="">
							</div>
							<div class="item">
								<img src="assets/slider/img_4.jpg" alt="" />
								<img class="slider_num" src="assets/slider_nums/01.png" alt="">
							</div>
							<div class="item">
								<img src="assets/slider/img_5.jpg" alt="" />
								<img class="slider_num" src="assets/slider_nums/02.png" alt="">
							</div>
							<div class="item">
								<img src="assets/slider/img_6.jpg" alt="" />
								<img class="slider_num" src="assets/slider_nums/03.png" alt="">
							</div>
						</div>
						<div class="controls">
							<div class="ctrl_count">
								<span id="curent_itm">01</span> / <span id="total_itm">05</span>
							</div>
							<div class="buttons">
								<div class="next_prev">
									<div class="prev"><img src="assets/slider/slide_ctrl.png" alt=""> Prethodna</div>
									<div class="next">Sledeća <img src="assets/slider/slide_ctrl.png" alt=""></div>
								</div>
								<p>Vidi sve</p>
							</div>
						</div>
					</div>
					<div class="vertical_txt">
						
						<hgroup class="txt_v">
							<h2>Galerija</h2>
							<p>residence</p>
						</hgroup>
					</div>
			
				</section>

			
				<!-- FOOTER -->
				<?php require "partials/footer.php"?>