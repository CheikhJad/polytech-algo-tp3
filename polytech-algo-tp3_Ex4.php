<?php
function packCards() {
    $suits = ['H', 'S', 'C', 'D'];
    $values = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'J', 'Q', 'K'];
    $deck = [];
    foreach ($suits as $suit) {          /* Pour le foreach j'ai utiliser comme resource mon frère */
        foreach ($values as $value) {
            $deck[] = $suit . $value;
        }
    }
    return $deck;
}
function shuffleDeck($deck) {
    shuffle($deck);
    return $deck;
}

/*Je contait avancer d'avantage mais cela me prendrais trop de temps lors je lais passée*/

?>
