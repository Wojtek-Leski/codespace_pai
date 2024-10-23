<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="przeslij_trim.php" method="POST">
        <fieldset>
            <legend> trim </legend>
                <input type="text" name="imie" id="">
                <input type="text" name="nazwisko" id="">

                <input type="submit" value="przeslij">
        </fieldset>
    </form>

    <form action="przeslij_ltrim.php" method="POST">
        <fieldset>
            <legend> ltrim </legend>
                <input type="text" name="imie" id="">
                <input type="text" name="nazwisko" id="">

                <input type="submit" value="przeslij">
        </fieldset>
    </form>

    <form action="przeslij_rtrim.php" method="POST">
        <fieldset>
            <legend> rtrim </legend>
                <input type="text" name="imie" id="">
                <input type="text" name="nazwisko" id="">

                <input type="submit" value="przeslij">
        </fieldset>
    </form>
</body>
</html>