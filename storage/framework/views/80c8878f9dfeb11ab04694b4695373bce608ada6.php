
<?php $__env->startSection('title', 'Publications'); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

	<div class="container">
		<div class="row">
			<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
				<h1 data-aos="fade-up">Published Papers</h1>
				<h2 data-aos="fade-up" data-aos-delay="400">Published papers related to the field of data mining and biodiversity data</h2>
				<div data-aos="fade-up" data-aos-delay="800">
					<a href="#about" class="btn-get-started scrollto">Get Started</a>
				</div>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
				<img src="<?php echo e(asset('img/publications-hero.webp')); ?>" class="img-fluid animated" alt="">
			</div>
		</div>
	</div>

</section><!-- End Hero -->

<main id="main">

	<section id="about" class="about section-bg">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Journals</h2>
			</div>

			<div class="row content">
				<div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="150">
					<ul>
						<?php $__currentLoopData = $journals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><i class="ri-check-double-line"></i>
						<span class="badge <?php echo e($journal->journal=='Under Review'?'badge-warning':'badge-success'); ?>" style="font-size: 85%; font-weight: 100;"><?php echo e($journal->journal); ?></span>
						<span class="badge badge-secondary" style="font-size: 85%; font-weight: 100;"><?php echo e($journal->year_of_publication); ?></span>
						<?php echo e($journal->publication_title); ?>

						<span class="badge badge-dark" style="font-size: 85%; font-weight: 100;"><?php echo e($journal->authors); ?></span>
						<br/>
						<a class="btn btn-sm btn-link" target="_blank" href="<?php echo e($journal->publication_url); ?>" style="font-size: 0.8em">View Publication</a>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
		</div>
	</section><!-- End About Us Section -->

	<section id="about" class="about section-bg">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Conferences</h2>
			</div>

			<div class="row content">
				<div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="150">
					<ul>
						<?php $__currentLoopData = $conferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><i class="ri-check-double-line"></i>
						<span class="badge <?php echo e($conference->journal=='Under Review'?'badge-warning':'badge-success'); ?>" style="font-size: 85%; font-weight: 100;"><?php echo e($conference->journal); ?></span>
						<span class="badge badge-secondary" style="font-size: 85%; font-weight: 100;"><?php echo e($conference->year_of_publication); ?></span>
						<?php echo e($conference->publication_title); ?>

						<br>
						<span class="badge badge-dark" style="font-size: 85%; font-weight: 100;"><?php echo e($conference->authors); ?></span>
						<br>
						<a class="btn btn-sm btn-link" target="_blank" href="<?php echo e($conference->publication_url); ?>" style="font-size: 0.8em">View Publication</a>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
		</div>
	</section><!-- End About Us Section -->
</main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/publications.blade.php ENDPATH**/ ?>