
<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

	<div class="container">
		<div class="row">
			<div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
				<h1 data-aos="fade-up">RideIn</h1>
				<h2 data-aos="fade-up" data-aos-delay="400">A car-rental service based in the UAE</h2>
				<div data-aos="fade-up" data-aos-delay="800">
					<a href="https://www.ridein.com" target="_blank" class="btn-get-started scrollto">Visit RideIn</a>
				</div>
			</div>
			<div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
				<img src="<?php echo e(asset('img/projects/ridein/banner.jpg')); ?>" class="img-fluid animated" alt="">
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
						RideIn is a car-rental cum booking service designed to operate only in the United Arab Emirates. RideIn offers multiple types of booking to help riders customize their travel experince. 
					</p>
					<ul>
						<li><i class="ri-check-double-line"></i>Secure and robust API based backend</li>
						<li><i class="ri-check-double-line"></i>Google API integration</li>
						<li><i class="ri-check-double-line"></i>Multi-device session management</li>
						<li><i class="ri-check-double-line"></i>2-step verrification for added security</li>
						<li><i class="ri-check-double-line"></i>User dashboard to track and modify bookings</li>
					</ul>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
					<p>
						A clean and responsive UI developed using AngularJS and powered by Google API's provides a seamless user experience. Users can easily schedule a pickup or drop from the airport or book an intercity ride. All bookings can be tracked and managed from the user dashboard.
						<br><br>
						This comes equiped with a powerful Admin Panel that allows the administrator to send custom notification messages, manage bookings, assign driver and cars and even process refunds. Admin can even set the dynamic pricing and car availablity 
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
						<h3><a href="">Bootstrap3</a></h3>
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
						<img src="<?php echo e(asset('screens/ridein/ridein-home-banner.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Home Banner</h4>
							<p>Frontsite</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/ridein/ridein-home-banner.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Home Banner"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-admin">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/ridein/ridein-admin-drivers.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Admin Drivers</h4>
							<p>Admin Panel</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/ridein/ridein-admin-drivers.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Admin Drivers"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-user">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/ridein/ridein-user-login.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>User Login</h4>
							<p>User Dashboard</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/ridein/ridein-user-login.png')); ?>" data-gall="portfolioGallery" class="venobox" title="User Login"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-admin">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/ridein/ridein-admin-invoice.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Admin Invoice</h4>
							<p>Admin Panel</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/ridein/ridein-admin-invoice.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Admin Invoice"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-frontsite">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/ridein/ridein-home-contact.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Contact Us</h4>
							<p>Frontsite</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/ridein/ridein-home-contact.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Contact Us"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-frontsite">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/ridein/ridein-home-booking.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Booking</h4>
							<p>Frontsite</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/ridein/ridein-home-booking.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Booking"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Portfolio Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sellzmartservices\resources\views/project-ridein.blade.php ENDPATH**/ ?>