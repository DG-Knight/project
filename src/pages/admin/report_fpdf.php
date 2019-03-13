<?php
require '../../libs/function.php';
CheckAuthenticationAndAuthorization();
require '../../../assets/fpdf/fpdf.php';

class PDF extends FPDF{
function Header(){
      //$this->Image('logo.png',10,6,30);

      $this->AddFont('THSarabunNew','','THSarabunNew.php');
      // Arial bold 15
      $this->SetFont('THSarabunNew','',16);
      // Move to the right
      //$this->Cell(10);
      // Title
      $this->Cell(0,5,iconv( 'UTF-8','cp874','วันหยุด'),0,1,"c");
      $this->Cell(0,5,iconv( 'UTF-8','cp874','วันหยุด'),0,1,"c");
      $this->Cell(0,5,iconv( 'UTF-8','cp874','วันหยุด'),0,1,"c");
      // Line break
      $this->Ln(2);
}
function ChapterTitle(){

}
function MyBody(){

}
function Layout(){

}
function Footer(){
  // Position at 1.5 cm from bottom
      $this->SetY(-12);

      $this->Cell(0,5,'Page '.$this->PageNo(),0,0,'L');
      $this->Cell(0,5,iconv( 'UTF-8','cp874','วันที่พิมพ์ :'.date('d').'/'.date('m').'/'.(date('Y')+543)),0,0,"R");
}

}
$pdf = new PDF('P','mm','A4');
$pdf->AddPage();
$pdf->Ln(5);
$pdf->AddFont('THSarabunNew_b','','THSarabunNew_b.php');
$pdf->SetFont('THSarabunNew_b','',16);
$pdf->Cell(175,4,iconv('UTF-8', 'cp874', 'สรุปรายงานวันหยุด'),0,1,'C');
$pdf->Ln(5);
$pdf->Cell(20);
$pdf->Cell(15,7,iconv('UTF-8', 'cp874', 'ลำดับ'),1,0,'C');
$pdf->Cell(25,7,iconv('UTF-8', 'cp874', 'ปี'),1,0,'C');
$pdf->Cell(50,7,iconv('UTF-8', 'cp874', 'วันหยุด'),1,0,'C');
$pdf->Cell(60,7,iconv('UTF-8', 'cp874', 'หมายเหตุ'),1,0,'C');

$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->SetFont('THSarabunNew','',16);


$pdf->Output();
?>
