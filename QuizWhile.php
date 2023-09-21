<?php

$random = rand(1,100);
$keer = 1;
$whileVoorwaarde = true;
echo "\nWe hebben het getal van 1 tot 100 geraden :)\nWat is dit nummer?\n";

while ($whileVoorwaarde == true) {
   $antwoord = readline("Voer de waarde: ");
   if ($antwoord == "stop"){
      echo "Zoals u wenst, meester...\n";
      exit;
   }elseif (is_numeric($antwoord)) {
      if ($random == $antwoord){
         echo "\nJe hebt het geraden! Het was ".$random."!\n";
         echo "Je raadt het al in ".$keer." stappen!\n";
         $whileVoorwaarde = false;
      }elseif ($antwoord > 100 || $antwoord < 1) {
         echo "Gewenst aantal van 1 tot 100 -_-\n";
      }elseif ($random < $antwoord){
         echo "No(; Maar het geraden getal is kleiner dan ".$antwoord."\n";
         $keer++;
      }elseif ($random > $antwoord){
         echo "Nee, deze getal is groter dan ".$antwoord."\n";
         $keer++;
      }
      else{
         echo "ERROR";
      };
   }else{
      echo "Weet jij wat een getal is? Probeer het nog eens.\n";
   };
};

?>