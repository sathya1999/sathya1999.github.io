<?php
include "../connection.php";
require_once '../Classes/PHPExcel.php';

$sql= "select * from agent_new";
$result= mysqli_query($conn,$sql);
$filename = "Registrations";
// $objPHPExcel = new PHPExcel();
// // $objPHPExcel->getActiveSheet()->setCellValue('abc');
// $objPHPExcel->getActiveSheet()->setTitle('Chesse1');

// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment;filename="abc.xlsx"');
// header('Cache-Control: max-age=0');

// $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
// $objWriter->save('php://output');

 
$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator("BFSIRT")
->setLastModifiedBy("BFSIRT")
->setTitle("asds")
->setSubject("BFSIRT")
->setDescription("BFSIRT")
->setKeywords("office 2007 openxml php")
->setCategory("Report");

$er = $objPHPExcel->setActiveSheetIndex(0);

$er->setCellValue('A1', 'Sl No')
    ->setCellValue('B1', 'Agent Code')
    ->setCellValue('C1', 'Agent Name')
    ->setCellValue('D1', 'Date of Birth')
    ->setCellValue('E1', 'Address')
     ->setCellValue('F1', 'Pincode')
      ->setCellValue('G1', 'Phone Number')
       ->setCellValue('H1', 'Branch');
        // ->setCellValue('I1', 'Date');
   
$style = array('font' => array('size' => 10,'color' => array('rgb' => 'ffffff')));

$objPHPExcel->getActiveSheet()->getStyle('A1:H1')->applyFromArray($style);
    $er->getStyle('A1:H1')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()
            ->setRGB('ff6900');
    $er->getStyle('AI1:H1')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()
            ->setRGB('e35500');
$i=2;
$j=1;

while($row = mysqli_fetch_object($result))  
{
// echo "<pre>";print_r($row);die;
$styleArray = array(
   'font'  => array(
       'color' => array('rgb' => '0076cb'),
       'size'  => 13
   ));

$er->setCellValue('A'.$i, $j)
	->setCellValue('B'.$i, $row->Agent_code)
	->setCellValue('C'.$i, $row->Agent_name)
	->setCellValue('D'.$i, $row->DOB)
	->setCellValue('E'.$i, $row->Address)
  ->setCellValue('F'.$i, $row->Pincode)
  ->setCellValue('G'.$i, $row->Contact_Num)
  ->setCellValue('H'.$i, $row->Branch);
  // ->setCellValue('I'.$i, $row->created_at);
	
$i++;
$j++;
// sleep(20);
}

// echo "<pre>";print_r($er);die;
$er->getStyle('a1:h'.$i)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
 $style = array('font' => array('size' => 10));

$objPHPExcel->getActiveSheet()->getStyle('A1:H'.$i)->applyFromArray($style);
$objPHPExcel->getActiveSheet()->setTitle("BFSIRT");


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
// $objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename=BFSIRT-'.$filename.date('d-M-Y-h-i').'.xls');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
ob_end_clean();
$objWriter->save('php://output');


?>