<?php

// ЗАПИСЬ //

$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);
$fp = fopen('file.csv', 'w');
foreach ($list as $fields) {
    fputcsv($fp, $fields, ';', '"');
}
fclose($fp);

// СЧИТЫВАНИЕ //

if (($fp = fopen("file.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($fp, 0, ";")) !== FALSE) {
        $list[] = $data;
    }
    fclose($fp);
    print_r($list);
}
?>
