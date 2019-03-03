<?php
if(isset($_GET['id'])){
//echo "ID= ".$id;
  $conn = PDOConnector();
  $sql = "DELETE FROM change_ward WHERE change_ward_id=$_GET[id]";
  $query = $conn->prepare($sql);
  $query ->execute();
	}
  if ($query) {
    echo "<script>
        alert('ลบข้อมูลสำเร็จเเล้ว');
        window.location = 'dashboard.php?file=user/change_ward';
      </script>";
  }else {
  echo "ลบข้อมูลไม่สำเร็จ";
  }

	$conn = "";
?>
