<?php

$user_id = $_SESSION['AUTHEN']['UID'];
$training_start = $_POST['training_start'];
$training_end = $_POST['training_end'];
$training_details = $_POST['training_details'];


  $conn = PDOConnector();
  $result = $conn->prepare( 'INSERT INTO training (user_id, training_start, training_end, training_details) VALUES (:user_id, :training_start, :training_end, :training_details)');

    $result ->execute([
      "user_id"=>$user_id,
      "training_start"=>$training_start,
      "training_end"=>$training_end,
      "training_details"=>$training_details

    ]);
if ($result) {
  echo "<script>
      alert('เพิ่มข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=user/training';
    </script>";
}else {
echo "เพิ่ม้อมูลไม่สำเร็จ";
}
$conn = "";
?>
