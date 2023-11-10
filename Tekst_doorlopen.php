<?php

while (true) {
    // Запитайте користувача ввести текст
    echo "Введіть текст (максимум 250 символів) або 'exit' для виходу: ";
    $tekst = trim(fgets(STDIN));

    // Вийдіть з циклу, якщо користувач ввів 'exit'
    if ($tekst === 'exit') {
        echo "Програма завершена.\n";
        break;
    }

    // Перевірте на максимальну довжину
    if (strlen($tekst) > 250) {
        echo "Введений текст занадто довгий. Максимально дозволено 250 символів.\n";
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
    echo "\nРезультати:\n";
    echo "Кількість символів: $aantalTekens\n";
    echo "Кількість слів: $aantalWoorden\n";
    echo "Кількість пробілів: $aantalSpaties\n";
    echo "Кількість речень: $aantalZinnen\n";
    echo "Кількість голосних: $aantalKlinkers\n";
    echo "Кількість приголосних: $aantalMedeklinkers\n";
    echo "Кількість розділових знаків: $aantalLeestekens\n";
}

?>