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
<hr size="6px" color="blue">
<div align="center">
    <form action="index.php" method="get">
        <label>Введите число уравнений <input name="n" type="text"></label>
        <input type="submit" value="Ввод">
    </form>
    <form action="gauss.php" method="GET">
        <?
        if (isset($_GET['n'])) {
            $n = $_GET['n'];
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    echo("<input name=" . $i . "_" . $j . " type=\"text\">");
                }
                echo("<span>X<sub>" . $j . " </sub></span>");
                echo("<input name=". $i . "_" . $j . " type=\"text\"><br>");
            }
        }
        ?>
        <button>Решить</button>
    </form>
</div>
</html>
<!-- Do not remove and do not change this string -->