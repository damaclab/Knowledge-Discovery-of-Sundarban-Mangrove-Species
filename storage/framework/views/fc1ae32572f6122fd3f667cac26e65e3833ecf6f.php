
<?php $__env->startSection('title', 'Pricing'); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

	<div class="container">
		<div class="row">
			<div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
				<h1 data-aos="fade-up">Pricing</h1>
				<h2 data-aos="fade-up" data-aos-delay="400">Get a quotation for your requirement</h2>
				<div data-aos="fade-up" data-aos-delay="800">
					<a href="#pricing" class="btn-get-started scrollto">Get Quotation</a>
				</div>
			</div>
			<div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
				<img src="<?php echo e(asset('img/pricing.jpg')); ?>" class="img-fluid animated" alt="">
			</div>
		</div>
	</div>

</section><!-- End Hero -->

<main id="main">

	<!-- ======= Contact Section ======= -->
	<section id="pricing" class="contact section-bg">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Request Quotation</h2>
				<p>Let us know what you are looking for and we will get back to you shortly!</p>
			</div>

			<div class="row">

				<div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
					<div class="row">
						<div class="col-lg-12 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
							<div class="contact-about">
								<h3><a href="<?php echo e(url('home')); ?>"><img src="<?php echo e(asset('img/logo2.png')); ?>" alt="" class="img-fluid"></a></h3>
								<p>Got an idea? Have a specific requirement? Let us serve you. Our experienced professionals will help you to shape your idea.</p>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-12 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
							<div class="info" style="display: flex; flex-direction: row; justify-content: space-around;">
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
					</div>
					<br>
					<div class="row">
						<div class="col-lg-12 col-md-6 mt-4 mt-md-0 text-center" data-aos="fade-up" data-aos-delay="200">
							<a href="#services" class="btn btn-primary btn-get-started scrollto animated">Pricing Features</a>
						</div>
					</div>
				</div>


				<div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
					<form action="<?php echo e(url('pricing')); ?>" method="post" role="form" class="php-email-form">
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
							<input type="text" class="form-control" name="phone" id="phone_no" placeholder="Your Phone No." data-rule="minlen:10" data-msg="Please enter a valid phone no." onkeypress="return isNumber(event)"/>
							<div class="validate"></div>
						</div>
						<div class="form-group">
							<select placeholder="Subject" class="form-control" name="subject" id="subject" data-msg="Please choose a subject">
								<option value="">--Select Subject--</option>
								<option value="ecommerce">E-commerce</option>
								<option value="web-development">Custom Web Development</option>
								<option value="app-development">App Development</option>
								<option value="admin-panel-development">Admin Panel Development</option>
								<option value="logo-design">Logo Design</option>
								<option value="other">Other</option>
							</select>
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
						<div class="text-center"><button type="submit">Get Quote</button></div>
					</form>
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Features</h2>
				<p>Our attractive pricing features are listed below</p>
			</div>

			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
						<div class="icon"><i class="ri-currency-line"></i></div>
						<h4 class="title"><a href="">Best Price</a></h4>
						<p class="description">Confused with the price? We guarantee to provide the best rate in the market.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
						<div class="icon"><i class="bx bx-file"></i></div>
						<h4 class="title"><a href="">Flexible Payments</a></h4>
						<p class="description">We support flexible payment methods such as EMI and UPI.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
						<div class="icon"><i class="bx bx-show-alt"></i></div>
						<h4 class="title"><a href="">Transparent Chagres</a></h4>
						<p class="description">He have no hidden charges. All charges will be informed up-front.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="400">
						<div class="icon"><i class="ri-hand-coin-line"></i></div>
						<h4 class="title"><a href="">Easy Refunds</a></h4>
						<p class="description">Not satisfied with the product? We provide a 15-day money back guarantee.</p>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Services Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
	function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\old_services\resources\views/pricing.blade.php ENDPATH**/ ?>