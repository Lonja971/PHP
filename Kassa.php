<?php

function start(){
   echo "\nDit is een kassasysteemprogramma.\n";
   $start = true;
   while($start == true){
      $startUserAnswer = readline('Doorgaan? (ja/nee)');
      if (strtolower($startUserAnswer) == 'j' || strtolower($startUserAnswer) == 'ja'){
         kassaSysteem();
      }else if(strtolower($startUserAnswer) == 'n' || strtolower($startUserAnswer) == 'nee'){
         echo "Oké, bedankt voor je aandacht.\n";
         die;
      }else{
         echo "Ik begrijp het niet. Herhaal alstublieft!\n";
      }
   }
};
start();

function kassaSysteem(){
   $startSum = true;
   $sumNum = 1;
   $sumVariable = [];
   echo "\n(Typ 'stop' om de lijst te beëindigen)\n";
   
   while ($startSum == true){
      $userSum = readline("Vul " . $sumNum . "e bedrag in: ");
      if(is_numeric($userSum) && $userSum > 0){
         $sumVariable[] = $userSum;
         $sumNum++;
      } else if(strtolower($userSum) == 'stop'){
         echo "Oke...\n";
         $startSum = false;
      } else {
         echo "Ik begrijp het niet. Herhaal alstublieft!\n";
      }
   }
   
   $fullPrice = array_sum($sumVariable);
   echo "\nBetaal in totaal: " . number_format($fullPrice, 2, '.', '') . " €\n";
   
   while ($fullPrice > 0){
      $userPayment = readline("Met hoeveel betaalt u: ");
      if(is_numeric($userPayment) && $userPayment >= 0){
         $fullPrice -= $userPayment;
         if ($fullPrice > 0){
            echo "Er blijft nog geld over om te betalen: " . number_format($fullPrice, 2, '.', '') . " €\n";
         } else if ($fullPrice == 0){
            echo "Je hebt alles betaald. Bedankt!\n";
            start();
         } else {
            echo "Dit is genoeg.\n";
            echo "Jouw restjes: " . number_format(abs($fullPrice), 2, '.', '') . " €\n";
            start();
         }
      } else {
         echo "Ik begrijp het niet. Herhaal alstublieft!\n";
      }
   }
};

?>