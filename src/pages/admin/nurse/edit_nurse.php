<?php
$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];
$user_fname = $_POST['user_fname'];
$user_lname = $_POST['user_lname'];
$user_position = $_POST['user_position'];
$user_tel = $_POST['user_tel'];
$user_email = $_POST['user_email'];
$user_add = $_POST['user_add'];
$user_level = $_POST['user_level'];

  $conn = PDOConnector();

  if ($_POST['user_id']) {
  //echo "UPDATE";
  $result = $conn->prepare("UPDATE users SET
    user_name = :user_name,
    user_pass = :user_pass,
    user_fname = :user_fname,
    user_lname = :user_lname,
    user_position =:user_position,
    user_tel = :user_tel,
    user_email = :user_email,
    user_add = :user_add,
    user_level = :user_level
    WHERE users.user_id = :user_id ;");
  $result ->execute([
    "user_id"=>$_POST['user_id'],
    "user_name"=>$user_name,
    "user_pass"=>$user_pass,
    "user_fname"=>$user_fname,
    "user_lname"=>$user_lname,
    "user_position"=>$user_position,
    "user_tel"=>$user_tel,
    "user_email"=>$user_email,
    "user_add"=>$user_add,
    "user_level"=>$user_level,
  ]);
}
if ($result) {
  echo "<script>
      alert('จัดการข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=nurse/index';
    </script>";
}else {
echo "error";
}
$conn = "";
 ?>
