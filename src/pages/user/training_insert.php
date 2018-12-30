<?php

$user_id = $_SESSION['AUTHEN']['UID'];
$training_start = $_POST['training_start'];
$training_end = $_POST['training_end'];
$training_total = $_POST['training_total'];
$training_location = $_POST['training_location'];
$training_details = $_POST['training_details'];


  $conn = PDOConnector();
  $result = $conn->prepare( 'INSERT INTO training (user_id, training_start, training_end, training_total, training_location, training_details) VALUES (:user_id, :training_start, :training_end, :training_total, :training_location, :training_details)');

    $result ->execute([
      "user_id"=>$user_id,
      "training_start"=>$training_start,
      "training_end"=>$training_end,
      "training_total"=>$training_total,
      "training_location"=>$training_location,
      "training_details"=>$training_details,

    ]);
if ($result) {
  echo "<script>
      alert('จัดการข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=user/training';
    </script>";
}else {
echo "error";
}
$conn = "";
?>
