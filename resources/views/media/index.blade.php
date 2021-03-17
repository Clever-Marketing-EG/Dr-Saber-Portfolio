@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>Media</h3>
            </div>
            <div class="banner-content">
                <ol class="breadcrumb">
                    <li><a href={{route('main.home')}}>Home</a></li>
                    <li class="active">Media</li>
                </ol>
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Banner -->

    <!-- Blog Left Sidebar -->
    <div class="latest-news blog-2column blog-left-sidebar container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Widget Area -->
                <div class="widget-area col-md-4 col-sm-4 col-xs-12">
                    <!-- Widget Search -->
                    <aside id="search" class="widget widget_search">
                        <h3 class="widget-title">Search</h3>
                        <form method="get" class="searchform" action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here . . . ">
                                <span class="input-group-btn">
											<button class="btn btn-search" title="Search" type="button"><i class="fa fa-search"></i></button>
										</span>
                            </div>
                        </form>
                    </aside><!-- Widget Search /- -->

                </div><!-- Widget Area /- -->

                <!-- Content Area -->
                <div class="content-area col-md-8 col-sm-8 col-xs-12">
                    @foreach($media as $mediaItem)
                        <div class="type-post">
                            <div class="entry-cover">
                                <a title="Blog" href="#">
                                    <iframe width="100%" height="315" src="{{$mediaItem->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
                                </a>
                                <div class="post-date-bg">
                                    <div class="post-date">
                                        18 <span>June</span>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-content">
                                <div class="entry-header">
                                    <h3 class="entry-title"><a title="Using the latest medical technology" href="#">Using the latest medical technology</a></h3>
                                    <div class="entry-meta">
                                        <div class="byline"><a href="#" title="adminol"><i class="fa fa-user-o"></i>by adminol</a></div>
                                        <div class="post-time"><a href="#" title="10 minutes ago"><i class="fa fa-clock-o"></i>10 minutes ago</a></div>
                                        <div class="post-comment"><a href="#" title="4 Comments"><i class="fa fa-commenting-o"></i>4 Comments</a></div>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard .</p>
                                </div>
                                <a href="#" title="Read More" class="read-more">Read more</a>
                            </div>
                        </div>
                    @endforeach

                </div><!-- Content Area /- -->
            </div><!-- Row /- -->
            <nav class="ow-pagination text-right">
                <div class="pagination">
                    {{$media->links()}}
                </div>
            </nav>
        </div><!-- Container /- -->
    </div><!-- Blog Left Sidebar -->
@endsection
