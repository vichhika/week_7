<?php
//Lab 03 in WCT II Course
//Student Pann Vichhika


//Task 1
function reverseText(string $text){
    $reText = "";
    foreach(explode(" ",$text) as &$word) $reText .= strrev($word) . " ";
    return substr($reText,0,strlen($reText) -1);    
}
echo reverseText("emocleW ot PHP")."\n";

// Task 2
$arr = [2,3,4,6,7,9,11,20];
//foreach($arr as $id => $value) if($arr[$id] % 2 != 0) unset($arr[$id]);
$arrOdd = fn($array) => array_filter($array,fn($var) => $var&1);
print_r($arrOdd($arr));

// Task 3
function sum(){
    $result = 0;
    for($i = 0;$i < func_num_args();$i++) $result += func_get_arg($i);
    return $result;
}
$total = sum(2,3);
echo "\$total = " .$total ."\n";
$total = sum(2,3,4);
echo "\$total = " .$total ."\n";
$total = sum(2,3,4,5);
echo "\$total = " .$total ."\n";