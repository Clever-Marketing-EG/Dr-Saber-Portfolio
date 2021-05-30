@extends('shared.layouts.main')
@section('content')
    <div class="page-banner container-fluid no-left-padding no-right-padding" style="background-image: url({{$images['scientific_publications_background']}})">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>@lang('nav.Scientific_Publications')</h3>
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Banner -->


    <!-- Gallery Section -->
    <div id="gallery-section" class="gallery-section container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">

            <ul class="portfolio-list no-left-padding">
                @foreach ($researches as $research)

                    <li class="col-md-4 col-sm-4 col-xs-6 design">
                        <div class="content-image-block">
                            <img src={{$research->images[0]}} alt="gallery" alt="...">
                            <div class="content-block-hover">
                                <span>
                                    @if(Session::get('locale') == 'ar')
                                        {{ $research->title_ar }}
                                    @else
                                        {{$research->title}}
                                    @endif
                                </span>
                                <br />
                                <a title="Read More" class="read-more"
                                   href={{ route('main.research.show', $research) }}>@lang('helpers.read_more')</a>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>

        </div><!-- Container /- -->
    </div><!-- Gallery Section -->
@endsection
