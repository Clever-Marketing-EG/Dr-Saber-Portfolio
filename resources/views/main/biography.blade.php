@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding" style="background-image: url({{$images['biography_background_image']}});">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>@lang('nav.Biography')</h3>
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Banner -->

    <!-- About Section -->
    <div class="about-section container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="about-content">
                        <h5>@lang('content.biography_title_1')</h5>
                        <p>@lang('content.biography_content_1')</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 about-img">
                    <img src="{{$images['biography_side_image_1']}}" alt="about" />
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12 about-img">
                    <img src="{{$images['biography_side_image_2']}}" alt="about" />
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="about-content">
                        <h5>@lang('content.biography_title_2')</h5>
                        <p>@lang('content.biography_content_2')</p>
                    </div>
                </div>

            </div>
        </div><!-- Container /- -->
    </div><!-- About Section -->

    <!-- Certificates Section -->
    <div class="team-section container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <!-- Section Header -->
            <div class="section-header">
                <h3>Certificates</h3>
            </div>
            <div class="team-carousel">
                @foreach($certificates as $certificate)
                    <div class="col-md-12">
                        <div class="team-content">
                            <div class="team-box">
                                <img src="{{$certificate->image_url}}" alt="team" />
                                @if(Session::get('locale') == 'ar')
                                    <h5>{{$certificate->title}}</h5>
                                @else
                                    <h5>{{$certificate->title_ar}}</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- Container /- -->
    </div><!-- Certificates Section /- -->
@endsection
