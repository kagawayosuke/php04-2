﻿<?php
// 以下をfor文を使用して表示してください。
// ヒント: if〜elseifを使用

// ****1
// ***121
// **12321
// *1234321
// 123454321
// *1234321
// **12321
// ***121
// ****1
for($a = 1 ; $a <= 9 ; $a ++){
 if($a <= 5){
 for($b = 4 ; $b >= $a ; $b --){
 echo "*";
 }
 for($c = 1; $c <= $a ; $c++){
 echo $c;
 }
 for($d =$c -2 ; $d >= 1 ; $d--){
 echo $d;
 }
 echo "\n";
 }
 else if($a >=6 ){
 for($e = 6 ; $e <= $a ; $e++){
 echo "*";
 }
 for($f = 1 ; $f <=10-$a ; $f++){
 echo $f;
 }
 for($g = $f-2 ; $g >=1 ; $g --){
 echo $g;
 }
 echo "\n";
 }
}
