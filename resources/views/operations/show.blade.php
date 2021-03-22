@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    @if(isset($operation->images[0]))
        <div class="page-banner container-fluid no-left-padding no-right-padding"
             style="background-image: url({{ $operation->images[0]->url }});">
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

            </div><!-- Container /- -->
        </div><!-- Page Banner -->
    @endif

    <!-- Gallery Single Section -->
    <div class="gallery-single-section container-fluid no-padding">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <div class="flexslider gallery-details-full">
                <ul class="slides">
                    @foreach ($operation->images as $image)
                        <li>
                            <img src="{{ $image->url }}" alt="large-thumb" width="1170" height="500" />
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-6">
                    <div class="info-content">
                        <h3>
                            @if (Session::get('locale') == 'ar')
                                {{ $operation->title_ar }}
                            @else
                                {{ $operation->title }}
                            @endif
                        </h3>
                        <p>
                            @if (Session::get('locale') == 'ar')
                                {{ $operation->content_ar }}
                            @else
                                {{ $operation->content }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class=" row" style="display: flex; justify-content: center; margin-top: 5rem;">
                @if ($operation->video_url)
                    <iframe width="100%" height="600" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen src={{ $operation->video_url }}></iframe>
                @endif
            </div>
        </div><!-- Container /- -->
        <div class="section-padding"></div>
    </div><!-- Gallery Single Section /- -->

@endsection
