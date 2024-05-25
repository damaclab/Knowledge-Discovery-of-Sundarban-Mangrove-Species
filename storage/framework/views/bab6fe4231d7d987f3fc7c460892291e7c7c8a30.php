
<?php $__env->startSection('title', 'Algorithms'); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
	<div id="overlay" class="fullscreen">
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
				<img src="<?php echo e(asset('img/algorithms-hero.webp')); ?>" class="img-fluid animated" alt="">
			</div>
		</div>
	</div>

</section><!-- End Hero -->

<main id="main">

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact section-bg">
		<div class="container">
			<!-- <div class="section-title" data-aos="fade-up">
				<h1>DATASET OPERATIONS</h1>
			</div> -->

			<div class="row">
				<script src="https://www.google.com/recaptcha/api.js" async defer></script>
				
				<div class="col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="300">
					<div class="section-title" data-aos="fade-up">
						<h2>Perform Data Mining Operations</h2>
					</div>

					<div class="col-md-6 col-sm-12 offset-md-3" data-aos="fade-up" data-aos-delay="300">
						<form action="<?php echo e(url('algorithm-details')); ?>" method="get" role="form">
							<?php echo csrf_field(); ?>
							<div class="form-group">
								<select class="form-control" id="algorithm_type" name="algorithm_type" data-msg="Please choose an operation" style="color: #6c757d;" required="" onchange="fetchAlgorithms()">
									<option value="">-- Select Operation --</option>
									<?php $__currentLoopData = $algorithms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $algorithm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($algorithm->algorithm_type); ?>"><?php echo e($algorithm->algorithm_type); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								<?php $__errorArgs = ['algorithm_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="alert alert-danger"><?php echo e($message); ?></div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>

							<div class="form-group">
								<select class="form-control" id="algorithms" name="algorithm_id" data-msg="Please choose an algorithm" style="color: #6c757d;" required="" onchange="fetchDatasets()">
									<option value="">-- Select Algorithm --</option>
								</select>
								<?php $__errorArgs = ['algorithm_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="alert alert-danger"><?php echo e($message); ?></div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								<div class="d-none" id="view-publication-link-container">
									<span class="float-right pb-2" style="font-size: 0.8em"><a id="view-publication-link" href="" target="_blank">View Publication</a></span>
								</div>
							</div>

							<div class="form-group">
								<select class="form-control" id="datasets" name="dataset_id" data-msg="Please choose a dataset" style="color: #6c757d;" required="">
									<option value="">-- Select Dataset --</option>
								</select>
								<?php $__errorArgs = ['dataset_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="alert alert-danger"><?php echo e($message); ?></div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
							<!-- <div class="form-group" style="display: flex; justify-content: center;">
								<span class="g-recaptcha" data-sitekey="<?php echo e($captcha_key); ?>"></span>
							</div> -->
							<div class="form-group" style="display: flex; justify-content: center; flex-direction: row;">
								<div class="text-center"><button class="btn btn-primary btn-md" type="submit">Proceed</button></div>
								<div class="text-center"><a href="<?php echo e(url('datasets')); ?>" id="view-dataset-btn" target="_blank" class="btn btn-md btn-link">Upload Dataset</a></div>
							</div>
						</form>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/dropzone-5.7.0/dist/dropzone.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script type="text/javascript">
	function setPublicationLink() {
		$('#view-publication-link-container').removeClass('d-none');
	}

	function unsetPublicationLink() {
		$('#view-publication-link-container').addClass('d-none');
	}

	function fetchAlgorithms() {
		unsetPublicationLink();

		var algorithm_type = document.getElementById("algorithm_type").value;

		if (algorithm_type != null) {
			$('#overlay').addClass('show');
			var xmlHttp = new XMLHttpRequest();

			xmlHttp.onreadystatechange = function() {
				if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
					// success
					var algorithms = document.getElementById("algorithms");
					algorithms.innerHTML = "<option>-- Select Algorithm --</option>"
					console.log(JSON.parse(xmlHttp.responseText));
					JSON.parse(xmlHttp.responseText).forEach(parseResponse);

					function parseResponse(algorithm){
						var option = document.createElement("option");
						option.innerHTML = algorithm.algorithm_name;
						option.setAttribute("value", algorithm.algorithm_id);
						option.setAttribute("href", algorithm.publication_url);
						algorithms.appendChild(option);
					}

					$('#overlay').removeClass('show');
				}
				else if(xmlHttp.readyState == 4 && xmlHttp.status != 200) {
					// failure
					$('#overlay').removeClass('show');
				}
			};

			xmlHttp.onerror = function() {
				$('#overlay').removeClass('show');
			}

			var url = "<?php echo e(url('/fetch-algorithms-by-type')); ?>";

			var token = document.getElementsByName("_token")[0].value;

			xmlHttp.open("POST", url, true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlHttp.send('_token='+token+'&algorithm_type='+algorithm_type);
			return false;
		}
	}

	function fetchDatasets() {
		unsetPublicationLink();

		var algorithm_id = document.getElementById("algorithms").value;
		var publication_url = document.getElementById("algorithms").href;

		if (algorithm_id != null) {
			setPublicationLink();
			alert(publication_url);

			$('#overlay').addClass('show');
			var xmlHttp = new XMLHttpRequest();

			xmlHttp.onreadystatechange = function() {
				if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
					// success
					var datasets = document.getElementById("datasets");
					datasets.innerHTML = "<option>-- Select Dataset Type --</option>"
					// console.log(JSON.parse(xmlHttp.responseText));
					JSON.parse(xmlHttp.responseText).forEach(parseResponse);

					function parseResponse(dataset){
						var option = document.createElement("option");
						option.innerHTML = dataset.dataset_name;
						option.setAttribute("value", dataset.dataset_id);
						// option.setAttribute("onclick","downloadAction('"+dataset.dataset_path+"')");
						datasets.appendChild(option);
					}

					$('#overlay').removeClass('show');
				}
				else if(xmlHttp.readyState == 4 && xmlHttp.status != 200) {
					// failure
					$('#overlay').removeClass('show');
				}
			};

			xmlHttp.onerror = function() {
				$('#overlay').removeClass('show');
			}

			var url = "<?php echo e(url('/fetch-datasets-by-algorithm')); ?>";

			var token = document.getElementsByName("_token")[0].value;

			xmlHttp.open("POST", url, true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlHttp.send('_token='+token+'&algorithm_id='+algorithm_id);
			return false;
		}
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
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/algorithms.blade.php ENDPATH**/ ?>