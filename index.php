<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospa · Hospital landing</title>
  <!-- Global CSS (external) -->
  <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
  <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
  <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
  <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/css/linearicons.css">
  <!-- additional font for elegance -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&display=swap" rel="stylesheet">
  <style>
    /* ----- global color overrides (gloval css) ----- */
    :root {
      --primary: #0b5e7c;      /* deep teal */
      --primary-light: #1b7a9c;
      --secondary: #f4a261;    /* warm accent */
      --accent: #e76f51;
      --light-bg: #f8faff;
      --dark: #1e2a41;
      --gray: #5f6c84;
      --white: #ffffff;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background-color: var(--light-bg);
      color: var(--dark);
      overflow-x: hidden;
    }

    /* buttons & links */
    .btn-primary-custom {
      background-color: var(--primary);
      border: none;
      color: white;
      padding: 0.65rem 2rem;
      border-radius: 40px;
      font-weight: 500;
      transition: 0.25s;
      box-shadow: 0 8px 20px rgba(11, 94, 124, 0.25);
    }
    .btn-primary-custom:hover {
      background-color: var(--primary-light);
      transform: translateY(-2px);
      box-shadow: 0 12px 28px rgba(11, 94, 124, 0.35);
      color: white;
    }
    .btn-outline-primary-custom {
      background: transparent;
      border: 2px solid var(--primary);
      color: var(--primary);
      padding: 0.6rem 2rem;
      border-radius: 40px;
      font-weight: 500;
      transition: 0.2s;
    }
    .btn-outline-primary-custom:hover {
      background: var(--primary);
      color: white;
      border-color: var(--primary);
    }

    /* sections */
    .section-title {
      font-weight: 600;
      letter-spacing: -0.02em;
      color: var(--dark);
    }
    .section-sub {
      color: var(--gray);
      font-weight: 400;
    }
    .bg-soft-primary {
      background-color: #e7f0f5;
    }

    /* navbar */
    .navbar-hospa {
      background: rgba(255,255,255,0.85);
      backdrop-filter: blur(6px);
      box-shadow: 0 2px 20px rgba(0,0,0,0.04);
      padding: 0.8rem 0;
    }
    .navbar-hospa .navbar-brand {
      font-weight: 700;
      font-size: 1.8rem;
      letter-spacing: -0.5px;
      color: var(--primary);
    }
    .navbar-hospa .nav-link {
      color: var(--dark) !important;
      font-weight: 500;
      margin: 0 0.6rem;
      transition: 0.2s;
    }
    .navbar-hospa .nav-link:hover {
      color: var(--primary) !important;
    }

    /* hero */
    .hero {
      padding: 6rem 0 5rem;
      background: linear-gradient(135deg, #e2edf2 0%, #f4f9fd 100%);
    }
    .hero h1 {
      font-weight: 700;
      font-size: 3.4rem;
      letter-spacing: -0.03em;
      line-height: 1.2;
      color: var(--dark);
    }
    .hero h1 span {
      color: var(--primary);
    }
    .hero p {
      color: var(--gray);
      font-size: 1.2rem;
      max-width: 480px;
    }

    /* feature cards */
    .feature-card {
      background: var(--white);
      border-radius: 24px;
      padding: 2rem 1.5rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.03);
      transition: 0.25s ease;
      border: 1px solid rgba(11, 94, 124, 0.06);
      height: 100%;
    }
    .feature-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 40px rgba(11, 94, 124, 0.08);
      border-color: var(--primary-light);
    }
    .feature-card .icon {
      font-size: 2.6rem;
      color: var(--primary);
      margin-bottom: 1.2rem;
    }
    .feature-card h5 {
      font-weight: 600;
      color: var(--dark);
    }
    .feature-card p {
      color: var(--gray);
      font-size: 0.95rem;
    }

    /* appointment card */
    .appointment-box {
      background: var(--white);
      border-radius: 32px;
      padding: 2.8rem 2.5rem;
      box-shadow: 0 20px 50px rgba(11, 94, 124, 0.08);
      border: 1px solid rgba(0,0,0,0.02);
    }
    .appointment-box .form-control {
      border-radius: 30px;
      padding: 0.8rem 1.2rem;
      border: 1px solid #dce4ec;
      background: #fafcff;
    }
    .appointment-box .form-control:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 4px rgba(11, 94, 124, 0.12);
    }

    /* department carousel (owl) */
    .dept-item {
      background: white;
      border-radius: 30px;
      padding: 1.8rem 1.2rem;
      text-align: center;
      margin: 0.5rem;
      box-shadow: 0 6px 20px rgba(0,0,0,0.02);
      border: 1px solid #edf2f7;
      transition: 0.2s;
    }
    .dept-item:hover {
      border-color: var(--primary);
    }
    .dept-item .lnr {
      font-size: 2.8rem;
      color: var(--primary);
    }
    .dept-item h6 {
      margin-top: 0.8rem;
      font-weight: 600;
    }

    /* testimonial */
    .testimonial-card {
      background: white;
      border-radius: 30px;
      padding: 2rem 2rem 1.8rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.02);
      border: 1px solid #eef3f8;
    }
    .testimonial-card i.fa-quote-left {
      color: var(--secondary);
      font-size: 1.8rem;
      opacity: 0.5;
    }

    /* footer */
    .footer-hospa {
      background: var(--dark);
      color: #cdd9e6;
      padding: 3rem 0 2rem;
      border-top: 6px solid var(--primary);
    }
    .footer-hospa h6 {
      color: white;
      font-weight: 600;
    }
    .footer-hospa a {
      color: #b0c4d9;
      text-decoration: none;
    }
    .footer-hospa a:hover {
      color: white;
      text-decoration: underline;
    }

    /* responsive */
    @media (max-width: 768px) {
      .hero h1 { font-size: 2.4rem; }
      .appointment-box { padding: 1.8rem; }
    }
  </style>
</head>
<body>

  <!-- ========== NAVBAR ========== -->
  <nav class="navbar navbar-expand-lg navbar-hospa fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fa fa-heartbeat" style="color: var(--accent); margin-right: 8px;"></i>Hospa
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color: var(--dark);"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto align-items-lg-center">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#departments">Departments</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="#appointment">Appointment</a></li>
          <li class="nav-item"><a class="btn btn-primary-custom ml-lg-3" href="#appointment">Book now</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ========== HERO ========== -->
  <section class="hero" style="margin-top: 70px;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 wow fadeInUp" data-wow-delay="0.1s">
          <h1 class="display-4">Your health, <br><span>our priority</span></h1>
          <p class="my-4">Hospa delivers compassionate, world‑class care with cutting‑edge technology. Your well‑being is our mission.</p>
          <div>
            <a href="#appointment" class="btn btn-primary-custom mr-3">Make appointment</a>
            <a href="#departments" class="btn btn-outline-primary-custom">Explore services</a>
          </div>
          <div class="mt-5 d-flex align-items-center">
            <span class="mr-3"><i class="fa fa-phone" style="color: var(--primary);"></i> +1 (800) 555‑HOSP</span>
            <span><i class="fa fa-envelope-o" style="color: var(--primary);"></i> care@hospa.com</span>
          </div>
        </div>
        <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay="0.2s">
          <img src="https://placehold.co/600x400/0b5e7c/white?text=Hospa+Caring" alt="Hospa hospital" class="img-fluid rounded-lg shadow" style="border-radius: 40px;">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FEATURES ========== -->
  <section class="py-5">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2 class="section-title">Why choose <span style="color: var(--primary);">Hospa</span></h2>
          <p class="section-sub">Exceptional care, advanced technology, and a human touch.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="feature-card text-center">
            <div class="icon"><i class="lnr lnr-clock"></i></div>
            <h5>24/7 Emergency</h5>
            <p>Round‑the‑clock critical care with rapid response teams and advanced life support.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="feature-card text-center">
            <div class="icon"><i class="lnr lnr-users"></i></div>
            <h5>Expert Specialists</h5>
            <p>Over 200 board‑certified physicians across 40+ specialties, all under one roof.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="feature-card text-center">
            <div class="icon"><i class="lnr lnr-laptop-phone"></i></div>
            <h5>Telemedicine</h5>
            <p>Virtual consultations with our specialists from the comfort of your home.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== DEPARTMENTS (owl carousel) ========== -->
  <section id="departments" class="py-5 bg-soft-primary">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col">
          <h2 class="section-title">Our departments</h2>
          <p class="section-sub">Comprehensive care across all major specialties</p>
        </div>
      </div>
      <div class="owl-carousel owl-theme wow fadeInUp" id="departmentsCarousel">
        <div class="dept-item"><i class="lnr lnr-heart-pulse"></i><h6>Cardiology</h6><small class="text-muted">Heart & vascular</small></div>
        <div class="dept-item"><i class="lnr lnr-brain"></i><h6>Neurology</h6><small class="text-muted">Brain & nerves</small></div>
        <div class="dept-item"><i class="lnr lnr-baby"></i><h6>Pediatrics</h6><small class="text-muted">Child care</small></div>
        <div class="dept-item"><i class="lnr lnr-bone"></i><h6>Orthopedics</h6><small class="text-muted">Bones & joints</small></div>
        <div class="dept-item"><i class="lnr lnr-graduation-hat"></i><h6>Oncology</h6><small class="text-muted">Cancer care</small></div>
        <div class="dept-item"><i class="lnr lnr-eye"></i><h6>Ophthalmology</h6><small class="text-muted">Vision</small></div>
      </div>
    </div>
  </section>

  <!-- ========== APPOINTMENT ========== -->
  <section id="appointment" class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
          <h2 class="section-title">Book your <span style="color: var(--primary);">appointment</span></h2>
          <p class="section-sub mb-4">Fill in the details and our team will confirm within 30 minutes.</p>
          <div class="appointment-box">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Full name">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone number">
              </div>
              <div class="form-group">
                <select class="form-control">
                  <option>Select department</option>
                  <option>Cardiology</option>
                  <option>Neurology</option>
                  <option>Pediatrics</option>
                  <option>Orthopedics</option>
                  <option>Oncology</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control datetimepicker" placeholder="Preferred date & time">
              </div>
              <button type="submit" class="btn btn-primary-custom btn-block">Request appointment</button>
              <p class="small text-muted mt-3"><i class="fa fa-lock"></i> Your data is secure and confidential.</p>
            </form>
          </div>
        </div>
        <div class="col-lg-6 text-center d-none d-lg-block wow fadeInRight" data-wow-delay="0.2s">
          <img src="https://placehold.co/500x500/1b7a9c/white?text=Hospa+Care" alt="appointment illustration" class="img-fluid rounded-circle" style="max-width: 85%;">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TESTIMONIALS ========== -->
  <section id="testimonials" class="py-5 bg-soft-primary">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col">
          <h2 class="section-title">What our patients say</h2>
          <p class="section-sub">Real stories from real people</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="testimonial-card">
            <i class="fa fa-quote-left"></i>
            <p class="mt-2">“The care I received at Hospa was outstanding. The staff treated me like family, and the facilities are top‑notch.”</p>
            <div class="d-flex align-items-center mt-3">
              <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
              <span class="ml-2 font-weight-bold">— Sarah M.</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="testimonial-card">
            <i class="fa fa-quote-left"></i>
            <p class="mt-2">“After my surgery, Hospa's rehabilitation team helped me recover faster than I expected. Truly grateful.”</p>
            <div class="d-flex align-items-center mt-3">
              <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
              <span class="ml-2 font-weight-bold">— James R.</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="testimonial-card">
            <i class="fa fa-quote-left"></i>
            <p class="mt-2">“Telemedicine made it so easy to consult with my doctor. Hospa is leading the way in patient‑centered innovation.”</p>
            <div class="d-flex align-items-center mt-3">
              <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
              <span class="ml-2 font-weight-bold">— Elena K.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FOOTER ========== -->
  <footer class="footer-hospa">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h6><i class="fa fa-heartbeat" style="color: var(--accent);"></i> Hospa</h6>
          <p class="mt-2" style="font-size: 0.95rem;">Delivering compassionate, innovative healthcare for every stage of life.</p>
          <p><i class="fa fa-map-marker"></i> 1200 Medical Dr, Health City</p>
          <p><i class="fa fa-phone"></i> +1 (800) 555‑HOSP</p>
        </div>
        <div class="col-md-2 mb-4">
          <h6>Quick links</h6>
          <ul class="list-unstyled">
            <li><a href="#">About us</a></li>
            <li><a href="#departments">Departments</a></li>
            <li><a href="#appointment">Appointment</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-4">
          <h6>For patients</h6>
          <ul class="list-unstyled">
            <li><a href="#">Patient portal</a></li>
            <li><a href="#">Insurance</a></li>
            <li><a href="#">Medical records</a></li>
            <li><a href="#">Visitor info</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-4">
          <h6>Follow us</h6>
          <div class="d-flex" style="gap: 16px; font-size: 1.6rem;">
            <a href="#" style="color: #b0c4d9;"><i class="fa fa-facebook-square"></i></a>
            <a href="#" style="color: #b0c4d9;"><i class="fa fa-twitter-square"></i></a>
            <a href="#" style="color: #b0c4d9;"><i class="fa fa-instagram"></i></a>
            <a href="#" style="color: #b0c4d9;"><i class="fa fa-linkedin-square"></i></a>
          </div>
          <p class="mt-3 small">© 2026 Hospa. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- ========== SCRIPTS (jQuery, Bootstrap, Owl, datetimepicker, wow) ========== -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/bootstrap-4.1.3.min.js"></script>
  <script src="assets/js/owl-carousel.min.js"></script>
  <script src="assets/js/jquery.datetimepicker.min.js"></script>
  <script src="assets/js/wow-1.3.0.min.js"></script>
  <script>
    $(function() {
      // init WOW
      new WOW().init();

      // Owl Carousel for departments
      $('#departmentsCarousel').owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 2800,
        smartSpeed: 500,
        responsive: {
          0: { items: 1 },
          576: { items: 2 },
          768: { items: 3 },
          992: { items: 4 }
        }
      });

      // datetimepicker (jquery.datetimepicker)
      $('.datetimepicker').datetimepicker({
        format: 'Y-m-d H:i',
        step: 30,
        minDate: 0,
        defaultDate: new Date(),
        allowTimes: ['08:00','08:30','09:00','09:30','10:00','10:30','11:00','11:30','12:00','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30']
      });

      // smooth scroll for nav links (optional)
      $('a[href^="#"]').on('click', function(e) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
          e.preventDefault();
          $('html, body').stop().animate({
            scrollTop: target.offset().top - 80
          }, 600);
        }
      });
    });
  </script>
  <!-- fallback if assets not loaded: we already have inline styles, but libraries are linked -->
</body>
</html>