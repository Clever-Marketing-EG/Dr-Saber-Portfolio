
@extends('main-page/layout')
@section('content')
<div class="main-container">
    <main>

        <!-- Page Banner -->
        <div class="container-fluid no-left-padding no-right-padding">
            <!-- Container -->
            <div class="container">
                <div class="page-banner-content">
                    <h3>Our Events</h3>
                </div>
                <div class="banner-content">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div><!-- Container /- -->
        </div><!-- Page Banner -->

        <!-- Gallery Section -->
        <div class="gallery-section gallery-section1 container-fluid no-left-padding no-right-padding">
            <!-- Container -->
            <div class="container">
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
                            <img src="../assets/images/gallery-1.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="operation/operation1.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 video">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-2.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 photography">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-3.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>

                    <li class="col-md-4 col-sm-4 col-xs-6 music">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-4.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 web">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-5.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 video">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-6.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 photography">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-7.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 music">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-8.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 design">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-6.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 video">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-9.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 photography">
                        <div class="content-image-block">
                            <img src=".../assets/images/gallery-10.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 web">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-11.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 music">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-12.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 design">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-13.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href=".../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6 web">
                        <div class="content-image-block">
                            <img src="../assets/images/gallery-14.jpg" alt="gallery">
                            <div class="content-block-hover">
                                <span>Cardiology Department</span>
                                <h5>Happy patient</h5>
                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
                <nav class="ow-pagination text-center">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </nav>
            </div><!-- Container /- -->
        </div><!-- Gallery Section -->
    </main>
</div>
@endsection
