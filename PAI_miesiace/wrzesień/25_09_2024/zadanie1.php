<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function func()
    {
        echo "Instrukcja echo wnętrza funkcji.<br><br>";
    }

    func();

    ?>
    <h2>funkcja z jednym argumentem</h2>
    <?php

    define('e' , "<br>");

    function wyswietl($argl) 
    {
        echo($argl);
    }
    wyswietl("Przykładowy ciąg znaków");
    echo e;
    
    wyswietl(356);
    echo e;
    wyswietl(3.14);
    echo e;
    echo e;
    ?>
    <h2>funkcja z dwoma argumentami</h2>
    <?php
    function dodaj($wart1, $wart2)
    {
        echo "wynikiem dodawania $wart1 + $wart2 jest ";
        echo $wart1 + $wart2 . ".";
        echo e;echo e;
    }

    dodaj(10,20)
    ?>

    
    <?php
    function dodaj2($wart3, $wart4)
    {
        $wynik = $wart3 + $wart4;
        echo "test<br><br>"; //wypisze
        return $wynik;
        echo "test"; // nie wypisze 
    }
    $wartosc = dodaj2(10,20);
    echo "Wynikiem dodawania 10 i 20 jest $wartosc  <br><br>";
    ?>
<h2>Różnica jest taka ze w tym przypadku wynik dodawania bedzie zwracany do miejsca wywołania</h2>

    <?php
    function jakaWartosc($liczba):string{
        if($liczba < 0){
            return "ujemna";
        } elseif ($liczba > 0){
            return "dodatnia";
        }else{
            return "zero";
        }
    }
    echo jakaWartosc(1) . e;
    echo jakaWartosc(-1) . e;
    echo jakaWartosc(0) . e;
?> 
</body>
</html>