<?php
function afficherPyramide($h) {                 /*Pour cette partie mon frere ma guider mais lui même cest aider de chatGPT*/
    for ($i = 1; $i <= $h; $i++) {
        $espaces = $h - $i;
        $etoiles = 2 * $i - 1;
        echo str_repeat(" ", $espaces) . str_repeat("*", $etoiles) . "\n";
    }
}

/*Exemple d'utilisation*/
$h = (int)readline("Entrez la hauteur de la pyramide : ");
afficherPyramide($h);
?>
