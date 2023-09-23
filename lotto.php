<?php

echo "\nПривіт! Виберіть будь ласка 6 чисел (від 1 до 42)\n";

$whileNum = 0;
$userAnsBox = array();
$randomAnsBox = array();

while ($whileNum < 6) {
   if($whileNum == 0){
      $userAnswer = readline("Введіть перше число: ");
   }elseif($whileNum == 1){
      $userAnswer = readline("Введіть друге число: ");
   }elseif($whileNum == 2){
      $userAnswer = readline("Введіть третє число: ");
   }elseif($whileNum == 3){
      $userAnswer = readline("Введіть четверте число: ");
   }elseif($whileNum == 4){
      $userAnswer = readline("Введіть п'яте число: ");
   }elseif($whileNum == 5){
      $userAnswer = readline("Введіть шосте число: ");
   }else{
      echo "ERROR\n";
   };
   if (is_numeric($userAnswer)){
      if($userAnswer > 42 || $userAnswer < 1){
         echo "Введіть число ВІД 1 ДO 42\n";
      }else{
         $userAnsBox[] = $userAnswer;
         $whileNum++;   
      };
   }else{
      echo "Це не число. Спробуйте ще\n";
   };
};
for ($forNum = 0; $forNum < 6; $forNum++) {
   $random = rand(1,42);
   $randomAnsBox[] = $random;
}
sort($userAnsBox);
sort($randomAnsBox);
echo "\nВаші числа: ";
foreach ($userAnsBox as $printUsersNum){
   echo $printUsersNum." ";
};
echo ".\nВиграшні числа: ";
foreach ($randomAnsBox as $printRandomNum){
   echo $printRandomNum." ";
};
echo ".\n";

$commonElements = array_intersect($userAnsBox, $randomAnsBox);
$commonCount = count($commonElements);
echo "\nКількість спільних чисел: ".$commonCount.";\n";
if ($commonCount == 3){
   echo "Ви виграли: 10 euro\n";
}elseif($commonCount == 4){
   echo "Ви виграли: 1000 euro\n";
}elseif($commonCount == 5){
   echo "Ви виграли: 100.000 euro\n";
}elseif($commonCount == 6){
   echo "Ви виграли: 10.000.000 euro\n";
}else{
   echo "Ви нічого не виграли(\n";
}

?>