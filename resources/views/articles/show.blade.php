@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>{{ $article->title }}</h3>
            </div>
            <div class="banner-content">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Article</li>
                </ol>
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
                        <h5>{{ $article->title }}</h5>

                        <p>{{ $article->content }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 about-img">
                    <img src={{$article->images[0]->url}} alt="about" />
                </div>
            </div>
            <div class=" row">

                @if ($article->video_url)
                    <div class="col-md-6">
                        <iframe width="560" height="315" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen src={{ $article->video_url }}></iframe>
                    </div>
                @endif
            </div>
            <br />
        </div><!-- Container /- -->
    </div><!-- About Section -->

@endsection
