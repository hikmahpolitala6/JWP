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
  <link href="assets/img/logo2.png" rel="icon">
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

       
          
        <li class="nav-item dropdown pe-3">

          

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              
          
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
            <li>
                <a class="dropdown-item d-flex align-items-center" 
                href="../profile.php?id_akun=<?php echo $_SESSION['id_akun']?>">
                  <i class="bi bi-person"></i>
                  <span>Profil</span>
                </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../login/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="index.php">
            <i class="bi bi-grid"></i>
            <span>Beranda</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

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
          
       
        <!-- End Profile Page Nav -->
      </ul>
    </aside>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Persegi</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- General Form Elements -->
              <form method="POST" action="" role="form">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Sisi Persegi</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="sisi_persegi"
                    id="example-text-input" required>
                  </div>
                </div>
               
               
              
                <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <button type="submit" name="simpan" class="btn btn-success">Hitung</button>
                    <input type="button" value="History" class="btn btn-info" 
                    onclick="window.location.href='persegi_luas.txt'" /> <!-- Hasil Perhitungan Luas Persegi-->
           
                   
                  </div>
                </div>

              </form><!-- End General Form Elements -->
             <?php 
                                        if (isset($_POST['simpan'])){ //melakukan pengecekan klik tombol simpan atau tidak
                                            include('koneksi.php'); //memanggil file koneksi_basisdata.php untuk menghubungkan basis data
                                            $sisi_persegi = $_POST['sisi_persegi']; // menyimpan masukan nilai sisi persegi ke dalam variabel
                                            

                                            $tanggal = date('Y-m-d'); //menyimpan tanggal saat ini pada variabel tanggal
                                            $jam = date('h:i:s'); // menyimpan waktu (timestamp) pada variabel jam
                                        

                                        //fungsi untuk menghitung luas persegi
                                        function luas_persegi($sisi_persegi) { //nama function luas_persegi menangkap nilai pada kedua variabel yaitu pada nilai sisi persegi
                                            $luas = ($sisi_persegi * $sisi_persegi);//rumus luas persegi yaitu sisi kali sisi
                                            return $luas; //mengembalikan nilai perhitungan luas
                                        }

                                        //menyimpan perhitungan luas segitiga pada file TXT
                                        $file = fopen("persegi_luas.txt","w");

fwrite($file, //proses penulisan pada file txt
'=============================================================================
                HASIL PERHITUNGAN LUAS PERSEGI ANDA
=============================================================================
Tanggal Perhitungan     : '. $tanggal.' 
Jam Perhitungan         : '. $jam. ' 
Sisi Persegi            : '. $sisi_persegi. ' 
Rumus Luas Persegi      : Sisi x Sisi
                          '. $sisi_persegi. ' x '. $sisi_persegi. ' 
Luas Persegi            : '. luas_persegi($sisi_persegi));
fclose($file);

                                        $querypersegi = mysqli_query($koneksi, "SELECT * FROM bangun_ruang WHERE bangun_ruang='persegi'") 
                                        or die(mysqli_error($koneksi)); //query menampilkan bangun_ruang: persegi
                                        $data = mysqli_fetch_array($querypersegi); //variable data berisikan mysqli array
                                        $persegi = $data['jumlah']; //mengambil data jumlah 
                                        $qty = $persegi + 1; //data jumlah+1 pada qty

                                        mysqli_query($koneksi, "UPDATE bangun_ruang SET jumlah='$qty' WHERE bangun_ruang='persegi'") 
                                        or die(mysqli_error($koneksi)); //query update qty
                                        
                                        ?>


                                       
                                
                                    <div class="card-header"><h5>Hasil Perhitungan Luas Persegi</h5></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                           <h3 class="text-center title-2" name="luas">
                                               <?php echo luas_persegi($sisi_persegi)?></h3> <!-- Hasil Perhitungan Luas Persegi-->

                                        </div>
                                        <hr>
                                    </div>
                                    <?php } ?>
                                
                            


            </div>
          </div>

        </div>

      
          </div>

        </div>
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