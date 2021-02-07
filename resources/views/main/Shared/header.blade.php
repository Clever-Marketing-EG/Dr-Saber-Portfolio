    <header class="header_s header_s5 header_s1 header_s8">
        <!-- Navigation -->
        <nav class="navbar ownavigation">
            <!-- Container -->

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('landing-page') }}" ><img src="assets/images/logo4.png" alt="Logo"></a>
                </div>

                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav menubar navbar-left">
                        <li class="active"><a title="Home" href=" {{route('landing-page')}}">Home</a></li>
                        <li class="active"><a title="Home" href="biography">About Dr Saber</a></li>
                        <li class="dropdown">
                            <a href="#doctors" title="for doctors" data-toggle="dropdown"class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">For Doctors</a>
                            <i class="ddl-switch fa fa-angle-down"></i>
                            <ul class="dropdown-menu">
                                <li><a href="research" title="Blog Post">Spcific Publications</a></li>
                                <li><a href="operations" title="Blog Post">Operations</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="latest-article" class="dropdown-toggle" title="for doctors"  role="button" aria-haspopup="true" aria-expanded="false"> News</a>
                            <i class="ddl-switch fa fa-angle-down"></i>
                            <ul class="dropdown-menu">
                                <li><a href="events" title="Blog Post">Events</a></li>
                                <li><a href="videos" title="Blog Post">Videos</a></li>
                            </ul>
                        </li>

                        <li><a title="Contact" href="{{route('contact')}}">Contact</a></li>
                        <li><a title="Lang" href="{{route('main.ar')}}">Ar</a></li>
                    </ul>
                </div>


        </nav><!-- Ownavigation /- -->

    </header>
