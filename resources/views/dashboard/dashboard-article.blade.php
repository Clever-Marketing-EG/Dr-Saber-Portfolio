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
                                        <a class="nav-link" href="/home-edit-dashboard">home edit</a>
                                        <a class="nav-link" href="/dashboard-article">Articles</a>
                                        <a class="nav-link" href="register.html">Operations</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                        <a class="nav-link" href="/docview">bio</a>
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

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">


                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Article Data
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table table-bordered" id="dataTable" width="100%" cellspacing="0"">
                                    <table class="table table-hover" id="productname">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Article Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Handle</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>


                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td><img src="/public/assets/images/2.jpg" alt=""></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more"> Edit</a></td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more">show</a></td>
                                            <td><input type="button" value="Delete " class="read-more"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td><img src="/public/assets/images/2.jpg" alt=""></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more"> Edit</a></td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more">show</a></td>
                                            <td><input type="button" value="Delete " class="read-more"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td><img src="/public/assets/images/2.jpg" alt=""></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more"> Edit</a></td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more">show</a></td>
                                            <td><input type="button" value="Delete " class="read-more"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td><img src="/public/assets/images/2.jpg" alt=""></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more"> Edit</a></td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more">show</a></td>
                                            <td><input type="button" value="Delete " class="read-more"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td><img src="/public/assets/images/2.jpg" alt=""></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more"> Edit</a></td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more">show</a></td>
                                            <td><input type="button" value="Delete " class="read-more"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    {{-- <li class="col-md-4 col-sm-4 col-xs-6 photography">
                                        <div class="content-image-block">
                                            <img src="../assets/images/gallery-7.jpg" alt="gallery">
                                            <div class="content-block-hover">
                                                <span>Operation Form</span>
                                                <h5>Happy patient</h5>
                                                <p>description</p>
                                                <a href="#"><i class="fa fa-heart-o"></i>80</a>
                                                <a class="zoom-in" href="../assets/images/gallery-1.jpg"><i class="fa fa-expand"></i></a>
                                                <a href="gallery-single.html"><i class="fa fa-file-text-o"></i></a>
                                            </div>
                                        </div>
                                    </li> --}}
                                    {{-- <li><div class="content-area col-md-8 col-sm-8 col-xs-12">
                                        <div class="type-post">
                                            <div class="entry-cover">
                                                <a title="Blog" href="#">
                                                    <img alt="blog" src="../assets/images/blog-9.jpg" />
                                                </a>
                                                <div class="post-date-bg">
                                                    <div class="post-date">
                                                        18 <span>June</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="latest-news-content">
                                                <div class="entry-header">
                                                    <h3 class="entry-title"><a title="Using the latest medical technology" href="#">Using the latest medical technology</a></h3>
                                                    <div class="entry-meta">
                                                        <div class="byline"><a href="#" title="adminol"><i class="fa fa-user-o"></i>by adminol</a></div>
                                                        <div class="post-time"><a href="#" title="10 minutes ago"><i class="fa fa-clock-o"></i>10 minutes ago</a></div>
                                                        <div class="post-comment"><a href="#" title="4 Comments"><i class="fa fa-commenting-o"></i>4 Comments</a></div>
                                                    </div>
                                                </div>
                                                <div class="entry-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard .</p>
                                                </div>
                                                <a href="#" title="Read More" class="read-more">Read more</a>
                                            </div>
                                        </div>

                                    </div></li> --}}
                                <form method="POST" action="/">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                      </div>
                                      <button>Submit</button>
                                </form>
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>

</body>

@endsection

