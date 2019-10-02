<?php
echo 'hello php!';?>

<?php
$a = 3;
$b = 7;
echo $a + $b;
?>

<?php
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
?>

<?php
$hello = "Hello,";
$name = "Yusuke";
$world = "s'world!";
echo $hello. $name. $world; 
?>

<?php
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;
?>

<?php
$calendar2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar2018["December"];
?>

<?php
$name = "Yusuke";
if ($name == "Yusuke") {
    echo "私の名前はYusukeです";
} else {
    echo "あなたの名前ではありません" ;   
}
?>

<?php
$total = 0;
echo $total;
for($i = 0; $i <=10000; $i++) {
    $total += $i;
}
    echo $total;
?>

<?php 
$fruits = array("apple","banana","tomato","blueberry","pineapple");
foreach($fruits as $fruit){
    echo $fruit;
    echo " ";
}

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 101;

for($i = $start; $i < $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
    echo $i;
  } else {
      echo " ";
  }
}