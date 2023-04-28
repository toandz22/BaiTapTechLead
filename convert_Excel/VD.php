<?php
//  Include thư viện PHPExcel_IOFactory vào
include 'Classes/PHPExcel/IOFactory.php';

$inputFileName = 'BangCong.xlsx';

//  Tiến hành đọc file excel
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Lỗi không thể đọc file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Lấy thông tin cơ bản của file excel

// Lấy sheet hiện tại
$sheet = $objPHPExcel->getSheet(0); 

// Lấy tổng số dòng của file, trong trường hợp này là 6 dòng
$highestRow = $sheet->getHighestRow(); 

// Lấy tổng số cột của file, trong trường hợp này là 4 dòng
$highestColumn = $sheet->getHighestColumn();

// Khai báo mảng $rowData chứa dữ liệu
$rowData = [];
//  Thực hiện việc lặp qua từng dòng của file, để lấy thông tin

for ($row = 4; $row <= $highestRow; $row++){ 
    // Lấy dữ liệu từng dòng và đưa vào mảng $rowData
    $rowData[] = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE,FALSE);
}

$ds = [];
$data = [];
$moneyall = [];
$moneyGC = null;
$moneyTC = null;
$moneyGC1 =null;
$moneyTC1 = null;
$moneyWK = null;
$total = null;
$totalHours = 0;

foreach($rowData[0][0] as $key => $value){
        if(is_null($value) ){
            $rowData[0][0][$key] = $rowData[0][0][$key-1];
        }
    }
foreach($rowData[1][0] as $key => $value){
        if(is_null($value) &$key > 0){
            $rowData[1][0][$key] = $rowData[1][0][$key-1];
        }
    }
foreach($rowData[2][0] as $key => $value){
        if($value == "WK-N"){
            $rowData[2][0][$key] = $rowData[2][0][$key-1];
        }
    if($value == "$"){
            $rowData[2][0][$key] = $rowData[3][0][$key];
        }
    }

    $data = array(
        'Ngày' => $rowData[0][0],
        'Ca' =>$rowData[1][0],
        "Loại Ca" =>$rowData[2][0],
    );
       
for($i = 3 ; $i <= 10 ;$i ++){
foreach ($rowData[$i][0] as $key => $value) {
        if (isset($data['Loại Ca'][$key])  && isset($data["Ngày"][$key])) {
            if(!$rowData[$i][0][$key] == null && $key >=17){
                $total = array_sum($rowData[$i][0]);
                if($value = "GC"){
                    $money = $rowData[$i][0][$key] * $rowData[$i][0][6];
                }
                elseif($value = "TC"){
                    $money = $rowData[$i][0][$key] * $rowData[$i][0][8];
                }
                elseif($value = "GC1"){
                    $money = $rowData[$i][0][$key] * $rowData[$i][0][10];
                }
                elseif($value = "TC1"){
                    $moneY = $rowData[$i][0][$key] * $rowData[$i][0][12];
                }
                elseif($value = "WK-D"){
                    $money = $rowData[$i][0][$key] * $rowData[$i][0][15];
                }         
            $ds[] = array(
                'MNV' => $rowData[$i][0][1],
                'Họ Tên' => $rowData[$i][0][2],
                'Ngày' => $data['Ngày'][$key],
                'Loại Ca' => $data['Loại Ca'][$key],
                'Số giờ làm' => $rowData[$i][0][$key], 
                'Tổng tiền ngày ' => $money,            
            );  
          }
        }
          
        }   
    }


    // Đưa ra màn hình kết quả :
echo "<pre>";
print_r($ds);
echo "</pre>";

