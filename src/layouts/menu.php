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
        <a class="nav-link" href="dashboard.php?file=user/personal">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">ข้อมูลส่วนตัว</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php?file=user/inspector">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">ข้อมูลผู้ตรวจการ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php?file=user/leave">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">ข้อมูลการลา</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php?file=user/training">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">ข้อมูลการอบรม</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php?file=user/change_ward">
          <i class="menu-icon mdi mdi-sticker"></i>
          <span class="menu-title">ข้อมูลการเปลี่ยนเวร</span>
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
              <a class="nav-link" target ="_blank"href="admin/report_schedule_user.php">การเข้าเวรของตนเอง</a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/typography.html">วันหยุดของตนเอง</a>
            </li> -->
          </ul>
        </div>
      </li>
      <?php } ?>

      <!--section admin menu-->
            <?php if ($_SESSION['AUTHEN']['LEVEL']==0) { ?>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php?file=admin/nurse/n_personals">
                  <i class="menu-icon mdi mdi-television"></i>
                  <span class="menu-title">ข้อมูลส่วนตัว</span>
                </a>
              </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#basic" aria-expanded="false" aria-controls="basic">
            <i class="menu-icon mdi mdi-content-copy"></i>
            <span class="menu-title">ข้อมูลพื้นฐานของระบบ</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php?file=admin/nurse/index">ข้อมูลพยาบาล</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="dashboard.php?file=admin/nurse/holiday">ข้อมูลวันหยุด</a>
              </li>

            </ul>
          </div>
        </li>

      <li class="nav-item">
        <a class="nav-link" target ="_blank" href="dashboard.php?file=admin/nurse/schedule_yesr">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">ข้อมูลตารางปฏิบัติงาน</span>
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
              <a class="nav-link" target ="_blank" href="admin/report_schedule_a.php"> การเข้าเวรของแต่ละเดือน </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target ="_blank" href="admin/report_leave.php"> การลาแต่ละเดือน </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target ="_blank" href="admin/report_training.php"> การอบรมแต่ละเดือน </a>

            <li class="nav-item">
              <a class="nav-link"target ="_blank"href="admin/report_holiday.php"> วันหยุด </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target ="_blank"href="admin/report_change_ward.php"> การเปลี่ยนเวร </a>
            </li>

          </ul>
        </div>
      </li>
      <?php } ?>

<!--section master menu-->
<?php if ($_SESSION['AUTHEN']['LEVEL']==2) { ?>
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php?file=master/m_personals">
      <i class="menu-icon mdi mdi-television"></i>
      <span class="menu-title">ข้อมูลส่วนตัว</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php?file=admin/nurse/index">
      <i class="menu-icon mdi mdi-television"></i>
      <span class="menu-title">ข้อมูลพยาบาล</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php?file=user/leave">
      <i class="menu-icon mdi mdi-television"></i>
      <span class="menu-title">ข้อมูลการลา</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php?file=user/training">
      <i class="menu-icon mdi mdi-television"></i>
      <span class="menu-title">ข้อมูลการอบรม</span>
    </a>
  </li>
<li class="nav-item">
<a class="nav-link" data-toggle="collapse" href="#basic0" aria-expanded="false" aria-controls="basic0">
<i class="menu-icon mdi mdi-content-copy"></i>
<span class="menu-title">เรียกดูและพิมพ์รายงาน</span>
<i class="menu-arrow"></i>
</a>
<div class="collapse" id="basic0">
<ul class="nav flex-column sub-menu">
  <li class="nav-item">
    <a class="nav-link" target ="_blank" href="admin/report_schedule_a.php">การเข้าเวรของแต่ละเดือน</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" target ="_blank" href="admin/report_schedule_user.php">การเข้าเวรของตนเอง</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" target ="_blank" href="admin/report_leave.php">การลาแต่ละเดือน</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" target ="_blank" href="admin/report_training.php">การอบรมแต่ละเดือน</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" target ="_blank" href="admin/report_holiday.php">วันหยุด</a>

</ul>
</div>
</li>
<?php } ?>

    </ul>
  </nav>
