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
         echo "Ik begrijp het niet, herhaal alstublieft!";
      }
   }
}
start();

function game(){
   for ($i = 1; $i < 101; $i++) {
      if ($i % 3 === 0 && $i % 5 === 0){
         echo "FizzBuzz\n";
      }else if ($i % 3 === 0){
         echo "Fizz\n";
      }else if ($i % 5 === 0){
         echo "Buzz\n";
      }else {
         echo $i."\n";
      }
   }
   start();
}

?>