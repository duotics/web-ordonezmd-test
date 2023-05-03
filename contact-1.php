<?php include("frames/_head.php") ?>
<div class="boxed-container">
	<div class="main-container">
		<main>
			<!-- Page Banner -->
			<div class="page-banner container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="page-banner-content">
						<h3>Contáctenos</h3>
					</div>
					<div class="banner-content">
						<ol class="breadcrumb">
							<li><a href="index.php">Inicio</a></li>
							<li class="active">Contáctenos</li>
						</ol>
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Banner -->

			<!-- Contact Us -->
			<div class="contact-us container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="contact-header">
						<h5>Mantente en contacto con nosotros</h5>
						<p>Responderemos tus dudas a la brevedad posible</p>
					</div>
					<div class="contact-form">
						<h5>Envíanos un mensaje</h5>
						<form class="row">
							<div class="col-md-6 col-sm-6 col-xs-12 form-group">
								<input type="text" class="form-control" placeholder="Nombres" name="contact-name" id="input_name" required="" />
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 form-group">
								<input type="text" class="form-control" placeholder="Teléfono" name="contact-phone" id="input_phone" required="" />
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">
								<textarea class="form-control" placeholder="Mensaje" rows="6" name="textarea-message" id="textarea_message"></textarea>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12">
								<button title="Submit" type="submit" id="btn_submit" name="post">Enviar Consulta</button>
							</div>
							<div id="alert-msg" class="alert-msg"></div>
						</form>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="contact-call-box">
								<p><i class="fa fa-phone"></i><a href="tel:593995170318" title="+593 99 517 0318">+593 99 517 0318</a></p>
							</div>
							<div class="contact-call-box">
								<p><i class="fa fa-envelope"></i><a href="mailto:info@freimo.com" title="info@freimo.com">info@freimo.com</a></p>
							</div>
							<div class="contact-call-box">
								<p>
									<i class="fa fa-map-marker"></i>
									<span>Agustin Cueva 3-55</span><br>
									<span style="padding-left:70px">y Honorato Loyola</span><br>
									<span style="padding-left:70px">Cuenca, Ecuador</span>
								</p>
							</div>
							<div class="contact-call-box">
								<p><i class="fa fa-heart"></i></p>
								<ul>
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
									<li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
									<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-8 col-sm-6 col-xs-12">
							<!-- Map Section -->
							<div class="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15938.78637573241!2d-79.0101658!3d-2.9034592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1872d2b0afd9%3A0x4e9058a58a4564c9!2sCentro%20de%20Fisioterapia%20y%20Rehabilitaci%C3%B3n%20FREIMO!5e0!3m2!1ses-419!2sec!4v1682692980501!5m2!1ses-419!2sec" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								<!--	
							<div class="map-canvas" id="map-canvas-contact" data-lat="-2.9034592" data-lng="-79.0101658" data-string="Centro de Fisioterapia y Rehabilitación FREIMO" data-zoom="10"></div>
							-->
							</div><!--  Map Section /- -->
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Contact Us /- -->
		</main>
	</div>
</div>
<?php include("frames/_foot.php") ?>