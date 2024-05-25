
<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Get in Touch</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Send us an e-mail, or call us</h2>
        <div data-aos="fade-up" data-aos-delay="800">
          <a href="#contact" class="btn-get-started scrollto">Reach Us</a>
        </div>
      </div>
      <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
        <img src="<?php echo e(asset('img/world-map.png')); ?>" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Know us</h2>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="contact-about info">
            <!-- <h4>Registered office</h4>
            <p></p> -->
            <div>
              <i class="ri-map-pin-line"></i>
              <p>13/H/46, Braunfield Row, Kolkata-700027, West Bengal, India</p>
            </div>

            <div>
              <i class="ri-mail-send-line"></i>
              <p><a href="mailto:care@selzmart.com">care@sellzmart.com</a></p>
            </div>

            <div>
              <i class="ri-phone-line"></i>
              <p>+91 99038 68412</p>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <h3><a href="<?php echo e(url('home')); ?>"><img src="<?php echo e(asset('img/logo2.png')); ?>" alt="" class="img-fluid"></a></h3>
            <p>Have any query? Let us know what you are looking for and we will get back to you shortly</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <form action="<?php echo e(url('contact-us')); ?>" method="post" role="form" class="php-email-form">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
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

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\old_services\resources\views/contact.blade.php ENDPATH**/ ?>