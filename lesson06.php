﻿<?php
// 以下をfor文を使用して表示してください。

// ****5
// ***545
// **54345
// *5432345
// 543212345
for($a = 5 ; $a >= 1 ; $a --){
 for($b = 2 ; $b <= $a; $b ++){
 echo "*";
 }
 for($c = 5 ; $c >= $a ;$c --){
 echo $c;
 }
 for($d = $c+2 ; $d <= 5 ; $d ++){
 echo $d;
 }
 echo "<br />";
}