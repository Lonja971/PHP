<?php

$naam = readline("Geef jouw naam: ");
$leeftijd = readline("Geef jouw leeftijd: ");
$beslissendeLeeftijd = 25;

echo "\nHallo $naam! \n";

if (ctype_alpha($leeftijd)) {
   echo "Het is geen getal :(\n";
}elseif (is_numeric($leeftijd)) {
   if ($leeftijd < $beslissendeLeeftijd) {
      echo "Jij bent jonger dan ".$beslissendeLeeftijd." jaar.\n";
   }
   if ($leeftijd > $beslissendeLeeftijd) {
      echo "Jij bent ouder dan ".$beslissendeLeeftijd." jaar \n";
   }
   if ($leeftijd == $beslissendeLeeftijd) {
      echo "Jij bent precies ".$beslissendeLeeftijd." jaar. \n";
   }
}else{
   echo "ERROR";
}

?>