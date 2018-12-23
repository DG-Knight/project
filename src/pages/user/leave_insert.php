<?php

//$user_id = $_POST['user_id'];
$leave_type_id = $_POST['leave_type_id'];
$leave_start = $_POST['leave_start'];
$leave_end = $_POST['leave_end'];
$total = $_POST['total'];


  $conn = PDOConnector();
  $result = $conn->prepare('INSERT INTO leaves(leave_type_id, leave_start, leave_end, total)VALUES(:leave_type_id, :leave_start, :leave_end, :total)');
  $result ->execute([

    //"user_id"=>$user_id,
    "leave_type_id"=>$leave_type_id,
    "leave_start"=>$leave_start,
    "leave_end"=>$leave_end,
    "total"=>$total

  ]);
if ($result) {
  echo "<script>
      alert('จัดการข้อมูลสำเร็จแล้ว');

    </script>";
}else {
echo "error";
}
$conn = "";
?>
