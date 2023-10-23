<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rijec = $_POST['rijec'];
    
    $brojSlova = strlen($rijec);
    $brojSugSam = izracunajSugSam($rijec);

    $novaRijec = [
        "Riječ" => $rijec,
        "Broj slova" => $brojSlova,
        "Broj suglasnika" => $brojSugSam["suglasnici"],
        "Broj samoglasnika" => $brojSugSam["samoglasnici"]
    ];

    $words = [];
    if (file_exists('Words.json')) {
        $wordsJSON = file_get_contents('Words.json');
        $words = json_decode($wordsJSON, true);
    }

    $words[] = $novaRijec;

    $wordsJSON = json_encode($words, JSON_PRETTY_PRINT);
    file_put_contents('Words.json', $wordsJSON);
}

function izracunajSugSam($rijec) {
    $suglasnici = 0;
    $samoglasnici = 0;
    $rijec = strtolower($rijec);

    for ($i = 0; $i < strlen($rijec); $i++) {
        $znak = $rijec[$i];
        if (preg_match('/[aeiou]/', $znak)) {
            $samoglasnici++;
        } elseif (preg_match('/[bcdfghjklmnpqrstvwxyz]/', $znak)) {
            $suglasnici++;
        }
    }

    return ["suglasnici" => $suglasnici, "samoglasnici" => $samoglasnici];
}