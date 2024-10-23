<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="zadanie_1_get.css">
    <title> praca domowa </title>
</head>
<body>
    <form action="przeslij_get.php" method="GET">
        <fieldset id="formularz">
            <legend> FORMULARZ </legend>
               <input type="text" class="tekst" name="imie" id="imie" placeholder="imie"> <br>
               <input type="text" class="tekst" name="nazwisko" id="nazwisko" placeholder="nazwisko"> <br>
               <input type="text" class="tekst" name="adres_email" id="adres_email" placeholder="adres email"> <br><br>

               <input type="submit" id="submit" value="Prześlij">
        </fieldset>
    </form>
</body>
</html>