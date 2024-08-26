<?php
      session_start();
      
      // Include koneksi
      include "connect.php";
      
      // Get user detail
      $username = $_SESSION['username'];
      $query = "SELECT * FROM user WHERE username = ? LIMIT 1";
      $stmt = $stmt = $koneksi->prepare($query);
      
      // Check if the prepare statement is successful
      if ($stmt) {
          $stmt->bind_param('s', $username);
          $stmt->execute();
          $result = $stmt->get_result();
          $user = $result->fetch_array(MYSQLI_ASSOC);
      } else {
          // Handle the error if the prepare statement fails
          $_SESSION['error'] = "Failed to prepare statement.";
      }
      
      ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Users / Profile - SchoolNews Bootstrap Template</title>
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
    * Template Name: SchoolNews
    * Updated: Nov 17 2023 with Bootstrap v5.3.2
    * Template URL: https://Admin.com/nice-admin-bootstrap-admin-html-template/
    * Author: Admin.com
    * License: https://Admin.com/license/
    ======================================================== -->
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="">
          <span class="d-none d-lg-block">SchoolNews</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End Search Bar -->

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
          <a class="nav-link collapsed" href="dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->


        <!-- Tables Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="upload.php">
                        <i class="bi bi-circle"></i><span>Upload</span>
                    </a>
                </li>
                <li>
                    <a href="Edit&Delete.php">
                        <i class="bi bi-circle"></i><span>Edit & Delete</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <!-- Account Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#account-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span>Account</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="account-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="profile.php">
                        <i class="bi bi-circle"></i><span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="account_user.php">
                        <i class="bi bi-circle"></i><span>Account User</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Account Nav -->
              
      <li class="nav-item">
        <a class="nav-link collapsed" href="aprov_berita.php">
          <i class="bi bi-check-square"></i>
          <span>aprov_berita Content</span>
        </a>
      </li>

      <li class="nav-heading">Account</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="register.php">
          <i class="bi bi-card-list"></i>
          <span>Create New Account</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-right"></i>
          <span>Log out</span>
        </a>
      </li><!-- End Login Page Nav -->

      </ul>

    </aside><!-- End Sidebar-->

    <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="berita.html">Home</a></li>
        <li class="breadcrumb-item active">Account</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div>

      
  <main id="main" class="main">

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Account User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Datatables</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped small-table" id="userTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Level</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Include your database connection code
                            include "connect.php";
                            $sql = "SELECT * FROM user";
                            $result = mysqli_query($koneksi, $sql);
                            $no = 0;
                            if (!$result) {
                                die("Database query failed: " . mysqli_error($koneksi));
                            }

                            while ($data = mysqli_fetch_assoc($result)) {
                                $no++;
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data["nama"]; ?></td>
                                    <td><?php echo $data["username"]; ?></td>
                                    <td><?php echo $data["level"]; ?></td>
                                    <td align="center">
                                        <a class="btn btn-primary" href="edit_user.php?id=<?php echo $data['id']; ?>">Edit</a>
                                        <a class="btn btn-danger btn-hapus" href="delete_user.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
          <!-- End Table with stripped rows --> 
          <div class="row align-items-center">
    <div class="col">
        <a href="tambah_akun.php" class="btn btn-primary" role="button">Tambah Akun</a>
    </div>
    <div class="col text-center">
        <a href="datake_word.php" class="btn btn-primary" role="button">Download Ms.Word</a>
    </div>
    <div class="col text-end">
        <a href="datake_excel.php" class="btn btn-primary" role="button">Download Ms.Excel</a>
    </div>
</div>

        </div>
      </div>

    </div>
  </div>
</section>

</main>



<!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>School News</span></strong>.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://Admin.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://Admin.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://Admin.com/">Admin</a>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable();
        });
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>