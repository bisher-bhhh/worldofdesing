{{--<div class="ajax-container">--}}
{{--	<div class="row align-items-center py-4">--}}

{{--		<div class="col">--}}
{{--			<a href="#" data-ajax-portfolio-prev class="text-decoration-none d-block float-start">--}}
{{--				<div class="d-flex align-items-center line-height-1">--}}
{{--					<i class="fas fa-arrow-left text-dark text-4 me-3"></i>--}}
{{--					<div class="d-none d-sm-block line-height-1">--}}
{{--						<span class="text-dark opacity-4 text-1">PREVIOUS PROJECT</span>--}}
{{--						<h4 class="font-weight-bold text-3 mb-0">Presentation</h4>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</a>--}}
{{--		</div>--}}
{{--		<div class="col">--}}
{{--			<div class="row">--}}
{{--				<div class="col-md-12 align-self-center p-static order-2 text-center">--}}
{{--					<div class="overflow-hidden pb-2">--}}
{{--						<h2 class="text-dark font-weight-bold text-7 mb-0">Porto Watch</h2>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--		<div class="col">--}}
{{--			<a href="#" data-ajax-portfolio-next class="text-decoration-none d-block float-end">--}}
{{--				<div class="d-flex align-items-center text-end line-height-1">--}}
{{--					<div class="d-none d-sm-block line-height-1">--}}
{{--						<span class="text-dark opacity-4 text-1">NEXT PROJECT</span>--}}
{{--						<h4 class="font-weight-bold text-3 mb-0">Identity</h4>--}}
{{--					</div>--}}
{{--					<i class="fas fa-arrow-right text-dark text-4 ms-3"></i>--}}
{{--				</div>--}}
{{--			</a>--}}
{{--		</div>--}}

{{--	</div>--}}

{{--	<div class="row pb-4 mb-2">--}}
{{--		<div class="col-sm-6">--}}

{{--			<div class="img-thumbnail border-0 border-radius-0 p-0 d-block">--}}
{{--				<img src="img/projects/project-1.jpg" class="img-fluid border-radius-0" alt="">--}}
{{--			</div>--}}

{{--			<hr class="solid my-5">--}}

{{--			<strong class="text-uppercase text-1 me-3 text-dark float-start position-relative top-2">Share</strong>--}}
{{--			<ul class="social-icons">--}}
{{--				<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--				<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>--}}
{{--				<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--			</ul>--}}

{{--		</div>--}}
{{--		<div class="col-sm-6">--}}
{{--			<h2 class="text-color-dark font-weight-normal text-4 mb-0">Project <strong class="font-weight-extra-bold">Description</strong></h2>--}}
{{--			<p>Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>--}}

{{--			<p>Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin ipsum tortor, viverra ut condimentum eu, accumsan a enim. Etiam egestas purus risus, vulputate ullamcorper diam fermentum in. Pellentesque non libero hendrerit, vestibulum tellus ut, malesuada purus.</p>--}}

{{--			<h2 class="text-color-dark font-weight-normal text-4 mb-0 mt-4">Project <strong class="font-weight-extra-bold">Details</strong></h2>--}}
{{--			<ul class="list list-icons list-primary list-borders text-2">--}}
{{--				<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Client:</strong> Okler Themes</li>--}}
{{--				<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> January 2021</li>--}}
{{--				<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">DESIGN</a><a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">BRAND</a><a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">WEBSITES</a></li>--}}
{{--				<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL:</strong> <a href="#" target="_blank" class="text-dark">http://www.okler.net</a></li>--}}
{{--			</ul>--}}
{{--		</div>--}}
{{--	</div>--}}
{{--</div>--}}

<div id="custom-content" class="white-popup-block bg-dark white-popup-block-lg">
	<div class="row">
		<div class="col">
			<h3 class="font-weight-bold text-color-light text-7 text-capitalize ls-0 my-3">{{ $service_item->title }}</h3>
		{!!  $service_item->description !!}
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-4 text-center">
			<div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
				<div class="row">
					<div class="col">
						<div class="featured-box">
							<div class="box-content p-0 border-0">
								@if($data->id==25)
									<img height="87px" src="{{asset('assets/frontend/img/thumbs-up.png')}}">
								@endif
								@if($data->id==26)
									<img height="87px" src="{{asset('assets/frontend/img/briefcase.png')}}">
								@endif
								@if($data->id==27)
									<img height="87px" src="{{asset('assets/frontend/img/calculator.png')}}">
								@endif
								@if($data->id==28)
									<img height="87px" src="{{asset('assets/frontend/img/staircase.png')}}">
								@endif

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
{{--		<script>--}}
{{--			console.log('ServiceID: {{ $id }}');--}}
{{--		</script>--}}
		<div class="col-lg-8">
			<p>Reach out to us for a consultation and let’s explore how we can bring your project to life. From initial concept to final execution, we are committed to delivering excellence at every stage.</p>

			<p class="mb-0"><span class="text-color-light text-4 mb-3">CALL US NOW</span></p>
			<p class="mb-3"><a href="tel:+12899526861" class="text-decoration-none text-color-primary font-weight-bold line-height-2 text-6 opacity-10">1 289-952-6861</a></p>
		</div>
	</div>
</div>
