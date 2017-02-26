<?php
$conn = pg_connect("host=localhost port=5432 dbname=wandzia user=postgres");
$query = pg_query($conn, "select * from testowa");

$result = pg_fetch_all($query);

for ($row = 0; $row < count($result); $row++) {
    echo $result[$row]['imie'] . "  " . $result[$row]['nazwisko'] . "  " . $result[$row]['wiek'] . "<br />";
}

$data = array();
$data[0]['imie'] = 'imie';
$data[0]['nazwisko'] = 'nazwisko';
$data[0]['wiek'] = 'wiek';

$datas = array_merge($data, $result);

foreach ($datas as $key => $data) {
    foreach ($data as $key_s => $single_data) {
        $datas[$key][$key_s] = iconv("UTF-8", "cp1250", $single_data);
    }
}

$fileName = 'testowa1.csv';

$fileHandle = fopen('testowa1.csv', 'w+') or die("can't open file");

foreach ($datas as $key => $data) {
    fputcsv($fileHandle, $data, ';', '"');
}
