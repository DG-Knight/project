  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="user-wrapper">
            <div class="profile-image">
              <img src="../../assets/images/faces/face1.jpg" alt="profile image">
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
        <a class="nav-link" href="dashboard.php?file=user/inspector">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">ผู้ตรวจการ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php?file=user/leave">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">การลา</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php?file=user/training">
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

      <!--section admin menu-->
            <?php if ($_SESSION['AUTHEN']['LEVEL']==0) { ?>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#basic" aria-expanded="false" aria-controls="basic">
            <i class="menu-icon mdi mdi-content-copy"></i>
            <span class="menu-title">ข้อมูลพื้นฐานของระบบ</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php?file=admin/nurse/index">ข้อมูลพยาบาล/ผู้ช่วย</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php?file=admin/nurse/work_exp_type">ข้อมูลประเภทอายุงานของพยาบาล</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php?file=admin/nurse/holiday">ข้อมูลวันหยุด</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php?file=admin/nurse/operating _time">ข้อมูลช่วงระยะเวลาการเข้าเวร</a>
              </li>
            </ul>
          </div>
        </li>

      <li class="nav-item">
        <a class="nav-link" target ="_blank" href= "admin/schedule.php">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">ข้อมูลตารางปฏิบัติงาน</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/font-awesome.html">
          <i class="menu-icon mdi mdi-sticker"></i>
          <span class="menu-title">ข้อมูลการเปลี่ยนเวร</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon mdi mdi-restart"></i>
          <span class="menu-title">เรียกดูและพิมพ์รายงาน</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/blank-page.html"> การเข้าเวรของแต่ละวัน/ดือน/ช่วงเวลา </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/login.html"> การลาแต่ละเดือน </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/register.html"> การอบรมแต่ละเดือน </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/error-404.html">การค้างวอร์ด/วอร์ดค้าง </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/error-500.html"> วันหยุด </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/error-500.html"> ชั่วโมงการทำงานนอกเวลา(OT) </a>
            </li>
          </ul>
        </div>
      </li>
      <?php } ?>

<!--section master menu-->
<?php if ($_SESSION['AUTHEN']['LEVEL']==2) { ?>
<li class="nav-item">
<a class="nav-link" data-toggle="collapse" href="#basic0" aria-expanded="false" aria-controls="basic0">
<i class="menu-icon mdi mdi-content-copy"></i>
<span class="menu-title">เรียกดูและพิมพ์รายงาน</span>
<i class="menu-arrow"></i>
</a>
<div class="collapse" id="basic0">
<ul class="nav flex-column sub-menu">
  <li class="nav-item">
    <a class="nav-link" href="pages/ui-features/buttons.html">การเข้าเวรของแต่ละวัน/ดือน/ช่วงเวลา</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pages/ui-features/typography.html">การลาแต่ละเดือน</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pages/ui-features/typography.html">การอบรมแต่ละเดือน</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pages/ui-features/typography.html">การค้างวอร์ด/วอร์ดค้าง</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pages/ui-features/typography.html">วันหยุด</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pages/ui-features/typography.html">ชั่วโมงการทำงานนอกเวลา(OT)</a>
  </li>
</ul>
</div>
</li>
<?php } ?>

    </ul>
  </nav>
