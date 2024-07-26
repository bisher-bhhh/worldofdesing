{{--@foreach($all_work as $index => $data)--}}
{{--    @php $img_url = ''; @endphp--}}
{{--    @if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image))--}}
{{--        @php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image); @endphp--}}
{{--    @endif--}}
{{--    <div class="col-lg-4 isotope-item {{ get_work_category_by_id($data->id, 'slug') }}" style="padding: 10px; float: left;">--}}
{{--        <div class="portfolio-item">--}}
{{--            <a href="{{ route('frontend.singleproject', ['id' => $data->id]) }}" class="text-decoration-none">--}}
{{--                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear custom-thumb-info-style-1">--}}
{{--                    <span class="thumb-info-wrapper">--}}
{{--                        <img src="{{ $img_url }}" class="img-fluid" alt="">--}}
{{--                        <span class="thumb-info-title text-start">--}}
{{--                            <span class="thumb-info-inner font-weight-bold line-height-1 text-4 mb-3">{{ $data->title }}</span>--}}
{{--                            <span class="thumb-info-type text-transform-none font-weight-light text-1 line-height-7 pe-xl-5 me-5">{{ $data->description }}</span>--}}
{{--                        </span>--}}
{{--                    </span>--}}
{{--                </span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endforeach--}}
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
            </a>
        </div>
    </div>
@endforeach
