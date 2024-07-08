<?php
for($i=1; $i<=5; $i++){
    for($j=1; $j<=10; $j++){
        echo '⚫︎';
    }
    echo "{$i}周目! <br>";
}

for($a=1; $a<=15; $a++){
    echo $a .'<br>';
}

$list = ['忍','者','C','O','D','E'];
echo implode('', $list);

$ninja = '忍者CODE';
echo mb_substr($ninja, 0, 2);

date_default_timezone_set('Asia/Tokyo');
echo date('Y-m-d H:i:s');
?>
