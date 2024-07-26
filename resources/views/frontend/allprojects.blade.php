@extends('frontend.frontend-page-master')
@section('content')
	<div class="body" >
		<div role="main" class="main">
			<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-background-transparent-2.jpg);">
				<div class="container">
					<div class="row mt-5">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="text-12 font-weight-semibold">Our Projects</h1>
						</div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb breadcrumb-light d-block text-center">
								<li><a href="{{route('homepage')}}">Home</a></li>
								<li class="active">Pages</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="projects" class="container" >
				<div class="row justify-content-center pt-5 mt-5">
					<div class="col-lg-9 text-center">
						<div class="appear-animation" data-appear-animation="fadeInUpShorter">
							<h2 class="font-weight-bold mb-2">Projects</h2>
							<p class="mb-4">Our projects showcase top-tier architectural excellence<br>
								Each design reflects our commitment to quality and innovation.</p>
						</div>
						<p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							We believe in the power of great architecture to inspire and transform. With every project, we strive to push the boundaries of creativity and functionality. Explore our work and see how we turn visions into reality.</p>

						</p>
					</div>
				</div>
			<div class="container py-2">

				<ul id="portfolioLoadMoreFilter" class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
					<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
					@foreach($all_work_category as $data)
						<li class="nav-item" data-option-value=".{{Str::slug($data->name)}}"><a class="nav-link text-1 text-uppercase" href="#">{{$data->name}}</a></li>
					@endforeach
				</ul>

				<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
					<div id="portfolioLoadMoreWrapper" class="row portfolio-list sort-destination" data-sort-id="portfolio" data-total-pages="{{ $all_work->lastPage() }}" data-ajax-url="{{ route('frontend.projects.load_more') }}">
						@foreach($all_work as $index => $data)

							@php $img_url = ''; @endphp
							@if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image))
								@php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image); @endphp
							@endif
							<div class="col-lg-4 isotope-item {{ get_work_category_by_id($data->id, 'slug') }}" style="padding: 10px; float: left;">
								<div class="portfolio-item">
									<a href="{{ route('frontend.singleproject', ['id' => $data->id]) }}" class="text-decoration-none">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear custom-thumb-info-style-1">
                        <span class="thumb-info-wrapper">
                            <img src="{{ $img_url }}" class="img-fluid" alt="">
                            <span class="thumb-info-title text-start">
                                <span class="thumb-info-inner font-weight-bold line-height-1 text-4 mb-3">{{ $data->title }}</span>
                                <span class="thumb-info-type text-transform-none font-weight-light text-1 line-height-7 pe-xl-5 me-5">{{ get_work_category_by_id($data->id, 'slug') }}</span>
                            </span>
                        </span>
                    </span>
										</span>
									</a>
								</div>
							</div>

						@endforeach
					</div>
					<div id="portfolioLoadMoreBtnWrapper" class="row">
						<div class="col">
							<div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader">
								<div class="bounce-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>
							</div>

							<button id="portfolioLoadMore" type="button" class="btn btn-dark btn-modern w-100 text-1 text-uppercase outline-none mb-5 p-3">Load More</button>

						</div>
					</div>

				</div>

			</div>
			</section>
		</div>
	</div>

@endsection
