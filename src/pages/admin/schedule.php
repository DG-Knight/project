<?php
require '../../libs/function.php';
CheckAuthenticationAndAuthorization();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Schedule</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../../assets/vendors/iconfonts/font-awesome/css/font-awesome.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<script>
let cha1 = 0;// ช
let cha2 = 0;// บ
let cha3 = 0;// ด
$(document).ready(function(){
  $("#myval2").text("test")

  $("select").blur(function(){
    //alert("ff");

    $("#myval2").text( $(this).attr('name')+$(this).val());
    if($(this).attr('name').substring(2, 3) != 1){
      if($(this).val() =="ช"){//ด กับ ช ไม่ได้
       if(document.getElementsByName($(this).attr('name').substring(0, 2)+($(this).attr('name').substring(2, 3)-1))[0].value == "ด"){
        alert('ไม่ถูกต้องตามเงื่อนไข');
       }else {
        }
      }else if($(this).val() =="ด"){//ด กับ ช ไม่ได้
         if(document.getElementsByName($(this).attr('name').substring(0, 2)+((parseInt($(this).attr('name').substring(2, 3))+1)))[0].value == "ช"){
          alert('ไม่ถูกต้องตามเงื่อนไข');
         }else  {
          }
        }

    }else {

    }
//console.log('test',$(this).attr('name').substring(2, 3));//    .substring(2, 3) || []_1
//console.log('test2',document.getElementsByName($(this).attr('name'))[0].name);//value  name

for(n=1;n<=28;n++){
  cha1 =0;
  cha2 =0;
  cha3 =0;
$("#"+n+"_c").text("ช ="+(cha1));
$("#"+n+"_b").text("บ ="+(cha2));
$("#"+n+"_a").text("ด ="+(cha3));
for(i=1;i<=14;i++){

  if (   document.getElementsByName(i+"_"+n)[0].value =="ช"){
      cha1++;
  $("#"+n+"_c").text("ช ="+(cha1));


  }
  else if (   document.getElementsByName(i+"_"+n)[0].value =="บ"){
      cha2++;
    $("#"+n+"_b").text("บ ="+(cha2));


  }else if (   document.getElementsByName(i+"_"+n)[0].value =="ด"){
      cha3++;
    $("#"+n+"_a").text("ด ="+(cha3));
  }
}
}
  });
});

</script>

<body>

    <br>

  <form method="POST" style="padding-left:50px;">

  	<table>
  		<tr>
  			<td>ระบุเดือน-ปี : </td>
  			<td>
  				<select name="txt_month">
  					<option value="">--ระบุเดือน--</option>
  					<?php
  					$month = array('01' => 'มกราคม', '02' => 'กุมภาพันธ์', '03' => 'มีนาคม', '04' => 'เมษายน',
  									'05' => 'พฤษภาคม', '06' => 'มิถุนายน', '07' => 'กรกฎาคม', '08' => 'สิงหาคม',
  									'09' => 'กันยายน ', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
  					$txtMonth = isset($_POST['txt_month']) && $_POST['txt_month'] != '' ? $_POST['txt_month'] : date('m');
  					foreach($month as $i=>$mName) {
  						$selected = '';
  						if($txtMonth == $i) $selected = 'selected="selected"';
  						echo '<option value="'.$i.'" '.$selected.'>'. $mName .'</option>'."\n";
  					}
  					?>
  				</select>
  			</td>

  			<td>
  				<select name="txt_year">
  					<option value="">--ระบุปี--</option>
  					<?php
  					$txtYear = (isset($_POST['txt_year']) && $_POST['txt_year'] != '') ? $_POST['txt_year'] : date('Y');

  					$yearEnd <= date('Y');
  					$yearStart = $txtYear +3;

  					for($year=$yearStart;$year > $yearEnd;$year--){
  						$selected = '';
  						if($txtYear == $year) $selected = 'selected="selected"';
  						echo '<option value="'.$year.'" '.$selected.'>'. ($year+543) .'</option>'."\n";
  					}
  					?>
  				</select>
  			</td>

  			<td><input type="submit" value="ค้นหา" id="myval" name=""></td>
       <td><input type="submit" name="" value="save"><label id="myval2">sss</label></td>

  		</tr>

  	</table>
<br>


  <ul class="list-inline">
    <h6 class="text-danger list-inline-item">*ช = เช้า</h6>
    <h6 class="text-danger list-inline-item">*บ = บ่าย</h6>
    <h6 class="text-danger list-inline-item">*ด = ดึก</h6>
    <h6 class="text-danger list-inline-item">*v = ลาพักร้อน</h6>
    <h6 class="text-danger list-inline-item">*s2 = ผู้ตรวจการ</h6>
  </ul>
  </form>


  <form  method="POST" style="overflow:auto;" action="test.php" >
<div class="button-center"style="padding-left:10px;">

  <input type="submit" name="submit" value="submit" ></div>
  <?php

  //รับค่าตัวแปรที่ส่งมาจากแบบฟอร์ม HTML
  $year = isset($_POST['txt_year']) ? ($_POST['txt_year']) : '';
  $month = isset($_POST['txt_month']) ?($_POST['txt_month']) : '';

  if($year == '' || $month == '');

  echo "<br><table border='1'cellpadding='2' >";
  echo '<tr>';//เปิดแถวใหม่ ตาราง HTML
  echo '<th>No</th>';
  echo '<th > ชื่อ - นามสกุล </th>';





  function CheckPublicHoliday($strChkDate)
	{
    $conn = PDOConnector();
    $sql="select * from holiday where publicholiday = '".$strChkDate."' ";
    $query = $conn->prepare($sql);
    $query ->execute();
    $row=$query -> fetch(PDO::FETCH_OBJ);
		if(!$row)
		{
			return false;
		}
		else
		{
			return true;
		}

	}
  //วันที่สุดท้ายของเดือน

  $timeDate = strtotime($year.'-'.$month."-01");  //เปลี่ยนวันที่เป็น timestamp
  $lastDay = date("t", $timeDate);   				//จำนวนวันของเดือน
  echo '<input type="hidden" name="numday" id="numday" value="'.$lastDay.'">';

  //สร้างหัวตารางตั้งแต่วันที่ 1 ถึงวันที่สุดท้ายของดือน
  $strStartDate = $year."-".$month."-"."01" ;
  $strEndDate = $year."-".$month."-".$lastDay;
  $intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60 * 24 )) + 1;
  $intWorkDay = 0;
  $intHoliday = 0;
  $intPublicHoliday = 0;
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
    else if(CheckPublicHoliday($strStartDate))
    {
    $intPublicHoliday++;
    echo "<th bgcolor=orange><center><font color=white>".$i++."</font></center></th>";

    }

    else
		{
			$intWorkDay++;
			echo "<th><center><b>".$i++."</b></center></th>";
		}
		//$DayOfWeek = date("l", strtotime($strStartDate)); // return Sunday, Monday,Tuesday....

		$strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));

	}
  //$str = array("เช้า","่บ่าย","ดึก","ชั่วโมง","รวม");
  //$arrlength = count($str);
  //for ($i=0; $i <$arrlength ; $i++) {
  //  echo "<th>".$str[$i]."</th>";
//  }
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
    <!--ชื่อ-นามสกุล-->
      <td><?=$j++ ?></td>
      <td  widht="100%"  align="center"><?=$data->user_fname;?>&nbsp<?=$data->user_lname;?></td>


      <?php
      for($i=1;$i<=$lastDay;$i++){

        //$data->user_id."_".$i = 'ช';
        $nametable =$data->user_id."_".$i;


        // }
        $d = substr("0".$i,-2);
        echo "<td>";
        echo "<select style='font-size:9pt;'name='".$nametable."' >";
        echo "<option value='-'>-";
        echo "<option value='ช'>ช";
        echo "<option value='บ'>บ ";
        echo "<option value='ด'>ด";
        echo "<option value='0'>0";
        echo "<option value='V'>V";
        echo "<option value='s2'>s2";
        echo "</select>";
        echo "</td>";

      }
      ?>
    <!--  <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
-->

  </tr>
<?php }} ?>

<tr>

<!--  -ช------------->
<td ></td>
<td align="center">เช้า</td>
<td><label id="1_c">ช = 0</label></td>
<td><label id="2_c">ช = 0</label></td>
<td><label id="3_c">ช = 0</label></td>
<td><label id="4_c">ช = 0</label></td>
<td><label id="5_c">ช = 0</label></td>
<td><label id="6_c">ช = 0</label></td>
<td><label id="7_c">ช = 0</label></td>
<td><label id="8_c">ช = 0</label></td>
<td><label id="9_c">ช = 0</label></td>
<td><label id="10_c">ช = 0</label></td>
<td><label id="11_c">ช = 0</label></td>
<td><label id="12_c">ช = 0</label></td>
<td><label id="13_c">ช = 0</label></td>
<td><label id="14_c">ช = 0</label></td>
<td><label id="15_c">ช = 0</label></td>
<td><label id="16_c">ช = 0</label></td>
<td><label id="17_c">ช = 0</label></td>
<td><label id="18_c">ช = 0</label></td>
<td><label id="19_c">ช = 0</label></td>
<td><label id="20_c">ช = 0</label></td>
<td><label id="21_c">ช = 0</label></td>
<td><label id="22_c">ช = 0</label></td>
<td><label id="23_c">ช = 0</label></td>
<td><label id="24_c">ช = 0</label></td>
<td><label id="25_c">ช = 0</label></td>
<td><label id="26_c">ช = 0</label></td>
<td><label id="27_c">ช = 0</label></td>
<td><label id="28_c">ช = 0</label></td>
      <!-- <td >
        <label id="29_c">ช = 0</label>
      </td>
      <td>
        <label id="30_c">ช = 0</label>
      </td>
      <td>
        <label id="31_c">ช = 0</label>
      </td> -->
</tr>

<!--  -บ------------->
<tr>
  <td></td>
  <td align="center">บ่าย</td>
<td><label id="1_b">บ = 0</label></td>
<td><label id="2_b">บ = 0</label></td>
<td><label id="3_b">บ = 0</label></td>
<td><label id="4_b">บ = 0</label></td>
<td><label id="5_b">บ = 0</label></td>
<td><label id="6_b">บ = 0</label></td>
<td><label id="7_b">บ = 0</label></td>
<td><label id="8_b">บ = 0</label></td>
<td><label id="9_b">บ = 0</label></td>
<td><label id="10_b">บ = 0</label></td>
<td><label id="11_b">บ = 0</label></td>
<td><label id="12_b">บ = 0</label></td>
<td><label id="13_b">บ = 0</label></td>
<td><label id="14_b">บ = 0</label></td>
<td><label id="15_b">บ = 0</label></td>
<td><label id="16_b">บ = 0</label></td>
<td><label id="17_b">บ = 0</label></td>
<td><label id="18_b">บ = 0</label></td>
<td><label id="19_b">บ = 0</label></td>
<td><label id="20_b">บ = 0</label></td>
<td><label id="21_b">บ = 0</label></td>
<td><label id="22_b">บ = 0</label></td>
<td><label id="23_b">บ = 0</label></td>
<td><label id="24_b">บ = 0</label></td>
<td><label id="25_b">บ = 0</label></td>
<td><label id="26_b">บ = 0</label></td>
<td><label id="27_b">บ = 0</label></td>
<td><label id="28_b">บ = 0</label></td>
                      <!-- <td>
                        <label id="29_b">บ = 0</label>
                      </td>
                         <td>
                          <label id="30_b">บ = 0</label>
                        </td>
                        <td>
                         <label id="31_b">บ = 0</label>
                       </td> -->
</tr>

<!--  -///ด------------->
<tr>
<td></td>
<td align="center">ดึก</td>
<td><label id="1_a">ด = 0</label></td>
<td><label id="2_a">ด = 0</label></td>
<td><label id="3_a">ด = 0</label></td>
<td><label id="4_a">ด = 0</label></td>
<td><label id="5_a">ด = 0</label></td>
<td><label id="6_a">ด = 0</label></td>
<td><label id="7_a">ด = 0</label></td>
<td><label id="8_a">ด = 0</label></td>
<td><label id="9_a">ด = 0</label></td>
<td><label id="10_a">ด = 0</label></td>
<td><label id="11_a">ด = 0</label></td>
<td><label id="12_a">ด = 0</label></td>
<td><label id="13_a">ด = 0</label></td>
<td><label id="14_a">ด = 0</label></td>
<td><label id="15_a">ด = 0</label></td>
<td><label id="16_a">ด = 0</label></td>
<td><label id="17_a">ด = 0</label></td>
<td><label id="18_a">ด = 0</label></td>
<td><label id="19_a">ด = 0</label></td>
<td><label id="20_a">ด = 0</label></td>
<td><label id="21_a">ด = 0</label></td>
<td><label id="22_a">ด = 0</label></td>
<td><label id="23_a">ด = 0</label></td>
<td><label id="24_a">ด = 0</label></td>
<td><label id="25_a">ด = 0</label></td>
<td><label id="26_a">ด = 0</label></td>
<td><label id="27_a">ด = 0</label></td>
<td><label id="28_a">ด = 0</label></td>
<!-- <td><label id="29_a">ด = 0</label></td>
<td><label id="30_a">ด = 0</label></td>
<td><label id="31_a">ด = 0</label></td> -->
</tr>

</table >

</form>

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
