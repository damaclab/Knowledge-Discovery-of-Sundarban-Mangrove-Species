
<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

	<div class="container">
		<div class="row">
			<div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
				<h1 data-aos="fade-up">Femiza Ecommerce</h1>
				<h2 data-aos="fade-up" data-aos-delay="400">An e-commerce product to get your business online</h2>
				<div data-aos="fade-up" data-aos-delay="800">
					<a href="https://www.femiza.ml" target="_blank" class="btn-get-started scrollto">Visit Femiza</a>
				</div>
			</div>
			<div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
				<img src="<?php echo e(asset('img/projects/femiza/banner.jpg')); ?>" class="img-fluid animated" alt="">
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
						Femiza is a e-commerce product powered by Magento that helps to get your business online. A responsive and clean UI helps users to navigate through the website easily and search their required product.
					</p>
					<ul>
						<li><i class="ri-check-double-line"></i>Multi role Administrators</li>
						<li><i class="ri-check-double-line"></i>Payment gateway integration</li>
						<li><i class="ri-check-double-line"></i>Inventory management</li>
						<li><i class="ri-check-double-line"></i>User dashboard to track and modify bookings</li>
					</ul>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
					<p>
						Femiza comes along with a powerful admin panel which enables us to create multi-role Administrators. We can configure system settings and change layout at ease. 
						<br><br>
						Products can be easily managed using the admin panel. We can create new category or categorize existing products. 
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
						<i class="bx bxl-magento" style="color: #5578ff;"></i>
						<h3><a href="">Magento</a></h3>
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
						<i class="bx bx-cloud" style="color: #0489ca;"></i>
						<h3><a href="">IBM Cloud</a></h3>
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
						<img src="<?php echo e(asset('screens/femiza/femiza-home-banner.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Home Banner</h4>
							<p>Frontsite</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/femiza/femiza-home-banner.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Home Banner"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-admin">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/femiza/femiza-admin-dashboard.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Admin Dashboard</h4>
							<p>Admin Panel</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/femiza/femiza-admin-dashboard.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Admin Dashboard"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-user">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/femiza/femiza-home-login.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>User Login</h4>
							<p>User Dashboard</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/femiza/femiza-home-login.png')); ?>" data-gall="portfolioGallery" class="venobox" title="User Login"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-admin">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/femiza/femiza-admin-orders.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Admin Orders</h4>
							<p>Admin Panel</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/femiza/femiza-admin-orders.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Admin Orders"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-user">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/femiza/femiza-user-cart.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>User Cart</h4>
							<p>User Dashboard</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/femiza/femiza-user-cart.png')); ?>" data-gall="portfolioGallery" class="venobox" title="User Cart"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-frontsite">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/femiza/femiza-product-list.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Product List</h4>
							<p>Frontsite</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/femiza/femiza-product-list.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Product List"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-admin">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/femiza/femiza-admin-product-detail.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Admin Product Detail</h4>
							<p>Admin Panel</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/femiza/femiza-admin-product-detail.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Admin Product Detail"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-frontsite">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/femiza/femiza-product-detail.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Product Detail</h4>
							<p>Frontsite</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/femiza/femiza-product-detail.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Product Detail"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-admin">
					<div class="portfolio-wrap">
						<img src="<?php echo e(asset('screens/femiza/femiza-admin-products.png')); ?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Admin Products</h4>
							<p>Admin Panel</p>
							<div class="portfolio-links">
								<a href="<?php echo e(asset('screens/femiza/femiza-admin-products.png')); ?>" data-gall="portfolioGallery" class="venobox" title="Admin Products"><i class="bx bx-expand"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Portfolio Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sellzmartservices\resources\views/project-femiza.blade.php ENDPATH**/ ?>