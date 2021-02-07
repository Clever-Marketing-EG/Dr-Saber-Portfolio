@extends('main/shared/layout')
@section('content')
    <div class="main-container">
        <main>


            <!-- Gallery Single Section -->
            <div class="gallery-single-section container-fluid no-padding">
                <div class="section-padding"></div>
                <!-- Container -->
                <div class="container">
                    <div class="flexslider gallery-details-full">
                        <div class="page-banner container-fluid no-left-padding no-right-padding" style="background-image: url({{$event->image_url}})">
                            <!-- Container -->
                            <div class="container">
                                <div class="banner-content">
                                    <ol class="breadcrumb">
                                        <li class="active">{{$event->title}}</li>
                                    </ol>
                                </div>
                            </div><!-- Container /- -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-sm-7 col-xs-6">
                            <div class="info-content">
                                <h3>Content</h3>
                                <p>{{$event->content}}</p>
                            </div>
                        </div>

                    </div>

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/WsptdUFthWI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="col-md-4 col-sm-5 col-xs-6">
                        <div class="info-box">
                            <h3>Date Of Publication:<span>{{$event->created_at}}</span></h3>
                        </div>
                    </div>
                </div><!-- Container /- -->
                <div class="section-padding"></div>
            </div><!-- Gallery Single Section /- -->

        </main>
    </div>

@endsection
