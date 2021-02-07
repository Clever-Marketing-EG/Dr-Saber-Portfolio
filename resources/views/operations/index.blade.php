
@extends('main.shared.layout')
@section('content')
    <div class="main-container">
        <main>

            <div id="home-revslider" class="slider-section container-fluid no-padding">

                <div class="rev_slider_wrapper ">
                    <div id="home-slider1" class="rev_slider slider2" data-version="5.3">
                        <ul>
                            <li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
                                <img  src={{asset('assets/images/1.jpg')}} class="event-slider" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            </li>
                            <li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
                                <img src={{asset('assets/images/2.jpg')}} class="event-slider"  alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- operation -->

                <div class="other-services container-fluid no-left-padding no-right-padding">
                    <!-- Container -->
                    <div class="container">
                        <!-- Section Header -->
                        <div class="section-header">
                            <h3>Operations</h3>
                        </div><!-- Section Header /- -->
                        <div class="row srv-box">
                            @foreach($operations as $operation)
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="other-services-block">
                                        <div class="services-block-icon">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="other-services-content">
                                            <h5>{{Illuminate\Support\Str::limit($operation->title, 25)}}</h5>
                                            <p>{{Illuminate\Support\Str::limit($operation->content, 40)}}</p>
                                            <a class="read-more" href={{route('operations.show', $operation)}}><button type="button" class="btn btn-primary btn-lg">See More</button></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <nav class="text-center">
                                {{--TODO--}}
                                {{ $operations->links('pagination::bootstrap-4') }}
                            </nav>
                        </div>
                    </div><!-- Container /- -->
                </div>
            </div>
        </main>
    </div>
@endsection
