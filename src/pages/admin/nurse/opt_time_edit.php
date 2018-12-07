<?php

$opt_name = $_POST['opt_name'];
$opt_time = $_POST['opt_time'];


  $conn = PDOConnector();

  if(isset($_POST["opt_time_id"]) {
  //echo "UPDATE";
  $sql = "REPLACE INTO `operating_time` (`opt_time_id`, `opt_name`, `opt_time`) VALUES
  (`$opt_time_id`, '$opt_name', '$opt_time')";
  $result = $conn->prepare($sql);
  $result ->execute();
  
}
if ($result) {
  echo "<script>
      alert('จัดการข้อมูลสำเร็จแล้ว');

    </script>";
}else {
echo "error";
}
$conn = "";
 ?>
