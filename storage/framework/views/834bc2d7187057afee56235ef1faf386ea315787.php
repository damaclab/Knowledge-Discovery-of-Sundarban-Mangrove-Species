<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $__env->yieldContent('title'); ?> | Sellzmart Services</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('img/fav-icon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/venobox/venobox.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/aos/aos.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
  <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?php echo e(url('home')); ?>"><img src="<?php echo e(asset('img/logo.png')); ?>" alt="" class="img-fluid"><span> Sellzmart</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?php echo e(asset('img/logo.png')); ?>" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo e(url('home')); ?>">Home</a></li>
          <li class="drop-down"><a href="">Projects</a>
            <ul>
              <li><a href="<?php echo e(url('projects')); ?>">Femiza Ecommerce</a></li>
              <li><a href="<?php echo e(url('projects')); ?>">RideIn</a></li>
              <li><a href="<?php echo e(url('projects')); ?>">Sellzmart</a></li>
              <li><a href="<?php echo e(url('project/nobg')); ?>">NoBg <span class="badge badge-primary px-1 py-1">Upcoming</span></a></li>
            </ul>
          </li>
          <li><a href="<?php echo e(url('contact-us')); ?>">Contact</a></li>
          <li class="get-started"><a href="<?php echo e(url('pricing')); ?>">Pricing</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <?php echo $__env->yieldContent('content'); ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-4 footer-contact">
            <h3>Sellzmart</h3>
            <p>
              <strong>Registered Office:</strong><br>
              13/H/46, Braunfield Row, Kolkata-700027, India <br>
              <br>
              <strong>Phone:</strong> +91 9903868412<br>
              <strong>Whatsapp:</strong> +91 9903868412<br>
              <strong>Email:</strong> care@sellzmart.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-4 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(url('home')); ?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(url('')); ?>">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(url('contact-us')); ?>">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(url('terms-and-conditions')); ?>">Terms and Conditions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-4 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Stay updated with all our new products and product features</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
            <div class="copyright-wrap d-md-flex py-4">
              <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright-wrap d-md-flex py-2 align-items-center justify-content-center">
        <div class="text-center">
          <span class="copyright">
            &copy; Copyright <strong><span>Sellzmart.ai</span></strong>. All Rights Reserved |
          </span>
          <span class="credits">
           Template by <a href="https://bootstrapmade.com/">BootstrapMade</a>
         </span>
       </div>
     </div>
   </div>
 </footer>
 <!-- End Footer -->

 <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <!-- Vendor JS Files -->
 <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/php-email-form/validate.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/counterup/counterup.min.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/venobox/venobox.min.js')); ?>"></script>
 <script src="<?php echo e(asset('vendor/aos/aos.js')); ?>"></script>

 <!-- Template Main JS File -->
 <script src="<?php echo e(asset('js/main.js')); ?>"></script>
 <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\services\resources\views/layouts/header.blade.php ENDPATH**/ ?>