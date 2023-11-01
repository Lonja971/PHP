<?php

echo "\nDit programma helpt bij het omzetten van Arabische cijfers naar Romeins en vice versa.\n";
startProgramm();

function startProgramm() {
    $goodNumber = true;
    while ($goodNumber == true) {
        $userNumber = readline("Voer uw nummer in: ");
        if (preg_match('/[xvimlcd]/i', $userNumber)) {
            $arabicNumber = convertRomanToArabic($userNumber);
            $goodNumber = false;
        } elseif (is_numeric($userNumber)) {
            convertArabicToRoman($userNumber);
            $goodNumber = false;
        } else {
            echo "Sorry, onduidelijk antwoord?\n";
        }
    }

    $continue = true;
    while ($continue == true) {
        $continueInput = readline("Herhalen? (ja/nee): ");
        if (strtolower($continueInput) == 'ja' || strtolower($continueInput) == 'j') {
            $continue = false;
            echo "Oke...\n";
            startProgramm();
        } elseif (strtolower($continueInput) == 'nee' || strtolower($continueInput) == 'n') {
            echo "Bedankt voor het gebruiken!\n";
            die;
        } else {
            echo "Sorry, onduidelijk antwoord.\n";
        }
    }
}

function convertRomanToArabic($input) {
   $romanToArabic = [
       'CM' => 900,
       'CD' => 400,
       'XC' => 90,
       'XL' => 40,
       'IX' => 9,
       'IV' => 4,
       'M' => 1000,
       'D' => 500,
       'C' => 100,
       'L' => 50,
       'X' => 10,
       'V' => 5,
       'I' => 1,
   ];

   $input = strtoupper($input);

   $output = 0;

   foreach ($romanToArabic as $roman => $arabic) {
       while (strpos($input, $roman) === 0) {
           $output += $arabic;
           $input = substr_replace($input, '', 0, strlen($roman));
       }
   }

   echo "Romeins cijfer $input omgezet naar Arabisch cijfer: $output\n";

   return $output;
}


function convertArabicToRoman($input) {
    $arabicNumber = intval($input);
    $romanNumber = '';
    if ($arabicNumber >= 1 && $arabicNumber <= 3999) {
        $arabicToRoman = [
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I',
        ];

        krsort($arabicToRoman);

        foreach ($arabicToRoman as $arabicValue => $romanSymbol) {
            while ($arabicNumber >= $arabicValue) {
                $romanNumber .= $romanSymbol;
                $arabicNumber -= $arabicValue;
            }
        }

        echo "Het Arabische cijfer $input wordt omgezet in een Romeins cijfer: $romanNumber\n";
    }
}

?>