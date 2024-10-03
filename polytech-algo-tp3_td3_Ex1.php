<?php
function factorielWhile($n) {       /*Pour cette partie je me suis aider d'un exercice en C++ que j'avais fait pour apprendre à coder */
    $result = 1;
    $i = $n;
    while ($i > 1) {
        $result *= $i;
        $i = $i - 1;
    }
    return $result;
}

    /* Exemple d'utilisation*/
$n = (int)readline("Entrez un nombre pour calculer son factoriel : "); /* j'au eu l'aide de mon frère pour la recupération de la valeur de la variable */
echo "Le factoriel de $n est : " . factorielWhile($n) . "\n";
?>
