<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quizz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script> 
    $(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
    });
    </script>
    <title>Document</title>
</head>
<body>
    <div id="tlo" class="kenburns-bottom">
        
    </div>
    <header class="slide-in-left">
        <h1 class="tracking-in-expand">Średnio Zaawansowany Quiz Wiedzy - PHP</h1>
    </header>
        <br><br><br><br>
    <section class="slide-in-top">
        <a href="glowna.php"><div id="button_menu" class="shadow-inset-center"><h1 class="focus-in-contract">STRONA GŁÓWNA</h1></div></a>
    </section>

    <aside id="aside_trickshistory" class="slide-in-left">
            <br><br><br>
            <div id="pytania">
            <form action="srednio_zaawansowany_php.php" method="POST">
                <h3>1. What is the correct way to add 1 to the $count variable?</h3>

                <input type="radio" name="1" value="1" id=""> count++; <br>
                <input type="radio" name="1" value="2" id=""> $count =+1 <br>
                <input type="radio" name="1" value="3" id=""> $count++; <br>

                <h3>2. How do you create an array in PHP?</h3>

                <input type="radio" name="2" value="1" id=""> $cars = table("Volvo", "BMW", "Toyota"); <br>
                <input type="radio" name="2" value="2" id=""> $cars = array["Volvo", "BMW", "Toyota"]; <br>
                <input type="radio" name="2" value="3" id=""> $cars = array("Volvo", "BMW", "Toyota"); <br>

                <h3>3. Which superglobal variable holds information about headers, paths, and script locations?</h3>

                <input type="radio" name="3" value="1" id=""> $_SERVER <br>
                <input type="radio" name="3" value="2" id=""> $_SESSION <br>
                <input type="radio" name="3" value="3" id=""> $_GLOBAL <br><br>

                <input type="submit" id="quiz_button" name="quiz_button" value="przeslij">
            </form>
        </div>

        <div id="wyniki">
            <h1 style="text-align: center;">Wynik</h1>
            
            <?php
                $servername = "localhost"; // zawsze localhost  
                $username = "root"; // root
                $password = ""; // github -> mariadb
                $database = "quiz"; // nazwa bazy danych
    
                // polaczenie z serwerem mysql
    
                $dbc = mysqli_connect($servername, $username, $password, $database);

                $sql = "SELECT * FROM php";
                $result = $dbc->query($sql);

                while($row = $result -> fetch_array()) //obiektowo
                {
                    if(@$_POST['1'] == $row[3])
                    {
                        @$wynik = $wynik + 1;
                    }
                        

                    if(@$_POST['2'] == $row[4])
                    {
                        @$wynik = $wynik + 1;
                    }
                        

                    if(@$_POST['3'] == $row[5])
                    {
                        @$wynik = $wynik + 1;
                    }
                        
                }
            ?>

            <h3>Poprawne odpowiedzi: <?php if(@$_POST['quiz_button'] == true) echo "3, 3, 1" ?></h3>
            <h3>Twój wynik to: <?php echo @$wynik*33+1 . "%"; ?></h3>

            <?php
                if(@$wynik == 1)
                {
                    echo "<h3>Poprawnie odpowiedziałeś na 1 pytanie, więc nie jest to zbyt dobry wynik, lepiej powtórz wiadomości przed egzaminem</h3>";
                    echo "<img src='f.png'>";
                }

                if(@$wynik == 2)
                {
                    echo "<h3>Poprawnie odpowiedziałeś na 2 pytania, więc nie jest to zły wynik, lecz radzę powtórzyć coś przed egzaminem bo to i tak za mało</h3>";
                    echo "<img src='c.png'>";
                }

                if(@$wynik == 3)
                {
                    echo "<h3>Poprawnie odpowiedziałeś na 3 pytania, więc jest to naprawdę dobry wynik, ale to i tak za mało żeby napisać egzamin, radzę ci powtórzyć rzeczy które sprawiają ci problem</h3>";
                    echo "<img src='a.png'>";
                }
            ?>
        </div>
    </aside>

    <aside id="aside_panel" class="slide-in-right">
    <div id="flip"><h3>USTAWIENIA</h3></div>
        <div id="panel">
            <a href="profil.php" id="a"><h2>PROFIL</h2><br></a>
                <h2>MOTYW</h2>
                <input type="button" id="button_ustawienia1" value="jasny" onClick="jasny()">
                <input type="button" id="button_ustawienia2" value="ciemny" onClick="ciemny()">
            <a href="" id="b"><h2>DOŁĄCZ</h2><br></a>
            <a href="info.php" id="c"><h2>INFO</h2><br></a>

                <script>
                    function jasny()
                    {
                        if (document.getElementById("tlo").style.backgroundImage == "url('jasny_quiz.jpg')")
                            document.body.style.backgroundImage = "url('ciemny_quiz.jpg')";

                        else
                        {
                            document.getElementById("tlo").style.backgroundImage = "url('jasny_quiz.jpg')";
                            document.getElementById("aside_trickshistory").style.backgroundColor= "rgb(232, 250, 255)";
                            document.body.style.color = "black";

                            document.getElementById("aside_panel").style.backgroundColor= "rgb(232, 250, 255)";
                            document.getElementById("panel").style.backgroundColor= "rgb(255, 255, 255)";
                            document.getElementById("panel").style.border= "2px solid black";
                            document.getElementById("panel").style.color= "black";
                            document.getElementById("button_ustawienia1").style.backgroundColor= "black";
                            document.getElementById("button_ustawienia2").style.backgroundColor= "black";
                            document.getElementById("button_ustawienia1").style.color= "white";
                            document.getElementById("button_ustawienia2").style.color= "white";
                            document.getElementById("flip").style.color= "black";
                            document.getElementById("a").style.color= "black";
                            document.getElementById("b").style.color= "black";
                            document.getElementById("c").style.color= "black";
                            document.getElementById("flip").style.backgroundColor= "rgb(255, 255, 255)";
                            document.getElementById("flip").style.border= "2px solid black";
                        }
                    }

                    function ciemny()
                    {
                        if (document.getElementById("tlo").style.backgroundImage == "url('ciemny_quiz.jpg')")
                            document.body.style.backgroundImage = "url('jasny_quiz.jpg')";

                        else
                        {
                            document.getElementById("tlo").style.backgroundImage = "url('ciemny_quiz.jpg')";
                            document.getElementById("aside_trickshistory").style.backgroundColor= "rgb(0, 29, 82)";
                            document.body.style.color = "white";

                            document.getElementById("aside_panel").style.backgroundColor= "rgb(0, 29, 82)";
                            document.getElementById("panel").style.backgroundColor= "rgb(0, 0, 0)";
                            document.getElementById("panel").style.border= "2px solid white";
                            document.getElementById("panel").style.color= "white";
                            document.getElementById("button_ustawienia1").style.backgroundColor= "white";
                            document.getElementById("button_ustawienia2").style.backgroundColor= "white";
                            document.getElementById("button_ustawienia1").style.color= "black";
                            document.getElementById("button_ustawienia2").style.color= "black";
                            document.getElementById("flip").style.color= "white";
                            document.getElementById("a").style.color= "white";
                            document.getElementById("b").style.color= "white";
                            document.getElementById("c").style.color= "white";
                            document.getElementById("flip").style.backgroundColor= "rgb(0, 0, 0)";
                            document.getElementById("flip").style.border= "2px solid white";
                        }
                    }
                </script>
        </div>
    </aside>

    <footer class="slide-in-left">
        <h4 class="tracking-in-expand">Copyright© 2025 - Wojtek Leski</h4>
    </footer>
</body>
</html>