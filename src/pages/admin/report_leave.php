
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

    $year=date('Y');
    $month=date('m');
    $conn = PDOConnector();
    $sql = "SELECT * FROM leaves INNER JOIN users ON leaves.user_id=users.user_id WHERE DATE_FORMAT(leaves.leave_start, '%Y-%m') = '".$year."-".$month."' OR DATE_FORMAT(leaves.leave_end, '%Y-%m') = '".$year."-".$month."'";
    $query = $conn->prepare($sql);
    $query->execute();
       if ($query->rowCount()>0) {
         $i = 1;
         while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
            $content .= '<tr style="border:1px solid #000;">
                <td style="border-right:1px solid #000;"  >'.$i.'</td>
                <td style="border-right:1px solid #000;" >'.$data->user_fname.' '.$data->user_lname.'</td>
                <td style="border-right:1px solid #000;"  >'.$data->leave_type.'</td>
                <td style="border-right:1px solid #000;"  >'.$data->leave_start.'</td>
                <td style="border-right:1px solid #000;"  >'.$data->leave_end.'</td>

            </tr>';
            $i++;
        }
    }

    $footer = "<table name='footer' width=\"1000\">

                <tr>
                <td style='font-size: 16px;' align=\"right\">วันที่พิมพ์ : {DATE d-m-Y}</td>
                </tr>
               <tr>
               <td style='font-size: 16px;' align=\"center\">Page{PAGENO}</td>
               </tr>


             </table>";


$head = '

    <style>
    .container{

    }
    td{
      font-family: "THSarabunNew";
      text-align:center;
      font-size: 11pt;
      padding:5px;
    }

    p{
      font-family: "THSarabunNew";
        text-align: center ;
        font-size: 20pt;
    }
    </style>

      <img src="../../../assets/images/logo1.png" style="width:13%; padding-left:300px;" >

    <div class="container">

<p>รายงานการลา</p>
<a>*แผนกหอผู้ป่วยพิเศษสูติกรรม โรงพยาบาลสงขลานครินทร์</a>
<table id="bg-table" width="100%" style="border-collapse:collapse;">
    <tr style="border:1px solid #000;">
        <td  style="border-right:1px solid #000;" width="10%">ลำดับ</td>
        <td  style="border-right:1px solid #000;" width="20%">รายชื่อ-นามสกุล</td>
        <td  style="border-right:1px solid #000;" width="15%">วันที่เริ่มการลา</td>
        <td  style="border-right:1px solid #000;" width="20%">วันที่สิ้นสุดการลา</td>
        <td  style="border-right:1px solid #000;" width="20%">รายละเอียดการลา</td>
    </tr>

</thead>
    <tbody>
</div>
    ';

    $end = "</tbody>
    </table>";

    $pdf = new mPDF('th', 'A4', '0', 'THSarabunNew');
    $pdf->AddPage();

    $pdf->WriteHTML($head);
    $pdf->WriteHTML($content);
    $pdf->SetFooter($footer);

    $pdf->WriteHTML($end);

    $pdf->Output();
    ?>
