<?php

$users = [ 
    
    ['ime' => 'Martin',
    'prezime' => 'Kovac',
    'godine' => '28',
    'spol' => 'M'], 
[
    'ime' => 'Tina',
    'prezime' => 'Prsa',
    'godine' => '24',
    'spol' => 'Ž']
];

    var_dump ($users);

    unset($users[0]['spol']);
    unset($users[1]['spol']);

    
    var_dump ($users);

    $users = [
        'ime' => 'Borna',
    'prezime' => 'Filipovic',
    'godine' => '29'];

    var_dump ($users);

    ?>