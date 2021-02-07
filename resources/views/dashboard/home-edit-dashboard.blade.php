@extends('dashboard/layoutmaster')
@section('content')
{{-- form1 --}}
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
                        <a class="navbar-brand" href="docview" ><img src="assets/images/logo4.png" alt="Logo"></a>



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
                                        <a class="nav-link" href="dashboard-article">Articles</a>
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



                </div>
                <div id="edit">
                    <h3 class="text-center text-white pt-5">media form</h3>
                    <div class="container">
                        <div id="edit-row" class="row justify-content-center align-items-center">
                            <div id="edit-icolumn" class="col-md-6">
                                <div id="logn-box" class="col-md-12">
                                    <fieldset class="fieldset">

                                        <div class="form-group avatar">
                                            <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                                <img class="img-rounded img-responsive" src="" alt="">
                                            </figure>
                                            <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                                <input type="file" class=" btn  btn-md file-uploader pull-left">
                                            </div>
                                        </div>
                                        <form action="edit-form">
                                            <div class="form-group">
                                                <label for="username" class="text-info">Event name</label><br>
                                                <input type="text" name="username" id="username" class="form-control">
                                            </div>
                                        </form>


                                    </fieldset>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

</body>
@show
