@extends('shared.layouts.main')
@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>News</h3>
            </div>
            <div class="banner-content">
                <ol class="breadcrumb">
                    <li><a href={{route('main.home')}}>Home</a></li>
                    <li class="active">News</li>
                </ol>
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Banner -->

    <!-- Blog Right Sidebar -->
    <div class="latest-news blog-2column blog-right-sidebar container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Content Area -->
                <div class="content-area col-md-8 col-sm-8 col-xs-12">
                    @foreach($articles as $article)
                        <div class="type-post">
                            <div class="entry-cover">
                                <a title="Blog" href={{route('articles.show', $article)}}>
                                    <img alt="blog" src={{$article->images[0]->url}} />
                                </a>
                                <div class="post-date-bg">
                                    <div class="post-date">
                                        {{ strftime("%d", strtotime($article->created_at)) }}
                                        <span>{{ strftime("%b", strtotime($article->created_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-content">
                                <div class="entry-header">
                                    <h3 class="entry-title"><a title="Using the latest medical technology" href="#">{{$article->title}}</a></h3>
                                </div>
                                <div class="entry-content">
                                    <p>{{$article->content}}</p>
                                </div>
                                <a title="Read More" class="read-more" href={{route('articles.show', $article)}}>Read more</a>
                            </div>
                        </div>
                    @endforeach
                    <div>
                        {{ $articles->onEachSide(2)->links() }}
                    </div>
                </div><!-- Content Area /- -->
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
                    <!-- Widget Latest Posts -->
                    <aside id="widget_latestposts" class="widget widget_latestposts">
                        <div class="latest-detail-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs wc-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#popular" role="tab" data-toggle="tab">Popular</a></li>
                                <li role="presentation"><a href="#recent" role="tab" data-toggle="tab">Recent</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="popular">
                                    <div class="latest-content">
                                        <a href="#"><i><img src="assets/images/latest-post-1.jpg" alt="Post"></i></a>
                                        <h5><a href="#" title="Improving and Removing Envato Market Image Watermarking">Improving and Removing Envato Market Image Watermarking</a></h5>
                                        <span><a href="#" title="Date"><i class="fa fa-calendar-o"></i>04 January 2014</a></span>
                                    </div>

                                    <div class="latest-content">
                                        <a href="#"><i><img src="assets/images/latest-post-2.jpg" alt="Post"></i></a>
                                        <h5><a href="#" title="Improving and Removing Envato Market Image Watermarking">Improving and Removing Envato Market Image Watermarking</a></h5>
                                        <span><a href="#" title="Date"><i class="fa fa-calendar-o"></i>04 January 2014</a></span>
                                    </div>

                                    <div class="latest-content">
                                        <a href="#"><i><img src="assets/images/latest-post-3.jpg" alt="Post"></i></a>
                                        <h5><a href="#" title="Improving and Removing Envato Market Image Watermarking">Improving and Removing Envato Market Image Watermarking</a></h5>
                                        <span><a href="#" title="Date"><i class="fa fa-calendar-o"></i>04 January 2014</a></span>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="recent">
                                    <div class="latest-content">
                                        <a href="#"><i><img src="assets/images/latest-post-1.jpg" alt="Post"></i></a>
                                        <h5><a href="#" title="Improving and Removing Envato Market Image Watermarking">Improving and Removing Envato Market Image Watermarking</a></h5>
                                        <span><a href="#" title="Date"><i class="fa fa-calendar-o"></i>04 January 2014</a></span>
                                    </div>

                                    <div class="latest-content">
                                        <a href="#"><i><img src="assets/images/latest-post-2.jpg" alt="Post"></i></a>
                                        <h5><a href="#" title="Improving and Removing Envato Market Image Watermarking">Improving and Removing Envato Market Image Watermarking</a></h5>
                                        <span><a href="#" title="Date"><i class="fa fa-calendar-o"></i>04 January 2014</a></span>
                                    </div>
                                </div>
                    </aside><!-- Widget Tag Cloud /- -->

                </div><!-- Widget Area /- -->
            </div><!-- Row /- -->
            <nav class="ow-pagination text-left">
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </nav>
        </div><!-- Container /- -->
    </div><!-- Blog Right Sidebar /- -->
    </main>
    </div>



    </div>
@endsection
