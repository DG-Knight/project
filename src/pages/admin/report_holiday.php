
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
    $sql = 'SELECT * FROM holiday';
    $query = $conn->prepare($sql);
    $query->execute();
       if ($query->rowCount()>0) {
         $i = 1;
         while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
            $content .= '<tr style="border:1px solid #000;">
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
                <td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$data->fisyear.'</td>
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$data->publicholiday.'</td>
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$data->description.'</td>

            </tr>';
            $i++;
        }
    }


$mpdf = new mPDF();

$head = '
<style>
    body{
        font-family: "Garuda";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
    }
</style>

<h2 style="text-align:center">รายงานวันหยุด</h2>

<table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:8px;">
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

$mpdf->WriteHTML($head);

$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);

$mpdf->Output();
?>
