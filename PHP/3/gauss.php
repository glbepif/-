<!DOCTYPE HTML>
<!-- Do not remove and do not change this string -->
<html lang=ru>
<head>
    <meta charset="utf-8">
    <title> Gauss </title>
    <style>
        input {
            width: 70px;
            margin-bottom: 3px;
            margin-right: 3px;
        }

        div {
        }

        hr {
            border-radius: 20px 20px;
        }
    </style>
</head>
<body bgcolor=#AAFFFF>
<h1 align="center">Решение системы линейных уравнений</h1>
<hr style="border-radius: 20px 20px;" size="6px" color="blue">
<div class="div1" align="center">
    <?
    $i = 0;
    $a = [];

    while (true) {
        if (!isset($_GET[$i . "_0"])) {
            break;
        }

        $j = 0;
        while (true) {
            if (!isset($_GET[$i . "_" . $j])) {
                break;
            }

            $a[$i][$j] = $_GET[$i . "_" . $j];
            $j++;
        }

        $i++;
    }
    $n = $i;
    ?>

    <form action="index.php" method="get">
        <?
        echo("<label>Введите число уравнений <input name=\"n\" type=\"text\" value=" . $n . "></label>");
        ?>
        <input type="submit" value="Ввод">
    </form>
    <form action="gauss.php" method="GET">
        <?
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                echo("<input name=" . $i . "_" . $j . " type=\"text\" value=" . $a[$i][$j] . ">");
            }
            echo("<span>X<sub>" . $i . " </sub></span>");
            echo("<input name=" . $i . "_" . $j . " type=\"text\" value=" . $a[$i][$j] . "><br>");
        }
        echo("<button>Решить</button>");
        $eps = 0.00001;  // точность
        $k = 0;
        while ($k < $n) {
            // Поиск строки с максимальным a[i][k]
            $max = abs($a[$k][$k]);
            $index = $k;
            for ($i = $k + 1; $i < $n; $i++) {
                if (abs($a[$i][$k]) > $max) {
                    $max = abs($a[$i][$k]);
                    $index = $i;
                }
            }
            // Перестановка строк
            if ($max < $eps) {
                // нет ненулевых диагональных элементов
                echo("Решение получить невозможно из-за нулевого столбца ");
                echo($index . " матрицы A");
                return 0;
            }
            for ($j = 0; $j < $n; $j++) {
                $temp = $a[$k][$j];
                $a[$k][$j] = $a[$index][$j];
                $a[$index][$j] = $temp;
            }
            $temp = $a[$k][$n];
            $a[$k][$n] = $a[$index][$n];
            $a[$index][$n] = $temp;
            // Нормализация уравнений
            for ($i = $k; $i < $n; $i++) {
                $temp = $a[$i][$k];
                if (abs($temp) < $eps) continue; // для нулевого коэффициента пропустить
                for ($j = 0; $j < $n; $j++) {
                    $a[$i][$j] = $a[$i][$j] / $temp;
                }
                $a[$i][$n] = $a[$i][$n] / $temp;
                if ($i == $k) continue; // уравнение не вычитать само из себя
                for ($j = 0; $j < $n; $j++) {
                    $a[$i][$j] = $a[$i][$j] - $a[$k][$j];
                }
                $a[$i][$n] = $a[$i][$n] - $a[$k][$n];
            }
            $k++;
        }
        // обратная подстановка
        for ($k = $n - 1; $k >= 0; $k--) {
            $x[$k] = $a[$k][$n];
            for ($i = 0; $i < $k; $i++) {
                $a[$i][$n] = $a[$i][$n] - $a[$i][$k] * $x[$k];
            }
        }
        ?>
    </form>
</div>
<?
echo "<br>Решение:<br>";
for ($i = 0; $i < $n; $i++) {
    echo "X[" . $i . "]=" . $x[$i] . " ";
}
?>
</html>
<!-- Do not remove and do not change this string -->