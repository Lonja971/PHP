<?php

echo "\nHallo, ik zal je helpen afstandseenheden om te zetten!\n";
echo "Naam instructie:\n  Millimeter = mm\n  Centimeter = cm\n  Decimeter = dm\n  Meter = m\n  Decameter = dam\n  Hectometer = hm\n  Kilometer = km\n\n";
action();

function action(){

   $checkNum = true;
   while($checkNum == true){
      $userNum = readline("Voer een nummer in: ");

      if(is_numeric($userNum)){
         $checkNum = false;
      }else{
         echo "Het is geen getal:(\n";
      }
   }

   $checkUserUnit = true;
   while($checkUserUnit == true){
      $userUnit = readline("Maateenheid invoeren (afgekort): ");

      if(strtolower($userUnit == 'mm') || strtolower($userUnit == 'cm') || strtolower($userUnit == 'dm') || strtolower($userUnit == 'm') || strtolower($userUnit == 'dam') || strtolower($userUnit == 'hm') || strtolower($userUnit == 'km')){
         $checkUserUnit = false;
      }else{
         echo "Ik begrijp niet wat het is...\n";
      }
   }

   $checkResetUnit = true;
   while($checkResetUnit == true){
      $resetUnit = readline("Naar welke meeteenheid moet worden gewijzigd (afgekort): ");

      if(strtolower($resetUnit == 'mm') || strtolower($resetUnit == 'cm') || strtolower($resetUnit == 'dm') || strtolower($resetUnit == 'm') || strtolower($resetUnit == 'dam') || strtolower($resetUnit == 'hm') || strtolower($resetUnit == 'km')){
         $checkResetUnit = false;
      }else{
         echo "Ik begrijp niet wat het is...\n";
      }
   }

   switch ($userUnit) {
      case 'mm':
         $formula = $userNum;
         break;
      case 'cm':
         $formula = $userNum*10;
         break;
      case 'dm':
         $formula = $userNum*100;
         break;
      case 'm':
         $formula = $userNum*1000;
         break;
      case 'dam':
         $formula = $userNum*10000;
         break;
      case 'hm':
         $formula = $userNum*100000;
         break;
      case 'km':
         $formula = $userNum*1000000;
         break;
      default:
         echo "-_-";
   }
   switch ($resetUnit) {
      case 'mm':
         $resetFormula = 1;
         break;
      case 'cm':
         $resetFormula = 10;
         break;
      case 'dm':
         $resetFormula = 100;
         break;
      case 'm':
         $resetFormula = 1000;
         break;
      case 'dam':
         $resetFormula = 10000;
         break;
      case 'hm':
         $resetFormula = 100000;
         break;
      case 'km':
         $resetFormula = 1000000;
         break;
      default:
         echo "-_-";
   }
   $answer = $formula/$resetFormula;
   if (is_float($answer)) {
      $answer = sprintf("%.10f", $answer);
      $answer = rtrim($answer, '0');
      if(substr($answer, -1) == '.') {
          $answer = substr($answer, 0, -1);
      }
      echo "\nAntwoord: ".$answer." ".$resetUnit."\n";
   } else {
      echo "\nAntwoord: ".number_format($answer)." ".$resetUnit."\n";
   }
   
   $restart = false;
   while ($restart == false) {
       $readlineOfRestart = strtolower(readline("Wil je herhalen? (Ja,Nee) "));
       if ($readlineOfRestart == "ja"){
           echo "Prima...\n\n";
           action();
       } elseif ($readlineOfRestart == "nee"){
           echo "Bedankt voor het gebruiken :)";
           die;
       } else {
           echo "Ik herken niet wat je schreef ;(\n";
       }
   }   

};


?>