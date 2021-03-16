@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>Gallery</h3>
            </div>
            <div class="banner-content">
                <ol class="breadcrumb">
                    <li><a href={{route('main.home')}}>Home</a></li>
                    <li class="active">Gallery</li>
                </ol>
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Banner -->

    <!-- Gallery Section -->
    <div class="gallery-section gallery-section1 container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <ul class="portfolio-list no-left-padding">
                @foreach($operations as $operation)
                    <li class="col-md-4 col-sm-4 col-xs-6 design">
                        <a href={{route('operations.show', $operation)}}>
                            <div class="content-image-block">
                                <img src={{$operation->image_url}} alt="gallery" alt="...">
                                <div class="content-block-hover">
                                    <h5>{{$operation->title}}</h5>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach

            </ul>
            {{ $operations->onEachSide(3)->links() }}
        </div><!-- Container /- -->
    </div><!-- Gallery Section -->
@endsection
