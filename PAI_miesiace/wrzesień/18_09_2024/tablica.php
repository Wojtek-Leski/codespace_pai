<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $a = array
            (
                1 => 1,
                2 => 2,
                3 => 3
            );

            $b = array
            (
                3 => "trzy",
                4 => "cztery",
                5 => "piec"
            );

            $c = $a + $b;
            var_dump($c); // funkcja ktora zwraca typ i wartosc zmiennej
        ?>
</body>
</html>