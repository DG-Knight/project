<?php

  $leave_id = $_POST['leave_id'];
  //$user_id = $_POST['user_id'];
  $leave_type_id = $_POST['leave_type_id'];
  $leave_start = $_POST['leave_start'];
  $leave_end = $_POST['leave_end'];


  $conn = PDOConnector();

  if(isset($leave_id)){
  //echo "UPDATE";
  $result = $conn->prepare("UPDATE leaves SET leave_type_id = :leave_type_id,
                                                     leave_start = :leave_start,
                                                     leave_end = :leave_end
                                                  WHERE leaves.leave_id = :leave_id ;");
  $result ->execute(["leave_id"=>$leave_id,
                    // "user_id"=>$user_id,
                     "leave_type_id"=>$leave_type_id,
                     "leave_start"=>$leave_start,
                     "leave_end"=>$leave_end


                   ]);

  if ($result) {
    echo "<script>
        alert('แก้ไขข้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=user/leave';
      </script>";
  }else {
  echo "error";
  }

}else {
  echo "แก้ไขไม่สำเร็จ";
}

$conn = "";
 ?>
