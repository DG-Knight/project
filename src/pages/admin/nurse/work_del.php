<?php
if(isset($_GET['id'])){
//echo "ID= ".$id;
  $conn = PDOConnector();
  $sql = "DELETE FROM work_exp_type WHERE work_exp_type_id=$_GET[id]";
  $query = $conn->prepare($sql);
  $query ->execute();
	}
  if ($query) {
    echo "<script>
        alert('Delete Success');
        window.location = 'dashboard.php?file=admin/nurse/work_exp_type';
      </script>";
  }else {
  echo "error";
  }

	$conn = "";
?>
