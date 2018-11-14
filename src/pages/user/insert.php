<?php
require '../public/function.php';

@$user_id = $_POST['user_id'];
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

  if ($user_id!='') {
  echo "UPDATE";
  //ดึงข้อมูล
  //$sql = "SELECT * FROM users WHERE user_id=$user_id";
  //$query = $conn->prepare($sql);
  //$query ->execute();
  //$row=$query -> fetch(PDO::FETCH_OBJ);
  //Update
  $sql = "REPLACE INTO `users` (`user_id`, `user_name`, `user_pass`, `user_fname`, `user_lname`, `user_position`, `user_tel`, `user_email`, `user_add`, `user_level`) VALUES
($user_id, '$user_name', '$user_pass', '$user_fname', '$user_lname', '$user_position', '$user_tel', '$user_email', '$user_add', 1)";
//echo "$sql";
  $result = $conn->prepare($sql);
  $result ->execute();
}else {


  $sql = "INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_fname`, `user_lname`, `user_position`, `user_tel`, `user_email`, `user_add`, `user_level`) VALUES
(null, '$user_name', '$user_pass', '$user_fname', '$user_lname', '$user_position', '$user_tel', '$user_email', '$user_add', 1)";
  $result = $conn->prepare($sql);
  $result ->execute();
}
if ($result) {
echo "success";
}else {
echo "error";
}
$conn = "";
?>
