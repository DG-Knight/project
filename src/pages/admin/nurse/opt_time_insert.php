<?php

$opt_name = $_POST['opt_name'];
$opt_time = $_POST['opt_time'];


  $conn = PDOConnector();
  $result = $conn->prepare('INSERT INTO operating_time(opt_name, opt_time) VALUES(:opt_name, :opt_time)');
  $result ->execute([
    "opt_name"=>$opt_name,
    "opt_time"=>$opt_time

  ]);
if ($result) {
  echo "<script>
      alert('จัดการข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=admin/nurse/operating _time';
    </script>";
}else {
echo "error";
}
$conn = "";
?>
