@extends('shared.layouts.main')

@section('content')
    <div id="articles-show">
        <!-- Page Banner -->
        <div class="page-banner container-fluid no-left-padding no-right-padding" style="background-image: url({{$article->images[0]->url}})">
            <!-- Container -->
            <div class="container">
                <div class="page-banner-content">
                    <h3>{{$article->title}}</h3>
                </div>
                <div class="banner-content">
                    <ol class="breadcrumb">
                        @if($_COOKIES['lang'] == 'ar')
                            
                        @else
                            <li><a href={{route('main.home')}}>Home</a></li>
                            <li class="active">Gallery Single</li>
                        @endif

                    </ol>
                </div>
            </div><!-- Container /- -->
        </div><!-- Page Banner -->

        <!-- Gallery Single Section -->
        <div class="gallery-single-section container-fluid no-padding">
            <div class="section-padding"></div>
            <!-- Container -->
            <div class="container">
                <div class="flexslider gallery-details-full">
                    <ul class="slides">
                        @foreach($article->images as $image)
                            <li>
                                <img src={{$image->url}} alt="large-thumb" width="1170" height="500"/>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flexslider gallery-details-thumb">
                    <ul class="slides">
                        @foreach($article->images as $image)
                            <li>
                                <img src={{$image->url}} alt="thumb" width="230" height="190"/>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="row">
                    <div class="gallery-info-content">
                        <div class="info-content">
                            <h3>{{$article->title}}</h3>
                            <p>{{$article->content}}</p>
                        </div>
                    </div>
                </div>

                <div class="row additional-media">
                    <div class="info-content">
                        <h3>Additional Media</h3>
                        <iframe width="100%" height="100%" src={{$article->video_url}} frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Gallery Single Section /- -->
    </div>
@endsection
