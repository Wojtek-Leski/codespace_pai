<?php
         $i = $_POST["imie"];
         $n = $_POST["nazwisko"];
     
         echo "twoje imie to: " . rtrim($i) . " " . strlen($i) . "<br>";
         echo "twoje nazwisko to: " . rtrim($n) . " " . strlen($n) . "<br>";
?>