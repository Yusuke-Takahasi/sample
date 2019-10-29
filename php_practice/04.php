//課題１
<?php
function prod($number){
    $result = 0;
    
    $result = $number * 2;

    return $result;
}

echo prod(5);
?>

//課題２
<?php
function f($a,$b){
    $result = $a + $b;
    return $result;
}
echo f(10,20);
?>

//課題３
<?php
  $arr = array(1,3,5,7,9);
  function mul($arr) {
    $result = 1;
    foreach ($arr as $pro){
      $result *= $pro;
    } 
    return $result;
  }
echo mul($arr) . "\n";
?>

//課題４
<?php
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 
 foreach($arr as $a){
    if ($max_number < $a){
        $max_number = $a;
    }
 }
return $max_number;
}
 
 echo max_array(array(1,4,6,7,132,564,5464,757575))

?>

//課題５
<?php
$str = "<h1>strip_tagsTECH</h1>"
  . "<p>BOOST</p>";
echo strip_tags($str) ."\n";

$fruits = ['apple', 'orange', 'melon'];
 

array_push($fruits, 'banana', 'pineapple');

print_r($fruits);

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 

$array = array_merge($array1, $array2, $array3);
 
print_r($array);



echo '現在のUnixタイムスタンプ：'.time();
 
echo '<br>';
 

$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;

$timestamp = mktime(0, 0, 0, 10, 9, 2019);
echo $timestamp;


date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d H:i:s") . "\n"; //「2015/03/10 06:00:00」
echo date("Y/m/01") . "\n"; //「2015/03/01」
echo date("Y/m/t") . "\n"; //「2015/03/31」

$w = date("w");
$week_name = array("日", "月", "火", "水", "木", "金", "土");

echo date("Y/m/d") . "($week_name[$w])\n"; //「2015/03/10(火)」
?>
