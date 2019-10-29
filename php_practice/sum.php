<?php
function sum($max){
    $result = 0;
    for ($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}

echo sum(100);
?>

<?php
function print_number(){
    
    for ($i = 0; $i < 100; $i++){
        echo $i;
        
    }
}
?>

<?php
$string = "ABCDEF";
echo strlen($string);
?>

<?php

$string = "I LOVE Ruby";
$new_string = str_replace("Ruby","php",$string);
echo $new_string;
?>

<?php 
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
?>

<?php
$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);

arsort($array);
print_r($array);
?>

