<?php
require '../public/function.php';
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
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/font-awesome.css">
  <!-- End plugin css for this page -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="jquery/themes/ui.datepicker.css">
  <script src="jquery/jquery-1.2.6.js"></script>
  <script src="jquery/ui/ui.datepicker.js"></script>


</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="alert alert-primary"> สวัสดี, <?php echo $_SESSION['AUTHEN']['FNAME']."&nbsp".$_SESSION['AUTHEN']['LNAME']?> !</span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>

              <a href="#" class="dropdown-item">
                Change Password
              </a>

              <a href="../logout.php" class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION['AUTHEN']['FNAME']."&nbsp".$_SESSION['AUTHEN']['LNAME']?></p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- user -->
            <?php if ($_SESSION['AUTHEN']['LEVEL']==1) { ?>
          <li class="nav-item">
            <a class="nav-link" href="../user/inspector.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">ผู้ตราจการ</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../user/leaflet.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">การลา</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../user/training.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">การอบรม</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">เรียกดูและพิมพ์รายงาน</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">ตารางเวรของพยาบาล/ผู้ช่วย</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">การเข้าเวรของตนเอง</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">การค้างวอร์ด/วอร์ดค้าง ของตนเอง</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">วันหยุดของตนเอง</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">ชั่วโมงการทำงานนอกเวลา(OT)ของตนเอง</a>
                </li>
              </ul>
            </div>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <div class="container-fluid">
        <br><br>
       <div class="page-header" >
        <h3 class="text-center text-primary">--ใบผู้ตรวจการ--</h3>
      </div>
      <br>
      <form action="#" method="post" id="form"style="padding-left:250px;padding-right:100px">
        <div class="form-group row">
          <label for="colFormLabel"  class="col-md-3">วันที่ในการเป็นผู้ตรวจการ</label>
          <div class="col-md-5">
            <input type="text"value="คลิกเพื่อเลือกวันที่" id="Calendar"/>
            <p></p>
            <script type="text/javascript">
      // BeginWebWidget jQuery_UI_Calendar: jQueryUICalendar1
      jQuery("#Calendar").datepicker();

      // EndWebWidget jQuery_UI_Calendar: jQueryUICalendar1
            </script>
          </div>
        </div>


    <div class="form-group row">
    <label for="colFormLabelss" class="col-md-3">รอบที่เป็นผู้ตรวจการ</label>
    <div class="col-md-2">
      <input type="email" class="form-control form-control-ss" id="colFormLabelss" placeholder="************">
    </div>
    </div>

</form>

    </div>

      <!-- plugins:js -->

      <!-- endinject -->
      <!-- Plugin js for this page-->
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="js/off-canvas.js"></script>
      <script src="js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="js/dashboard.js"></script>
      <!-- End custom js for this page-->

      </body>

      </html>
