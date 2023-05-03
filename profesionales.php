<?php include("frames/_head.php") ?>
<div class="boxed-container">
  <div class="main-container">
    <main>
      <!-- Page Banner -->
      <div class="page-banner container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
          <div class="page-banner-content">
            <h3>Profesionales</h3>
          </div>
          <div class="banner-content">
            <ol class="breadcrumb">
              <li><a href="index.php">Inicio</a></li>
              <li class="active">Profesionales</li>
            </ol>
          </div>
        </div>
        <!-- Container /- -->
      </div>
      <!-- Page Banner -->

      <?php include("modules/_team.php") ?>
      <?php include("modules/_teamAdmin.php") ?>
      <?php include("modules/_testimonial.php") ?>
      <?php include("modules/_partners.php") ?>

    </main>
  </div>
</div>
<?php include("frames/_foot.php") ?>