<?php
echo "HELLO"."<br>";

class NINJA {
    public $title;
    public $sub_title;

    public function __construct($title, $sub_title){
        $this->$title = $title;
        $this->$sub_title = $sub_title;
    }

    public function render(){
        echo "{$title} 今から {$sub_title}";
    }
}


$ninja = new NINJA('PHPの問題集', 'スタート！');
$ninja->render();

for($i=1; $i<=15; $i++){
    echo $i .'<br>';
}

$list = ['忍','者','C','O','D','E'];
echo implode('', $list);

foreach($list as $index){
    echo $index;
}

$ninja = '人参CODE';
echo str_replace('人参', '忍者', $ninja).'<br>';


$text = ['P','H','P','を','学','ぶ'];
for($i=0; $i<count($text); $i++){
    echo $text[$i];
}

$lists = [
    "JavaScript",
    "python",
    "PHP",
    "Ruby",
    "Perl"
];
?>

<?php foreach($lists as $list):?>
<ul>
    <li><?php echo $list; ?></li>
</ul>
<?php endforeach; ?>

<?php
$n1 = 1;
$n2 = "忍者2";
$n3 = [1029,480,3,493];

echo $n1 + str_replace('忍者', '', $n2) + $n3[2];

$text = '{"text1":"忍者", "text2":"CODE","text3":"無料問題集" }';
foreach(json_decode($text) as $key=>$val){
    echo $key .':'.$val .'<br>';
}

$list = [
    1 => '忍者',
    2 => ['CO', 'DE'],
    3 => '{"text1":"無", "text2":"料"}',
    4 => [
        401 => '集',
        402 => '人参',
        403 => '問題',
    ],
];

$anser = '';
foreach($list as $key => $value){
    if($key == 1){
        $anser .= $value;
    }
    if($key == 2){
        $anser .= join('', $value);
    }
    if($key == 3){
        foreach(json_decode($value) as $text){
            $anser .= $text;
        }
    }
    if($key == 4){
        $anser .= $value[403].$value[401];
    }
}

echo $anser;
echo phpversion();

date_default_timezone_set('Asia/Tokyo');
echo date('Y-m-d H:i:s');

$list = [-1, 0, 1, "2", "3A", 4.1, [5], "1,000", 1001];
foreach($list as $item){
    if(is_numeric($item)){
        echo $item .'<br>';
    }
}
?>