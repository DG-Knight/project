
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
      $sql = "SELECT * FROM change_ward WHERE DATE_FORMAT(date_ward, '%Y-%m') = '".$year."-".$month."' ORDER BY date_ward ASC";//
      $query = $conn->prepare($sql);
      $query->execute();
         if ($query->rowCount()>0) {
           $i = 1;
           while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
              $content.= '

                  <tr style="border:1px solid #000;">
                  <td style="border-right:1px solid #000;"  >'.$i.'</td>
                  <td style="border-right:1px solid #000;" >'.$data->person_chang.'</td>
                  <td style="border-right:1px solid #000;"  >'.$data->nurse_chang.'</td>
                  <td style="border-right:1px solid #000;"  >'.$data->date_ward.'</td>
                  <td style="border-right:1px solid #000;"  >'.$data->opt_names.'</td>

              </tr>
              ';
              $i++;
          }
      }



  $footer = "<table name='footer' width=\"1000\">

              <tr>
              <td style='font-size: 18px;' align=\"right\">วันที่พิมพ์ : {DATE d-m-Y}</td>
              </tr>
             <tr>
             <td style='font-size: 18px;' align=\"center\">Page{PAGENO}</td>
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

            <p>รายงานการเปลี่ยนเวร</p>

              <a>*แผนกหอผู้ป่วยพิเศษสูติกรรม โรงพยาบาลสงขลานครินทร์</a>
              <br>
        <table id="bg-table" width="100%" style="border-collapse:collapse;">
            <tr style="border:1px solid #000;padding:4px;">
                <td  style="border-right:1px solid #000;"width="5%">ลำดับ</td>
                <td  style="border-right:1px solid #000;"width="15%">พยาบาลที่ขอเปลี่ยนเวร</td>
                <td  style="border-right:1px solid #000;"width="15%">พยาบาลที่เปลี่ยนเวร</td>
                <td  style="border-right:1px solid #000;"width="10%">วันที่เปลี่ยนเวร</td>
                <td  style="border-right:1px solid #000;"width="10%">เวรที่ปลี่ยน</td>

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
