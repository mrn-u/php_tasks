<?php
//ーーー課題１ーーー
echo "課題１\n";
$name = "ふくはら";

//名前が合っている。
if ($name == "ふくはら") {
    echo "わたしは " . $name . " です";
} else {
    echo "あなたの名前ではありません";
}

echo "\n";

//名前が間違っている。
if ($name == "おおた") {
    echo "わたしは " . $name . " です";
} else {
    echo "あなたの名前ではありません";
}

echo "\n\n";



//ーーー課題２ーーー
echo "課題２\n";

$sum = 0;

//1~10000までの合計の値を計算する
for($i = 1; $i < 10001; $i++) {
    $sum += $i;
}
echo $sum;

echo "\n\n";



//ーーー課題３ーーー
echo "課題３\n";

$fruits = array("apple","orange","lemon","pineapple","grape");
foreach($fruits as $fruit){
    echo $fruit . "\n";
}

echo "\n\n";



//ーーー課題３ーーー
echo "課題４\n";

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

echo "\n";