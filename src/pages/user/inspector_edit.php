<?php

  $inspector_id = $_POST['inspector_id'];
  //$user_id = $_POST['user_id'];
  $inspector_start = $_POST['inspector_start'];
  $inspector_end = $_POST['inspector_end'];
  $inspector_total = $_POST['inspector_total'];
  $inspector_details = $_POST['inspector_details'];

  $conn = PDOConnector();

  if(isset($inspector_id)){
  //echo "UPDATE";
  $result = $conn->prepare("UPDATE inspector SET inspector_start = :inspector_start,
                                                     inspector_end = :inspector_end,
                                                     inspector_total = :inspector_total,
                                                     inspector_details = :inspector_details
                                                  WHERE inspector.inspector_id = :inspector_id ;");
  $result ->execute(["inspector_id"=>$inspector_id,
                    // "user_id"=>$user_id,
                     "inspector_start"=>$inspector_start,
                     "inspector_end"=>$inspector_end,
                     "inspector_total"=>$inspector_total,
                     "inspector_details"=>$inspector_details

                   ]);

  if ($result) {
    echo "<script>
        alert('จัดการข้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=user/inspector';
      </script>";
  }else {
  echo "error";
  }

}else {
  echo "แก้ไขไม่สำเร็จ";
}

$conn = "";
 ?>
