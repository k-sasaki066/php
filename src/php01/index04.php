<?php
echo "HELLO";
echo "<br>";
$a = 1;
if($a === 7){
    echo "\$aは7です";
}else if($a < 7){
    echo "\$aは7より小さいです";
}else {
    echo "\$aは7より大きいです";
}
echo "<br>";
$people = "SABURO";
switch($people){
    case "TARO":
    echo "太郎です";
    break;
    case "JIRO":
    echo "次郎です";
    break;
    default:
    echo "誰でもありません";
    break;
}
echo "<br>";
$score = 40;
$result=($score > 50) ? "GOOD" : "頑張ろう";
echo $result;
echo "<br>";
$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;

?>