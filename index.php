<?php
    require 'koneksi.php';
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pelatihan Uji Kom</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
       
        <span class="d-none d-lg-block">LatihanUjiKom</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

    
       

        

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

     

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="segitiga.php">
              <i class="bi bi-circle"></i><span>Segitiga</span>
            </a>
          </li>
           
          <li>
            <a href="persegi.php">
              <i class="bi bi-circle"></i><span>Persegi</span>
            </a>
          </li>
           <li>
            <a href="lingkaran.php">
              <i class="bi bi-circle"></i><span>Lingkaran</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      

      

      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Beranda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-4">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Menu</h6>
                    </li>

                    <li><a class="dropdown-item" href="segitiga.php">Segitiga</a></li>
                    <li><a class="dropdown-item" href="persegi.php">Persegi</a></li>
                    <li><a class="dropdown-item" href="lingkaran.php">Lingkaran</a></li>
                  </ul>
                </div>

                <div class="card-body">
                 <?php 
							        //untuk menjumlahkan berapa kali melakukan hitungan pada sistem
							        include('koneksi.php');
							        $queryhitung = mysqli_query($koneksi, "SELECT SUM(jumlah) FROM bangun_ruang");
							        $data2=mysqli_fetch_array($queryhitung);
                      $sum= $data2['SUM(jumlah)']; 
                ?> 
            
                  <h5 class="card-title">Total <span>| Keseluruhan</span></h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                      <h6><?= $sum ?></h6>
                      
                 

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-4">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                         <h6>Menu</h6>
                    </li>

                    <li><a class="dropdown-item" href="segitiga.php">Segitiga</a></li>
                    <li><a class="dropdown-item" href="persegi.php">Persegi</a></li>
                    <li><a class="dropdown-item" href="lingkaran.php">Lingkaran</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <?php 
							        
                      include('koneksi.php'); //koneksi basisdata
                      $queryalltot = mysqli_query($koneksi, "SELECT  SUM(jumlah) FROM bangun_ruang");//query menghitung keseluruhan jumlah bangun_ruang (segitiga, persegi & lingkaran)
                      $datasemuabr=mysqli_fetch_array($queryalltot);
                      $totsemua= $datasemuabr['SUM(jumlah)'];
  
                      $querytotsegitiga = mysqli_query($koneksi, "SELECT  jumlah FROM bangun_ruang 
                      WHERE bangun_ruang='segitiga'");//uery mengetahui jumlah segitiga
                      $datasegitiga=mysqli_fetch_array($querytotsegitiga);
                      $totsegitiga= $datasegitiga['jumlah'];
                      
                      $persensegitiga = round((($totsegitiga / $totsemua) * 100),2);//untuk menghitung persentase perhitungan segitiga
                  ?> 
                  <h5 class="card-title">Persentase <span>| Segitiga</span></h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                      <h6><?= $persensegitiga ?> %</h6>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-4">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                         <h6>Menu</h6>
                    </li>

                    <li><a class="dropdown-item" href="segitiga.php">Segitiga</a></li>
                    <li><a class="dropdown-item" href="persegi.php">Persegi</a></li>
                    <li><a class="dropdown-item" href="lingkaran.php">Lingkaran</a></li>
                  </ul>
                </div>
                 
                <div class="card-body">
                  <?php 
							        
                    include('koneksi.php'); //koneksi basisdata
                    $queryalltot = mysqli_query($koneksi, "SELECT  SUM(jumlah) FROM bangun_ruang");//query menghitung keseluruhan jumlah bangun_ruang (segitiga, persegi & lingkaran)
                    $datasemuabr=mysqli_fetch_array($queryalltot);
                    $totsemua= $datasemuabr['SUM(jumlah)'];

                    $querytotpersegi = mysqli_query($koneksi, "SELECT  jumlah FROM bangun_ruang 
                    WHERE bangun_ruang='persegi'");//uery mengetahui jumlah persegi
                    $datapersegi=mysqli_fetch_array($querytotpersegi);
                    $totpersegi= $datapersegi['jumlah'];
                    
                    $persenpersegi = round((($totpersegi / $totsemua) * 100),2);//untuk menghitung persentase perhitungan persegi
                  ?> 
                  <h5 class="card-title">Persentase <span>| Persegi</span></h5>

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3">
                      <h6><?= $persenpersegi?> %</h6>
                      
                   

                    </div>
                  </div>

                </div>
               
              </div>

            </div>

            <div class="col-xxl-3 col-xl-4">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                         <h6>Menu</h6>
                    </li>

                    <li><a class="dropdown-item" href="segitiga.php">Segitiga</a></li>
                    <li><a class="dropdown-item" href="persegi.php">Persegi</a></li>
                    <li><a class="dropdown-item" href="lingkaran.php">Lingkaran</a></li>
                  </ul>
                </div>
                 
                <div class="card-body">
                  <?php 
							        
                      include('koneksi.php'); //koneksi basisdata
                      $queryalltot = mysqli_query($koneksi, "SELECT  SUM(jumlah) FROM bangun_ruang");//query menghitung keseluruhan jumlah bangun_ruang (segitiga, persegi & lingkaran)
                      $datasemuabr=mysqli_fetch_array($queryalltot);
                      $totsemua= $datasemuabr['SUM(jumlah)'];
  
                      $querytotlingkaran = mysqli_query($koneksi, "SELECT  jumlah FROM bangun_ruang WHERE bangun_ruang='lingkaran'");//uery mengetahui jumlah lingkaran
                      $datalingkaran=mysqli_fetch_array($querytotlingkaran);
                      $totlingkaran= $datalingkaran['jumlah'];
                      
                      $persenlingkaran = round((($totlingkaran / $totsemua) * 100),2);//untuk menghitung persentase perhitungan lingkaran
                 ?> 
                  <h5 class="card-title">Persentase <span>| Lingkaran</span></h5>

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3">
                      <h6><?= $persenlingkaran ?> %</h6>
                      
                   

                    </div>
                  </div>

                </div>
               
              </div>

            </div>
            

            <!-- Reports -->
            

            <!-- Recent Sales -->
           

            <!-- Top Selling -->
            
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          

          <!-- Budget Report -->
          

          <!-- Website Traffic -->
          

          <!-- News & Updates Traffic -->
         

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
