<?php
// Đường dẫn tới file CSV
$filename = "KTPM3_Danh_sach_diem_danh.csv";

$sinhvien = [];

if (($handle = fopen($filename, "r")) !== FALSE) {
    $headers = fgetcsv($handle, 1000, ",");
    $headers= explode(',', $headers[0]);
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $data = explode(',', $data[0]);
        
        $sinhvien[] = array_combine($headers, $data);
    }

    fclose($handle);
}


?>