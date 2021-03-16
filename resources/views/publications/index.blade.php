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
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <br /><br />
        </div>
        <div class="container">
            <div class="row">
                @foreach ($research as $publication)
                    <div class="col-md-4">

                        <div class="type-post">
                            <img alt="blog" src={{ $publication->image_url }} />

                            <div class="latest-news-content">
                                <div class="entry-header">
                                    <h3 class="entry-title"><a title="Using the latest medical technology" href="#">
                                            {{ $publication->title }}
                                        </a></h3>

                                </div>
                                <div class="entry-content">
                                    <p>{{ $publication->content }}</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div><!-- Container /- -->
@endsection
