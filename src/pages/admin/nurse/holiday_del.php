<?php
if(isset($_GET['id'])){
//echo "ID= ".$id;
  $conn = PDOConnector();
  $sql = "DELETE FROM holiday WHERE holiday_id=$_GET[id]";
  $query = $conn->prepare($sql);
  $query ->execute();
	}
  if ($query) {
    echo "<script>
        alert('ลบข้อมูลสำเร็จแล้ว');
        window.location = 'dashboard.php?file=admin/nurse/holiday';
      </script>";
  }else {
  echo "ลบข้อมูลไม่สำเร็จ";
  }

	$conn = "";
?>
