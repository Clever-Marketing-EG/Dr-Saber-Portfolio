@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding" style="background-image: url({{$images['news_background']}})">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>@lang('nav.Media')</h3>
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Banner -->

    <!-- Blog Left Sidebar -->
    <div class="latest-news blog-2column blog-left-sidebar container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                {{-- <!-- Widget Area -->
                <div class="widget-area col-md-4 col-sm-4 col-xs-12">
                    <!-- Widget Search -->
                    <aside id="search" class="widget widget_search">
                        <h3 class="widget-title">@lang('helpers.search')</h3>
                        <form method="get" class="searchform" action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="@lang('helpers.search_here')">
                                <span class="input-group-btn">
											<button class="btn btn-search" title="Search" type="button"><i class="fa fa-search"></i></button>
										</span>
                            </div>
                        </form>
                    </aside><!-- Widget Search /- -->

                </div><!-- Widget Area /- --> --}}

                <!-- Content Area -->
                <div class="content-area col-md-8 col-sm-8 col-xs-12">
                    @foreach($media as $mediaItem)
                        <div class="type-post">
                            @if(isset($mediaItem['video_url']))
                            <div class="entry-cover">
                                <a title="Blog" href="#">
                                    <iframe width="100%" height="315" src="{{$mediaItem->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
                                </a>
                                <div class="post-date-bg">
                                    <div class="post-date">
                                        {{ strftime("%d", strtotime($mediaItem->created_at)) }}
                                        <span>{{ strftime("%b", strtotime($mediaItem->created_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="latest-news-content">
                                <div class="entry-header">
                                    <h3 class="entry-title">
                                            @if(Session::get('locale') == 'ar')
                                                {{$mediaItem->title_ar}}
                                            @else
                                                {{$mediaItem->title}}
                                            @endif
                                        </a></h3>
                                </div>
                                <div class="entry-content">
                                    <p>
                                        @if(Session::get('locale') == 'ar')
                                            {{$mediaItem->content_ar}}
                                        @else
                                            {{$mediaItem->content}}
                                        @endif
                                    </p>
                                </div>
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
