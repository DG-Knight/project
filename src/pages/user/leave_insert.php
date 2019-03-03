<?php

$user_id = $_SESSION['AUTHEN']['UID'];
$leave_type_id = $_POST['leave_type_id'];
$leave_start = $_POST['leave_start'];
$leave_end = $_POST['leave_end'];

  $conn = PDOConnector();
  $result = $conn->prepare( 'INSERT INTO leaves (user_id, leave_type_id, leave_start, leave_end) VALUES (:user_id, :leave_type_id, :leave_start, :leave_end)');

    $result ->execute([
      "user_id"=>$user_id,
      "leave_type_id"=>$leave_type_id,
      "leave_start"=>$leave_start,
      "leave_end"=>$leave_end

    ]);
if ($result) {
  echo "<script>
      alert('เพิ่มข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=user/leave';
    </script>";
}else {
echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conn = "";
?>
