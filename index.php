<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VreegOut- Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="d-sm-flex align-items-center justify-content-between mb-0">
            <h1 class="h1 mb-0 text-gray-800">VreegOut</h1>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - History -->
            <li class="nav-item dropdown no-arrow my-4">
              <a class="d-sm-flex align-items-center justify-content-between mb-0" href="#" role="button">
            <span class="mr-2 d-none d-lg-inline text-gray-800 font-weight-bold">Riwayat Pengguna</span>
            </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">

                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">

                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                  <form class="mr-auto ml-md-0 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                      <h1 class="h5 mb-0 mx-1 my-2 text-gray-800">ID</h1>
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

              <!-- Content Row -->
          <div class="col-xl-8 px-0 mx-0  row">
            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Acrophobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Claustrophobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Lygophobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Hydrophobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Arachnophobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Hemophobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Arsonphobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Aliurophobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Astraphobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <h5 style="text-align:center; color: #2980b9; font-weight : bold">Cenophobia</h5><br>
                  <div class="row">
                    <div class="col-md-4 text-center">
                      Keterikatan <br> 
                      <h4 style="font-weight : bold">2</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Kegembiraan <br> 
                      <h4 style="font-weight : bold">5</h4> 
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Fokus  <br> 
                      <h4 style="font-weight : bold">1,5</h4> 
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-4 text-center">
                      Ketertarikan <br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Relaksasi<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                    <div class="col-md-4 text-center border-left-primary">
                      Stres<br>
                      <h4 style="font-weight : bold">1,5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.14.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.14.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>


<script src="/__/firebase/7.4.0/firebase-database.js"></script>

</body>

</html>
