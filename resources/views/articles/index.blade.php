@extends('shared.layouts.main')
@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding" style="background-image: url({{$images['news_background']}})">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>@lang('nav.News')</h3>
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
                                @if(isset($article->images[0]))
                                    <a title="Blog" href={{route('main.article.show', $article)}}>
                                        <img alt="blog" src={{$article->images[0]->url}} />
                                    </a>
                                @endif
                                <div class="post-date-bg">
                                    <div class="post-date">
                                        {{ strftime("%d", strtotime($article->created_at)) }}
                                        <span>{{ strftime("%b", strtotime($article->created_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-content">
                                <div class="entry-header">
                                    <h3 class="entry-title"><a title="Using the latest medical technology" href="{{route('main.article.show', $article)}}">
                                            @if(Session::get('locale') == 'ar')
                                                {{$article->title_ar}}
                                            @else
                                                {{$article->title}}
                                            @endif
                                        </a></h3>
                                </div>
                                <div class="entry-content">
                                    @if(Session::get('locale') == 'ar')
                                        <p>{{$article->content_ar}}</p>
                                    @else
                                        <p>{{$article->content}}</p>
                                    @endif
                                </div>
                                <a title="Read More" class="read-more" href="{{route('main.article.show', $article)}}">@lang('helpers.read_more')</a>
                            </div>
                        </div>
                    @endforeach
                </div><!-- Content Area /- -->
                <!-- Widget Area -->
                <div class="widget-area col-md-4 col-sm-4 col-xs-12">
                    {{-- <!-- Widget Search -->
                    <aside id="search" class="widget widget_search">
                        <h3 class="widget-title">@lang('helpers.search')</h3>
                        <form method="GET" class="searchform" action="{{route('main.articles.search')}}">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="@lang('helpers.search_here')" name="term" />
                                <span class="input-group-btn">
                                    <button class="btn btn-search" title="Search" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </aside><!-- Widget Search /- --> --}}
                    <!-- Widget Latest Posts -->
                    <aside id="widget_latestposts" class="widget widget_latestposts">
                        <div class="latest-detail-tab">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="popular">
                                    @for ($i = 0; $i < 3; $i++)
                                        <div class="latest-content">
                                            @if(isset($articles[$i]->images[0]))
                                                <a href="{{route('main.article.show', $articles[$i])}}"><i><img src="{{$articles[$i]->images[0]->url}}" alt="Post" style="width: 100px; height: 100px" ></i></a>
                                            @endif
                                            <h5><a href="{{route('main.article.show', $articles[$i])}}" title="{{$articles[$i]->title}}">{{$articles[$i]->title}}</a></h5>
                                            <span><b title="Date"><i class="fa fa-calendar-o"></i>{{date('d M Y', strtotime($articles[$i]->created_at))}}</b></span>
                                        </div>
                                    @endfor
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
                            </div>
                        </div>
                    </aside><!-- Widget Tag Cloud /- -->

                </div><!-- Widget Area /- -->
            </div><!-- Row /- -->
            <nav class="ow-pagination text-left">
                {{ $articles->onEachSide(2)->links() }}
            </nav>
        </div><!-- Container /- -->
    </div><!-- Blog Right Sidebar /- -->
@endsection
