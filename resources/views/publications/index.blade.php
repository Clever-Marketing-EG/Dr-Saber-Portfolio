@extends('shared.layouts.main')
@section('content')
    <div class="page-banner container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>Scientific Publications</h3>
            </div>
            <div class="banner-content">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Scientific Publications</li>
                </ol>
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
                            <img src={{$research->image_url}} alt="gallery">
                            <div class="content-block-hover">
                                <span>{{ $research->title }}</span>
                                <br />
                                <a title="Read More" class="read-more"
                                    href={{ route('research.show', $research) }}>Read more</a>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        
        </div><!-- Container /- -->
    </div><!-- Gallery Section -->
@endsection
