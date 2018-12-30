<?php
require '../../libs/function.php';

 for ($i = 1; $i <= 14; $i++) {// 15 จำนวนคน
    for ($d = 1; $d <= 31; $d++) {// 31 วัน
      $scd_name = $_POST[$i.'_'.$d]; //แต่ละวัน
      if(  $scd_name  != "-"){
      echo "day ".$i."_".$d.":".$scd_name ;
      echo "<br>";
      $user_id = $i;//$_SESSION['AUTHEN']['UID'];
      $scd_date = date('y-m').'-'.$d;//$_POST['scd_date'];

      $conn = PDOConnector();
      $result = $conn->prepare( 'INSERT INTO schedules (user_id, scd_date, scd_name) VALUES (:user_id, :scd_date, :scd_name)');

        $result ->execute([
          "user_id"=>$user_id,
          "scd_date"=>$scd_date,
          "scd_name"=>$scd_name

        ]);

    }
}
}
$conn = "";
 ?>
