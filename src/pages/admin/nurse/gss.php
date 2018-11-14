<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin00 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/font-awesome.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

</head>

<?php
include '../public/function.php';
?>

<body>

<table width="100%" border="1">
<tr>
  <th>No</th>
  <th>name</th>
  <th>lname</th>
  <?php
    for ($i=1; $i <32 ; $i++) {
      echo "<th>$i";
    }
  ?>
</tr>
<?php
$conn = PDOConnector();
$sql = 'SELECT * FROM users where user_level != 0';
$query = $conn->prepare($sql);
$query->execute();

     while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
?>
<tr>
  <td><? ?></td>
  <td> <?=$data->user_fname;?></td>
    <td><?=$data->user_lname;?></td>
    <?php
      for ($i=1; $i <32 ; $i++) {
        echo "<td>";
        echo "<select>";
        echo "<option value='OK'>OK";
        echo "<option value='AR'>AR";
        echo "</select>";

      }
    ?>
</tr>
<?php } ?>
</table>

<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>
