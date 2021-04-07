<?php
include "../connection.php";
require_once '../Classes/PHPExcel.php';

$sql= "select * from customerr";
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
    ->setCellValue('B1', 'Id')
    ->setCellValue('C1', 'First Name')
    ->setCellValue('D1', 'Middle Name')
    ->setCellValue('E1', 'Last Name')
    ->setCellValue('F1', 'Gender')
    ->setCellValue('G1', 'Date of Birth')
    ->setCellValue('H1', 'Address')
    ->setCellValue('I1', 'Pincode')
    ->setCellValue('J1', 'Phone Number')
    ->setCellValue('K1', 'Mother Name')
     ->setCellValue('L1', 'Mother Status')
    ->setCellValue('M1', 'Father Name')
    ->setCellValue('N1', 'Father Status')
    ->setCellValue('O1', 'Marital Status')
    ->setCellValue('P1', 'Spouse Name');
    
   
$style = array('font' => array('size' => 10,'color' => array('rgb' => 'ffffff')));

$objPHPExcel->getActiveSheet()->getStyle('A1:P1')->applyFromArray($style);
    $er->getStyle('A1:P1')
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
// echo "<pre>";print_r();die;
$styleArray = array(
   'font'  => array(
       'color' => array('rgb' => '0076cb'),
       'size'  => 13
   ));

$er->setCellValue('A'.$i, $j)
	->setCellValue('B'.$i, $row->id)
	->setCellValue('C'.$i, $row->First_Name)
	->setCellValue('D'.$i, $row->Middle_Name)
	->setCellValue('E'.$i, $row->Last_Name)
   ->setCellValue('F'.$i, $row->Gender)
    ->setCellValue('G'.$i, $row->DOB)
    ->setCellValue('H'.$i, $row->Address)
    ->setCellValue('I'.$i, $row->Pincode)
    ->setCellValue('J'.$i, $row->Contact_Number)
    ->setCellValue('K'.$i, $row->Mother_Name)
    ->setCellValue('L'.$i, $row->Mother_Status)
    ->setCellValue('M'.$i, $row->Father_Name)
    ->setCellValue('N'.$i, $row->Father_Status)
    ->setCellValue('O'.$i, $row->Marital_status)
    ->setCellValue('P'.$i, $row->Spouse);
	
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