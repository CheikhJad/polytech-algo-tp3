<?php
function factorielWhile($n) {
    $result = 1;
    $i = $n;
    while ($i > 1) {
        $result *= $i;
        $i = $i - 1;
    }
    return $result;
}

    /* Exemple d'utilisation*/
$n = (int)readline("Entrez un nombre pour calculer son factoriel : ");
echo "Le factoriel de $n est : " . factorielWhile($n) . "\n";
?>
