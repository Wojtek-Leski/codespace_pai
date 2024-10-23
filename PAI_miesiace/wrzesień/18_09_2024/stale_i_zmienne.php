<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            echo "\"Tekst ujety w znak cydzyslowu prostego.\"";
            echo "<br>";
            echo "Z interpretacja sekwencji specjalnych Unicode: ";
            echo "<br>";
            echo "\u{017c}\u{00f3}\u{0142}\u{63}\u{69}\u{65}\u{0144}";
        ?>
    </div>
    
    <div>

    <h3> Inkrementacja </h3>

        <?php
            /*1*/ $x = 2;
            /*2*/ echo $x++;
            /*3*/ echo ++$x;
            /*4*/ echo $x;
            /*5*/ $y = $x++;
            /*6*/ echo $y;
            /*7*/ $y = ++$x;
            /*8*/ echo $y;
            /*9*/ echo ++$y;
        ?>
    </div>

    <div>

    <h3> Dekrementacja </h3>

        <?php
            /*1*/ $x = 2;
            /*2*/ echo $x--;
            /*3*/ echo --$x;
            /*4*/ echo $x;
            /*5*/ $y = $x--;
            /*6*/ echo $y;
            /*7*/ $y = --$x;
            /*8*/ echo $y;
            /*9*/ echo --$y;
        ?>
    </div>
</body>
</html>