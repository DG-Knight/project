
<?php
require '../../libs/function.php';
CheckAuthenticationAndAuthorization();
require '../../../assets/mPDF/vendor/autoload.php';/*
$pdf=new mPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Text( 10 , 10 , 'Hello World!');
$pdf->Output();
*/
ob_start();
?>

<?php


$conn = PDOConnector();
$sql = 'SELECT * FROM users where user_level != 0';
$query = $conn->prepare($sql);
$query->execute();
$year=date('Y');
$month=date('m');
$timeDate = strtotime($year.'-'.$month."-01");  //เปลี่ยนวันที่เป็น timestamp
$lastDay = date("t", $timeDate);   				//จำนวนวันของเดือน
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
            $content .= '<tr style="border:1px solid #000;">
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
                <td style="border-right:1px solid #000;padding:5px;text-align:center;" >'.$data->user_fname.' '.$data->user_lname.'</td>
                ';
                for($d=1;$d<=$lastDay;$d++){
                  //echo "SELECT * FROM `schedules` WHERE scd_date='".$year."-".$month."-".$i."' and user_id='".$data->user_id."'";
                  $result = $conn->prepare("SELECT * FROM `schedules` WHERE scd_date='".$year."-".$month."-".$d."' and user_id='".$data->user_id."'");
                  $result ->execute();
                  if ($result->rowCount()>0) {
                    while ($data2 = $result -> fetch(PDO::FETCH_OBJ)) {
                      if($data2->scd_name){
                        $content .= '  <td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$data2->scd_name.'</td>';
                      }else{
                        $content .= '  <td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$data2->scd_name.'</td>';
                      }
                      if($data2->scd_name=='ช'){
                          $A++;
                          $E=$A+$B+$C;
                      }
                        else if($data2->scd_name=='บ'){
                          $B++;
                          $E=$A+$B+$C;
                        }
                        else if($data2->scd_name=='ด'){
                            $C++;
                            $E=$A+$B+$C;

                        }
                        else if($data2->scd_name=='0'){
                           $D++;
                        }
                        else if($data2->scd_name=='ชม.'){
                            $E=$A+$B+$C;

                        }

                }
              }else {
                  $content .= '  <td style="border-right:1px solid #000;padding:3px;text-align:center;" ></td>';
              }
            }
$content .= '<td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$A.'</td>
            <td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$B.'</td>
            <td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$C.'</td>
            <td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$D.'</td>
            <td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$E.'</td>


            </tr>';
            $i++;
        }
    }



$footer = "<table name='footer' width=\"1500\">

            <tr>
            <td style='font-size: 18px;' align=\"right\">วันที่พิมพ์ : {DATE d-m-Y}</td>

            </tr>
           <tr>
             <td style='font-size: 18px; padding-bottom: 20px;' align=\"center\">Page{PAGENO}</td>
           </tr>


         </table>";
$tabel ='

      <style>
      .container{

      }
      td{
        font-family: "THSarabunNew";
        text-align:center;
        font-size: 10pt;

      }

      p{
        font-family: "THSarabunNew";
          text-align: center ;
          font-size: 14pt;
      }
      </style>
      <img src="../../../assets/images/logo1.png" style="width:5%; padding-left:480px;" >

    <div class="container">
    <p style="text-align:center">รายงานตารางปฏิบัติงาน</p>

<a >*แผนกหอผู้ป่วยพิเศษสูติกรรม โรงพยาบาลสงขลานครินทร์</a>
  <table style="border-collapse: collapse;">
  <tr>
  <tr style="border:1px solid #000;padding:4px;">
      <td  style="border-right:1px solid #000;padding:5px;text-align:center;">No</td>
      <td  style="border-right:1px solid #000;padding:10px;text-align:center;">ชื่อ-นามสกุล</td>

';
for ($i = 1; $i <= $lastDay; $i++) {
        $tabel =$tabel. '<td  style="border-right:1px solid #000; padding:4px; " >'.$i.'</td>';
   }
   $str = array("เช้า","บ่าย","ดึก","OFF","ชม.");
   $arrlength = count($str);
   for ($i=0; $i <$arrlength ; $i++) {
     $tabel =$tabel. "<td  style='border-right:1px solid #000;'>".$str[$i]."</td>";
   }
$tabel =$tabel.'
  </tr>

    </tr>

    </thead>

    <tbody>
    </div>';
$head = $tabel;

$end = "</tbody>
</table>";

$pdf = new mPDF('th', 'A4-L', '0', '');
$pdf->AddPage();

$pdf->WriteHTML($head);
$pdf->WriteHTML($content);

$pdf->SetFooter($footer);

$pdf->WriteHTML($end);

$pdf->Output();
?>
