@extends('main.shared.layout')

@section('content')
    <div class="boxed-container">
        <!-- Loader -->
        <!--div id="site-loader" class="load-complete">
            <div class="loader">
                <div class="loader-inner ball-clip-rotate">
                    <div></div>
                </div>
            </div>
        </div--><!-- Loader /- -->

        <div class="main-container">
            <main>
                <!-- Slider Section -->
                <div id="home-revslider" class="slider-section container-fluid no-padding">
                    <!-- START REVOLUTION SLIDER 5.0 -->
                    <div class="rev_slider_wrapper">
                        <div id="home-slider1" class="rev_slider" data-version="5.3">
                            <ul>
                                <li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
                                    <img src="assets/images/slider.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption background-block NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-1"
                                         data-x="['left','left','left','center']" data-hoffset="['375','140','70','0']"
                                         data-y="['top','top','top','top']"  data-voffset="['530','340','280','80']"
                                         data-fontsize="['48','48','40','32']"
                                         data-lineheight="['60','60','52','52']"
                                         data-width="['561','561','561','400']"
                                         data-height="['221','221','221','200']"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         data-elementdelay="0.05"
                                         data-paddingtop="[55,55,55,55]"
                                         data-paddingright="[45,45,45,65]"
                                         data-paddingbottom="[55,55,55,55]"
                                         data-paddingleft="[45,45,45,25]"
                                         style="z-index:3; position:relative; text-transform:uppercase; width: 561px; color:#4c4c4c; height: 221px; font-family: 'Lato', sans-serif; font-weight: 300;">
                                        <span class="title-txt" style="font-size: 48px; font-weight:bold;">Medical</span> Services <br> You Can <span style="font-weight:bold; font-size: 48px;">Trust</span>
                                    </div>

                                    <div class="tp-caption NotGeneric-Button rev-btn learn-btn rs-parallaxlevel-0" id="slide-layer-2"
                                         data-x="['left','left','left','center']" data-hoffset="['425','190','110','-20']"
                                         data-y="['top','top','top','top']"  data-voffset="['725','535','475','250']"
                                         data-fontsize="['18','18','18','18']"
                                         data-width="['224','224','224','200']"
                                         data-height="['86','86','86','50']"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;"
                                         data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;"
                                         data-start="3000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         data-responsive="off"
                                         data-paddingtop="[15,15,15,15]"
                                         data-paddingright="[10,10,10,10]"
                                         data-paddingbottom="[15,15,15,70]"
                                         data-paddingleft="[10,10,10,10]"
                                         style="z-index: 10; border-radius: 0; letter-spacing:0.8px; color: #fff; font-family: 'Poppins', sans-serif; text-transform:capitalize; white-space:nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;"><span class="button-txt"><i class="fa fa-stethoscope" style="text-align: center; line-height: 50px; width: 55px; height: 55px; font-size: 24px; border-radius: 50%; background-color: #fff; vertical-align: middle; box-shadow: inset 0px 5px 5px 0px rgba(0, 0, 0, 0.06); margin-right: 10px;"></i> Learn More</span>
                                    </div>
                                </li>
                                <li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
                                    <img src="assets/images/slide2.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption background-block NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-3"
                                         data-x="['left','left','left','center']" data-hoffset="['375','140','70','0']"
                                         data-y="['top','top','top','top']"  data-voffset="['530','340','280','80']"
                                         data-fontsize="['48','48','40','32']"
                                         data-lineheight="['60','60','52','52']"
                                         data-width="['561','561','561','400']"
                                         data-height="['221','221','221','200']"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         data-elementdelay="0.05"
                                         data-paddingtop="[55,55,55,55]"
                                         data-paddingright="[45,45,45,65]"
                                         data-paddingbottom="[55,55,55,55]"
                                         data-paddingleft="[45,45,45,25]"
                                         style="z-index:3; position:relative; text-transform:uppercase; width: 561px; color:#4c4c4c; height: 221px; font-family: 'Lato', sans-serif; font-weight: 300;">
                                        <span class="title-txt" style="font-size: 48px; font-weight:bold;">Medical</span> Services <br> You Can <span style="font-weight:bold; font-size: 48px;">Trust</span>
                                    </div>

                                    <div class="tp-caption NotGeneric-Button rev-btn learn-btn rs-parallaxlevel-0" id="slide-layer-4"
                                         data-x="['left','left','left','center']" data-hoffset="['425','190','110','-20']"
                                         data-y="['top','top','top','top']"  data-voffset="['725','535','475','250']"
                                         data-fontsize="['18','18','18','18']"
                                         data-width="['224','224','224','200']"
                                         data-height="['86','86','86','50']"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;"
                                         data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;"
                                         data-start="3000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         data-responsive="off"
                                         data-paddingtop="[15,15,15,15]"
                                         data-paddingright="[10,10,10,10]"
                                         data-paddingbottom="[15,15,15,70]"
                                         data-paddingleft="[10,10,10,10]"
                                         style="z-index: 10; border-radius: 0; letter-spacing:0.8px; color: #fff; font-family: 'Poppins', sans-serif; text-transform:capitalize; white-space:nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;"><span class="button-txt"><i class="fa fa-stethoscope" style="text-align: center; line-height: 50px; width: 55px; height: 55px; font-size: 24px; border-radius: 50%; background-color: #fff; vertical-align: middle; box-shadow: inset 0px 5px 5px 0px rgba(0, 0, 0, 0.06); margin-right: 10px;"></i> Learn More</span>
                                    </div>
                                </li>
                                <li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
                                    <img src="assets/images/slide3.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption background-block NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-5"
                                         data-x="['left','left','left','center']" data-hoffset="['375','140','70','0']"
                                         data-y="['top','top','top','top']"  data-voffset="['530','340','280','80']"
                                         data-fontsize="['48','48','40','32']"
                                         data-lineheight="['60','60','52','52']"
                                         data-width="['561','561','561','400']"
                                         data-height="['221','221','221','200']"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         data-elementdelay="0.05"
                                         data-paddingtop="[55,55,55,55]"
                                         data-paddingright="[45,45,45,65]"
                                         data-paddingbottom="[55,55,55,55]"
                                         data-paddingleft="[45,45,45,25]"
                                         style="z-index:3; position:relative; text-transform:uppercase; width: 561px; color:#4c4c4c; height: 221px; font-family: 'Lato', sans-serif; font-weight: 300;">
                                        <span class="title-txt" style="font-size: 48px; font-weight:bold;">Medical</span> Services <br> You Can <span style="font-weight:bold; font-size: 48px;">Trust</span>
                                    </div>

                                    <div class="tp-caption NotGeneric-Button rev-btn learn-btn rs-parallaxlevel-0" id="slide-layer-6"
                                         data-x="['left','left','left','center']" data-hoffset="['425','190','110','-20']"
                                         data-y="['top','top','top','top']"  data-voffset="['725','535','475','250']"
                                         data-fontsize="['18','18','18','18']"
                                         data-width="['224','224','224','200']"
                                         data-height="['86','86','86','50']"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;"
                                         data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;"
                                         data-start="3000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         data-responsive="off"
                                         data-paddingtop="[15,15,15,15]"
                                         data-paddingright="[10,10,10,10]"
                                         data-paddingbottom="[15,15,15,70]"
                                         data-paddingleft="[10,10,10,10]"
                                         style="z-index: 10; border-radius: 0; letter-spacing:0.8px; color: #fff; font-family: 'Poppins', sans-serif; text-transform:capitalize; white-space:nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;"><span class="button-txt"><i class="fa fa-stethoscope" style="text-align: center; line-height: 50px; width: 55px; height: 55px; font-size: 24px; border-radius: 50%; background-color: #fff; vertical-align: middle; box-shadow: inset 0px 5px 5px 0px rgba(0, 0, 0, 0.06); margin-right: 10px;"></i> Learn More</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- END OF SLIDER WRAPPER -->
                </div><!-- Slider Section /- -->

                <!-- Welcome Section -->
                <div class="welcome-section other-services container-fluid no-left-padding no-right-padding">
                    <!-- Container -->
                    <div class="container">
                        <!-- Section Header -->
                        <div class="section-header">
                            <h3>Welcome to Our Clinic</h3>
                        </div><!-- Section Header /- -->
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12 our-clinic">
                                <div class="row welcome-left">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="other-services-block">
                                            <div class="services-block-icon">
                                                <i class="fa fa-ambulance"></i>
                                            </div>
                                            <div class="other-services-content">
                                                <h5>Emergency services</h5>
                                                <p>Dolor sit amet consecdi pisicing eliamsed do eiusmod tempornu</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="other-services-block">
                                            <div class="services-block-icon">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div class="other-services-content">
                                                <h5>Qualified Doctors</h5>
                                                <p>Dolor sit amet consecdi pisicing eliamsed do eiusmod tempornu</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="other-services-block">
                                            <div class="services-block-icon">
                                                <i class="fa fa-phone-square"></i>
                                            </div>
                                            <div class="other-services-content">
                                                <h5>24/7 support</h5>
                                                <p>Dolor sit amet consecdi pisicing eliamsed do eiusmod tempornu</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="other-services-block">
                                            <div class="services-block-icon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <div class="other-services-content">
                                                <h5>Online appointment</h5>
                                                <p>Dolor sit amet consecdi pisicing eliamsed do eiusmod tempornu</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 clinic-form">
                                <form class="appoinment-form">
                                    <h5><i class="fa fa-calendar-check-o"></i>Make Appointment</h5>
                                    <div class="form-group col-md-12 no-padding">
                                        <input type="text" class="form-control" placeholder="Your Name" id="patient_name" name="patient-name">
                                    </div>
                                    <div class="form-group col-md-12 no-padding">
                                        <input type="email" class="form-control" placeholder="Email Address" id="patient_email" name="patient-email">
                                    </div>
                                    <div class="form-group input-group col-md-12 no-padding">
                                        <div class="col-md-7 col-sm-8 col-xs-8 no-padding">
                                            <div class="col-md-6 col-sm-6 col-xs-6 no-left-padding">
                                                <div class='date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" id="patient_date" name="patient-date" placeholder="Day" />
                                                    <span class="fa fa-angle-down"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 no-left-padding">
                                                <select class="selectpicker" id="patient_time" name="patient-time">
                                                    <option>Time</option>
                                                    <option>09:00</option>
                                                    <option>10:00</option>
                                                    <option>11:00</option>
                                                    <option>12:00</option>
                                                    <option>13:00</option>
                                                    <option>14:00</option>
                                                    <option>15:00</option>
                                                    <option>16:00</option>
                                                    <option>17:00</option>
                                                    <option>18:00</option>
                                                    <option>19:00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-4 col-xs-4 no-padding">
                                            <select class="selectpicker"  id="patient_department" name="patient-department">
                                                <option>Department</option>
                                                <option>Department 1</option>
                                                <option>Department 2</option>
                                                <option>Department 3</option>
                                                <option>Department 4</option>
                                                <option>Department 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                        <textarea rows="4" class="form-control" placeholder="Your Message..." id="patient_message" name="patient-message"></textarea>
                                    </div>
                                    <button type="submit" id="appointment_submit" class="btn-submit pull-right"><i class="fa fa-heart-o"></i>Submit</button>
                                    <div id="appointment-alert-msg" class="alert-msg"></div>
                                </form>
                            </div>
                        </div>
                    </div><!-- Container /- -->
                </div><!-- Welcome Section /- -->

                <!-- Gallery Section -->
                <div id="gallery-section" class="gallery-section container-fluid no-left-padding no-right-padding">
                    <!-- Container -->
                    <div class="container">
                        <!-- Section Header -->
                        <div class="section-header">
                            <h3>Our Gallery</h3>
                        </div>
                        <ul id="filters" class="portfolio-categories no-left-padding">
                            <li><a data-filter="*" class="active" href="#">Show All</a></li>
                            <li><a data-filter=".design" href="#">Denthal</a></li>
                            <li><a data-filter=".video" href="#">GastroEntorology</a></li>
                            <li><a data-filter=".photography" href="#">Surgeries</a></li>
                            <li><a data-filter=".web" href="#">Cardiology</a></li>
                            <li><a data-filter=".music" href="#">Patology</a></li>
                        </ul>
                        <ul class="portfolio-list no-left-padding">
                            <li class="col-md-4 col-sm-4 col-xs-6 design">
                                <div class="content-image-block">
                                    <img src="assets/images/gallery-1.jpg" alt="gallery">
                                    <div class="content-block-hover">
                                        <span>Cardiology Department</span>
                                        <h5>Happy patient</h5>
                                        <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                        <a class="zoom-in" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                        <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6 video">
                                <div class="content-image-block">
                                    <img src="assets/images/gallery-2.jpg" alt="gallery">
                                    <div class="content-block-hover">
                                        <span>Cardiology Department</span>
                                        <h5>Happy patient</h5>
                                        <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                        <a class="zoom-in" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                        <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6 photography">
                                <div class="content-image-block">
                                    <img src="assets/images/gallery-3.jpg" alt="gallery">
                                    <div class="content-block-hover">
                                        <span>Cardiology Department</span>
                                        <h5>Happy patient</h5>
                                        <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                        <a class="zoom-in" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                        <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-md-4 col-sm-4 col-xs-6 music">
                                <div class="content-image-block">
                                    <img src="assets/images/gallery-4.jpg" alt="gallery">
                                    <div class="content-block-hover">
                                        <span>Cardiology Department</span>
                                        <h5>Happy patient</h5>
                                        <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                        <a class="zoom-in" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                        <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6 web">
                                <div class="content-image-block">
                                    <img src="assets/images/gallery-5.jpg" alt="gallery">
                                    <div class="content-block-hover">
                                        <span>Cardiology Department</span>
                                        <h5>Happy patient</h5>
                                        <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                        <a class="zoom-in" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                        <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6 video">
                                <div class="content-image-block">
                                    <img src="assets/images/gallery-6.jpg" alt="gallery">
                                    <div class="content-block-hover">
                                        <span>Cardiology Department</span>
                                        <h5>Happy patient</h5>
                                        <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                        <a class="zoom-in" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                        <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="col-md-4 col-sm-4 col-xs-6 photography">
                                <div class="content-image-block">
                                    <img src="assets/images/gallery-7.jpg" alt="gallery">
                                    <div class="content-block-hover">
                                        <span>Cardiology Department</span>
                                        <h5>Happy patient</h5>
                                        <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                        <a class="zoom-in" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                        <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6 music">
                                <div class="content-image-block">
                                    <img src="assets/images/gallery-8.jpg" alt="gallery">
                                    <div class="content-block-hover">
                                        <span>Cardiology Department</span>
                                        <h5>Happy patient</h5>
                                        <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                        <a class="zoom-in" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                        <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6 design">
                                <div class="content-image-block">
                                    <img src="assets/images/gallery-6.jpg" alt="gallery">
                                    <div class="content-block-hover">
                                        <span>Cardiology Department</span>
                                        <h5>Happy patient</h5>
                                        <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                        <a class="zoom-in" href="assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                        <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- Container /- -->
                </div><!-- Gallery Section -->

                <!-- Services Section -->
                <div class="services-section container-fluid no-left-padding no-right-padding">
                    <!-- Container -->
                    <div class="container">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="service-content">
                                <h5>We Offer Best Medical Services</h5>
                                <p>When you travel abroad for medical care, you want everything to go smoothly.</p>
                                <div class="medical-services">
                                    <div class="col-md-4 col-sm-4 col-xs-4 medical-box">
                                        <i class="fa fa-calendar-plus-o"></i>
                                        <p>Easy Appointments</p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 medical-box">
                                        <i class="fa fa-ambulance"></i>
                                        <p>Transportation</p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 medical-box">
                                        <i class="fa fa-thumbs-up"></i>
                                        <p>Care management</p>
                                    </div>
                                </div>
                                <a href="#" class="learn-more" title="Learn More">Learn More</a>
                                <span>Or</span>
                                <a href="#" class="learn-more appointment" title="Make an Appointment">Make an Appointment</a>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 services-img">
                            <img src="assets/images/services.jpg" alt="services" />
                        </div>
                    </div><!-- Container /- -->
                </div><!-- Services Section -->

                <!-- Testimonial Section -->
                <div class="testimonial-section container-fluid no-left-padding no-right-padding">
                    <!-- Container -->
                    <div class="container">
                        <!-- Section Header -->
                        <div class="section-header">
                            <h3>Testimonials</h3>
                        </div><!-- Section Header /- -->
                    </div>
                    <div class="testimonial-slider">
                        <div class="testimonial-box">
                            <div class="testimonial-content">
                                <i><img src="assets/images/testi-1.jpg" alt="testimonial"/></i>
                                <h5>Allan Smith</h5>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="testimonial-content">
                                <i><img src="assets/images/testi-2.jpg" alt="testimonial"/></i>
                                <h5>Allan Smith</h5>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="testimonial-content">
                                <i><img src="assets/images/testi-3.jpg" alt="testimonial"/></i>
                                <h5>Allan Smith</h5>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="testimonial-content">
                                <i><img src="assets/images/testi-1.jpg" alt="testimonial"/></i>
                                <h5>Allan Smith</h5>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="testimonial-content">
                                <i><img src="assets/images/testi-2.jpg" alt="testimonial"/></i>
                                <h5>Allan Smith</h5>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Testimonial Section /- -->

                <!-- Team Section -->
                <div id="team-section" class="team-section container-fluid no-left-padding no-right-padding">
                    <!-- Container -->
                    <div class="container">
                        <!-- Section Header -->
                        <div class="section-header">
                            <h3>Doctors</h3>
                        </div>
                        <div class="team-carousel">
                            <div class="col-md-12">
                                <div class="team-content">
                                    <div class="team-box">
                                        <img src="assets/images/team-1.png" alt="team" />
                                        <h5>Alan Dark</h5>
                                    </div>
                                    <span class="team-catagory">Pathologist</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="team-content">
                                    <div class="team-box">
                                        <img src="assets/images/team-2.png" alt="team" />
                                        <h5>Knox Ulmar</h5>
                                    </div>
                                    <span class="team-catagory">Cardiologist</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="team-content">
                                    <div class="team-box">
                                        <img src="assets/images/team-3.png" alt="team" />
                                        <h5>Jeremy Duncan</h5>
                                    </div>
                                    <span class="team-catagory">Neurologist</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="team-content">
                                    <div class="team-box">
                                        <img src="assets/images/team-4.png" alt="team" />
                                        <h5>Tedd Justice</h5>
                                    </div>
                                    <span class="team-catagory">Pediatrician</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- Container /- -->
                </div><!-- Team Section /- -->

                <!-- Latest News -->
                <div class="latest-news container-fluid no-left-padding no-right-padding">
                    <!-- Container -->
                    <div class="container">
                        <!-- Section Header -->
                        <div class="section-header">
                            <h3>Our News</h3>
                        </div><!-- Section Header /- -->
                        <div class="row">
                            <div class="news-carousel">
                                <div class="col-md-12">
                                    <div class="type-post">
                                        <div class="entry-cover">
                                            <a title="Blog" href="#">
                                                <img alt="blog" src="assets/images/blog-1.jpg" />
                                            </a>
                                            <div class="post-date-bg">
                                                <div class="post-date">
                                                    18 <span>June</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="latest-news-content">
                                            <div class="entry-header">
                                                <h3 class="entry-title"><a title="Patients Share Success Stories" href="#">Patients Share Success Stories</a></h3>
                                                <div class="entry-meta">
                                                    <div class="byline"><a href="#" title="adminol"><i class="fa fa-user-o"></i>by adminol</a></div>
                                                    <div class="post-time"><a href="#" title="10 minutes ago"><i class="fa fa-clock-o"></i>10 minutes ago</a></div>
                                                    <div class="post-comment"><a href="#" title="4 Comments"><i class="fa fa-commenting-o"></i>4 Comments</a></div>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard .</p>
                                            </div>
                                            <a href="#" title="Read More" class="read-more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="type-post">
                                        <div class="entry-cover">
                                            <a title="Blog" href="#">
                                                <img alt="blog" src="assets/images/blog-2.jpg" />
                                            </a>
                                            <div class="post-date-bg">
                                                <div class="post-date">
                                                    18 <span>June</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="latest-news-content">
                                            <div class="entry-header">
                                                <h3 class="entry-title"><a title="Broad range of specialist services" href="#">Broad range of specialist services</a></h3>
                                                <div class="entry-meta">
                                                    <div class="byline"><a href="#" title="adminol"><i class="fa fa-user-o"></i>by adminol</a></div>
                                                    <div class="post-time"><a href="#" title="10 minutes ago"><i class="fa fa-clock-o"></i>10 minutes ago</a></div>
                                                    <div class="post-comment"><a href="#" title="4 Comments"><i class="fa fa-commenting-o"></i>4 Comments</a></div>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard .</p>
                                            </div>
                                            <a href="#" title="Read More" class="read-more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Container /- -->
                </div><!-- Latest News /- -->

                <!-- Offer Section -->
                <div class="offer-section container-fluid no-left-padding no-right-padding">
                    <!-- Container -->
                    <div class="container">
                        <!-- Section Header -->
                        <div class="section-header">
                            <h3>What We Offer</h3>
                        </div><!-- Section Header /- -->
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="offer-box">
                                    <i class="fa fa-hospital-o"></i>
                                    <h5>Intensive Care</h5>
                                    <p>Mister we could use a man like Herbert Hoover again. Love exciting and new. Come aboardwere expecting you.</p>
                                    <a href="#" title="Read More">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="offer-box">
                                    <i class="fa fa-ambulance"></i>
                                    <h5>24/7 Ambulance</h5>
                                    <p>In crack commando was sent to prison by a military court for a crime they didn't commit. These men prompt-</p>
                                    <a href="#" title="Read More">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="offer-box">
                                    <i class="fa fa-smile-o"></i>
                                    <h5>Friendly Doctors</h5>
                                    <p>Come aboard expecting you. Love life's sweetest reward Let it flow it floats back to you. It's a beautiful Day.</p>
                                    <a href="#" title="Read More">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- Container -->
                </div><!-- Offer Section /- -->

                <!-- Department Section -->
                <div class="department-section container-fluid no-left-padding no-right-padding">
                    <!-- Container -->
                    <div class="container">
                        <div class="department-header">
                            <h5>Departments</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-1.png" alt="dept">
                                    <span>Neurology</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-2.png" alt="dept">
                                    <span>Cardiology</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-3.png" alt="dept">
                                    <span>Dermatology</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-4.png" alt="dept">
                                    <span>Gastroenterology</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-5.png" alt="dept">
                                    <span>Pediatrician</span>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-6.png" alt="dept">
                                    <span>Otolaryngology</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-7.png" alt="dept">
                                    <span>Hematology</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-8.png" alt="dept">
                                    <span>Radiation</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-9.png" alt="dept">
                                    <span>Podiatry</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 department-box">
                                <div class="department-img-block">
                                    <img src="assets/images/dept-10.png" alt="dept">
                                    <span>Rheumatology</span>
                                </div>
                            </div>
                        </div>
                        <div class="show-all">
                            <a href="#" title="show all">show all</a>
                        </div>
                    </div><!-- Container /- -->
                </div><!-- Department Section -->
            </main>
        </div>

        <!-- Footer Main -->
        <footer id="footer-main" class="footer-main container-fluid no-left-padding no-right-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 contact-info">
                        <aside class="widget widget_info">
                            <h3 class="widget-title">Contact info</h3>
                            <p><i class="fa fa-phone"></i><a href="tel:386489550686" title="+386 489 550 686">+386 489 550 686</a></p>
                            <p><i class="fa fa-envelope"></i><a href="mailto:yourdomain@name.com" title="yourdomain@name.com">yourdomain@name.com</a></p>
                            <p><i class="fa fa-map-marker"></i>123, Las Vegas street lorem</p>
                            <div class="footer-social">
                                <i class="fa fa-heart"></i>
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                                    <li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <aside class="widget widget_workinghours">
                            <span><i class="fa fa-clock-o"></i></span>
                            <h3 class="widget-title">Working Hours</h3>
                            <ul>
                                <li><span>Monday</span> <b>9.00  AM  To  5.00 PM</b></li>
                                <li><span>tuesday</span> <b>9.00  AM  To  5.00 PM	</b></li>
                                <li><span>wednesday</span> <b>9.00  AM  To  5.00 PM</b></li>
                                <li><span>thursday</span> <b>9.00  AM  To  5.00 PM</b></li>
                                <li><span>friday</span> <b>9.00  AM  To  5.00 PM</b></li>
                                <li><span>Saturday</span> <b>11.00  AM  To  3.00 PM</b></li>
                                <li><span>Sunday</span> <b>Closed</b></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 contact-form">
                        <h3 class="widget-title">Any Questions ?</h3>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="full Name" name="contact-fname" id="input_fname" required="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="email Address" name="contact-email" id="input_email" required="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="subject" name="contact-subject" id="input_subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="message" rows="4" name="contact-message" id="input_message" ></textarea>
                            </div>
                            <div class="form-group">
                                <button title="Learn More" id="que_btn_submit" type="submit" name="post">Learn more</button>
                            </div>
                            <div id="alert-msg-que" class="alert-msg"></div>
                        </form>
                    </div>
                </div>
            </div><!-- Container /- -->
        </footer><!-- Footer Main /- -->

        <div class="footer-bottom">
            <!-- Container -->
            <div class="container">
                <p>&copy; 2017 Doctor Theme. All Rights Reserved</p>
            </div><!-- Container /- -->
        </div>

@endsection
