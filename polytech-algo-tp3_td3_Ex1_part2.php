<?php
function factorielFor($n) {                 /*Pour cette partie je me suis aider d'un exercice en C++ que j'avais fait pour apprendre à coder */
    $result = 1;
    for ($i = $n; $i > 1; $i--) {  
        $result *= $i;
    }
    return $result;
}

/* Exemple d'utilisation*/
$n = (int)readline("Entrez un nombre pour calculer son factoriel : ");
echo "Le factoriel de $n est : " . factorielFor($n) . "\n";
?>
