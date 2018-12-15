<?php

$fisyear = $_POST['fisyear'];
$publicholiday = $_POST['publicholiday'];
$description = $_POST['description'];


  $conn = PDOConnector();
  $result = $conn->prepare('INSERT INTO holiday(fisyear, publicholiday, description) VALUES(:fisyear, :publicholiday, :description)');
  $result ->execute([
    "fisyear"=>$fisyear,
    "publicholiday"=>$publicholiday,
    "description"=>$description

  ]);
if ($result) {
  echo "<script>
      alert('จัดการข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=admin/nurse/holiday';
    </script>";
}else {
echo "error";
}
$conn = "";
?>
