<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adventureworks</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="extension/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="extension/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="extension/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="extension/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="extension/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="extension/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="extension/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php
    include "side-bar.php";
    require "datadashboard.php";


    $data1 = json_decode($data1, TRUE);
    $data2 = json_decode($data2, TRUE);
    $data3 = json_decode($data3, TRUE);

    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid mt-3">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo $data2[0]["SalesReason"]; ?></h3>

                  <p>Orders Reason</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo $data1[0]["TotalSubTotal"]; ?>$</h3>
                  <p>Penjualan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $data1[0]["MinTahun"]; ?> - <?php echo $data1[0]["MaxTahun"]; ?></h3>

                  <p>AdventureworksData</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo $data3[0]["Group"]; ?></h3>
                  <p>Continent</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <!-- Main row -->
              <div class="row ">
                <!-- Left col -->
                <section class="col-lg-12 mt-4">

                  <div class="card bg-gradient-white">
                    <div class="card-header border-0">
                      <!-- /. tools -->
                      <div class="card-body">
                        <p class="h5 text-bold">Selamat datang di Dashboard Website kami !</p>
                        <p class="text-justify h-6 ">Di sini Anda akan menemukan informasi yang menarik dan berguna tentang penjualan kami. Dashboard ini dilengkapi dengan grafik interaktif yang memvisualisasikan data penjualan berdasarkan sales reason order, kategori baju, sepeda, dan aksesoris pada periode <b>Januari</b> - <b>Juni</b> 2004. Nikmati pengalaman menarik dalam menjelajahi dan memahami tren penjualan kami melalui dashboard yang mudah digunakan ini.</p>
                      </div>
                      <!-- /. tools -->
                    </div>
                  </div>
                </section>
                <!-- right col -->
              </div>
              <!-- /.row (main row) -->

            </div>
            <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="">Kelompok 2</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>www.upnjatim.ac.id</b>
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <script src="extension/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="extension/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="extension/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="extension/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="extension/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="extension/jqvmap/jquery.vmap.min.js"></script>
  <script src="extension/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="extension/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="extension/moment/moment.min.js"></script>
  <script src="extension/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="extension/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="extension/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="extension/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>