<?php

$random = rand(1,100);

echo "\nWe hebben het getal van één tot 100 geraden :)\nWat is dit nummer?\n";

check();

$randomNum = $random;

function check() {
   $antwoord = readline("Voer de waarde: ");
   if ($randomNum == $antwoord){
      echo "Je hebt het geraden! Het was ".$randomNum."!\n";
   }elseif ($antwoord > 100) {
      echo "Dit aantal is meer dan 100 -_-";
      check();
   }elseif ($antwoord < 0) {
      echo "Dit aantal is kleiner dan 0 -_-";
      check();
   }elseif ($randomNum < $antwoord){
      echo "No(; Maar het geraden getal is kleiner dan".$antwoord."\n";
      check();
   }elseif ($randomNum > $antwoord){
      echo "No(; Maar het geraden getal is groter dan".$antwoord."\n";
      check();
   }elseif ($antwoord == "finish"){
      exit;
   }
   else{
      echo "ERROR";
   }
}

?>