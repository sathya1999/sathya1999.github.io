<?php
include "../connection.php";
require_once '../Classes/PHPExcel.php';

$sql= "select * from policy_data";
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
->setTitle("")
->setSubject("BFSIRT")
->setDescription("BFSIRT")
->setKeywords("office 2007 openxml php")
->setCategory("Report");

$er = $objPHPExcel->setActiveSheetIndex(0);

$er->setCellValue('A1', 'Sl No')
    ->setCellValue('B1', 'Policy Number')
    ->setCellValue('C1', 'Customer Number')
    ->setCellValue('D1', 'Agent code')
    ->setCellValue('E1', 'Date of Contact')
    ->setCellValue('F1', 'Product')
    ->setCellValue('G1', 'Sum Assured')
    ->setCellValue('H1', 'Payment Period')
    ->setCellValue('I1', 'Installmet period');
    
   
$style = array('font' => array('size' => 10,'color' => array('rgb' => 'ffffff')));

$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->applyFromArray($style);
    $er->getStyle('A1:I1')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()
            ->setRGB('ff6900');
    $er->getStyle('AI1:I1')
            ->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()
            ->setRGB('e35500');
$i=2;
$j=1;

while($row = mysqli_fetch_object($result))  
{
// echo "<pre>";print_r();die;
$styleArray = array(
   'font'  => array(
       'color' => array('rgb' => '0076cb'),
       'size'  => 13
   ));

$er->setCellValue('A'.$i, $j)
  ->setCellValue('B'.$i, $row->Policy_Num)
  ->setCellValue('C'.$i, $row->Customer_Num)
  ->setCellValue('D'.$i, $row->Agent_code)
  ->setCellValue('E'.$i, $row->DOC)
   ->setCellValue('F'.$i, $row->Product)
    ->setCellValue('G'.$i, $row->Sum_Assured)
    ->setCellValue('H'.$i, $row->Pay_Period)
    ->setCellValue('I'.$i, $row->Ins_Period);
  
$i++;
$j++;
// sleep(20);
}

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
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
ob_end_clean();

$objWriter->save('php://output');


?>