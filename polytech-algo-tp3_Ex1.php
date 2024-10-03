<?php
function sommeImpairs($n) {
    $somme = 0;
    for ($i = 1; $i <= $n; $i++) {
        $nombreImpair = 2 * $i - 1;
        $somme += $nombreImpair;
    }
    return $somme;
}

// Exemple d'utilisation
$n = 5;
echo "La somme des $n premiers nombres impairs est : " . sommeImpairs($n);
?>
