
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
    $sql = "SELECT * FROM schedules INNER JOIN users ON schedules.user_id=users.user_id";//เรียกได้เฉพาะปีที่กำหนด
    $query = $conn->prepare($sql);
    $query->execute();
       if ($query->rowCount()>0) {
         $i = 1;
         while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
            $content .= '<tr style="border:1px solid #000;">
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
              <td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$data->user_fname.' '.$data->user_lname.'</td>
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$data->scd_date.'</td>
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$data->scd_name.'</td>

            </tr>';
            $i++;
        }
    }



$footer = "<table name='footer' width=\"1500\">

            <tr>
            <td style='font-size: 25px;' align=\"right\">วันที่พิมพ์ : {DATE d-m-Y}</td>
            </tr>
            <tr>
              <td style='font-size: 25px; padding-bottom: 20px;' align=\"center\">Page{PAGENO}</td>
            </tr>


         </table>";
$head = '

    <h2 style="text-align:center">รายงานวันหยุด</h2>
    <tr>
    <td  style="border-right:1px solid #000;padding:4px;text-align:right;" width="10%">ตัวอย่างรายงาน</td>
    </tr>
    <table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:50px;">
    <tr style="border:1px solid #000;padding:4px;">
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"   width="10%">ลำดับ</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">ปี</td>
        <td  width="20%" style="border-right:1px solid #000;padding:4px;text-align:center;">วันหยุด</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">หมายเหตุ</td>

    </tr>

    </thead>

    <tbody>';


$end = "</tbody>
</table>";

$pdf = new mPDF('th', 'A4', '0', '');
$pdf->AddPage();

$pdf->WriteHTML($head);
$pdf->WriteHTML($content);

$pdf->SetFooter($footer);

$pdf->WriteHTML($end);

$pdf->Output();
?>
