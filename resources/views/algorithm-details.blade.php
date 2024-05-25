@extends('layouts.header')
@section('title', 'Algorithm Details')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center p-0">
	<!-- <div id="overlay" class="fullscreen">
		<img src="{{ asset('img/loader2.gif') }}">
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
				<img src="{{ asset('img/algorithms.webp') }}" class="img-fluid animated" alt="">
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
							<p><strong>{{ $algorithm->algorithm_type }}</strong></p>
						</div>
						<div>
							<i class="ri-file-settings-fill"></i>
							<p><strong>{{ $algorithm->algorithm_name }}</strong></p>
						</div>
						<div>
							<i class="ri-database-2-fill"></i>
							<p><strong>{{ $dataset->dataset_name }}</strong></p>
						</div>

						<p><strong>How to run:</strong></p>

						@if($algorithm->algorithm_name == "CellBiClust")
						<ul style="font-size: 0.85rem;">
							<li><strong>Minimum Rows:</strong> Please enter the minimum number of rows for cluster. Value should be more than 1.</li>
							<li><strong>Minimum Columns:</strong> Please enter the minimum number of columns for cluster. Value should be more than 1.</li>
							<li><strong>Rule Generation:</strong> Please select if rule should be generated. Value should be either True or False.</li>
							<li><strong>Minimum Threshold 1:</strong> Please enter minimum threshold for predicting from the rule. Value should be between 0 and 1.</li>
							<li><strong>Maximum Threshold 2:</strong> Please enter the minimum threshold for comparing two biclusters for prediction. Value should be between 0 and 1.</li>
							<li><strong style="color: red;">NOTE:</strong> Any wrong or invalid entry will cause the algorithm to generate wrong output or no output at all.</li>
						</ul>
						@endif
						@if($algorithm->algorithm_name == "CLA-FPM")
						<ul style="font-size: 0.85rem;">
							<li><strong>Item Count:</strong> Please enter the number of items in the dataset. Value should be more than 0.</li>
							<li><strong>Transaction Count:</strong> Please enter the number of transactions in the dataset. Value should be more than 0.</li>
							<li><strong>Threshold:</strong> Please enter the minimum threshold for determining the frequent patterns. Value should be between 0 and 1.</li>
							<li><strong style="color: red;">NOTE:</strong> Any wrong or invalid entry will cause the algorithm to generate wrong output or no output at all.</li>
						</ul>
						@endif
						@if($algorithm->algorithm_name == "FIST")
						<ul style="font-size: 0.85rem;">
							<li><strong>Minimum Rows:</strong> Please enter the minimum number of rows for cluster. Value should be more than 1.</li>
							<li><strong>Minimum Columns:</strong> Please enter the minimum number of columns for cluster. Value should be more than 1.</li>
							<li><strong>Rule Generation:</strong> Please select if rule should be generated. Value should be either True or False.</li>
							<li><strong>Minimum Threshold 1:</strong> Please enter minimum threshold for predicting from the rule. Value should be between 0 and 1.</li>
							<li><strong>Maximum Threshold 2:</strong> Please enter the minimum threshold for comparing two biclusters for prediction. Value should be between 0 and 1.</li>
							<li><strong style="color: red;">NOTE:</strong> Any wrong or invalid entry will cause the algorithm to generate wrong output or no output at all.</li>
						</ul>
						@endif
						@if($algorithm->algorithm_name == "CAFP")
						<ul style="font-size: 0.85rem;">
							<li><strong>Minimum Rows:</strong> Please enter the minimum number of rows for cluster. Value should be more than 1.</li>
							<li><strong>Minimum Columns:</strong> Please enter the minimum number of columns for cluster. Value should be more than 1.</li>
							<li><strong>Rule Generation:</strong> Please select if rule should be generated. Value should be either True or False.</li>
							<li><strong>Minimum Threshold 1:</strong> Please enter minimum threshold for predicting from the rule. Value should be between 0 and 1.</li>
							<li><strong>Maximum Threshold 2:</strong> Please enter the minimum threshold for comparing two biclusters for prediction. Value should be between 0 and 1.</li>
							<li><strong style="color: red;">NOTE:</strong> Any wrong or invalid entry will cause the algorithm to generate wrong output or no output at all.</li>
						</ul>
						@endif
					</div>
				</div>
				<div class="col-md-1">
					
				</div>
				<div class="col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300">
					<div class="section-title" data-aos="fade-up">
						<h2>Algorithm Parameters</h2>
					</div>

					@if($algorithm->algorithm_name == "CellBiClust")
					<form action="{{ url('run-algorithm') }}" method="post">
						@csrf
						<input type="hidden" name="algorithm_id" value="{{ $algorithm->algorithm_id }}"/>
						<input type="hidden" name="dataset_id" value="{{ $dataset->dataset_id }}"/>
						<div class="form-group">
							<input type="text" name="min_row" class="form-control" placeholder="Minimum no of rows" value="{{ old('min_row') }}" required="" onkeypress="return isNumber(event)"/>
						</div>
						@error('min_row')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group">
							<input type="text" name="min_col" class="form-control" placeholder="Minimum no of columns" value="{{ old('min_col') }}" required="" onkeypress="return isNumber(event)"/>
						</div>
						@error('min_col')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group">
							<select name="rule_generation" class="form-control" required="">
								<option value="">-- Rule Generation --</option>
								<option value="true">True</option>
								<option value="false">False</option>
							</select>
						</div>
						@error('rule_generation')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group">
							<input type="text" name="min_threshold_1" class="form-control" placeholder="Minimum threshold for predicting from the rule" value="{{ old('min_threshold_1') }}" required="" onkeypress="return isNumber(event)"/>
						</div>
						@error('min_threshold_1')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group">
							<input type="text" class="form-control" name="min_threshold_2" placeholder="Minimum threshold for comparing two biclusters for prediction" value="{{ old('min_threshold_2') }}" required="" onkeypress="return isNumber(event)"/>
						</div>
						@error('min_threshold_2')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group" style="display: flex; justify-content: center;">
							<span class="g-recaptcha" data-sitekey="{{ $captcha_key }}"></span>
						</div>
						@error('g-recaptcha-response')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="text-center"><button class="btn btn-primary btn-md" type="submit">Run Algorithm</button></div>
					</form>
					@endif
					@if($algorithm->algorithm_name == "CLA-FPM")
					<form action="{{ url('run-algorithm') }}" method="post">
						@csrf
						<input type="hidden" name="algorithm_id" value="{{ $algorithm->algorithm_id }}"/>
						<input type="hidden" name="dataset_id" value="{{ $dataset->dataset_id }}"/>
						<div class="form-group">
							<input type="text" name="item_count" class="form-control" placeholder="No. of items in the dataset" value="{{ old('item_count') }}" required="" onkeypress="return isNumber(event)"/>
						</div>
						@error('item_count')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group">
							<input type="text" name="transaction_count" class="form-control" placeholder="No. of transactions in the dataset" value="{{ old('transaction_count') }}" required="" onkeypress="return isNumber(event)"/>
						</div>
						@error('transaction_count')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group">
							<input type="text" name="threshold" class="form-control" placeholder="Minimum threshold required for frequent pattern mining" value="{{ old('threshold') }}" required="" onkeypress="return isNumber(event)"/>
						</div>
						@error('threshold')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group" style="display: flex; justify-content: center;">
							<span class="g-recaptcha" data-sitekey="{{ $captcha_key }}"></span>
						</div>
						@error('g-recaptcha-response')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="text-center"><button class="btn btn-primary btn-md" type="submit">Run Algorithm</button></div>
					</form>
					@endif
					@if($algorithm->algorithm_name == "FIST")
					Hello
					@endif
					@if($algorithm->algorithm_name == "CAFP")
					Hello
					@endif
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection

@section('scripts')
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
<link rel="stylesheet" href="{{ asset('js/dropzone-5.7.0/dist/dropzone.css') }}">

<script src="{{ asset('js/dropzone-5.7.0/dist/dropzone.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript">
	function downloadAction(request_id, type) {
		window.location.href = "{{ url('u/download') }}/"+request_id+'/'+type;
	}
</script>
@endsection

@section('styles')
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

@keyframes fadein {
	from {top: 0; opacity: 0;}
	to {top: 80px; opacity: 1;}
}

@-webkit-keyframes fadeout {
	from {top: 80px; opacity: 1;} 
	to {top: 0; opacity: 0;}
}

@keyframes fadeout {
	from {top: 80px; opacity: 1;}
	to {top: 0; opacity: 0;}
}

.alert-danger {
	padding: 0.4rem 0.4rem;
	font-size: 0.80rem;
}
</style>
@endsection