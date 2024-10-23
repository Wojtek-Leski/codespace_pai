<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- bedziemy konwertowac typ zmiennej -->

    <?php
        $liczba1 = 1.5;
        $liczba2 = (int) $liczba1;
        echo "Zmienna \$liczba1 ma wartosc $liczba1.";
        echo "<br>";
        echo "Zmienna \$liczba2 ma wartosc $liczba2.";
    ?>
</body>
</html>