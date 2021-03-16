<header class="header_s header_s5 header_s1 header_s8">
    <!-- Ownavigation -->
    <nav class="navbar ownavigation">
        <!-- Container -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <a class="navbar-brand" style="font-size: 18px;margin-top:-9px;color: #03296fba;" href={{route('main.home')}} >
                <img src={{asset("assets/images/logo.jpg")}} alt="" class="logo-img"/>
                Dr.Saber Waheeb
            </a>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav menubar navbar-left">
                    <li><a title="Home" href={{route('main.home')}}>Home</a></li>
                    <li><a title="About" href={{route('main.biography')}}>Biography</a></li>
                    <li><a title="About" href={{route('articles.index')}}>Events</a></li>
                    <li><a title="Services" href="services.html">Media</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" title="Blog" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">For Doctors</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <li><a href="blog-2column.html" title="Blog Post">Scientific publications</a></li>
                            <li><a href={{route('operations.index')}} title="Blog Post">Operations</a></li>
                        </ul>
                    </li>
                    <li><a title="Work" href="gallery.html">Contact Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" title="Blog" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                        <i class="ddl-switch fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <li><a href="blog-2column.html" title="Blog Post">EN</a></li>
                            <li><a href="blogsidebar-left.html" title="Blog Post">AR</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="loginpanel" class="desktop-hide">
                <div class="right" id="toggle">
                    <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                    <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
                </div>
            </div>
        </div><!-- Container /- -->
    </nav><!-- Ownavigation /- -->
</header>
