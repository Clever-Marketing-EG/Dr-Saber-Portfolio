@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding" style="background-image: url({{$research['images'][0]}});">
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
                <div class="row flex-wrap mb-5">
                    @foreach ($research['images'] as $image)
                        <img class="rounded m-2= col" src={{$image}} alt="about" style="max-width: 300px" />
                    @endforeach
                </div>
                @if(isset($research['video_url']))
                <iframe width="100%" height="500" src="{{$research['video_url']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="margin-top: 5rem" ></iframe>
                @endif
            </div>
        </div><!-- Container /- -->
        <br /><br />
    </div><!-- About Section -->


@endsection
