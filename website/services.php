<?php include("frames/_head.php") ?>
<div class="boxed-container">
	<div class="main-container">
		<main>
			<!-- Page Banner -->
			<div class="page-banner container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="page-banner-content">
						<h3>PATOLOGÍAS</h3>
					</div>
					<div class="banner-content">
						<ol class="breadcrumb">
							<li><a href="index.php">Inicio</a></li>
							<li class="active">Patologías</li>
						</ol>
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Banner -->

			<?php include("modules/_patologias.php") ?>
			<?php include("modules/_offer.php") ?>
			

			<!-- Other Services -->
			<div class="other-services container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Otros servicios</h3>
					</div><!-- Section Header /- -->
					<div class="row srv-box">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="other-services-block">
								<div class="services-block-icon">
									<i class="fa fa-heart"></i>
								</div>
								<div class="other-services-content">
									<h5>Rehabilitación deportiva</h5>
									<p>Tratamientos personalizados para deportistas y personas activas, enfocados en la recuperación de lesiones y mejora del rendimiento.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="other-services-block">
								<div class="services-block-icon">
									<i class="fa fa-thumbs-up"></i>
								</div>
								<div class="other-services-content">
									<h5>Rehabilitación pediátrica</h5>
									<p>Terapia especializada para niños con discapacidades o retrasos en el desarrollo, para mejorar su capacidad funcional y calidad de vida.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="other-services-block">
								<div class="services-block-icon">
									<i class="fa fa-users"></i>
								</div>
								<div class="other-services-content">
									<h5>Rehabilitación neurológica</h5>
									<p>Tratamientos personalizados para lesiones cerebrales, enfermedades neurológicas o trastornos neuromusculares, enfocados en la recuperación funcional.</p>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Other Services -->
		</main>
	</div>
	<?php include("frames/_foot.php") ?>