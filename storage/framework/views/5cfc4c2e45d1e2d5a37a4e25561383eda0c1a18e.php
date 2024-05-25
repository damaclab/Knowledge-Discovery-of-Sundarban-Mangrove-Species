
<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">NoBg</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">An Artifical Intelligence empowered background removal tool</h2>
        <div data-aos="fade-up" data-aos-delay="800">
          <a href="https://www.nobg.in" target="_blank" class="btn-get-started scrollto">Visit NoBg</a>
        </div>
      </div>
      <div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
        <img src="<?php echo e(asset('img/projects/nobg/banner.png')); ?>" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Description</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
          <p>
            A background removal service designed to identify the subject and remove the image background.  
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i>Facebook OAuth integration</li>
            <li><i class="ri-check-double-line"></i>Web and API access</li>
            <li><i class="ri-check-double-line"></i>Microservice architecture</li>
            <li><i class="ri-check-double-line"></i>Flexible payments with Razorpay</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <p>
            Powered by Artificial Intelligence and Deep Learning, and trained on more than 6M images,  our product offers an accuracy of more than 90% with an affordable and transparent pricing. 
            <br><br>
            We allow manual upload, API's and bulk uploads making it easier for individuals, developers and enterprises to use. To ensure safety and reduced server load, we have Captcha and throttling mechanisms in place.
          </p>
          <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Technologies</h2>
        <p></p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="300">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="devicon-php-plain" style="color: #b20969;"></i>
            <h3><a href="">PHP</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="devicon-laravel-plain" style="color: #5578ff;"></i>
            <h3><a href="">Laravel</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="bx bxl-bootstrap" style="color: #ad43c4;"></i>
            <h3><a href="">Bootstrap4</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-html5-line" style="color: #47aeff;"></i>
            <h3><a href="">HTML5</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="devicon-mysql-plain" style="color: #ffa76e;"></i>
            <h3><a href="">MySQL</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="bx bxl-javascript" style="color: #11dbcf;"></i>
            <h3><a href="">JavaScript</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="bx bxl-amazon" style="color: #ffbb2c;"></i>
            <h3><a href="">Amazon AWS</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="bx bxl-css3" style="color: #29cc61;"></i>
            <h3><a href="">CSS3</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>The gallery contains various images and screens from the project</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-frontsite">Frontsite</li>
            <li data-filter=".filter-user">User Dashboard</li>
            <li data-filter=".filter-admin">Admin Panel</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

        <div class="col-lg-4 col-md-6 portfolio-item filter-frontsite">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-home-banner.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Home Banner</h4>
              <p>Frontsite</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-home-banner.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Home Banner"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-admin">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-admin-login.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Admin Login</h4>
              <p>Admin Panel</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-admin-login.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Admin Login"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-user">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-login.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>User Login</h4>
              <p>User Dashboard</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-login.png')); ?>" data-gall="portfolioGallery" class="venobox" title="User Login"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-admin">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-admin-users.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Registered Users</h4>
              <p>Admin Panel</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-admin-users.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Registered Users"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-user">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-user-access-log.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Access Log</h4>
              <p>User Dashboard</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-user-access-log.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Access Log"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-frontsite">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-pricing.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pricing</h4>
              <p>Frontsite</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-pricing.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Pricing"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-admin">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-admin-modify.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Modify Details</h4>
              <p>Admin Panel</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-admin-modify.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Modify Details"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-frontsite">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-upload.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Upload</h4>
              <p>Frontsite</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-upload.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Upload"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-user">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-user-dashboard.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dashboard</h4>
              <p>User Dashboard</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-user-dashboard.png')); ?>" data-gall="portfolioGallery" class="venobox" title="User Dashboard"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-admin">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-admin-transactions.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Admin Transactions</h4>
              <p>Admin Panel</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-admin-transactions.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Admin Transactions"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-user">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-user-api.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>API Access</h4>
              <p>User Dashboard</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-user-api.png')); ?>" data-gall="portfolioGallery" class="venobox" title="API Access"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-admin">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('screens/nobg/nobg-admin-pricing.png')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Admin Pricing</h4>
              <p>Admin Panel</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('screens/nobg/nobg-admin-pricing.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Admin Pricing"><i class="bx bx-expand"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sellzmartservices\resources\views/project-nobg.blade.php ENDPATH**/ ?>