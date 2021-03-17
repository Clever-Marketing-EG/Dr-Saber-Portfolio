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
                                    <h3>@lang('nav.Operations')</h3>
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
                                                                @if(Session::get('locale') == 'ar')
                                                                    {{$operation->title_ar}}
                                                                @else
                                                                    {{ $operation->title }}
                                                                @endif
                                                            </a></h3>

                                                    </div>
                                                    <div class="entry-content">
                                                        <p>
                                                            @if(Session::get('locale') == 'ar')
                                                                {{$operation->content_ar}}
                                                            @else
                                                                {{$operation->content}}
                                                            @endif
                                                        </p>
                                                        <p></p>
                                                    </div>
                                                    <a href="{{route('operations.show', $operation)}}" title="Read More" class="read-more">@lang('helpers.read_more')</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <nav class="ow-pagination text-center">
                                    {{$operations->links()}}
                                </nav>
                            </div><!-- Container /- -->
                        </div><!-- Latest News /- -->
                    </main>
                </div>


            </div>


        </div>


    </div>
@endsection
