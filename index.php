
<?php
/**
 * Picks a random suite and a random card from a deck of cards
 *
 * @return an array of [suite => card]
 */

$deck = [
    ['2 of hearts' => 2],
    ['3 of hearts' => 3],
    ['4 of hearts' => 4],
    ['5 of hearts' => 5],
    ['6 of hearts' => 6],
    ['7 of hearts' => 7],
    ['8 of hearts' => 8],
    ['9 of hearts' => 9],
    ['10 of hearts' => 10],
    ['J of hearts' => 10],
    ['K of hearts' => 10],
    ['Q of hearts' => 10],
    ['A of hearts' => 11],
    ['2 of diamonds' => 2],
    ['3 of diamonds' => 3],
    ['4 of diamonds' => 4],
    ['5 of diamonds' => 5],
    ['6 of diamonds' => 6],
    ['7 of diamonds' => 7],
    ['8 of diamonds' => 8],
    ['9 of diamonds' => 9],
    ['10 of diamonds' => 10],
    ['J of diamonds' => 10],
    ['K of diamonds' => 10],
    ['Q of diamonds' => 10],
    ['A of diamonds' => 11],
    ['2 of clubs' => 2],
    ['3 of clubs' => 3],
    ['4 of clubs' => 4],
    ['5 of clubs' => 5],
    ['6 of clubs' => 6],
    ['7 of clubs' => 7],
    ['8 of clubs' => 8],
    ['9 of clubs' => 9],
    ['10 of clubs' => 10],
    ['J of clubs' => 10],
    ['K of clubs' => 10],
    ['Q of clubs' => 10],
    ['A of clubs' => 11],
    ['2 of spades' => 2],
    ['3 of spades' => 3],
    ['4 of spades' => 4],
    ['5 of spades' => 5],
    ['6 of spades' => 6],
    ['7 of spades' => 7],
    ['8 of spades' => 8],
    ['9 of spades' => 9],
    ['10 of spades' => 10],
    ['J of spades' => 10],
    ['K of spades' => 10],
    ['Q of spades' => 10],
    ['A of spades' => 11],
];

shuffle($deck);


function pickCard($deck) {
    $card = array_shift($deck);
    return [$card, $deck];
};

$card1 = pickCard($deck)[0];
$deck1 = pickCard($deck)[1];
$card2 = pickCard($deck1)[0];
$deck2 = pickCard($deck1)[1];
$card3 = pickCard($deck2)[0];
$deck3 = pickCard($deck2)[1];
$card4 = pickCard($deck3)[0];
$deck4 = pickCard($deck3)[1];


function score($card1, $card2 = []) {
    $score = array_sum($card1) + array_sum($card2);
    return $score;
}

$p1score = score($card1, $card2);
$p2score = score($card3, $card4);

var_dump($card1);
echo '<br>';
var_dump($card2);
echo '<br>';
var_dump($card3);
echo '<br>';
var_dump($card4);
echo '<br>';
var_dump($p1score, $p2score);

echo '<br>';

/*
function drawExtra($deck) {
    $card5 = pickCard($deck)[0];
    $deck5 = pickCard($deck)[1];
    return [$card5, $deck5];
}
*/


function winner($p1score, $p2score) {
    switch (true) {
    case ($p1score > 21 && $p2score <= 21):
        return 'P1 Score: ' . $p1score . ', P2 Score: ' . $p2score . '<h3>P1 bust P2 wins</h3>';
        break;
    case ($p2score > 21 && $p1score <= 21):
        return 'P1 Score: ' . $p1score . ', P2 Score: ' . $p2score . '<h3>P2 bust P1 wins</h3>';
        break;
    case ($p2score > $p1score):
        return 'P1 Score: ' . $p1score . ', P2 Score: ' . $p2score . '<h3>P2 wins</h3>';
        break;
    case ($p2score < $p1score):
        return 'P1 Score: ' . $p1score . ', P2 Score: ' . $p2score . '<h3>P1 wins</h3>';
        break;
    default:
        return 'P1 Score: ' . $p1score . ', P2 Score: ' . $p2score . '<h3>Draw !</h3>';
        break;
    }
}

var_dump(winner($p1score, $p2score));


/**
 * Sums two selected cards values
 *
 * @param1, @param2 random picked cards from the deck
 *
 * checks if cards match
 *
 * @return int the sum of two cards values
 */

/**
 * Checks which player wins
 *
 * @param1 int sum of player1's cards
 * @param2 int sum of player2's cards
 *
 * @return int score of both players and the winner
 */
