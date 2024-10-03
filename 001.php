<?php
$products = [
  ["りんご", 50, 110],
  ["みかん", 0, 80],
  ["バナナ", 30, 60],
  ["ぶどう", 5, 240]
];

echo "①";
echo "<br>";
foreach ($products as $value) {
  if($value[1] > 1) {
    echo "{$value[0]}は在庫がある。" . "<br>";
  } else {
    echo "{$value[0]}は在庫がない。" . "<br>";
  }
}

$h = 0;
$c = 0;
$y = 0;



foreach ($products as $value) {
  if($value[2] > 200) {
    $h += 1;
  } else if($value[2] > 100 and $value[2] < 200) {
    $c += 1;
  } else if($value[2] < 100) {
    $y += 1;
  }
}

echo "<br>";
echo "②";
echo "<br>";
echo "高価な商品は{$h}件、中価格の商品は{$c}件、安価な商品は{$y}件あります。";