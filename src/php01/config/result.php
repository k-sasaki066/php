<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

echo "名前：{$name} <br>";
echo "希望商品：{$choices} <br>";
echo "個数：{$number}";
?>