<?php
// Include PHPExcel library
require_once 'PHPExcel.php';

// Function to retrieve data from the database or any other source
function getDataFromSource() {
    // Here you would retrieve your data. For demonstration purposes, I'm just creating a sample data array.
    $sampleData = array(
        array('Category ID', 'Category Name', 'Group ID', 'Group Name', 'Depreciation'),
        array('1', 'Category 1', '1', 'Group 1', '5%'),
        array('2', 'Category 2', '2', 'Group 2', '7%'),
        array('3', 'Category 3', '1', 'Group 1', '8%')
    );
    return $sampleData;
}

// Retrieve data
$assetcategory = getDataFromSource();

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("MetroxGroup")
                             ->setLastModifiedBy("MetroxGroup")
                             ->setTitle("Asset Category List")
                             ->setSubject("Asset Category Data")
                             ->setDescription("Asset Category Data")
                             ->setKeywords("asset category")
                             ->setCategory("Data");

// Add data to the Excel file
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Category ID')
            ->setCellValue('B1', 'Category Name')
            ->setCellValue('C1', 'Group ID')
            ->setCellValue('D1', 'Group Name')
            ->setCellValue('E1', 'Depreciation');

// Initialize row counter
$row = 2;

// Loop through table rows
foreach ($assetcategory as $rowData) {
    $objPHPExcel->getActiveSheet()->fromArray($rowData, NULL, 'A'.$row);
    $row++;
}

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Asset_Category');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="asset_category_list.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>
