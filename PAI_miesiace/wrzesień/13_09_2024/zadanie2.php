<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> 1. Zmienne w PHP </h2>
    
    <?php
        define('enter', "<br><br>");

        $liczba = 246.135;
        var_dump(value: $liczba);
        //var_dump - funkcja ktora zwraca typ i wartosc zmiennej

            echo enter;

        $zwierze = true;
        var_dump(value: $zwierze);
        echo "<h2> 2. Czy liczba jest dodatnia, czy ujemna </h2>";

        if($liczba > 0)
        {
            echo "liczba jest dodatnia";
        }

        else if($liczba < 0)
        {
            echo "liczba jest ujemna";
        }

        else if($liczba == 0)
        {
            echo "liczba jest rowna 0";
        }

        echo "<h2> 3. Instrukcja switch </h2>";

        $wybor = 2;

        switch($wybor)
        {
            default:
            {
                echo "zly wybor (wybierz liczbe od 1 do 3)";
                break;
            }

            case 1:
            {
                echo "podales liczbe 1";
                break;
            }

            case 2:
            {
                echo "podales liczbe 2";
                break;
            }

            case 3:                
            {
                 echo "podales liczbe 3";
                 break;
            }
        }
    ?>

        <!-- <br><br>

    <h2> 4. Pobieranie danych z formularza </h2>

    <form>
        <input type="text" value="cos" id="napis"><br>
        <input type="button" value="zatwierdz" onClick="wyswietl()"><br>
    </form>

    <php
        function wyswietl()
        {
            echo $_GET["napis"];
        }
    ?> -->
</body>
</html>

<!-- // 1. typy skalarne
    //boolean, integer, float, string
// 2. typy złożone
    //array, object
// 3. typy specjalne
    //resource, null
    //$imie=null;
    //$imie=Null;
    //$imie=NulL;
/* Znaki soecjalne
\n - nowa linia
\r - powrót karetki
\t - tab. poziomy
\v - tab. pionowy
\f przwewinięcie strony
\\ lewy ukośnik
\$ dolar
\" cudzys.
*/ -->