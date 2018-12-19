<?php

  $training_id = $_POST['training_id'];
  //$user_id = $_POST['user_id'];
  $training_start = $_POST['training_start'];
  $training_end = $_POST['training_end'];
  $training_total = $_POST['training_total'];
  $training_location = $_POST['training_location'];
  $training_details = $_POST['training_details'];

  $conn = PDOConnector();

  if(isset($training_id)){
  //echo "UPDATE";
  $result = $conn->prepare("UPDATE training SET training_start = :training_start,
                                                     training_end = :training_end,
                                                     training_total = :training_total,
                                                     training_location = :training_location,
                                                     training_details = :training_details

                                                  WHERE training.training_id = :training_id ;");
  $result ->execute(["training_id"=>$training_id,
                    // "user_id"=>$user_id,
                     "training_start"=>$training_start,
                     "training_end"=>$training_end,
                     "training_total"=>$training_total,
                     "training_location"=>$training_location,
                     "training_details"=>$training_details

                   ]);

  if ($result) {
    echo "<script>
        alert('จัดการข้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=user/training';
      </script>";
  }else {
  echo "error";
  }

}else {
  echo "แก้ไขไม่สำเร็จ";
}

$conn = "";
 ?>
