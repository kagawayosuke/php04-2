<?php
// 以下配列の中身をfor文を使用して表示してください。
// 横枠は「-」、縦線は「|」で表示すること
/**
* 表示イメージ

*  _________________________
*  |_____|_c1|_c2|_c3|横合計|
*  |___r1|_10|__5|_20|___35|
*  |___r2|__7|__8|_12|___27|
*  |___r3|_25|__9|130|__164|
*  |縦合計|_42|_22|162|__226|
*  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾

*/

 

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];

 

$row_total = [
    'r1' => array_sum($arr['r1']),
    'r2' => array_sum($arr['r2']),
    'r3' => array_sum($arr['r3']),
];

 

$column_total = [
    'c1' => array_sum(array_column($arr, 'c1')),
    'c2' => array_sum(array_column($arr, 'c2')),
    'c3' => array_sum(array_column($arr, 'c3')),
];

 

$all_total = 0;
foreach ($column_total as $total) {
    $all_total = $all_total + $total;
}

 

echo '_________________________',"\n";
echo '|_____';
echo '|_c1','|_c2','|_c3','|横合計|',"\n";


for ($i = 1; $i <= count($arr); $i++) {
    $row_key = "r{$i}";
    echo '|___'."{$row_key}",'|';
     for ($i = 3; $i <= count($arr['r1']); $i++){
    echo '_'.$arr['r1']['c1'],'|';
    echo '__',$arr['r1']['c2'],'|';
    echo '_'.$arr['r1']['c3'],'|';
}
    echo '__',"{$row_total['r1']}",'|',"\n";
}

 

for ($i = 1; $i <= count($arr['r2']); $i++) {
    $row_key = "r{$i}";
    echo '|___'."r2",'|';
     for ($i = 3; $i <= count($arr['r2']); $i++){
        echo '__'.$arr['r2']['c1'],'|';
        echo '__',$arr['r2']['c2'],'|';
        echo '_'.$arr['r2']['c3'],'|';
    }
    echo '__',"{$row_total['r2']}",'|',"\n";
}

 

for ($i = 1; $i <= count($arr['r3']); $i++) {
    $row_key = "r{$i}";
    echo '|___'."r3",'|';
     for ($i = 3; $i <= count($arr['r2']); $i++){
        echo '_'.$arr['r3']['c1'],'|';
        echo '__',$arr['r3']['c2'],'|';
        echo $arr['r3']['c3'],'|';
    }
    echo '_',"{$row_total['r3']}",'|',"\n";
}

echo '|',"縦合計";

for ($j = 1; $j <= count($column_total); $j++) {
    $column_key = "c{$j}";
    echo '|_',"{$column_total[$column_key]}";
}

echo '|_',"{$all_total}",'|',"\n";
echo '‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾'

?>