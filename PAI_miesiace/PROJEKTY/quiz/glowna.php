<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quizz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Document</title>
</head>
<body>
    <div id="tlo_glowna" class="kenburns-bottom">
        
    </div>
    <header class="slide-in-left">
        <h1 class="tracking-in-expand">Strona Główna Quiz Wiedzy - Języki Programowania</h1>
    </header>
        <br><br><br><br>
    <section class="slide-in-top">

    </section>

    <aside id="aside1" class="slide-in-left" onclick="aside1()">
    <br><br><br>
        <h1 class="glowna_jezyki">MYSQL</h1><br><br>
            <a href="amator_mysql.php"><input type="button" id="glowna_button" class="shadow-inset-center" value="amator"><br><br><br><br></a>
            <a href="srednio_zaawansowany_mysql.php"><input type="button" id="glowna_button" class="shadow-inset-center" value="srednio zaawansowany"><br><br><br><br></a>
            <a href="zaawansowany_mysql.php"><input type="button" id="glowna_button" class="shadow-inset-center" value="zaawansowany"><br><br><br><br></a>
    </aside>

    <aside id="aside2" class="slide-in-bottom" onclick="aside2()">
    <br><br><br>
        <h1 class="glowna_jezyki">PHP</h1><br><br>
            <a href="amator_php.php"><input type="button" id="glowna_button" class="shadow-inset-center" value="amator"><br><br><br><br>
            <a href="srednio_zaawansowany_php.php"><input type="button" id="glowna_button" class="shadow-inset-center" value="srednio zaawansowany"><br><br><br><br>
            <a href="zaawansowany_php.php"><input type="button" id="glowna_button" class="shadow-inset-center" value="zaawansowany"><br><br><br><br>
    </aside>

    <aside id="aside3" class="slide-in-right" onclick="aside3()">
    <br><br><br>
        <h1 class="glowna_jezyki">JAVA SCRIPT</h1><br><br>
            <a href="amator_js.php"><input type="button" id="glowna_button" class="shadow-inset-center" value="amator"><br><br><br><br>
            <a href="srednio_zaawansowany_js.php"><input type="button" id="glowna_button" class="shadow-inset-center" value="srednio zaawansowany"><br><br><br><br>
            <a href="zaawansowany_js.php"><input type="button" id="glowna_button" class="shadow-inset-center" value="zaawansowany"><br><br><br><br>
    </aside>

    <footer class="slide-in-left">
        <h4 class="tracking-in-expand">Copyright© 2025 - Wojtek Leski</h4>
    </footer>

    <!-- <script>
        function aside1()
        {
            var aside1 = document.getElementById("aside1");
            var aside2 = document.getElementById("aside2");
            var aside3 = document.getElementById("aside3");

            if(aside2.style.display === "inline")
			{
                aside1.style.width = "97%";
                aside1.style.textAlign = "center";

				aside2.style.display = "none";
				aside3.style.display = "none";
			}

			else
			{
                aside1.style.width = "30%";
                aside1.style.textAlign = "left";

				aside2.style.display = "inline";
				aside3.style.display = "inline";
			}
        }

        function aside2()
        {
            var aside1 = document.getElementById("aside1");
            var aside2 = document.getElementById("aside2");
            var aside3 = document.getElementById("aside3");

            if(aside3.style.display === "inline")
			{
                aside2.style.width = "97%";
                aside2.style.textAlign = "center";

				aside1.style.display = "none";
				aside3.style.display = "none";
			}

			else
			{
                aside2.style.width = "30%";
                aside2.style.textAlign = "left";

				aside1.style.display = "inline";
				aside3.style.display = "inline";
			}
        }

        function aside3()
        {
            var aside1 = document.getElementById("aside1");
            var aside2 = document.getElementById("aside2");
            var aside3 = document.getElementById("aside3");

            if(aside1.style.display === "inline")
			{
                aside3.style.width = "97%";
                aside3.style.textAlign = "center";

				aside1.style.display = "none";
				aside2.style.display = "none";
			}

			else
			{
                aside3.style.width = "30%";
                aside3.style.textAlign = "left";

				aside1.style.display = "inline";
				aside2.style.display = "inline";
			}
        }
    </script> -->
</body>
</html>