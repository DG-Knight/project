<!DOCTYPE html>
<html lang="en">

<?php
require '../../libs/function.php';
CheckAuthenticationAndAuthorization();
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin00 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/font-awesome.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

</head>


<body>

    <br>

  
<form style="overflow: auto;">
  <?php

  //รับค่าตัวแปรที่ส่งมาจากแบบฟอร์ม HTML
  $year = isset($_POST['txt_year']) ? ($_POST['txt_year']) : '';
  $month = isset($_POST['txt_month']) ?($_POST['txt_month']) : '';

  if($year == '' || $month == '');

  echo "<table border='1'cellpadding='5'>";
  echo '<tr>';//เปิดแถวใหม่ ตาราง HTML
  echo '<th>No</th>';
  echo '<th>ชื่อ</th>';
  echo '<th>นามสกุล</th>';

  //วันที่สุดท้ายของเดือน
  $timeDate = strtotime($year.'-'.$month."-01");  //เปลี่ยนวันที่เป็น timestamp
  $lastDay = date("t", $timeDate);   				//จำนวนวันของเดือน

  //สร้างหัวตารางตั้งแต่วันที่ 1 ถึงวันที่สุดท้ายของดือน
  $strStartDate = $year."-".$month."-"."01" ;
  $strEndDate = $year."-".$month."-".$lastDay;
  $intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60 * 24 )) + 1;
  $intWorkDay = 0;
  $intHoliday = 0;
  $i = 1;
  while (strtotime($strStartDate) <= strtotime($strEndDate)) {

		$DayOfWeek = date("w", strtotime($strStartDate));
		if($DayOfWeek == 0)  // 0 = Sunday, 6 = Saturday;
		{
			$intHoliday++;
			echo "<th bgcolor=red><center><font color=white>".$i++."</font></center></th>";
		}
    else if($DayOfWeek ==6)
    {
      $intHoliday++;
      echo "<th bgcolor=purple><center><font color=white>".$i++."</font></center></th>";
    }
		else
		{
			$intWorkDay++;
			echo "<th><center><b>".$i++."</b></center></th>";
		}
		//$DayOfWeek = date("l", strtotime($strStartDate)); // return Sunday, Monday,Tuesday....

		$strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
	}
 echo "</tr>";


  ?>
  <?php
  $conn = PDOConnector();
  $sql = 'SELECT * FROM users where user_level != 0';
  $query = $conn->prepare($sql);
  $query->execute();
  if ($query->rowCount()>0) {
    $j = 1;
       while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
  ?>
  <tr>
      <td><?=$j++ ?></td>
      <td><?=$data->user_fname;?></td>
      <td><?=$data->user_lname;?></td>

  </tr>

</form>
<?php }} ?>



<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>
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
