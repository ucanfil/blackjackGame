<?php
function pickCard() {

$deck = [];
$deck['hearts'] = ['2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, 'J' => 10, 'Q' => 10, 'K' => 10, 'A' => 11];
$deck['spades'] = ['2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, 'J' => 10, 'Q' => 10, 'K' => 10, 'A' => 11];
$deck['clubs'] = ['2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, 'J' => 10, 'Q' => 10, 'K' => 10, 'A' => 11];
$deck['diamonds'] = ['2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, 'J' => 10, 'Q' => 10, 'K' => 10, 'A' => 11];

$suite = ['hearts', 'spades', 'clubs', 'diamonds'];
$randomSuite = $suite[array_rand($suite)];
$randomCard = $deck[$randomSuite][array_rand($deck[$randomSuite])];

    return [$randomSuite => $randomCard];
}

$card1 = pickCard();
$card2 = pickCard();
$card3 = pickCard();
$card4 = pickCard();

function sum($a, $b) {
    while (array_keys($a) == array_keys($b) && array_values($a) == array_values($b)) {
        $a = pickCard();
    }
    return array_sum($a) + array_sum($b);
}

$p1 = sum($card1, $card2);
$p2 = sum($card3, $card4);

function win($p1, $p2) {
    if ($p1 == $p2) {
        return 'Deuce';
    }
    return $p1 > $p2 ? "Player 1: $p1, Player 2: $p2, Player 1 Won" : "Player 1: $p1, Player 2: $p2, Player 2 Won";
}

var_dump(win($p1, $p2));
