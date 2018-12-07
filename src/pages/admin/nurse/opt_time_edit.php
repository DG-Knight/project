<?php

  $opt_time_id = $_POST['opt_time_id'];
  $opt_name = $_POST['opt_name'];
  $opt_time = $_POST['opt_time'];
  $conn = PDOConnector();

  if(isset($opt_time_id)){
  //echo "UPDATE";
  $result = $conn->prepare("UPDATE operating_time SET opt_name = :opt_name,
                                                      opt_time = :opt_time
                                                  WHERE operating_time.opt_time_id = :opt_time_id ;");
  $result ->execute(["opt_time_id"=>$opt_time_id,
                     "opt_name"=>$opt_name,
                     "opt_time"=>$opt_time,
                   ]);

  if ($result) {
    echo "<script>
        alert('จัดการข้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=admin/nurse/operating _time';
      </script>";
  }else {
  echo "error";
  }

}else {
  echo "ไม่พบ ID";
}

$conn = "";
 ?>
