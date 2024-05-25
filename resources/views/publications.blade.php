@extends('layouts.header')
@section('title', 'Publications')

@section('content')
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
				<img src="{{ asset('img/publications-hero.webp') }}" class="img-fluid animated" alt="">
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
						@foreach($journals as $journal)
						<li><i class="ri-check-double-line"></i>
						<span class="badge {{ $journal->journal=='Under Review'?'badge-warning':'badge-success' }}" style="font-size: 85%; font-weight: 100;">{{ $journal->journal }}</span>
						<span class="badge badge-secondary" style="font-size: 85%; font-weight: 100;">{{ $journal->year_of_publication }}</span>
						{{ $journal->publication_title }}
						<span class="badge badge-dark" style="font-size: 85%; font-weight: 100;">{{ $journal->authors }}</span>
						<br/>
						<a class="btn btn-sm btn-link" target="_blank" href="{{ $journal->publication_url }}" style="font-size: 0.8em">View Publication</a>
						</li>
						@endforeach
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
						@foreach($conferences as $conference)
						<li><i class="ri-check-double-line"></i>
						<span class="badge {{ $conference->journal=='Under Review'?'badge-warning':'badge-success' }}" style="font-size: 85%; font-weight: 100;">{{ $conference->journal }}</span>
						<span class="badge badge-secondary" style="font-size: 85%; font-weight: 100;">{{ $conference->year_of_publication }}</span>
						{{ $conference->publication_title }}
						<br>
						<span class="badge badge-dark" style="font-size: 85%; font-weight: 100;">{{ $conference->authors }}</span>
						<br>
						<a class="btn btn-sm btn-link" target="_blank" href="{{ $conference->publication_url }}" style="font-size: 0.8em">View Publication</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section><!-- End About Us Section -->
</main><!-- End #main -->
@endsection