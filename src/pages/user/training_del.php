<?php
if(isset($_GET['id'])){
//echo "ID= ".$id;
  $conn = PDOConnector();
  $sql = "DELETE FROM training WHERE training_id=$_GET[id]";
  $query = $conn->prepare($sql);
  $query ->execute();
	}
  if ($query) {
    echo "<script>
        alert('ลบข้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=user/training';
      </script>";
  }else {
  echo "ลข้อมูลไม่สำเร็จ";
  }

	$conn = "";
?>
