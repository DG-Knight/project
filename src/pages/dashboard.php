<?php
require '../libs/function.php';
CheckAuthenticationAndAuthorization();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../assets/vendors/iconfonts/font-awesome/css/font-awesome.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">

    <?php include '../layouts/header.php'; ?>

    <div class="container-fluid page-body-wrapper">
      <?php include '../layouts/menu.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <?php // ทำเว็บหน้าเดี่ยว
              if(isset($_GET['file'])){
                $app_file = $_GET['file'].'.php';
                  if(is_file($app_file)){
                    include_once($app_file);
                  }else{
                    include_once('../layouts/error-404.php');
                    //echo 'Page Not Found 404';
                  }
              }else{
                //include_once('main.php');
              }
            ?>

          </div><!-- end col-12 grid-margin-->
        </div><!-- end content-wrapper-->
      </div><!-- end main-panel-->
    </div>

  </div>


  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
