<?php

$user_id = $_SESSION['AUTHEN']['UID'];
$inspector_start = $_POST['inspector_start'];
$inspector_details = $_POST['inspector_details'];
$scd_date = $_POST['scd_date'];
$scd_name = $_POST['scd_name'];



  $conn = PDOConnector();
  $result = $conn->prepare( 'INSERT INTO inspector (user_id, inspector_start, inspector_details) VALUES (:user_id, :inspector_start, :inspector_details)');

    $result ->execute([
      "user_id"=>$user_id,
      "inspector_start"=>$inspector_start,
      "inspector_details"=>$inspector_details
    ]);
    $conn2 = PDOConnector();
    $result2 = $conn2->prepare( 'insert INTO schedules (user_id, scd_date, scd_name) VALUES (:user_id, :scd_date, :scd_name)');

      $result2 ->execute([
        "user_id"=>$user_id,
        "scd_date"=>$scd_date,
        "scd_name"=>$scd_name

      ]);

if ($result2) {
  echo "<script>
      alert('เพิ่มข้อมูลสำเร็จแล้ว');
window.location = 'dashboard.php?file=user/inspector';
    </script>";
}else {
echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conn = "";
?>
