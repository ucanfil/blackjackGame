<?php
/*
 * Picks a random suite and a random card from a deck of cards
 *
 * @return an array of [suite => card]
 */
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

/*
 * sums two selected cards values
 *
 * @param1, @param2 random picked cards from the deck
 *
 * checks if cards match
 *
 * @return int the sum of two cards values
 */
function sum($firstCard, $secondCard) {
    while (array_keys($firstCard) == array_keys($secondCard) && array_values($firstCard) == array_values($secondCard)) {
        $firstCard = pickCard();
    }
    return array_sum($firstCard) + array_sum($secondCard);
}

$p1 = sum($card1, $card2);
$p2 = sum($card3, $card4);

/*
 * checks which player wins
 *
 * @param1 int sum of player1's cards
 * @param2 int sum of player2's cards
 *
 * @return int score of both players and the winner
 */
function win($p1, $p2) {
    if ($p1 == $p2) {
        return "Player 1: $p1, Player 2: $p2, Deuce";
    }
    return $p1 > $p2 ? "Player 1: $p1, Player 2: $p2, Player 1 Won" : "Player 1: $p1, Player 2: $p2, Player 2 Won";
}

var_dump($card1, $card2, $card3, $card4, win($p1, $p2));
