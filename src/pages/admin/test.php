 <!DOCTYPE html>
 <html lang="en">

 <?php
 require '../../libs/function.php';
 CheckAuthenticationAndAuthorization();

//
//  for ($i = 1; $i <= 14; $i++) {// 15 จำนวนคน
//     for ($d = 1; $d <= 31; $d++) {// 31 วัน
//       $scd_name = $_POST[$i.'_'.$d]; //แต่ละวัน
//
//       if(  $scd_name  != "-"){
//        echo "day ".$i."_".$d.":".$scd_name ;
//        echo "<br>";
//       $user_id = $i;//$_SESSION['AUTHEN']['UID'];
//       $scd_date = date('y-m').'-'.$d;//$_POST['scd_date'];
//
//       $conn = PDOConnector();
//       $result = $conn->prepare( 'insert INTO schedules (user_id, scd_date, scd_name) VALUES (:user_id, :scd_date, :scd_name)');
//
//         $result ->execute([
//           "user_id"=>$user_id,
//           "scd_date"=>$scd_date,
//           "scd_name"=>$scd_name
//
//         ]);
//
//     }
// }
// }

  ?>
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


 <body>

     <br>


 <form style="overflow: auto;">

   <?php

   //echo $_POST["numday"]."DDDDDDDDDDDDDD";
   echo "<table border='1'cellpadding='5'>";
   echo '<tr>';//เปิดแถวใหม่ ตาราง HTML
   echo '<th>No</th>';
   echo '<th>ชื่อ</th>';
   echo '<th>นามสกุล</th>';

for ($i = 1; $i <= $_POST["numday"]; $i++) {
        echo '<th>'.$i.'</th>';
   }
   $str = array("เช้า","บ่าย","ดึก","OFF","ชม.");
   $arrlength = count($str);
   for ($i=0; $i <$arrlength ; $i++) {
     echo "<th>".$str[$i]."</th>";
   }
   echo '</tr>';//เปิดแถวใหม่ ตาราง HTML

   $conn = PDOConnector();
   $sql = 'SELECT * FROM users where user_level != 0';
   $query = $conn->prepare($sql);
   $query->execute();
   if ($query->rowCount()>0) {
     $j = 0;
      $i = 1;
        while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
   $j++;
   $A=0;
   $B=0;
   $C=0;
   $D=0;
   $E=0;
   $F=0;
   ?>
   <tr>
       <td><?=$i++ ?></td>
       <td><?=$data->user_fname;?></td>
       <td><?=$data->user_lname;?></td>
       <?php
       for ($d = 1; $d <= $_POST["numday"]; $d++) {// 31 วัน
              $scd_name = $_POST[$j.'_'.$d]; //แต่ละวัน
              if($scd_name=='ช'){
                  $A++;
                  $E=$A+$B+$C;
              }
                else if($scd_name=='บ'){
                  $B++;
                  $E=$A+$B+$C;
                }
                else if($scd_name=='ด'){
                    $C++;
                    $E=$A+$B+$C;

                }
                else if($scd_name=='0'){
                   $D++;
                }
                else if($scd_name=='ชม.'){
                    $E=$A+$B+$C;

                }
             if(  $scd_name  != "-"){ ?>
         <td><?=$scd_name;?></td>
       <?php }else { ?>
            <td></td>
        <?php
}
    }
         ?>
<td><?=$A;?></td>
<td><?=$B;?></td>
<td><?=$C;?></td>
<td><?=$D;?></td>
<td><?=$E;?></td>

   </tr>

 </form>
 <?php }} ?>
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
