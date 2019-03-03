<?php
if(isset($_GET['id'])){
//echo "ID= ".$id;
  $conn = PDOConnector();
  $sql = "DELETE FROM leaves WHERE leave_id=$_GET[id]";
  $query = $conn->prepare($sql);
  $query ->execute();
	}
  if ($query) {
    echo "<script>
        alert('ลบ้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=user/leave';
      </script>";
  }else {
  echo "ลบข้อมูลไม่สำเร็จ";
  }

	$conn = "";
?>
