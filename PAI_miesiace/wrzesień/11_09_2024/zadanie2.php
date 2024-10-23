<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> zmienne </h2>

    <?php
        $liczba1 = 10;
        $liczba2 = 12.5;
        $napis = "jakis tekst";
        echo "pierwsza liczba to: ", $liczba1, "<br>";
        print ("druga liczba to: " . $liczba2 . " " . $napis);

        echo "<br>";

        $tekst = <<<ID1
        pierwsza liczba to $liczba1, a druga liczba to $liczba2.
        tekst to $napis
        ID1;
        echo $tekst;
    ?>
</body>
</html> heredog