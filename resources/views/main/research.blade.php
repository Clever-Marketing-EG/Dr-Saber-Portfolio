
@extends('main.Shared.layout')

@section('content')
<div class="main-container">
    <main>

        <!-- Latest News -->
        <div class="latest-news blog-2column container-fluid no-left-padding no-right-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">


                    @foreach($articles as $article)
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="type-post">
                            <div class="entry-cover">
                                <a title="Blog" href="#">
                                    <img alt="blog" src="{{$article->image_url}}" />
                                </a>
                                <div class="post-date-bg">
                                    <div class="post-date">
                                        {{$article->created_at->day}} <span>{{$article->created_at->month}}</span>
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
                                <a href="#" title="Read More" class="read-more">Read More</a>
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
@endsection
