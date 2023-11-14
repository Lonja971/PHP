<?php

function start(){
   echo "\nDit is een Fizz Buzz-spel.\n";
   while (true){
      $userStartAnswer = readline("Beginnen? (j/n): ");
      if (strtolower($userStartAnswer) == 'j'){
         game();
         break;
      } else if (strtolower($userStartAnswer) == 'n'){
         echo "Bedankt\n";
         die;
      }else{
         echo "Ik begrijp het niet, herhaal alstublieft!\n";
      }
   }
}
start();

function game(){
   while(true){
      $userNum = readline("Kies een nummer (of 'stop'): ");
      if (is_numeric($userNum) && $userNum >= 1 && $userNum <= 100){
         $output = ($userNum % 3 === 0 && $userNum % 5 === 0) ? "FizzBuzz" : (($userNum % 3 === 0) ? "Fizz" : (($userNum % 5 === 0) ? "Buzz" : $userNum));
         echo $output . "\n";
      }else if (strtolower($userNum) == 'stop') {
         echo "Bedankt\n";
         die;
      } else{
         echo "Voer een getal in van 1 tot 100.\n";
      }
   }
}

?>