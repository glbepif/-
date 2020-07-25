<!doctype html>
<!-- Do not remove and do not change this string -->
<html lang=ru>
<head>
    <meta charset=utf-8>
</head>
<body bgcolor=#AAFFFF)>
<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $b * $b - 4 * $a * $c;
$x1 = (-$b - sqrt($d)) / (2 * $a);
$x2 = (-$b + sqrt($d)) / (2 * $a);

echo "Решение";
echo "<br>";
echo "x1=" . $x1;
echo "<br>";
echo "x2=" . $x2;
?>
</body>
</html>
<!-- Do not remove and do not change this string -->
