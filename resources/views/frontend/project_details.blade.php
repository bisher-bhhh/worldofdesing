@extends('frontend.frontend-page-master')
@php $img_url = '';@endphp
@if(file_exists('assets/uploads/works/work-grid-'.$work->id.'.'.$work->image))
    @php $img_url = asset('assets/uploads/works/work-large-'.$work->id.'.'.$work->image); @endphp
@endif
@section('og-meta')
    <meta property="og:url"
          content="{{route('frontend.singleproject', ['id' => $work->id])}}"/>
    <meta property="og:type" content="project"/>
    <meta property="og:title" content="{{$work->title}}"/>
    <meta property="og:image" content="{{$img_url}}"/>
@endsection
@section('content')
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
   
    <section class="section section-height-3 bg-light border-0 m-0">
        <div class="container container-xl-custom">
            <div class="row">
                <h1 class="font-weight-bold text-center">{{$work->title}}</h1>
                <div class="col text-center">
                    <p class="text-4 mb-5">Crafting quality residential, commercial, and industrial spaces with precision and innovation.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">

                    <div class="row">
                        <div class="col">

                            <div class="lightbox mt-0" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                                <div class="row portfolio-list">
                                    @foreach($work->images as $image)
                                    <div class="col-lg-12 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                                        <div class="portfolio-item">
                                            <span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">
                                                <span class="thumb-info-wrapper">
                                                    <img src="{{ asset($image->file_path) }}" class="img-fluid" alt="">
                                                    <a href="{{ asset($image->file_path) }}" class="lightbox-portfolio">
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                                        </span>
                                                    </a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                 @endforeach
                               
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 position-relative">

                    <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 130}}">

                        <div class="row">
                            <div class="col">

                                <h2 class="font-weight-bold mb-2 text-5">Project Description</h2>

                                <p class="pb-2">{!! $work->description !!}</p>

                                <hr class="solid my-4">

                                <h2 class="font-weight-bold mb-2 text-5">Project Details</h2>
                                <ul class="list list-icons list-primary list-borders text-2">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Client:</strong> {{$work->clients}}</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong>  {{$work->start_date}}</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Category:</strong> <a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">{{get_work_category_by_id($work->id,'string')}}</a></li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL:</strong> <a href="#" target="_blank" class="text-dark">https://worldofdesigns.ca/singleproject?id={{$work->id}}</a></li>
                                </ul>
                            </div>
                        </div>

                    </aside>

                </div>

            </div>

        </div>
    </section>

</div> 
@endsection