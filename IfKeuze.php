<?php

$naam = readline("Geef jouw naam: ");
$leeftijd = readline("Geef jouw leeftijd: ");

echo "\nHallo $naam! \n";

if (ctype_alpha($leeftijd)) {
   echo "Het is geen getal :(\n";
}elseif (is_numeric($leeftijd)) {
   if ($leeftijd < 22) {
      echo "Jij bent jonger dan 22 jaar.\n";
   }
   if ($leeftijd > 22) {
      echo "Jij bent ouder dan 22 jaar \n";
   }
   if ($leeftijd == 22) {
      echo "Jij bent precies 22 jaar. \n";
   }
}else{
   echo "ERROR";
}

?>