<?php

echo "\nHallo, we hebben een woord geraden, probeer het te raden!\n";
game();

function game() {
    $words = array('appel','boek','hond','kat','fiets','huis','stoel','tafel','school','auto','boom','zon','regen','bloem','vogel','klok','appartement','glas','deur','sleutel'
    );
    $userAttempt = 0;


    $chosen_word = $words[array_rand($words)];

    $letters = preg_split('//u', strtolower($chosen_word), -1, PREG_SPLIT_NO_EMPTY);
    $guessed_letters = array_fill(0, count($letters), '.');

    echo "\n".implode("", $guessed_letters) . "\n";

    while (in_array('.', $guessed_letters)) {
        $userLetter = readline("Voer een letter in: ");
        $userAttempt ++;
        $userLetter = strtolower($userLetter);
        $found = false;

        for ($i = 0; $i < count($letters); $i++) {
            if ($letters[$i] == $userLetter) {
                $guessed_letters[$i] = $userLetter;
                $found = true;
            }
        }

        if (!$found) {
            echo "Er zit geen letter '$userLetter' in het woord.\n";
        }

        echo "\n".implode("", $guessed_letters) . "\n";
    }

    echo "\nGefeliciteerd! Het was het woord '" . implode("", $guessed_letters) . "'!\nJe hebt het in ".$userAttempt." pogingen gedaan!\nWil je meer spelen?\n";
    $contCond = true;
    while($contCond == true){
        $continuation = readline("Ya of nee: ");
        if (strtolower($continuation) == 'ya'){
            game();
        }elseif (strtolower($continuation) == 'nee'){
            echo "Bedankt voor het spelen!";
            die;
        }else{
            echo "Het spijt me, wat?\n";
        }
    };
};

?>