@extends('main.Shared.layout')
@section('content')
<div class="main-container">
    <main>
        <!-- Page Banner -->
        <div class="page-banner container-fluid no-left-padding no-right-padding">
            <!-- Container -->
            ><!-- Container /- -->
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

                            <button title="Submit" type="submit" id="btn_submit" name="post"></i><a href="mailto:yourdomain@name.com" title="yourdomain@name.com">Submit<i class="fa fa-envelope"></i></a></button>
                        </div>
                        <div id="alert-msg" class="alert-msg"></div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-call-box">
                            <p><i class="fa fa-phone"></i><a href="tel:386489550686" title="+386 489 550 686">+201223312938</a></p>
                        </div>
                        <div class="contact-call-box">
                            <p><i class="fa fa-envelope"></i><a href="mailto:yourdomain@name.com" title="yourdomain@name.com">saberwaheb@gmail.com</a></p>
                        </div>
                        <div class="contact-call-box">
                            <p><i class="fa fa-map-marker"></i>7 st Ali Elkhshkhany - Al Azaritah Shatebi,Qesm Bab Sharqi, Alexandria Governorate Egypt</p>
                        </div>
                        <div class="contact-call-box">
                            <p><i class="fa fa-heart"></i></p>
                            <ul>
                                <li><a href="https://www.facebook.com/saber.waheb" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <!-- Map Section -->
                        <div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54600.25993862563!2d29.8797620781015!3d31.20642385733724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c477e1c79489%3A0x95ea96377a90134!2sAl%20Azaritah%20WA%20Ash%20Shatebi%2C%20Qism%20Bab%20Sharqi%2C%20%C4%B0skenderiye!5e0!3m2!1str!2seg!4v1612089949796!5m2!1str!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><!--  Map Section /- -->
                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- Contact Us /- -->
    </main>
</div>

@endsection
