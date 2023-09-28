<?php
//v 0.7

$userMoney = 100;

echo "\nHallo! Het loterijspel kost 5 euro.\n";
echo "\nWinnen:\n3 juiste cijfers 10 euro\n4 juiste cijfers 1000 euro\n5 juiste cijfers 100.000 euro\n5 juiste cijfers 10.000.000 euro";
echo "\n\nJe balans: ".number_format($userMoney, 0, ',','.')." euro.\n";
startMenu($userMoney);

function startMenu($userMoney) {
   while (true){
      $userStartInput = readline("Als je wilt beginnen, schrijf dan 'start' of 'stop': ");
      if (strtolower($userStartInput) == "start"){
         startGame($userMoney);
         break;
      }elseif (strtolower($userStartInput) == "stop"){
         die;
      }else{
         echo "Het spijt me, wat?\n";
      };
   }
}

function startGame($userMoney) {
   if ($userMoney < 5){
      echo "Er is niet genoeg geld!";
      die;
   };
   $whileNum = 0;
   $userAnsBox = array();
   $randomAnsBox = array();
   $userMoney -= 5;

   echo "\nKies 6 cijfers (van 1 tot 42)\n";
   while ($whileNum < 6) {
      if($whileNum == 0){
         $userAnswer = readline("Voer het 1e nummer in: ");
      }elseif($whileNum == 1){
         $userAnswer = readline("Voer het 2e nummer in: ");
      }elseif($whileNum == 2){
         $userAnswer = readline("Voer het 3e nummer in: ");
      }elseif($whileNum == 3){
         $userAnswer = readline("Voer het 4e nummer in: ");
      }elseif($whileNum == 4){
         $userAnswer = readline("Voer het 5e nummer in: ");
      }elseif($whileNum == 5){
         $userAnswer = readline("Voer het 6e nummer in: ");
      }else{
         echo "ERROR\n";
      };
      if (is_numeric($userAnswer)){
         if($userAnswer > 42 || $userAnswer < 1){
            echo "!!! Voer een getal in VAN 1 TOT 42 !!!\n";
         }else{
            $userAnsBox[] = $userAnswer;
            $whileNum++;
         };
      }else{
         echo "Het is geen getal. Probeer het nog eens...\n";
      };
   };
   for ($forNum = 0; $forNum < 6; $forNum++) {
      $random = rand(1,42);
      $randomAnsBox[] = $random;
   }
   sort($userAnsBox);
   sort($randomAnsBox);
   echo "\nJouw cijfers:     ";
   foreach ($userAnsBox as $printUsersNum){
      echo $printUsersNum." ";
   };
   echo "\nWinnende nummers: ";
   foreach ($randomAnsBox as $printRandomNum){
      echo $printRandomNum." ";
   };
   echo "\n";
   
   $commonElements = array_intersect($userAnsBox, $randomAnsBox);
   $commonCount = count($commonElements);
   echo "\nAantal gemeenschappelijke nummers: ".$commonCount.";\n";
   if ($commonCount == 3){
      echo "Jij hebt gewonnen: 10 euro.\n";
      $userMoney += 10;
   }elseif($commonCount == 4){
      echo "Jij hebt gewonnen: 1000 euro.\n";
      $userMoney += 1000;
   }elseif($commonCount == 5){
      echo "Jij hebt gewonnen: 100.000 euro.\n";
      $userMoney += 100000;
   }elseif($commonCount == 6){
      echo "Jij hebt gewonnen: 10.000.000 euro.\n";
      $userMoney += 10000000;
   }else{
      echo "Je zult niets winnen(\n";
   }

   echo "Je balans: ".number_format($userMoney, 0, ',','.')." euro.\n";
   startMenu($userMoney);
};

?>