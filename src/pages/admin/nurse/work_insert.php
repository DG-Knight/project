<?php

$work_exp = $_POST['work_exp'];
$time_length = $_POST['time_length'];


  $conn = PDOConnector();
  $result = $conn->prepare('INSERT INTO work_exp_type(work_exp, time_length) VALUES(:work_exp, :time_length)');
  $result ->execute([
    "work_exp"=>$work_exp,
    "time_length"=>$time_length

  ]);
if ($result) {
  echo "<script>
      alert('จัดการข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=admin/nurse/work_exp_type';
    </script>";
}else {
echo "error";
}
$conn = "";
?>
