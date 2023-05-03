<?php include("frames/_head.php") ?>
<div class="boxed-container">
  <div class="main-container">
    <main>
      <?php include("modules/_slider.php") ?>
      <?php include("modules/_welcome.php") ?>
      <?php include("modules/_gallery.php") ?>
      <?php include("modules/_testimonial.php") ?>
      <?php include("modules/_team.php") ?>

      <!-- Latest News -->
      <div class="latest-news container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
          <!-- Section Header -->
          <div class="section-header">
            <h3>Noticias</h3>
          </div>
          <!-- Section Header /- -->
          <div class="row">
            <div class="news-carousel">
              <div class="col-md-12">
                <div class="type-post">
                  <div class="entry-cover">
                    <a title="Blog" href="#">
                      <img alt="blog" src="assets/images/blog-1.jpg" />
                    </a>
                    <div class="post-date-bg">
                      <div class="post-date">18 <span>June</span></div>
                    </div>
                  </div>
                  <div class="latest-news-content">
                    <div class="entry-header">
                      <h3 class="entry-title">
                        <a title="Patients Share Success Stories" href="#">Patients Share Success Stories</a>
                      </h3>
                      <div class="entry-meta">
                        <div class="byline">
                          <a href="#" title="adminol"><i class="fa fa-user-o"></i>by adminol</a>
                        </div>
                        <div class="post-time">
                          <a href="#" title="10 minutes ago"><i class="fa fa-clock-o"></i>10 minutes ago</a>
                        </div>
                        <div class="post-comment">
                          <a href="#" title="4 Comments"><i class="fa fa-commenting-o"></i>4 Comments</a>
                        </div>
                      </div>
                    </div>
                    <div class="entry-content">
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard .
                      </p>
                    </div>
                    <a href="#" title="Read More" class="read-more">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="type-post">
                  <div class="entry-cover">
                    <a title="Blog" href="#">
                      <img alt="blog" src="assets/images/blog-2.jpg" />
                    </a>
                    <div class="post-date-bg">
                      <div class="post-date">18 <span>June</span></div>
                    </div>
                  </div>
                  <div class="latest-news-content">
                    <div class="entry-header">
                      <h3 class="entry-title">
                        <a title="Broad range of specialist services" href="#">Broad range of specialist services</a>
                      </h3>
                      <div class="entry-meta">
                        <div class="byline">
                          <a href="#" title="adminol"><i class="fa fa-user-o"></i>by adminol</a>
                        </div>
                        <div class="post-time">
                          <a href="#" title="10 minutes ago"><i class="fa fa-clock-o"></i>10 minutes ago</a>
                        </div>
                        <div class="post-comment">
                          <a href="#" title="4 Comments"><i class="fa fa-commenting-o"></i>4 Comments</a>
                        </div>
                      </div>
                    </div>
                    <div class="entry-content">
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard .
                      </p>
                    </div>
                    <a href="#" title="Read More" class="read-more">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Container /- -->
      </div>
      <!-- Latest News /- -->

      <?php include("modules/_offer.php") ?>

      <!-- Department Section -->
      <div class="department-section container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
          <div class="department-header">
            <h5>Patologías</h5>
          </div>
          <?php include("modules/_patologias.php") ?>
          <div class="show-all">
            <a href="#" title="show all">Ver todas</a>
          </div>
        </div>
        <!-- Container /- -->
      </div>
      <!-- Department Section -->
    </main>
  </div>
</div>
<?php include("frames/_foot.php") ?>