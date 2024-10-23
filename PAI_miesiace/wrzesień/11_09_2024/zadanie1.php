<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> skrypt numer 1 </h2>

    <?php
        print("test z jezyka php");
        print "<br>";
        print "<h2 style=\"color: green; background-color: black;\"> zupa romana </h2>";
    ?>

    <h2> skrypt numer 2 - define </h2>

    <?php
        define('podatek', 17);
        define('podatek2', 20);
        define('enter', "<br><br>");
        define('przycisk', "<input type=\"button\" class=\"input_przycisk\" value=\"button\">");
        const pi = 3.14;

        echo 'podatek w roku 2022 wynosi: ' . podatek . podatek2 . enter;
        echo 'enter, a liczba pi ma wartosc ' . pi;
        echo (pi());
        echo '' . przycisk;
    ?>

    <h2> skrypt numer 3 - informacje o serwerze z zewnetrznego pliku </h2>

    <?php
        include "info.php";
    ?>

</body>
</html>