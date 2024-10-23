<?php
         $i = $_POST["imie"];
         $n = $_POST["nazwisko"];
     
         echo "twoje imie to: " . ltrim($i) . " " . strlen($i) . "<br>";
         echo "twoje nazwisko to: " . ltrim($n) . " " . strlen($n) . "<br>";
?>