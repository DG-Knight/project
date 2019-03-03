<?php

  $holiday_id = $_POST['holiday_id'];
  $fisyear = $_POST['fisyear'];
  $publicholiday = $_POST['publicholiday'];
  $description = $_POST['description'];

  $conn = PDOConnector();

  if(isset($holiday_id)){
  //echo "UPDATE";
  $result = $conn->prepare("UPDATE holiday SET fisyear = :fisyear,
                                                    publicholiday = :publicholiday,
                                                    description = :description
                                                  WHERE holiday.holiday_id = :holiday_id ;");
  $result ->execute(["holiday_id"=>$holiday_id,
                     "fisyear"=>$fisyear,
                     "publicholiday"=>$publicholiday,
                     "description"=>$description
                   ]);

  if ($result) {
    echo "<script>
        alert('แก้ไขข้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=admin/nurse/holiday';
      </script>";
  }else {
  echo "error";
  }

}else {
  echo "แก้ไขไม่สำเร็จ";
}

$conn = "";
 ?>
