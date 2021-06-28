<?php
/**
  Template Name: Home Page
 */

get_header(); ?>

<!-- About section -->

<section id="about" class="about-section">
  <div class="container-fluid">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/marcel_circle_close.png" alt="Close up of Marcel Fort" class="about-img">
    <h2>ABOUT ME</h2>
    <h5>Let me introduce myself</h5>
    <hr>
    <p class="bio-text">Are you struggling to enjoy life, yet are not sure what it is that is missing? Or maybe you know what is missing but just can not seem to get there? Creating a safe place where you can get honest with yourself is my first
      goal. Self-awareness is the first step in resolving ANY problem. Discovering your authentic self is next, and provides you the direction on where you want to go. Life can be hard sometimes, but with the right support and commitment, things DO
      get better! My goal as a therapist is to help you become your own therapist. I am in network with Aetna, Cigna, United Health Care/Optum.<br />

      </br />
      I work with all adults, and late teens on issues such as trauma, depression, anxiety, and lack of direction/meaning in life. I specialize in trauma, anxiety, depression, addiction issues, individuals impacted by the addiction of others,
      co-dependency and post treatment/early recovery problems.<br /><br />
      I work to incorporate various mindfullness techniques, skills you can use forever, to manage anxiety and depression. My goal is to not be your therapist forever, but to move you in the direction where you are able to have healthy coping
      skills to deal with life on life's terms.</p>
  </div>

  <!-- Learn More Section -->
  <div id="qualifications" class="container-fluid hidden-bio">
    <h3>Qualifications</h3>
    <p><b>Years in Practice: </b>15 years</p>
    <p><b>License: </b>Florida / SW10710</p>
    <p><b>School: </b>Florida Atlantic University</p>
    <p><b>Year Graduated: </b>2006</p>
  </div>
  <button type="button" id="learn-more" class="btn btn-primary">Learn More</button>
</section>

<!-- Services Section -->

<section id="services" class="services-section">
  <div class="container-fluid">
    <h2>Services</h2>
    <h5>Here’s How I Can Help</h5>
    <hr>

    <div class="row">

      <!-- service 1 -->
      <div class="service-box col-md-4">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/office_1_600by400.png" alt="" class="service-img img-fluid">
        <h3 class="service-title">Service 1</h3>
        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>

      <!-- service 2 -->
      <div class="service-box col-md-4">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beach_600by400.png" alt="" class="service-img img-fluid">
        <h3 class="service-title">Service 2</h3>
        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>


      <!-- service 3 -->
      <div class="service-box col-md-4">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/office_2_600by400.png" alt="" class="service-img img-fluid">
        <h3 class="service-title">Service 3</h3>
        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>

    <button type="button" onClick="location.href='#contact'" class="btn btn-primary services-btn">Chat With Me</button>

  </div>
</section>

<!-- Testimonials Section  -->

<section id="testimonials" class="testimonial-section">
  <div class="container-fluid">

    <h2>People Say Nice Things</h2>
    <h5>Testimonials</h5>
    <hr>
    <!-- Carousel -->
    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#testimonialCarousel" data-slide-to="1"></li>
        <li data-target="#testimonialCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="testimonial-container">
            <h4>"Marcel helped me through a really difficult time in my life and I am forever grateful for his support, wisdom, and ability to listen."</h4>
            <p class="testimonial-author">- John Smith</p>
          </div>
        </div>

        <div class="carousel-item ">
          <div class="testimonial-container">
            <h4>“Marcel is a very kind and caring counselor with many years of experience.”</h4>
            <p class="testimonial-author">- David Lane </p>
          </div>
        </div><!-- </div> EO carousel inner -->

        <div class="carousel-item ">
          <div class="testimonial-container">
            <h4>“Marcel has been nothing less than AMAZING! He goes out of his way to ensure that you feel safe and heard.</h4>
            <p class="testimonial-author">- Alice Goodman</p>
          </div>
        </div><!-- </div> EO carousel inner -->

        <a href="#testimonialCarousel" class="carousel-control-prev" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#testimonialCarousel" class="carousel-control-next" role="button" data-slide="next">
          <span class="sr-only">Next</span>
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
      <!-- EO Global parent testimonialCarousel -->

    </div>
</section>

<!-- Contact Section -->

<section id="contact" class="contact-section">
  <div class="container-fluid">
    <h2>Get In Touch</h2>
    <h5>Let's chat today</h5>
    <hr>
    <div class="row">

      <!-- Contact Form -->
      <div class="contact-box col-md-6">
        <?php echo do_shortcode( '[contact-form-7 id="18" title="Primary Contact Form"]' ); ?>
      </div>

      <!-- Contact Details -->
      <div class="contact-box col-md-6">
        <h3 class="contact-titles">Address</h3>
        <p class="contact-text">800 Palm Trail Suite 200, Delray Beach, FL 33483</p>
        <h3 class="contact-titles">Phone</h3>
        <p class="contact-text">561-123-4567</p>
        <h3 class="contact-titles">Hours</h3>
        <ul class="hours">
          <li class="hours-item">Monday: 9 am - 7 pm</li>
          <li class="hours-item">Tuesday: 9 am - 7 pm</li>
          <li class="hours-item">Wendesday: 9 am - 7 pm</li>
          <li class="hours-item">Thursday: 9 am - 7 pm</li>
          <li class="hours-item">Friday: 9 am - 7 pm</li>
          <li class="hours-item">Saturday: 9 am - 7 pm</li>
          <li class="hours-item">Sunday: Closed</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
