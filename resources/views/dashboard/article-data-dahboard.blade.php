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
                                            <td><button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">show</button>

                                                <div id="id01" class="modal">
                                                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                  <form class="modal-content" action="/action_page.php">
                                                    <div class="container">
                                                      <h1>Article</h1>
                                                      <textarea name="" id="" cols="30" rows="10"></textarea>

                                                      <div class="clearfix">
                                                        <button type="button" class="cancelbtn">Edit</button>
                                                        <input type="button" value="Delete " class="deletebtn">
                                                      </div>
                                                    </div>
                                                  </form>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-primary" type="button" value="Delete"><i class="fas fa-trash"></i></button></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td><img src="/public/assets/images/2.jpg" alt=""></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more"> Edit</a></td>
                                            <td><button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">show</button>

                                                <div id="id01" class="modal">
                                                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                  <form class="modal-content" action="/action_page.php">
                                                    <div class="container">
                                                      <h1>Article</h1>
                                                      <textarea name="" id="" cols="30" rows="10"></textarea>

                                                      <div class="clearfix">
                                                        <button type="button" class="cancelbtn">Edit</button>
                                                        <input type="button" value="Delete " class="deletebtn">
                                                      </div>
                                                    </div>
                                                  </form>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-primary" type="button" value="Delete"><i class="fas fa-trash"></i></button></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td><img src="/public/assets/images/2.jpg" alt=""></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more"> Edit</a></td>
                                            <td><button class="btn btn-primary" class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">show</button>

                                                <div id="id01" class="modal">
                                                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                  <form class="modal-content" action="/action_page.php">
                                                    <div class="container">
                                                      <h1>Article</h1>
                                                      <textarea name="" id="" cols="30" rows="10"></textarea>

                                                      <div class="clearfix">
                                                        <button type="button" class="cancelbtn">Edit</button>
                                                        <input type="button" value="Delete " class="deletebtn">
                                                      </div>
                                                    </div>
                                                  </form>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-primary" type="button" value="Delete"><i class="fas fa-trash"></i></button></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td><img src="/public/assets/images/2.jpg" alt=""></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more"> Edit</a></td>
                                            <td><button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">show</button>

                                                <div id="id01" class="modal">
                                                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                  <form class="modal-content" action="/action_page.php">
                                                    <div class="container">
                                                      <h1>Article</h1>
                                                      <textarea name="" id="" cols="30" rows="10"></textarea>

                                                      <div class="clearfix">
                                                        <button type="button" class="cancelbtn">Edit</button>
                                                        <input type="button" value="Delete " class="deletebtn">
                                                      </div>
                                                    </div>
                                                  </form>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-primary" type="button" value="Delete"><i class="fas fa-trash"></i></button></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td><img src="/public/assets/images/2.jpg" alt=""></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><a href="/articleedit-dashb" title="Read More" class="read-more"> Edit</a></td>
                                            <td><button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">show</button>

                                                <div id="id01" class="modal">
                                                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                                  <form class="modal-content" action="/action_page.php">
                                                    <div class="container">
                                                      <h1>Article</h1>
                                                      <textarea name="" id="" cols="30" rows="10"></textarea>

                                                      <div class="clearfix">
                                                        <button type="button" class="cancelbtn">Edit</button>
                                                        <input type="button" value="Delete " class="deletebtn">
                                                      </div>
                                                    </div>
                                                  </form>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-primary" type="button" value="Delete"><i class="fas fa-trash"></i></button></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </main>
        </div>
    </div>

</body>

@endsection
