@extends('shared.layouts.main')

@section('content')

<div class="page-banner container-fluid no-left-padding no-right-padding">
    <!-- Container -->
    <div class="container">
        <div class="page-banner-content">
            <h3>Contact</h3>
        </div>
        <div class="banner-content">
            <ol class="breadcrumb">
                <li><a href={{route('main.home')}}>Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div><!-- Container /- -->
</div><!-- Page Banner -->

<!-- Contact Us -->
<div class="contact-us container-fluid no-left-padding no-right-padding">
    <!-- Container -->
    <div class="container">
        <div class="contact-header">
            <h5>Get in touch with us</h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard .</p>
        </div>
        <div class="contact-form">
            <h5>Send us a message</h5>
            <form class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                    <input type="text" class="form-control" placeholder="Your Name" name="contact-name" id="input_name" required="" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                    <input type="text" class="form-control" placeholder="Your Phone" name="contact-phone" id="input_phone" required="" />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <textarea class="form-control" placeholder="Message" rows="6" name="textarea-message" id="textarea_message"></textarea>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <button title="Submit" type="submit" id="btn_submit" name="post">Send</button>
                </div>
                <div id="alert-msg" class="alert-msg"></div>
            </form>
        </div>
        <div class="row">

            <div class="col-md-12">
                <!-- Map Section -->
                <div class="map">
                    {{-- <div class="map-canvas" id="map-canvas-contact" data-lat="-37.817214" data-lng="144.955925" data-string="Washington Square park, NY, United states." data-zoom="10"></div> --}}

                </div><!--  Map Section /- -->
            </div>
        </div>
    </div><!-- Container /- -->
</div><!-- Contact Us /- -->


@endsection
