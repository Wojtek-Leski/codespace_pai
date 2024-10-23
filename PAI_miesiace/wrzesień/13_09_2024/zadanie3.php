<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="oblicz.php" method="POST">
        <fieldset>
            <legend> kalkulator wersja 1.0 </legend>

            <h3> Podaj dwie liczby: </h3>
            
            <input type="text" name="liczba1" style="width: 70px;"> <br>
            <input type="text" name="liczba2" style="width: 70px;">

            <h3> Podaj dzialanie matematyczne: </h3>

            <input type="radio" name="radyjko"> Dodaj
            <input type="radio" name="radyjko"> Odejmij
            <input type="radio" name="radyjko"> Pomnóż

                <br><br>
        
            <input type="submit" value="Prześlij">
        </fieldset>
    </form>
</body>
</html>