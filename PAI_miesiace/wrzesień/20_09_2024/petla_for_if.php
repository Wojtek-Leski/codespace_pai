<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> PRZYKLAD 1 </h3>

    <?php
        for($i = 1; $i <= 20; $i++)
        {
            if($i % 2 != 0) continue;
            {
                echo "liczba $i <br>";
            }
        }
    ?>

    <!-- program wypisuje liczby parzyste z przedzialu od 1 do 20 -->

    <h3> PRZYKLAD 2 </h3>

    <?php
        $i = 1;

        for(; ;)
        {
            echo "cyfra $i <br>";
            if($i++ >=10) break;
        }
    ?>
</body>
</html>