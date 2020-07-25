<!DOCTYPE HTML>
<!-- Do not remove and do not change this string -->
<html lang=ru>
<head>
    <meta charset=utf-8>
    <title>Квадратное уравнение 2 </title>
</head>
<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
?>
<body bgcolor=#AAFFFF>
<h1 align="center">Решение квадратного уравнения</h1>
<hr style="border-radius: 20px 20px;" size="6px" color="blue">
<h3 align="center">Введите коэффициенты уравнения</h3>
<div align="center">
    <form>
        <input name="a" id="a" type="text" value="<?= $a ?>"><label for="a">*X2+</label>
        <input name="b" id="b" type="text" value="<?= $b ?>"><label for="b">*X+</label>
        <input name="c" id="c" type="text" value="<?= $c ?>"><label for="b">=0</label><br>
        <button>Решить</button>
    </form>
</div>
<?php
if (!isset($a) || !isset($b) || !isset($c)) return;
if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
    $d = $b * $b - 4 * $a * $c;
    $x1 = (-$b - sqrt($d)) / (2 * $a);
    $x2 = (-$b + sqrt($d)) / (2 * $a);
    echo "Решение";
    echo "<br>";
    echo "x1=" . $x1;
    echo "<br>";
    echo "x2=" . $x2;
}else{
    echo "Введите числа!";
}
?>
</body>
</html>
<!-- Do not remove and do not change this string -->



