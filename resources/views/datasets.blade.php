@extends('layouts.header')
@section('title', 'Datasets')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
	<div id="overlay" class="fullscreen">
		<img src="{{ asset('img/loader2.gif') }}">
	</div>
	<div class="container">
		<span id="snackbar">Oops! Some error occurred.. </span>
		<div class="row">
			<div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
				<h1 data-aos="fade-up">Dataset Operations</h1>
				<h2 data-aos="fade-up" data-aos-delay="400">Now you can upload and download custom datasets</h2>
				<div data-aos="fade-up" data-aos-delay="800">
					<a href="#contact" class="btn-get-started scrollto">Explore</a>
				</div>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
				<img src="{{ asset('img/datasets-hero.jpg') }}" class="img-fluid animated" alt="">
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
				<div class="col-md-5 col-sm-12" data-aos="fade-up" data-aos-delay="300">
					<div class="section-title" data-aos="fade-up">
						<h2>Upload</h2>
					</div>

					<div class="row no-gutters slider-text align-items-center justify-content-center" style="margin-top: 3em; margin-bottom: 2em;">
						<div class="col-12 ftco-animate text-center" id="example" style="background-color: #fdfdfd">
							<div class="uploadOuter">            
								<form method="post" id="fileDropzone" class="dropzone" action="{{ url('upload') }}" id="file-upload-form" enctype="multipart/form-data">
									@csrf
									<input type="file" name="file" id="upload-image" style="display:none;"/>
								</form>
							</div>			
						</div>
					</div>
				</div>
				<div class="col-md-2">
					
				</div>
				<div class="col-md-5 col-sm-12" data-aos="fade-up" data-aos-delay="300">
					<div class="section-title" data-aos="fade-up">
						<h2>Download</h2>
					</div>
					<form action="{{ url('download-dataset') }}" method="post">
						@csrf
						@method('POST')
						<div class="form-group">
							<select class="form-control" id="dataset_type" style="color: #6c757d;" required="" onchange="fetchDatasets()">
								<option value="">-- Select Dataset Type --</option>
								@foreach($dataset_types as $dataset_type)
								<option value="{{ $dataset_type->dataset_type }}">{{ $dataset_type->dataset_type }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<select class="form-control" id="datasets" name="dataset_id" style="color: #6c757d;" required="">
								<option value="">-- Select Dataset --</option>
							</select>
							@error('dataset_id')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group" style="display: flex; justify-content: center;">
							<span class="g-recaptcha" data-sitekey="{{ $captcha_key }}"></span>
						</div>
						@error('g-recaptcha-response')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror

						<div class="text-center mb-2"><button class="btn btn-primary btn-md" type="submit">Download Dataset</button></div>
					</form>
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
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}

	function fetchDatasets() {
		var dataset_type = document.getElementById("dataset_type").value;

		if (dataset_type != null) {
			$('#overlay').addClass('show');
			var xmlHttp = new XMLHttpRequest();

			xmlHttp.onreadystatechange = function(){
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
						option.setAttribute("onclick","downloadAction('"+dataset.dataset_path+"')");
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

			var url = "{{ url('/fetch-datasets-by-type')}}";

			var token = document.getElementsByName("_token")[0].value;

			xmlHttp.open("POST", url, true);
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
	function downloadAction(download_path) {
		var view_dataset_btn = document.getElementById("view-dataset-btn");
		// view_dataset_btn.setAttribute("href","");
		view_dataset_btn.setAttribute("href", download_path);
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