@extends('layouts.header')
@section('title', 'Technical Documentation')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

	<div class="container">
		<div class="row">
			<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
				<h1 data-aos="fade-up">Technical Documentation</h1>
				<h2 data-aos="fade-up" data-aos-delay="400">A data mining approach for studying biodiversity data</h2>
				<div data-aos="fade-up" data-aos-delay="800">
					<a href="#about" class="btn-get-started scrollto">Get Started</a>
				</div>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
				<img src="{{ asset('img/documentation-hero.webp') }}" class="img-fluid animated" alt="">
			</div>
		</div>
	</div>

</section><!-- End Hero -->

<main id="main">

	<!-- ======= About Us Section ======= -->
	<section id="about" class="about section-bg">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Introduction</h2>
			</div>

			<div class="row content">
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
					<p>
						<b>Biodiversity</b> is essential for the economic and ecological security of human beings. Since the past few decades, biodiversity is being eroded in an alarming rate due to rapid urbanization and alteration of habitats as well. Thus conservation of ecosystem is in utmost need.
						<br><br>
						On the other hand, knowledge discovery in database (KDD) is the process of determining logical, unique, potentially useful, and obvious underlying patterns in data. KDD, in the domain of biodiversity can be termed as computational biodiversity that is the application of various statistical and algorithmic approaches on the biodiversity data
					</p>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
					<p>
						Since the last few decades, the declining rate of biodiversity globally poses risk to many others. Therefore, there is an emerging need to recognize and assess complex ecological questions.
						<br><br>
						Along with the statistical measures employed by the ecologists, computer-science researchers comprehends the prospect of analytical study for achieving the solution for the adverse environmental issues.  

					</p>
					<a href="#services" class="btn-learn-more scrollto">Learn More</a>
				</div>
			</div>
		</div>
	</section><!-- End About Us Section -->

	<section id="about" class="about section-bg">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Motivation and Contribution</h2>
			</div>

			<div class="row content">
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
					<p>
						<b>Forests</b> are the natural security forces that have immense ecological service in controlling a number of climate catestrophy, preventing soil erosion, inhibiting inward ingression of sea in mangrove area and providing ecological niche for animals and livelihood for humans. Inspite of the great importance, loss of forest is prominent in India.
						<br>
						For example, a case study reveals that in between 1986 to 2012, 124.418 sq. km. mangrove forest cover has been lost. Different causes like over exploitation and illegal forest cutting, pollution, climate change etc. are identified as the most dominant factors for degradation of forest ecosystem.
						<br><br>
						Thus there is an urgent need of cause-effect analysis that would be helpful in safeguarding this precious ecosystem through proper management. 
						Mainly statistical analysis techniques are used in a few research articles but those are only confirmatory analysis techniques with respect to researchers’ understanding.
						<br><br>
						But data mining tools perform exploratory analysis where it is concerning with detecting and describing pattern within data, identifying predictor variables and discovering the forms of relationships between predictors and response.
					</p>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
					<p>
						The beneficial use of data mining is already proven where statistical analysis is unable to find out whether there is any relationship between abiotic and biotic factors on ichthyoplankton samples collected from a freshwater reservoir of Legal Amazon. Here, the use of data mining technique, the Apriori algorithm, helps in generating association rule regarding the understanding of the process of fish spawning in Tocantins River.
						<br>
						Thus knowledge discovery in data mining process is capable of identifying valid, potentially useful and understandable pattern  which is not a new application in biodiversity domain.
						But very few research contribution can be found particularly in this domain. 
						<br><br>
						Our main contribution can be summarized in two broad categories: 
					</p>
					<ul>
						<li><i class="ri-check-double-line"></i> Digitized downloadable datasets formations: Datasets on mangroves in Sundarban, as well as India, based on the gathered data from multiple online resources are formed. Multiple number of mangroves along with their associates are identified from different observational studies taken from both the published and unpublished literature.</li>
						<li><i class="ri-check-double-line"></i> Application of domain specific algorithms: Novel algorithms along with information retireval strategy is proposed.</li>
					</ul>
				</div>
			</div>
		</div>
	</section><!-- End About Us Section -->

	<section id="about" class="about section-bg">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Data Mining Approach</h2>
			</div>

			<div class="row content">
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
					<p>
						<b>Data Mining Tools and Packages</b> in computer science yields interesting analytical results that could be applied on biodiversity data. 
						Here our intension is to design a novel and efficient, domain specific data mining algorithm.
					</p>
					
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
					<p>
						The proposed algorithm will become useful for the researchers and for the users working on the primary biodiversity data for the conservation and management of the fragile ecosystem.
					</p>
					<ul>
						<li><i class="ri-check-double-line"></i> Frequent Itemsets</li>
						<li><i class="ri-check-double-line"></i> Frequent Closed Itemsets</li>
						<li><i class="ri-check-double-line"></i> Biclustering</li>
						<li><i class="ri-check-double-line"></i> Association Rule Mining</li>
					</ul>
				</div>
			</div>
		</div>
	</section><!-- End About Us Section -->

	<section id="about" class="about section-bg">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Indian Mangrove</h2>
			</div>

			<div class="row content">
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
					<p>
						<b>Mangroves</b> represent the littoral forest ecosystem. They are also termed as halophytes as they have the salt-tolerant capability.
						According to the state forest report(2019) published by Forest Survey of India, mangrove occurs in total 12 states and union territories.
					</p>
					<ul>
						<li><i class="ri-check-double-line"></i> Mangrove cover in India is 4975 sq km which is 0.15 percent of the total geographical area.</li>
						<li><i class="ri-check-double-line"></i> Total 40% of the mangrove cover is the open mangroves.</li>
						<li><i class="ri-check-double-line"></i> Very dense mangroves, and moderately dense mangroves cover 30% of the mangrove cover.</li>
						<li><i class="ri-check-double-line"></i> West Bengal covers 42.45% of the India's mangorve cover.</li>
					</ul>
					<p>
						Indian Sundarban is forming the mangrove cover of West Bengal and it is the largest mangrove in the World. Pichavaram Mangrove Forests, in Tamil Nadu, is the second largest in the world.
					</p>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="150">
					<p>
						Other major states having mangrove covers are Gujrat, Andhra Pradesh, Odisha, and Andaman. All other mangroves are situated along the east and west coast of India. 
					</p>
					<div class="hero-img" data-aos="fade-left" data-aos-delay="200">
						<img src="{{ asset('img/indian-mangrove.png') }}" class="img-fluid animated" alt="">
					</div>
				</div>
			</div>
		</div>
	</section><!-- End About Us Section -->

	<section id="about" class="about section-bg">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>Sundarban Mangrove</h2>
			</div>

			<div class="row content">
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
					<p>
						<b>The Sundarbans Mangrove</b> forest, one of the largest mangroves in the World, prevails on the delta of the Ganges, Brahmaputra and Meghna rivers on the Bay of Bengal.
						<br>
						Both the saline tidal water of Bay of Bengal and the fresh water flow of Ganga-Brahmaputra, are the underlying reasons for this unique habitats in this ecologically stressed environment.
					</p>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
					<p>
						Specially adopted floral and faunal biodiversity are found in Sundarban along the different estuarine regions.
						<br>
						Largest mangrove forest in the World along with large number of Royal Bnegal Tigers promote Sundarban as the World Heritage Site as identified by UNESCO.
					</p>
				</div>
			</div>
		</div>
	</section><!-- End About Us Section -->
</main><!-- End #main -->
@endsection