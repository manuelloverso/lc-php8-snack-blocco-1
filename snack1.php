<?php

/* 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/

$calendar= [
    [
        "home"=> "squadra casa 1",
        "away"=> "squadra ospite 1",
        "home_pt"=>"55",
        "away_pt"=>"60",
    ],

    [
        "home"=> "squadra casa 2",
        "away"=> "squadra ospite 2",
        "home_pt"=>"30",
        "away_pt"=>"65",
    ],

    [
        "home"=> "squadra casa 3",
        "away"=> "squadra ospite 3",
        "home_pt"=>"80",
        "away_pt"=>"15",
    ],

    [
        "home"=> "squadra casa 4",
        "away"=> "squadra ospite 4",
        "home_pt"=>"90",
        "away_pt"=>"91",
    ],

    [
        "home"=> "squadra casa 5",
        "away"=> "squadra ospite 5",
        "home_pt"=>"46",
        "away_pt"=>"40",
    ],
];

foreach ($calendar as $match){
    echo  $match['home'] . ' - ' . $match['away'] . ' | ' . $match['home_pt'] . '-' . $match['away_pt'] . '<br>';
};

?>