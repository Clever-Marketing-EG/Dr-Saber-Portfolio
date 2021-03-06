@extends('shared.layouts.main')

@section('content')

    <!-- Slider Section -->
    <div id="home-revslider" class="slider-section container-fluid no-padding">
        <!-- START REVOLUTION SLIDER 5.0 -->
        <div class="rev_slider_wrapper">
            <div id="home-slider1" class="rev_slider" data-version="5.3">
                <ul>
                    <li data-transition="zoomout" data-slotamount="default" data-easein="easeInOut" data-easeout="easeInOut"
                        data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                        data-fsslotamount="7">
                        <img src="{{ $images['header_image_1'] }}" data-bgposition="center center"
                             data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                             data-no-retina alt="...">
                        <div class="tp-caption background-block NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                             id="slide-layer-1" data-x="['left','left','left','center']"
                             data-hoffset="['375','140','70','0']" data-y="['top','top','top','top']"
                             data-voffset="['530','340','280','80']" data-fontsize="['48','48','40','32']"
                             data-lineheight="['60','60','52','52']" data-width="['561','561','561','400']"
                             data-height="['221','221','221','200']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"
                             data-paddingtop="[55,55,55,55]" data-paddingright="[45,45,45,65]"
                             data-paddingbottom="[55,55,55,55]" data-paddingleft="[45,45,45,25]"
                             style="z-index:3; position:relative; width: 561px; color:#4c4c4c; height: 221px; font-family: 'Lato', sans-serif; font-weight: 300;">
                            <span class="title-txt" style="font-size: 48px; font-weight:bold;">@lang('nav.Name')</span>
                            <br> <div style="font-weight:bold; font-size: 48px; margin-top: 2rem;">@lang('helpers.job_title')</div>
                        </div>

                        <div class="tp-caption NotGeneric-Button rev-btn learn-btn rs-parallaxlevel-0" id="slide-layer-2"
                             data-x="['left','left','left','center']" data-hoffset="['425','190','110','-20']"
                             data-y="['top','top','top','top']" data-voffset="['725','535','475','250']"
                             data-fontsize="['18','18','18','18']" data-width="['224','224','224','200']"
                             data-height="['86','86','86','50']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;"
                             data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;" data-start="3000"
                             data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off"
                             data-paddingtop="[15,15,15,15]" data-paddingright="[10,10,10,10]"
                             data-paddingbottom="[15,15,15,70]" data-paddingleft="[10,10,10,10]"
                             style="z-index: 10; border-radius: 0; letter-spacing:1px; color: #fff; font-family: 'Poppins', sans-serif; text-transform:capitalize; white-space:nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
                            <a class="button-txt" href={{route('main.biography')}}><i class="fa fa-stethoscope"
                                                        style="text-align: center; line-height: 50px; width: 55px; height: 55px; font-size: 24px; border-radius: 50%; background-color: #fff; vertical-align: middle; box-shadow: inset 0 5px 5px 0 rgba(0, 0, 0, 0.06); margin-right: 10px;"></i>
                                @lang('helpers.read_more')</a>
                        </div>
                    </li>
                    <li data-transition="zoomout" data-slotamount="default" data-easein="easeInOut" data-easeout="easeInOut"
                        data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                        data-fsslotamount="7">
                        <img src="{{ $images['header_image_2'] }}" alt="slider" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption background-block NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                             id="slide-layer-3" data-x="['left','left','left','center']"
                             data-hoffset="['375','140','70','0']" data-y="['top','top','top','top']"
                             data-voffset="['530','340','280','80']" data-fontsize="['48','48','40','32']"
                             data-lineheight="['60','60','52','52']" data-width="['561','561','561','400']"
                             data-height="['221','221','221','200']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"
                             data-paddingtop="[55,55,55,55]" data-paddingright="[45,45,45,65]"
                             data-paddingbottom="[55,55,55,55]" data-paddingleft="[45,45,45,25]"
                             style="z-index:3; position:relative;width: 561px; color:#4c4c4c; height: 221px; font-family: 'Lato', sans-serif; font-weight: 300;">

                            <span class="title-txt" style="font-size: 48px; font-weight:bold;">@lang('nav.Name')</span>
                            <br> <div style="font-weight:bold; font-size: 48px; margin-top: 2rem;">@lang('helpers.job_title')</div>
                        </div>

                        <div class="tp-caption NotGeneric-Button rev-btn learn-btn rs-parallaxlevel-0" id="slide-layer-4"
                             data-x="['left','left','left','center']" data-hoffset="['425','190','110','-20']"
                             data-y="['top','top','top','top']" data-voffset="['725','535','475','250']"
                             data-fontsize="['18','18','18','18']" data-width="['224','224','224','200']"
                             data-height="['86','86','86','50']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;"
                             data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;" data-start="3000"
                             data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off"
                             data-paddingtop="[15,15,15,15]" data-paddingright="[10,10,10,10]"
                             data-paddingbottom="[15,15,15,70]" data-paddingleft="[10,10,10,10]"
                             style="z-index: 10; border-radius: 0; letter-spacing:1px; color: #fff; font-family: 'Poppins', sans-serif; text-transform:capitalize; white-space:nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
                            <a class="button-txt" href={{route('main.biography')}}><i class="fa fa-stethoscope"
                                                        style="text-align: center; line-height: 50px; width: 55px; height: 55px; font-size: 24px; border-radius: 50%; background-color: #fff; vertical-align: middle; box-shadow: inset 0 5px 5px 0 rgba(0, 0, 0, 0.06); margin-right: 10px;"></i>
                                @lang('helpers.read_more') </a>
                        </div>
                    </li>
                    <li data-transition="zoomout" data-slotamount="default" data-easein="easeInOut" data-easeout="easeInOut"
                        data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                        data-fsslotamount="7">
                        <img src="{{ $images['header_image_3'] }}" alt="slider" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption background-block NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                             id="slide-layer-5" data-x="['left','left','left','center']"
                             data-hoffset="['375','140','70','0']" data-y="['top','top','top','top']"
                             data-voffset="['530','340','280','80']" data-fontsize="['48','48','40','32']"
                             data-lineheight="['60','60','52','52']" data-width="['561','561','561','400']"
                             data-height="['221','221','221','200']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"
                             data-paddingtop="[55,55,55,55]" data-paddingright="[45,45,45,65]"
                             data-paddingbottom="[55,55,55,55]" data-paddingleft="[45,45,45,25]"
                             style="z-index:3; position:relative;width: 561px; color:#4c4c4c; height: 221px; font-family: 'Lato', sans-serif; font-weight: 300;">

                            <span class="title-txt" style="font-size: 48px; font-weight:bold;">@lang('nav.Name')</span>
                            <br> <div style="font-weight:bold; font-size: 48px; margin-top: 2rem;">@lang('helpers.job_title')</div>
                        </div>

                        <div class="tp-caption NotGeneric-Button rev-btn learn-btn rs-parallaxlevel-0" id="slide-layer-6"
                             data-x="['left','left','left','center']" data-hoffset="['425','190','110','-20']"
                             data-y="['top','top','top','top']" data-voffset="['725','535','475','250']"
                             data-fontsize="['18','18','18','18']" data-width="['224','224','224','200']"
                             data-height="['86','86','86','50']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;"
                             data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;" data-start="3000"
                             data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off"
                             data-paddingtop="[15,15,15,15]" data-paddingright="[10,10,10,10]"
                             data-paddingbottom="[15,15,15,70]" data-paddingleft="[10,10,10,10]"
                             style="z-index: 10; border-radius: 0; letter-spacing:1px; color: #fff; font-family: 'Poppins', sans-serif; text-transform:capitalize; white-space:nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
                            <a class="button-txt" href={{route('main.biography')}}><i class="fa fa-stethoscope"
                                                        style="text-align: center; line-height: 50px; width: 55px; height: 55px; font-size: 24px; border-radius: 50%; background-color: #fff; vertical-align: middle; box-shadow: inset 0 5px 5px 0 rgba(0, 0, 0, 0.06); margin-right: 10px;"></i>
                                @lang('helpers.read_more')</a>
                        </div>
                    </li>
                </ul>
            </div><!-- END OF SLIDER WRAPPER -->
        </div><!-- Slider Section /- -->
        <!-- Offer Section -->
        @if(count($operations) >=4)
            <div class="offer-section container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <!-- Section Header -->
                    <div class="section-header">
                        <h3>@lang('helpers.surgeries')</h3>
                    </div><!-- Section Header /- -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="offer-box">
                                <i class="fa fa-smile-o"></i>
                                @if(Session::get('locale') == 'ar')
                                    <h5> {{ Str::limit($operations[0]->title_ar, 40)}}</h5>
                                    <p>{{ Str::limit($operations[0]->content_ar, 60)}}</p>
                                @else
                                <h5> {{ Str::limit($operations[0]->title, 40)}}</h5>
                                <p>{{ Str::limit($operations[0]->content, 60)}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="offer-box">
                                <i class="fa fa-smile-o"></i>
                                @if(Session::get('locale') == 'ar')
                                <h5> {{ Str::limit($operations[1]->title_ar, 40)}}</h5>
                                <p>{{ Str::limit($operations[1]->content_ar, 60)}}</p>
                                @else
                                <h5> {{ Str::limit($operations[1]->title, 40)}}</h5>
                                <p>{{ Str::limit($operations[1]->content, 60)}}</p>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="offer-box">
                                <i class="fa fa-smile-o"></i>
                                @if(Session::get('locale') == 'ar')
                                <h5> {{ Str::limit($operations[2]->title_ar, 40)}}</h5>
                                <p>{{ Str::limit($operations[2]->content_ar, 60)}}</p>
                                @else

                                <h5> {{ Str::limit($operations[2]->title, 40)}}</h5>
                                <p>{{ Str::limit($operations[2]->content, 60)}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="offer-box">
                                <i class="fa fa-smile-o"></i>
                                @if(Session::get('locale') == 'ar')
                                    <h5> {{ Str::limit($operations[3]->title_ar, 40)}}</h5>
                                    <p>{{ Str::limit($operations[3]->content_ar, 60)}}</p>
                                @else
                                <h5> {{ Str::limit($operations[3]->title, 60)}}</h5>
                                <p>{{ Str::limit($operations[3]->content, 60)}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div><!-- Container -->
            </div><!-- Offer Section /- -->
    @endif
    <!-- Team Section -->
        <div id="team-section" class="team-section container-fluid no-left-padding no-right-padding">
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>@lang('nav.Scientific_Publications')</h3>
                </div>
                <div class="team-carousel">
                    @foreach($researches as $research)
                        <div class="col-md-12">
                            <div class="team-content">
                                <div class="team-box">
                                    <img src="{{$research['images'][0]}}" alt="team" />
                                </div>
                                <span class="team-catagory">
                                    @if(Session::get('locale') == 'ar')
                                        {{$research->title_ar}}
                                    @else
                                        {{$research->title}}
                                    @endif
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!-- Container /- -->
        </div><!-- Team Section /- -->
        <!-- Latest News -->
        <div class="latest-news container-fluid no-left-padding no-right-padding">
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="type-post">
                            <div class="entry-cover">
                                <a title="Blog" href="{{route('main.operations.index')}}">
                                    <img alt="blog" src="{{ $images['home_operations_image'] }}" />
                                </a>

                            </div>
                            <div class="latest-news-content">
                                <div class="entry-header">
                                    <h3 class="entry-title"><a title="Patients Share Success Stories"
                                                               href={{route('main.operations.index')}}>@lang('nav.Operations')</a></h3>

                                </div>
                                <div class="entry-content">
                                    <p>@lang('content.home_operations_description')</p>
                                </div>
                                <a href="{{route('main.operations.index')}}" title="See More" class="read-more">@lang('helpers.read_more')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="type-post">
                            <div class="entry-cover">
                                <a title="Blog" href={{route('main.articles.index')}}>
                                    <img alt="blog" src="{{$images['home_news_image']}}" />
                                </a>

                            </div>
                            <div class="latest-news-content">
                                <div class="entry-header">
                                    <h3 class="entry-title"><a title="Patients Share Success Stories" href="{{route('main.articles.index')}}">@lang('nav.News')</a>
                                    </h3>

                                </div>
                                <div class="entry-content">
                                    <p>@lang('content.home_news_description')</p>
                                </div>
                                <a href="{{route('main.articles.index')}}" title="See More" class="read-more">@lang('helpers.read_more')</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>



@endsection
