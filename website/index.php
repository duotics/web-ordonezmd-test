<?php include("frames/_head.php") ?>
<div class="boxed-container">
  <div class="main-container">
    <main>
      <?php include("modules/_slider.php") ?>
      <!-- Welcome Section -->
      <div class="welcome-section other-services container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
          <!-- Section Header -->
          <div class="section-header">
            <h3>Bienvenido a Nuestro</h3>
            <h4>Centro de Fisioterapia y Rehabilitación</h4>
          </div>
          <!-- Section Header /- -->
          <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 our-clinic">
              <div class="row welcome-left">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="other-services-block">
                    <div class="services-block-icon">
                      <i class="fa fa-ambulance"></i>
                    </div>
                    <div class="other-services-content">
                      <h5>Emergency services</h5>
                      <p>
                        Dolor sit amet consecdi pisicing eliamsed do eiusmod
                        tempornu
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="other-services-block">
                    <div class="services-block-icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="other-services-content">
                      <h5>Qualified Doctors</h5>
                      <p>
                        Dolor sit amet consecdi pisicing eliamsed do eiusmod
                        tempornu
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="other-services-block">
                    <div class="services-block-icon">
                      <i class="fa fa-phone-square"></i>
                    </div>
                    <div class="other-services-content">
                      <h5>24/7 support</h5>
                      <p>
                        Dolor sit amet consecdi pisicing eliamsed do eiusmod
                        tempornu
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="other-services-block">
                    <div class="services-block-icon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <div class="other-services-content">
                      <h5>Online appointment</h5>
                      <p>
                        Dolor sit amet consecdi pisicing eliamsed do eiusmod
                        tempornu
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 clinic-form">
              <form class="appoinment-form">
                <h5>
                  <i class="fa fa-calendar-check-o"></i>Make Appointment
                </h5>
                <div class="form-group col-md-12 no-padding">
                  <input type="text" class="form-control" placeholder="Your Name" id="patient_name" name="patient-name" />
                </div>
                <div class="form-group col-md-12 no-padding">
                  <input type="email" class="form-control" placeholder="Email Address" id="patient_email" name="patient-email" />
                </div>
                <div class="form-group input-group col-md-12 no-padding">
                  <div class="col-md-7 col-sm-8 col-xs-8 no-padding">
                    <div class="col-md-6 col-sm-6 col-xs-6 no-left-padding">
                      <div class="date" id="datetimepicker1">
                        <input type="text" class="form-control" id="patient_date" name="patient-date" placeholder="Day" />
                        <span class="fa fa-angle-down"></span>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 no-left-padding">
                      <select class="selectpicker" id="patient_time" name="patient-time">
                        <option>Time</option>
                        <option>09:00</option>
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-5 col-sm-4 col-xs-4 no-padding">
                    <select class="selectpicker" id="patient_department" name="patient-department">
                      <option>Department</option>
                      <option>Department 1</option>
                      <option>Department 2</option>
                      <option>Department 3</option>
                      <option>Department 4</option>
                      <option>Department 5</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                  <textarea rows="4" class="form-control" placeholder="Your Message..." id="patient_message" name="patient-message"></textarea>
                </div>
                <button type="submit" id="appointment_submit" class="btn-submit pull-right">
                  <i class="fa fa-heart-o"></i>Submit
                </button>
                <div id="appointment-alert-msg" class="alert-msg"></div>
              </form>
            </div>
          </div>
        </div>
        <!-- Container /- -->
      </div>
      <!-- Welcome Section /- -->

      <?php include("modules/_gallery.php") ?>

      <!-- Services Section -->
      <div class="services-section container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
          <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="service-content">
              <h5>We Offer Best Medical Services</h5>
              <p>
                When you travel abroad for medical care, you want everything
                to go smoothly.
              </p>
              <div class="medical-services">
                <div class="col-md-4 col-sm-4 col-xs-4 medical-box">
                  <i class="fa fa-calendar-plus-o"></i>
                  <p>Easy Appointments</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 medical-box">
                  <i class="fa fa-ambulance"></i>
                  <p>Transportation</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 medical-box">
                  <i class="fa fa-thumbs-up"></i>
                  <p>Care management</p>
                </div>
              </div>
              <a href="#" class="learn-more" title="Learn More">Learn More</a>
              <span>Or</span>
              <a href="#" class="learn-more appointment" title="Make an Appointment">Make an Appointment</a>
            </div>
          </div>
          <div class="col-md-5 col-sm-12 col-xs-12 services-img">
            <img src="assets/images/services.jpg" alt="services" />
          </div>
        </div>
        <!-- Container /- -->
      </div>
      <!-- Services Section -->

      <?php include("modules/_testimonial.php") ?>

      <?php include("modules/_team.php") ?>

      <!-- Latest News -->
      <div class="latest-news container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
          <!-- Section Header -->
          <div class="section-header">
            <h3>Our News</h3>
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

      <!-- Offer Section -->
      <div class="offer-section container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
          <!-- Section Header -->
          <div class="section-header">
            <h3>What We Offer</h3>
          </div>
          <!-- Section Header /- -->
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
              <div class="offer-box">
                <i class="fa fa-hospital-o"></i>
                <h5>Intensive Care</h5>
                <p>
                  Mister we could use a man like Herbert Hoover again. Love
                  exciting and new. Come aboardwere expecting you.
                </p>
                <a href="#" title="Read More">Read More</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
              <div class="offer-box">
                <i class="fa fa-ambulance"></i>
                <h5>24/7 Ambulance</h5>
                <p>
                  In crack commando was sent to prison by a military court
                  for a crime they didn't commit. These men prompt-
                </p>
                <a href="#" title="Read More">Read More</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
              <div class="offer-box">
                <i class="fa fa-smile-o"></i>
                <h5>Friendly Doctors</h5>
                <p>
                  Come aboard expecting you. Love life's sweetest reward Let
                  it flow it floats back to you. It's a beautiful Day.
                </p>
                <a href="#" title="Read More">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Container -->
      </div>
      <!-- Offer Section /- -->

      <!-- Department Section -->
      <div class="department-section container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
          <div class="department-header">
            <h5>Departments</h5>
          </div>
          <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-1.png" alt="dept" />
                <span>Neurology</span>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-2.png" alt="dept" />
                <span>Cardiology</span>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-3.png" alt="dept" />
                <span>Dermatology</span>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-4.png" alt="dept" />
                <span>Gastroenterology</span>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-5.png" alt="dept" />
                <span>Pediatrician</span>
              </div>
            </div>

            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-6.png" alt="dept" />
                <span>Otolaryngology</span>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-7.png" alt="dept" />
                <span>Hematology</span>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-8.png" alt="dept" />
                <span>Radiation</span>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-9.png" alt="dept" />
                <span>Podiatry</span>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
              <div class="department-img-block">
                <img src="assets/images/dept-10.png" alt="dept" />
                <span>Rheumatology</span>
              </div>
            </div>
          </div>
          <div class="show-all">
            <a href="#" title="show all">show all</a>
          </div>
        </div>
        <!-- Container /- -->
      </div>
      <!-- Department Section -->
    </main>
  </div>
</div>
<?php include("frames/_foot.php") ?>