<?php

$person_chang = $_POST['person_chang'];
$nurse_chang = $_POST['nurse_chang'];
$date_ward = $_POST['date_ward'];
$opt_names = $_POST['opt_names'];

$conn = PDOConnector();
$result = $conn->prepare('INSERT INTO change_ward(person_chang, nurse_chang, date_ward, opt_names) VALUES(:person_chang, :nurse_chang, :date_ward, :opt_names)');
$result ->execute([
  "person_chang"=>$person_chang,
  "nurse_chang"=>$nurse_chang,
  "date_ward"=>$date_ward,
  "opt_names"=>$opt_names

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
