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
        alert('Delete Success');
        window.location = 'dashboard.php?file=user/inspector';
      </script>";
  }else {
  echo "error";
  }

	$conn = "";
?>
