
<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">RideIn</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">A car-rental service based in the UAE</h2>
        <div data-aos="fade-up" data-aos-delay="800">
          <a href="https://www.ridein.com" target="_blank" class="btn-get-started scrollto">Visit RideIn</a>
        </div>
      </div>
      <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
        <img src="<?php echo e(asset('img/project-bg.jpg')); ?>" class="img-fluid animated" alt="">
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
            RideIn is a car-rental cum booking service designed to operate only in the United Arab Emirates. A stop solution for all your transportation needs. 
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Secure and robust API based backend</li>
            <li><i class="ri-check-double-line"></i> Google API integration</li>
            <li><i class="ri-check-double-line"></i> 2-step verrification for added security</li>
            <li><i class="ri-check-double-line"></i> 2-step verrification for added security</li>
            <li><i class="ri-check-double-line"></i> 2-step verrification for added security</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <p>
            A clean and responsive UI developed using AngularJS
            Users can now easily schedule a pickup or drop from the airport or book an intercity ride between the 7 Emirates. A
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
        <p>RideIn</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="300">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="bx bx-code-alt" style="color: #b20969;"></i>
            <h3><a href="">PHP</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-braces-line" style="color: #5578ff;"></i>
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
            <i class="ri-database-2-line" style="color: #ffa76e;"></i>
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
        <p>The gallery will contain all the images from the project</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('img/portfolio/portfolio-1.jpg')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('img/portfolio/portfolio-1.jpg')); ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('img/portfolio/portfolio-2.jpg')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('img/portfolio/portfolio-2.jpg')); ?>" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('img/portfolio/portfolio-3.jpg')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('img/portfolio/portfolio-3.jpg')); ?>" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('img/portfolio/portfolio-4.jpg')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('img/portfolio/portfolio-4.jpg')); ?>" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('img/portfolio/portfolio-5.jpg')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('img/portfolio/portfolio-5.jpg')); ?>" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('img/portfolio/portfolio-6.jpg')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('img/portfolio/portfolio-6.jpg')); ?>" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('img/portfolio/portfolio-7.jpg')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('img/portfolio/portfolio-7.jpg')); ?>" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('img/portfolio/portfolio-8.jpg')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('img/portfolio/portfolio-8.jpg')); ?>" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="<?php echo e(asset('img/portfolio/portfolio-9.jpg')); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="<?php echo e(asset('img/portfolio/portfolio-9.jpg')); ?>" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\old_services\resources\views/projects.blade.php ENDPATH**/ ?>