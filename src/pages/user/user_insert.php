<?php
require '../public/function.php';

@$leave_id = $_POST['leave_id'];
@$user_id = $_POST['user_id'];
$leave_type_id = $_POST['leave_type_id'];
$date1 = date("Y-m-d");
$total = $_POST['total'];

  $conn = PDOConnector();

  if ($leave_id!='') {
  echo "UPDATE";
  //ดึงข้อมูล
  //$sql = "SELECT * FROM users WHERE user_id=$user_id";
  //$query = $conn->prepare($sql);
  //$query ->execute();
  //$row=$query -> fetch(PDO::FETCH_OBJ);
  //Update
//  $sql = "REPLACE INTO `leave` (`user_id`, `user_name`, `user_pass`, `user_fname`, `user_lname`, `user_position`, `user_tel`, `user_email`, `user_add`, `user_level`) VALUES
//($user_id, '$user_name', '$user_pass', '$user_fname', '$user_lname', '$user_position', '$user_tel', '$user_email', '$user_add', 1)";
//echo "$sql";
//  $result = $conn->prepare($sql);
  //$result ->execute();
}else {


  $sql = "INSERT INTO `leave` (`leave_id`, `user_id`, `leave_type_id`, `leave_start`, `leave_end`, `total`) VALUES
(null, null, '$leave_type_id', '$date1', '$date1', '$total')";
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
