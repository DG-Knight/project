<?php

$user_name = $_POST['user_name'];
$user_pass = md5($_POST['user_pass']);
$user_fname = $_POST['user_fname'];
$user_lname = $_POST['user_lname'];
$user_position = $_POST['user_position'];
$user_tel = $_POST['user_tel'];
$user_email = $_POST['user_email'];
$user_add = $_POST['user_add'];
$user_level = $_POST['user_level'];

$conn = PDOConnector();
$hack = "SELECT * FROM users where user_name ='$user_name'";
$result= $conn->prepare($hack);
$result->execute();
if ($result->rowCount()>0) {
  echo "<script>
      alert('มีข้อมูลอยูแล้ว');
      window.location = 'dashboard.php?file=admin/nurse/n_personals_form';
    </script>";
}else {

  $conn = PDOConnector();
  $result = $conn->prepare('INSERT INTO users(user_name, user_pass, user_fname, user_lname, user_position, user_tel, user_email, user_add, user_level) VALUES(:user_name, :user_pass, :user_fname, :user_lname, :user_position, :user_tel, :user_email, :user_add, :user_level)');
  $result ->execute([
    "user_name"=>$user_name,
    "user_pass"=>md5($user_pass),
    "user_fname"=>$user_fname,
    "user_lname"=>$user_lname,
    "user_position"=>$user_position,
    "user_tel"=>$user_tel,
    "user_email"=>$user_email,
    "user_add"=>$user_add,
    "user_level"=>$user_level
  ]);

if ($result) {
  echo "<script>
      alert('เพิ่มข้อมูลสำเร็จแล้ว');
      window.location = 'dashboard.php?file=admin/nurse/n_personals';
    </script>";
}else {
echo "เพิ่มข้อมูลไม่สำเร็จ";
}
}
$conn = "";
?>
