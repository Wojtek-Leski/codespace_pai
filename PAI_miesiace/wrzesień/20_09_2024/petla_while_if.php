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
        $i = 0;

        while(true)
        {
            echo "napis [i = $i] <br>";

            if($i >= 10) break;
            {
                $i++;
            }
        }
    ?>

    <h3> PRZYKLAD 2 </h3>

    <?php
        $i = 0;

        while(true)
        {
            echo "napis [i = $i] <br>";

            if($i == 9) break;
            {
                $i = $i + 2;
            }
        }
    ?>
</body>
</html>