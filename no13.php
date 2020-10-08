<?php
echo "ーーーーーー課題１ーーーーーー"."\n";

//$numに与えられた数字を2倍にするsquare関数を作成。
function double($num) {
    //$resultに$numの2倍の値を格納。
    $result_double = $num*2;
    return $result_double;
}

echo double(5);


echo "\n";



echo "ーーーーーー課題２ーーーーーー"."\n";

function sum($a, $b) {
    $result_sum = $a + $b;
    return $result_sum;
}

echo sum(3,4);


echo "\n";



echo "ーーーーーー課題３ーーーーーー"."\n";

//$arrayの中身を定義
$array = [1,3,5,7,9];

//$arrの中身を順番にかけた結果を返すmul関数を作成
function mul($arr) {
    $result_mul = 1;
    for($i = 0; $i < count($arr); $i++){
    $result_mul *= $arr[$i];
    }
    return $result_mul;
}

echo mul($array);


echo "\n";



echo "ーーーーーー課題４ーーーーーー"."\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array($array);


echo "\n";


echo "ーーーーーー課題５ーーーーーー"."\n";
echo "〜〜〜strip_tagsを使う〜〜〜"."\n";
//HTMLタグおよびPHPタグを取り除く
$text = "<?php アイウ ?><p>あいうえお</p><!-- コメント --><h1>abcde</h1>";
echo $text."\n\n";
echo "・<?php アイウ ?><p>あいうえお</p><!-- コメント --><h1>abcde</h1>からHTMLタグとPHPタグを取り除く。"."\n";

echo strip_tags($text);
echo "\n\n";
echo "・<p>、<h1>タグを残す（phpタグと<!-->は消す）。"."\n";
echo strip_tags($text, "<p><h1>");


echo "\n";

echo "〜〜〜〜〜array_pushを使う〜〜〜〜〜"."\n";
//末尾に要素を追加する
$color = ["red","blue","black"];
print_r($color);
echo "\n";

echo "・array_pushで「green」と「white」を追加する。"."\n";
array_push($color, "green", "white");
print_r($color);


echo "\n";

echo "〜〜〜〜〜array_mergeを使う〜〜〜〜〜"."\n";
//複数の配列を連結させる
$color2 = ["purple","gold"];

echo "colorの配列"."\n";
print_r($color);
echo "color2の配列"."\n";
print_r($color2);
echo "\n";

echo "・colorにcolor2を連結させる"."\n";
$color = array_merge($color, $color2);
print_r($color);

echo "\n";

echo "〜〜〜〜〜time, mktimeを使う〜〜〜〜〜"."\n";
//time：現在のUNIX TIMESTAMPを取得する。
//mktime：指定時刻のUNIX TIMESTAMPを取得する。

echo "・現在のUNIX TIMESTAMPを表示。"."\n";
echo $now_time = time();
echo "\n\n";

echo "・指定時刻のUNIX TIMESTAMPを表示。"."\n";
echo $selected_time = mktime(00,00,00,02,20,1995);
echo "\n";;

echo "\n";

echo "〜〜〜〜〜dateを使う〜〜〜〜〜"."\n";
//日時を出力する。
echo "現在の日時を出力する。"."\n";
echo date("Y/m/d/D", $now_time);
echo "\n";


echo "\n";

?>