@extends('dashboard/layoutmaster')
@section('content')
<body class="sb-nav-fixed">

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="navbar-brand" href="{{ route('main')}}" ><img src="assets/images/logo4.png" alt="Logo"></a>



                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Main Pages
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Articles</a>
                                        <a class="nav-link" href="register.html">Operations</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                        <a class="nav-link" href="/biography">bio</a>
                                        <a class="nav-link" href="password.html">research</a>

                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>

                    <div class="row">

                        <div class="container">
                            <div class="view-account">
                                <section class="module">
                                    <div class="module-inner">
                                        <div class="side-bar">

                                        </div>
                                        <div class="content-panel">

                                            <form class="form-horizontal">
                                                <fieldset class="fieldset">
                                                    <h3 class="fieldset-title">Personal Info</h3>
                                                    <div class="form-group avatar">
                                                        <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                                            <img class="img-rounded img-responsive" src="" alt="">
                                                        </figure>
                                                        <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                                            <input type="file" class="file-uploader pull-left">
                                                            <button type="submit" class="btn btn-sm btn-default-alt pull-left">Update Image</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 col-sm-3 col-xs-12 control-label">User Name</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" value="Rebecca">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 col-sm-3 col-xs-12 control-label">First Name</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" value="Rebecca">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 col-sm-3 col-xs-12 control-label">Last Name</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" value="Sanders">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="fieldset">
                                                    <h3 class="fieldset-title"></h3>
                                                    <div class="form-group">
                                                        <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                                            <input type="email" class="form-control" value="">
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2  col-sm-3 col-xs-12 control-label">Twitter</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" value="SpeedyBecky">
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2  col-sm-3 col-xs-12 control-label">Linkedin</label>
                                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                                            <input type="url" class="form-control" value="https://www.linkedin.com/in/lorem">
                                                            <p class="help-block">eg. https://www.linkedin.com/in/yourname</p>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                                        <input class="btn btn-primary" type="submit" value="Update Profile">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>

</body>

@endsection

