
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

      $conn = PDOConnector();
      $sql = "SELECT * FROM holiday  WHERE DATE_FORMAT(publicholiday, '%Y') = '".$year."' ORDER BY publicholiday ASC ";//เรียกได้เฉพาะปีที่กำหนด
      $query = $conn->prepare($sql);
      $query->execute();
         if ($query->rowCount()>0) {
           $i = 1;
           while ($data = $query -> fetch(PDO::FETCH_OBJ)) {
              $content.= '

                  <tr style="border:1px solid #000;">
                  <td style="border-right:1px solid #000;"  >'.$i.'</td>
                  <td style="border-right:1px solid #000;" >'.$data->fisyear.'</td>
                  <td style="border-right:1px solid #000;"  >'.$data->publicholiday.'</td>
                  <td style="border-right:1px solid #000;"  >'.$data->description.'</td>

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

            <p>รายงานวันหยุดประจำปี</p>

  <a>*แผนกหอผู้ป่วยพิเศษสูติกรรม โรงพยาบาลสงขลานครินทร์</a>
  <br>
        <table id="bg-table" width="100%" style="border-collapse:collapse;">
            <tr style="border:1px solid #000;padding:4px;">
                <td  style="border-right:1px solid #000;"width="5%">ลำดับ</td>
                <td  style="border-right:1px solid #000;"width="5%">ปี</td>
                <td  style="border-right:1px solid #000;"width="10%">วันหยุด</td>
                <td  style="border-right:1px solid #000;"width="10%">ชื่อวันหยุด</td>

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
