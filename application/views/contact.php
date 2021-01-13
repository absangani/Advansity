<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Advansity-contact us</title>
  <meta content="ADVANSITY IT WORLD has been started to provide quality training and work to young aspirant students and clients, who wish to become professionals in the IT industry. We want to create new standards of edutainment teaching in computer and it sector, which inspires many students and clients, and helps them to achieve their dreams in the technological world with ease. We strive to understand your goal first." name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/fontawesome/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

 
</head>



<body>

<?php $this->load->view('navbar'); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center contact-hero">
    <div class="container" data-aos="fade-in">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1> You talk we do - our result</h1>
            <h2>Our talented team work for making your dream to real</h2>
          </div>
        </div>
        <div id="teacher-section" class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <lottie-player src="https://assets6.lottiefiles.com/temp/lf20_baStwL.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop autoplay></lottie-player>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">Contact</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>235,Crystal plaza, Silver chowk, Oppo. Devidarshan Society, Surat-395010</p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact.advansity@gmail.com</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 88 6663 5656</p>
            </div>
          </div>
        </div>

        

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <!-- <div class="form-row"> -->
                    <!-- <div class="field form-inline radio"> -->
                      <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary">
                          <input type="radio" class="radio-button" name="options" id="option1" autocomplete="off"  checked> Business
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" class="radio-button" name="options" id="option2" autocomplete="off"> Education
                        </label>
                      </div>
                    <!-- </div> -->
                 <!-- </div> -->
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=235,crystal%20plaza%20Silver%20Chowk,%20Punagam,%20Surat,%20Gujarat%20395010&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <!-- <iframe src="https://www.google.com/maps/place/Advansity+IT+world/@21.2045538,72.8790807,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04f57a9c89e3d:0x67c24183b360f8b0!8m2!3d21.2045538!4d72.8812694" frameborder="0" allowfullscreen></iframe> -->
        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- footer start -->
  <?php $this->load->view('footer'); ?>
  <!-- footer end -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>