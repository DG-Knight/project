<?php

$user_id = $_SESSION['AUTHEN']['UID'];
$inspector_start = $_POST['inspector_start'];
$inspector_details = $_POST['inspector_details'];


  $conn = PDOConnector();
  $result = $conn->prepare( 'INSERT INTO inspector (user_id, inspector_start, inspector_details) VALUES (:user_id, :inspector_start, :inspector_details)');

    $result ->execute([
      "user_id"=>$user_id,
      "inspector_start"=>$inspector_start,
      "inspector_details"=>$inspector_details
    ]);
if ($result) {
  echo "<script>
      alert('เพิ่มข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=user/inspector';
    </script>";
}else {
echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conn = "";
?>
