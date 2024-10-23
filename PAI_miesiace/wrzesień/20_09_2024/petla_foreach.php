<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tab = array
        (
            1 => 'jeden',
            2 => 'dwa',
            'trzy' => 3,
            'cztery' => 4
        );

        foreach($tab as $key => $v)
        {
            echo "tab[$key] = $v <br>";
        }
    ?> 
</body>
</html>