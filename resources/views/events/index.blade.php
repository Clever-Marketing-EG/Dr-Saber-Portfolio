@extends('main.shared.layout')
@section('content')
    <div class="main-container">
        <main>
            <!-- Gallery Section -->
            <div class="gallery-section gallery-section1 container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <ul class="portfolio-list no-left-padding">
                        @foreach($events as $event)
                            <li class="col-md-4 col-sm-4 col-xs-6 design">
                                <div class="content-image-block">
                                    <a href={{route('events.show', $event)}}>
                                    <img src={{$event->image_url}} alt="gallery" alt="img">
                                    <div class="content-block-hover">
                                        <h5>{{$event->title}}</h5>
                                        {{-- <a href="#"><i class="fa fa-heart-o"></i>80</a>--}}
                                        <a class="zoom-in" href={{$event->image_url}}><i class="fa fa-expand"></i></a>
                                        {{-- <a href="operation/operation1.html"><i class="fa fa-file-text-o"></i></a>--}}
                                    </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <nav class="text-center">
                        {{ $events->links('pagination::bootstrap-4') }}
                    </nav>
                </div><!-- Container /- -->
            </div><!-- Gallery Section -->
        </main>
    </div>
@endsection
