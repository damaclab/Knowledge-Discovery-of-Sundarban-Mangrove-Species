
<?php $__env->startSection('title', 'Algorithm Details'); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center p-0">
	<!-- <div id="overlay" class="fullscreen">
		<img src="<?php echo e(asset('img/loader2.gif')); ?>">
	</div>
	<div class="container">
		<span id="snackbar">Oops! Some error occurred.. </span>
		<div class="row">
			<div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
				<h1 data-aos="fade-up">Data Mining Algorithms</h1>
				<h2 data-aos="fade-up" data-aos-delay="400">Execute data mining algorithms on uploaded datasets</h2>
				<div data-aos="fade-up" data-aos-delay="800">
					<a href="#contact" class="btn-get-started scrollto">Explore</a>
				</div>
			</div>
			<div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
				<img src="<?php echo e(asset('img/algorithms.webp')); ?>" class="img-fluid animated" alt="">
			</div>
		</div>
	</div> -->

</section><!-- End Hero -->

<main id="main">

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container">
			<!-- <div class="section-title" data-aos="fade-up">
				<h1>DATASET OPERATIONS</h1>
			</div> -->

			<div class="row">
				<script src="https://www.google.com/recaptcha/api.js" async defer></script>
				<div class="col-md-5 col-sm-12" data-aos="fade-up" data-aos-delay="300">
					<div class="section-title" data-aos="fade-up">
						<h2>Selected Options</h2>
					</div>

					<div class="contact-about info">
						<div>
							<i class="ri-pie-chart-fill"></i>
							<p><strong><?php echo e($algorithm->algorithm_type); ?></strong></p>
						</div>
						<div>
							<i class="ri-file-settings-fill"></i>
							<p><strong><?php echo e($algorithm->algorithm_name); ?></strong></p>
						</div>
						<div>
							<i class="ri-database-2-fill"></i>
							<p><strong><?php echo e($dataset->dataset_name); ?></strong></p>
						</div>

						<p><strong>How to run:</strong></p>

						<?php if($algorithm->algorithm_name == "Cell-BiClust"): ?>
						<ul style="font-size: 0.85rem;">
							<li><strong>Minimum Rows:</strong> Please enter the minimum number of rows for cluster. Value should be more than 1.</li>
							<li><strong>Minimum Columns:</strong> Please enter the minimum number of columns for cluster. Value should be more than 1.</li>
							<li><strong>Rule Generation:</strong> Please select if rule should be generated. Value should be either True or False.</li>
							<li><strong>Minimum Threshold 1:</strong> Please enter minimum threshold for predicting from the rule. Value should be between 0 and 1.</li>
							<li><strong>Maximum Threshold 2:</strong> Please enter the minimum threshold for comparing two biclusters for prediction. Value should be between 0 and 1.</li>
							<li><strong style="color: red;">NOTE:</strong> Any wrong or invalid entry will cause the algorithm to generate wrong output or no output at all.</li>
						</ul>
						<?php endif; ?>
						<?php if($algorithm->algorithm_name == "CLA-FPM"): ?>
						<ul style="font-size: 0.85rem;">
							<li><strong>Item Count:</strong> Please enter the number of items in the dataset. Value should be more than 0.</li>
							<li><strong>Transaction Count:</strong> Please enter the number of transactions in the dataset. Value should be more than 0.</li>
							<li><strong>Threshold:</strong> Please enter the minimum threshold for determining the frequent patterns. Value should be between 0 and 1.</li>
							<li><strong style="color: red;">NOTE:</strong> Any wrong or invalid entry will cause the algorithm to generate wrong output or no output at all.</li>
						</ul>
						<?php endif; ?>
						<?php if($algorithm->algorithm_name == "FIST"): ?>
						<ul style="font-size: 0.85rem;">
							<li><strong>Minimum Rows:</strong> Please enter the minimum number of rows for cluster. Value should be more than 1.</li>
							<li><strong>Minimum Columns:</strong> Please enter the minimum number of columns for cluster. Value should be more than 1.</li>
							<li><strong>Rule Generation:</strong> Please select if rule should be generated. Value should be either True or False.</li>
							<li><strong>Minimum Threshold 1:</strong> Please enter minimum threshold for predicting from the rule. Value should be between 0 and 1.</li>
							<li><strong>Maximum Threshold 2:</strong> Please enter the minimum threshold for comparing two biclusters for prediction. Value should be between 0 and 1.</li>
							<li><strong style="color: red;">NOTE:</strong> Any wrong or invalid entry will cause the algorithm to generate wrong output or no output at all.</li>
						</ul>
						<?php endif; ?>
						<?php if($algorithm->algorithm_name == "CAFP"): ?>
						<ul style="font-size: 0.85rem;">
							<li><strong>Minimum Rows:</strong> Please enter the minimum number of rows for cluster. Value should be more than 1.</li>
							<li><strong>Minimum Columns:</strong> Please enter the minimum number of columns for cluster. Value should be more than 1.</li>
							<li><strong>Rule Generation:</strong> Please select if rule should be generated. Value should be either True or False.</li>
							<li><strong>Minimum Threshold 1:</strong> Please enter minimum threshold for predicting from the rule. Value should be between 0 and 1.</li>
							<li><strong>Maximum Threshold 2:</strong> Please enter the minimum threshold for comparing two biclusters for prediction. Value should be between 0 and 1.</li>
							<li><strong style="color: red;">NOTE:</strong> Any wrong or invalid entry will cause the algorithm to generate wrong output or no output at all.</li>
						</ul>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-1">
					
				</div>
				<div class="col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300">
					<div class="section-title" data-aos="fade-up">
						<h2>Algorithm Parameters</h2>
					</div>

					<?php if($algorithm->algorithm_name == "Cell-BiClust"): ?>
					<form action="<?php echo e(url('run-algorithm')); ?>" method="post">
						<?php echo csrf_field(); ?>
						<input type="hidden" name="algorithm_id" value="<?php echo e($algorithm->algorithm_id); ?>"/>
						<input type="hidden" name="dataset_id" value="<?php echo e($dataset->dataset_id); ?>"/>
						<div class="form-group">
							<input type="text" name="min_row" class="form-control" placeholder="Minimum no of rows" value="<?php echo e(old('min_row')); ?>" required="" onkeypress="return isNumber(event)"/>
						</div>
						<?php $__errorArgs = ['min_row'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="form-group">
							<input type="text" name="min_col" class="form-control" placeholder="Minimum no of columns" value="<?php echo e(old('min_col')); ?>" required="" onkeypress="return isNumber(event)"/>
						</div>
						<?php $__errorArgs = ['min_col'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="form-group">
							<select name="rule_generation" class="form-control" required="">
								<option value="">-- Rule Generation --</option>
								<option value="true">True</option>
								<option value="false">False</option>
							</select>
						</div>
						<?php $__errorArgs = ['rule_generation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="form-group">
							<input type="text" name="min_threshold_1" class="form-control" placeholder="Minimum threshold for predicting from the rule" value="<?php echo e(old('min_threshold_1')); ?>" required="" onkeypress="return isNumber(event)"/>
						</div>
						<?php $__errorArgs = ['min_threshold_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="form-group">
							<input type="text" class="form-control" name="min_threshold_2" placeholder="Minimum threshold for comparing two biclusters for prediction" value="<?php echo e(old('min_threshold_2')); ?>" required="" onkeypress="return isNumber(event)"/>
						</div>
						<?php $__errorArgs = ['min_threshold_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="form-group" style="display: flex; justify-content: center;">
							<span class="g-recaptcha" data-sitekey="<?php echo e($captcha_key); ?>"></span>
						</div>
						<?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="text-center"><button class="btn btn-primary btn-md" type="submit">Run Algorithm</button></div>
					</form>
					<?php endif; ?>
					<?php if($algorithm->algorithm_name == "CLA-FPM"): ?>
					<form action="<?php echo e(url('run-algorithm')); ?>" method="post">
						<?php echo csrf_field(); ?>
						<input type="hidden" name="algorithm_id" value="<?php echo e($algorithm->algorithm_id); ?>"/>
						<input type="hidden" name="dataset_id" value="<?php echo e($dataset->dataset_id); ?>"/>
						<div class="form-group">
							<input type="text" name="item_count" class="form-control" placeholder="No. of items in the dataset" value="<?php echo e(old('item_count')); ?>" required="" onkeypress="return isNumber(event)"/>
						</div>
						<?php $__errorArgs = ['item_count'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="form-group">
							<input type="text" name="transaction_count" class="form-control" placeholder="No. of transactions in the dataset" value="<?php echo e(old('transaction_count')); ?>" required="" onkeypress="return isNumber(event)"/>
						</div>
						<?php $__errorArgs = ['transaction_count'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="form-group">
							<input type="text" name="threshold" class="form-control" placeholder="Minimum threshold required for frequent pattern mining" value="<?php echo e(old('threshold')); ?>" required="" onkeypress="return isNumber(event)"/>
						</div>
						<?php $__errorArgs = ['threshold'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="form-group" style="display: flex; justify-content: center;">
							<span class="g-recaptcha" data-sitekey="<?php echo e($captcha_key); ?>"></span>
						</div>
						<?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger"><?php echo e($message); ?></div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<div class="text-center"><button class="btn btn-primary btn-md" type="submit">Run Algorithm</button></div>
					</form>
					<?php endif; ?>
					<?php if($algorithm->algorithm_name == "FIST"): ?>
					Hello
					<?php endif; ?>
					<?php if($algorithm->algorithm_name == "CAFP"): ?>
					Hello
					<?php endif; ?>
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
	function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode == 46) {
			return true;
		}
		else if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}

	function fetchDatasets() {
		var dataset_type = document.getElementsById("dataset_type").value;
		alert(dataset_type);

		if (dataset_type != null) {
			$('#overlay').addClass('show');
			var xmlHttp = new XMLHttpRequest();

			xmlHttp.onreadystatechange = function(){
				if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
					$('#overlay').removeClass('show');
				}
				else if(xmlHttp.readyState == 4 && xmlHttp.status != 200) {
					$('#overlay').removeClass('show');
				}
			};

			xmlHttp.onerror = function() {
				$('#overlay').removeClass('show');
			}

			var token = document.getElementsByName("_token")[0].value;

			xmlHttp.open("POST", "/fetch", true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlHttp.send('_token='+token+'&dataset_type='+dataset_type);
			return false;
		}
	}

</script>
<link rel="stylesheet" href="<?php echo e(asset('js/dropzone-5.7.0/dist/dropzone.css')); ?>">

<script src="<?php echo e(asset('js/dropzone-5.7.0/dist/dropzone.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script type="text/javascript">
	function downloadAction(request_id, type) {
		window.location.href = "<?php echo e(url('u/download')); ?>/"+request_id+'/'+type;
	}
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style type="text/css">
#snackbar {
	visibility: hidden;
	min-width: 250px;
	margin-left: -125px;
	background-color: #333;
	color: #fff;
	text-align: center;
	border-radius: 2px;
	padding: 5px;
	position: fixed;
	z-index: 1;
	right: 20px;
	top: 80px;
	font-size: 17px;
}

#snackbar.show {
	visibility: visible;
	-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
	animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
	from {top: 0; opacity: 0;} 
	to {top: 80px; opacity: 1;}
}

@keyframes  fadein {
	from {top: 0; opacity: 0;}
	to {top: 80px; opacity: 1;}
}

@-webkit-keyframes fadeout {
	from {top: 80px; opacity: 1;} 
	to {top: 0; opacity: 0;}
}

@keyframes  fadeout {
	from {top: 80px; opacity: 1;}
	to {top: 0; opacity: 0;}
}

.alert-danger {
	padding: 0.4rem 0.4rem;
	font-size: 0.80rem;
}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/algorithm-details.blade.php ENDPATH**/ ?>