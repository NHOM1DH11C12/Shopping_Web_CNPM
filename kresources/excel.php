<?php
require_once('config.php');// Tạo một đối tượng Spreadsheet mới
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Lấy dữ liệu từ cơ sở dữ liệu
$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

// Xác định hàng và cột ban đầu

$rowCount = 1;
while($row = mysqli_fetch_assoc($result)){
    $sheet->setCellValue('A'.$rowCount, $row['product_id']);
    $sheet->setCellValue('B'.$rowCount, $row['product_name']);
    $sheet->setCellValue('C'.$rowCount, $row['product_price']);
    $rowCount++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('products.xlsx');
?>