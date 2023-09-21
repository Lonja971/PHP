<?php

echo "\nv0.3\n\n";

$random = rand(1,100);
echo $random;
$keer = 1;

echo "\nWe hebben het getal van één tot 100 geraden :)\nWat is dit nummer?\n";
check($random, $keer);


function check($random, $keer) {
   $antwoord = readline("Voer de waarde: ");
   if (ctype_alpha($antwoord)) {
      echo "Weet jij wat een getal is? Probeer het nog eens.\n";
      check($random, $keer);
   }elseif (is_numeric($antwoord)) {
      if ($antwoord == "stop"){
         exit;
      }elseif ($random == $antwoord){
         echo "Je hebt het geraden! Het was ".$random."!\n";
         echo "Je raadt het al in ".$keer." stappen!";
      }elseif ($antwoord > 100) {
         echo "Dit aantal is meer dan 100 -_-";
         check($random, $keer);
      }elseif ($antwoord < 1) {
         echo "Dit aantal is kleiner dan 0 -_-";
         check($random, $keer);
      }elseif ($random < $antwoord){
         echo "No(; Maar het geraden getal is kleiner dan ".$antwoord."\n";
         $keer++;
         check($random, $keer);
      }elseif ($random > $antwoord){
         echo "No(; Maar het geraden getal is groter dan ".$antwoord."\n";
         $keer++;
         check($random, $keer);
      }
      else{
         echo "ERROR";
      }
   }else{
      echo "ERROR";
   }
}

?>