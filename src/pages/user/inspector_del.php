<?php
if(isset($_GET['id'])){
//echo "ID= ".$id;
  $conn = PDOConnector();
  $sql = "DELETE FROM inspector WHERE inspector_id=$_GET[id]";
  $query = $conn->prepare($sql);
  $query ->execute();
	}
  if ($query) {
    echo "<script>
        alert('ลบข้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=user/inspector';
      </script>";
  }else {
  echo "ลบข้อมูลไม่สำเร็จ";
  }

	$conn = "";
?>
