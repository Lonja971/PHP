<?php

echo "\nHallo! Dit programma helpt je getallen te verdelen!\n";
$voorwaarde = true;

while ($voorwaarde == true){
   $deeltalAudit = true;
   while ($deeltalAudit == true){
      $deeltal = readline("Voer een deeltal in: ");
      if (!is_numeric($deeltal)){
         echo "Deeltal is geen geldig nummer. Probeer het opnieuw.\n";
      }else{
         $deeltalAudit = false;
      }
   }

   $delerAudit = true;
   while ($delerAudit == true){
      $deler = readline("Voer een deler in: ");
      if (!is_numeric($deler)){
         echo "Deeltal is geen geldig nummer. Probeer het opnieuw.\n";
      }else{
         $delerAudit = false;
      }
   }
   
   $resultaat = $deeltal/$deler;
   
   // Видалено floor() з результату
   $fullRes = $resultaat; // Змінено на просте присвоєння
   $rest = intval($deeltal) % intval($deler);
   
   if ($rest == 0){
      echo "\n".$deeltal." / ".$deler." = ".number_format($fullRes, 2)."\n"; // Додано number_format для форматування результату
   }else{
      echo "\n".$deeltal." / ".$deler." = ".intval($fullRes)." (".$rest."/".$deler.")\n"; // Використано intval() для отримання цілої частини результату
   }
   $vervolgcontrole = true;
   while ($vervolgcontrole == true){
      $keuze = readline("Wil je doorgaan? Ja/Nee: ");
      if (strtolower($keuze) == "nee"){
         echo "\nBedankt voor het gebruik :)";
         $vervolgcontrole = false;
         $voorwaarde = false;
      }elseif (strtolower($keuze) == "ja"){
         echo "\n";
         $vervolgcontrole = false;
      }else{
         echo "Ik begrijp jou niet :(\n";
      }
   }
}

?>