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
   for ($i = 1; $i < 101; $i++) {

      //Ternary operator
      $output = ($i % 3 === 0 && $i % 5 === 0) ? "FizzBuzz" : (($i % 3 === 0) ? "Fizz" : (($i % 5 === 0) ? "Buzz" : $i));
      echo $output . "\n";

   }
   start();
}

?>