@extends('shared.layouts.main')

@section('content')
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-left-padding no-right-padding" style="background-image: url({{$images['biography_background_image']}});">
        <!-- Container -->
        <div class="container">
            <div class="page-banner-content">
                <h3>@lang('nav.Biography')</h3>
            </div>
        </div><!-- Container /- -->
    </div><!-- Page Banner -->

    <!-- About Section -->
    <div class="about-section container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="about-content">
                        <h5>We look forward to exceeding your expectations.</h5>
                        <p>Welcome to our Hospital. Whether you are a patient or a visitor at our hospital, you can expect that over 80 dedicated employees, physicians and volunteers will be working tirelessly to ensure that you receive excellent care in a safe and comfortable environment.</p>
                        <p>As a leading healthcare provider in US, Our Hospital provides quality, compassionate and cost-effective services that continually meet and exceed our patient needs. I hope you will consider the many quality healthcare services available to you at our hospital and off-site facilities and providers. We offer high quality health care, the most advanced technologies and skilled physicians and nurses who are passionate about what they do.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 about-img">
                    <img src="{{$images['biography_side_image']}}" alt="about" />
                </div>
            </div>
        </div><!-- Container /- -->
    </div><!-- About Section -->

    <!-- Certificates Section -->
    <div class="team-section container-fluid no-left-padding no-right-padding">
        <!-- Container -->
        <div class="container">
            <!-- Section Header -->
            <div class="section-header">
                <h3>Certificates</h3>
            </div>
            <div class="team-carousel">
                <div class="col-md-12">
                    <div class="team-content">
                        <div class="team-box">
                            <img src="{{$images['biography_certificate_1']}}" alt="team" />
                            <h5>Alan Dark</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="team-content">
                        <div class="team-box">
                            <img src="{{$images['biography_certificate_2']}}" alt="team" />
                            <h5>Knox Ulmar</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="team-content">
                        <div class="team-box">
                            <img src="{{$images['biography_certificate_3']}}" alt="team" />
                            <h5>Jeremy Duncan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="team-content">
                        <div class="team-box">
                            <img src="{{$images['biography_certificate_4']}}" alt="team" />
                            <h5>Tedd Justice</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="team-content">
                        <div class="team-box">
                            <img src="{{$images['biography_certificate_5']}}" alt="team" />
                            <h5>Tedd Justice</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="team-content">
                        <div class="team-box">
                            <img src="{{$images['biography_certificate_6']}}" alt="team" />
                            <h5>Tedd Justice</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container /- -->
    </div><!-- Certificates Section /- -->
@endsection
