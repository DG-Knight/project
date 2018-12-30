<?php

$user_id = $_SESSION['AUTHEN']['UID'];
$inspector_start = $_POST['inspector_start'];
$inspector_end = $_POST['inspector_end'];
$inspector_total = $_POST['inspector_total'];
$inspector_details = $_POST['inspector_details'];


  $conn = PDOConnector();
  $result = $conn->prepare( 'INSERT INTO inspector (user_id, inspector_start, inspector_end, inspector_total, inspector_details) VALUES (:user_id, :inspector_start, :inspector_end, :inspector_total, :inspector_details)');

    $result ->execute([
      "user_id"=>$user_id,
      "inspector_start"=>$inspector_start,
      "inspector_end"=>$inspector_end,
      "inspector_total"=>$inspector_total,
      "inspector_details"=>$inspector_details
    ]);
if ($result) {
  echo "<script>
      alert('จัดการข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=user/inspector';
    </script>";
}else {
echo "error";
}
$conn = "";
?>
