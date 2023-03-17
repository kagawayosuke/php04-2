﻿<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表示はHTMLの<table>タグを使用すること

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
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>

    <body>
        <!-- ここにテーブル表示 -->
        <?php

            echo '
                <table>
                    <tr>
                        <td></td> 
                        <td>c1</td>
                        <td>c2</td> 
                        <td>c3</td> 
                        <td>横合計</td> 
                    </tr>';

                    for ($i = 1; $i <= count($arr); $i++) {
                        echo '<tr><td>r'.$i.'</td>';
                        echo '<td>'.$arr['r'.$i]['c1'].'</td>';
                        echo '<td>'.$arr['r'.$i]['c2'].'</td>'; 
                        echo '<td>'.$arr['r'.$i]['c3'].'</td>';
                        echo '<td>'.array_sum($arr['r'.$i]).'</td>';
                    }

                    $col = [
                        'c1' => array_sum(array_column($arr,'c1')),
                        'c2' => array_sum(array_column($arr,'c2')),
                        'c3' => array_sum(array_column($arr,'c3')),
                    ];

                echo '</tr>
                        <td>縦合計</td>';

                    for ($i = 1; $i <= count($arr); $i++) {
                        echo '<td>'.$col['c'.$i].'</td>';
                    }

                echo '<td>'.array_sum($col).'</td>';
                    
        ?>
        
    </body>
</html>