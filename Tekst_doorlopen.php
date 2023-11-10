<?php

while (true) {
    // Vraag de gebruiker om tekst in te voeren
    echo "\nVoer tekst in (maximaal 250 tekens) of 'exit' om af te sluiten: ";
    $tekst = trim(fgets(STDIN));

    // Exit-lus als gebruiker 'exit' heeft getypt
    if ($tekst === 'exit') {
        echo "Het programma is voltooid.\n";
        break;
    }

    // Controleer de maximale lengte
    if (strlen($tekst) > 250) {
        echo "De ingevoerde tekst is te lang. Er zijn maximaal 250 tekens toegestaan.\n";
        continue;
    }

    // Зібрати та вивести дані
    $aantalTekens = strlen($tekst);
    $aantalWoorden = str_word_count($tekst);
    $aantalSpaties = substr_count($tekst, ' ');
    $aantalZinnen = substr_count($tekst, '.') + substr_count($tekst, '?') + substr_count($tekst, '!');
    $aantalKlinkers = preg_match_all('/[aeiou]/i', $tekst);
    $aantalMedeklinkers = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $tekst);
    $aantalLeestekens = preg_match_all('/[,.:"\']/', $tekst);

    // Вивести дані
    echo "De resultaten:\n";
    echo "Aantal tekens: $aantalTekens\n";
    echo "Aantal woorden: $aantalWoorden\n";
    echo "Aantal spaties: $aantalSpaties\n";
    echo "Aantal zinnen: $aantalZinnen\n";
    echo "Aantal klinkers: $aantalKlinkers\n";
    echo "Aantal medeklinkers: $aantalMedeklinkers\n";
    echo "Aantal leestekens: $aantalLeestekens\n";
}

?>