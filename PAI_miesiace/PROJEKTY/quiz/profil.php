<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quizz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="tlo_profil" class="kenburns-bottom">
        
    </div>

    <header class="slide-in-left">
        <h1 class="tracking-in-expand">Profil użytkownika</h1>
    </header>
        <br><br><br><br>
    <section class="slide-in-top">
        <a href="glowna.php"><div id="button_menu" class="shadow-inset-center"><h1 class="focus-in-contract">STRONA GŁÓWNA</h1></div></a>
    </section>

    <aside id="aside1_prof" class="slide-in-left">
        <div id="pole_prof">
            <img src="<?php echo @$_POST["zapisz1"] == true ? @$_POST['tekst_awatar1'] : @$_COOKIE['profilowe'];?>" id="zdjecie_prof" name="zdjecie_prof" alt="">

            <div id="pole_prof2" style="background-color: <?php echo @$_POST["zapisz3"] == true ? @$_POST['kolor'] : @$_COOKIE['kolor_banera']; ?>">
                <form action="profil.php" method="POST">
                    <h2 style="color: rgb(153, 153, 153); font-family: Tahoma" > NAZWA </h2>
                    <input type="text" placeholder="" name="nazwa" id="tekst_awatar1" value="<?php echo @$_POST["zapisz5"] == true ? @$_POST['nazwa'] : @$_COOKIE['nazwa'];?>"><br><br>
                    <input type="submit" value="ZAPISZ" name="zapisz5" id="button_zmiana">
                </form>
                
                <?php
                    if(@$_POST["zapisz5"] == true)
                    {
                        setcookie('nazwa', @$_POST['nazwa'], time()+60*60*24*100, "/");
                    }
                ?>

                    <hr>
                <h2 style="color: rgb(153, 153, 153); font-family: Tahoma" > O MNIE </h2>
                <textarea name="o_mnie" id="textarea_prof" maxlength="200" readonly="true"><?php echo @$_POST["zapisz4"] == true ? @$_POST['info_o_mnie'] : @$_COOKIE['o_mnie'];?></textarea>
            </div>
        </div>
    </aside>

    <aside id="aside2_prof" class="slide-in-right">
        <div id="pole_prof_zmiany">
            <form action="profil.php" method="POST">
                <h2 style="color: rgb(153, 153, 153); font-family: Tahoma" > AWATAR </h2>
                <input type="text" placeholder="zdjęcie_profilowe.jpg" name="tekst_awatar1" id="tekst_awatar1"><br><br>
                <input type="submit" value="ZMIEŃ AWATAR" name="zapisz1" id="button_awatar1">
                <!-- <input type="submit" value="USUŃ AWATAR" name="zapisz2" id="button_awatar2"> -->
            </form>

            <?php
                if(@$_POST["zapisz1"] == true)
                {
                    setcookie('profilowe', @$_POST['tekst_awatar1'], time()+60*60*24*100, "/");
                }
            ?>

                    <br>
                <hr>
                    <br>
            <form action="profil.php" method="POST">
                <h2 style="color: rgb(153, 153, 153); font-family: Tahoma" > KOLOR BANERA </h2>
                <input type="color" name="kolor" id="kolor_banera">
                <input type="submit" value="ZAPISZ" name="zapisz3" id="button_zmiana">
            </form>

            <?php
                if(@$_POST["zapisz3"] == true)
                {
                    setcookie('kolor_banera', @$_POST['kolor'], time()+60*60*24*100, "/");
                }
            ?>

                    <br>
                <hr>
                    <br>
            <form action="profil.php" method="POST">
                <h2 style="color: rgb(153, 153, 153); font-family: Tahoma" > O MNIE </h2>

                <textarea name="info_o_mnie" id="textarea_prof" maxlength="50" placeholder="Napisz coś o sobie..."></textarea>
                <input type="submit" value="ZAPISZ" name="zapisz4" id="button_zmiana">
            </form>

            <?php
                if(@$_POST["zapisz4"] == true)
                {
                    setcookie('o_mnie', @$_POST['info_o_mnie'], time()+60*60*24*100, "/");
                }
            ?>
        </div>
    </aside>

    <footer class="slide-in-left">
        <h4 class="tracking-in-expand">Copyright© 2025 - Wojtek Leski</h4>
    </footer>
</body>
</html>