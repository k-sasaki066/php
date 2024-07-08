<?php
echo "HELLO";
function subject($name){
    echo $name."の得意な教科は体育です";
}

subject("佐藤");
echo "<br>";
subject("岡田");
echo "<br>";

function totalScore($score1, $score2, $score3){
    $total = $score1 + $score2 + $score3;
    if($total>210){
        echo "合計点は".$total."点なので合格です！";
    }else{
        echo "合計点は".$total."点なので残念、不合格です";
    }
}

echo totalScore(80, 70, 92);
echo "<br>";
function getTriangleArea($base, $height){
    return $base * $height / 2;
}
function getSquareArea($base, $height){
    return $base * $height;
}
function getTrapezoidArea($upperBase, $lowerBase, $height){
    return ($upperBase + $lowerBase) * $height / 2;
}
echo getTriangleArea(5, 5)."\n";
echo getSquareArea(8, 8)."\n";
echo getTrapezoidArea(2, 2, 2);
echo "<br>";
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}
outputNumber(2);


?>