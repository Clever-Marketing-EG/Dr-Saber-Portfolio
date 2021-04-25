@extends('shared.layouts.main')

@section('content')

<div class="page-banner container-fluid no-left-padding no-right-padding" style="background-image: url({{$images['contact_us_background']}})">
    <!-- Container -->
    <div class="container">
        <div class="page-banner-content">
            <h3>@lang('nav.Contact_Us')</h3>
        </div>

    </div><!-- Container /- -->
</div><!-- Page Banner -->

<!-- Contact Us -->
<div class="contact-us container-fluid no-left-padding no-right-padding">
    <!-- Container -->
    <div class="container">
        <div class="contact-header">
            <h5>@lang('contactus.Get_in_touch_with_us')</h5>
            <p>@lang('content.contact_description')</p>
        </div>
        <div class="contact-form">
            <h5>@lang('contactus.Send_us_a_message')</h5>
            <form class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                    <input type="text" class="form-control" placeholder=@lang('contactus.Name') name="contact-name" id="input_name" required="" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                    <input type="text" class="form-control" placeholder=@lang('contactus.Phone') name="contact-phone" id="input_phone" required="" />
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <textarea class="form-control" placeholder=@lang('contactus.Message') rows="6" name="textarea-message" id="textarea_message"></textarea>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <button title="Submit" type="submit" id="btn_submit" name="post">@lang('contactus.Send')</button>
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
