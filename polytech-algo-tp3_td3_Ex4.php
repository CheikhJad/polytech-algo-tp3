<?php

                    /*Pour cette partie j'ai utiliser comme ressources mon frère et le site https://www.php.net/manual/fr/language.functions.php */

function estParfait($n) {
    $somme = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $somme += $i;
        }
    }
    return $somme == $n;
}

function nombresParfaits($n) {
    $parfaits = [];
    for ($i = 1; $i <= $n; $i++) {
        if (estParfait($i)) {
            $parfaits[] = $i;
        }
    }
    return $parfaits;
}

/* Exemple d'utilisation*/
$n = (int)readline("Entrez une valeur pour n : ");
$parfaits = nombresParfaits($n);
if (count($parfaits) > 0) {
    echo "Les nombres parfaits entre 1 et $n sont : " . implode(", ", $parfaits) . "\n";
} else {
    echo "Il n'y a pas de nombres parfaits entre 1 et $n.\n";
}
?>
