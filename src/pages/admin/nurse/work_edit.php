<?php

  $work_exp_type_id = $_POST['work_exp_type_id'];
  $work_exp = $_POST['work_exp'];
  $time_length = $_POST['time_length'];

  $conn = PDOConnector();

  if(isset($work_exp_type_id)){
  //echo "UPDATE";
  $result = $conn->prepare("UPDATE work_exp_type SET work_exp = :work_exp,
                                                     time_length = :time_length
                                                  WHERE work_exp_type.work_exp_type_id = :work_exp_type_id ;");
  $result ->execute(["work_exp_type_id"=>$work_exp_type_id,
                     "work_exp"=>$work_exp,
                     "time_length"=>$time_length
                   ]);

  if ($result) {
    echo "<script>
        alert('จัดการข้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=admin/nurse/work_exp_type';
      </script>";
  }else {
  echo "error";
  }

}else {
  echo "แก้ไขไม่สำเร็จ";
}

$conn = "";
 ?>
