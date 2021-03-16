@extends('shared.layouts.main')
@section('content')
    <div class="boxed-container">

        <div class="main-container">

        </div>

        <div data-offset="200" data-spy="scroll" data-target=".ow-navigation">
            <div class="boxed-container">

                <div class="main-container">
                    <main>
                        <!-- Page Banner -->
                        <div class="page-banner container-fluid no-left-padding no-right-padding">
                            <!-- Container -->
                            <div class="container">
                                <div class="page-banner-content">
                                    <h3>Operations</h3>
                                </div>
                                <div class="banner-content">
                                    <ol class="breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="active">Operations</li>
                                    </ol>
                                </div>
                            </div><!-- Container /- -->
                        </div><!-- Page Banner -->

                        <!-- Latest News -->
                        <div class="latest-news blog-2column container-fluid no-left-padding no-right-padding">
                            <!-- Container -->
                            <div class="container">
                                <div class="row">
                                    @foreach ($operations as $operation)

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="type-post">
                                                <div class="entry-cover">
                                                    <a title="Blog" href="#">
                                                        <img alt="blog" src={{$operation->image_url}} />
                                                    </a>

                                                </div>
                                                <div class="latest-news-content">
                                                    <div class="entry-header">
                                                        <h3 class="entry-title"><a
                                                                title="Using the latest medical technology" href="#">
                                                                {{ $operation->title }}
                                                            </a></h3>

                                                    </div>
                                                    <div class="entry-content">
                                                        <p>{{$operation->content}}</p>
                                                        <p></p>
                                                    </div>
                                                    <a href={{route('operations.show', $operation)}} title="Read More" class="read-more">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <nav class="ow-pagination text-center">
                                    <ul class="pagination">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                    </ul>
                                </nav>
                            </div><!-- Container /- -->
                        </div><!-- Latest News /- -->
                    </main>
                </div>


            </div>


        </div>


    </div>
@endsection
