@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>
                    @if (Session::get('locale') == 'ar')
                        {{ $research->title_ar }}
                    @else
                        {{ $research->title }}
                    @endif
                </h3>
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
                        <h5>
                            @if (Session::get('locale') == 'ar')
                                {{ $research->title_ar }}
                            @else
                                {{ $research->title }}
                            @endif
                        </h5>
                        <p>
                            @if (Session::get('locale') == 'ar')
                                {{ $research->content_ar }}
                            @else
                                {{ $research->content }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 about-img">
                    <img src={{ $research->image_url }} alt="about" />
                </div>
            </div>
        </div><!-- Container /- -->
        <br /><br />
    </div><!-- About Section -->


@endsection
