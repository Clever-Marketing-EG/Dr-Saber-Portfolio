@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding"
        style="background-image: url({{ $operation->image_url }});">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>
                    @if (Session::get('locale') == 'ar')
                        {{ $operation->title_ar }}
                    @else
                        {{ $operation->title }}
                    @endif
                </h3>
            </div>
            <div class="banner-content">
                <ol class="breadcrumb">
                    <li><a href={{ route('main.home') }}>Home</a></li>
                    <li class="active">Gallery Single</li>
                </ol>
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Banner -->

    <!-- Gallery Single Section -->
    <div class="gallery-single-section container-fluid no-padding">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-6">
                    <div class="info-content">
                        <h3>Information</h3>
                        <p>
                            @if (Session::get('locale') == 'ar')
                                {{ $operation->content_ar }}
                            @else
                                {{ $operation->content }}
                            @endif
                        </p>
                    </div>
                </div>

                <div class=" row">
                    <div class="col-md-6">
                        <img alt="large-thumb" src={{ $operation->image_url }} />
                    </div>
                    @if ($operation->video_url)
                        <div class="col-md-6">
                            <iframe width="100%" height="430" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen src={{ $operation->video_url }}></iframe>
                        </div>
                    @endif
                </div>
            </div>
        </div><!-- Container /- -->
        <div class="section-padding"></div>
    </div><!-- Gallery Single Section /- -->

@endsection
