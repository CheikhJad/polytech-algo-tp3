<?php
function isInArray($tab, $what) {                 /*Pour cette partie j'ai eu de l'aide de mon frère*/
    for ($i = 0; $i < count($tab); $i++) {
        if ($tab[$i] == $what) {
            return $i;
        }
    }
    return -1;
}

/*Exemple d'utilisation*/
$tab = [3, 5, 7, 9, 11];
$what = 7;
echo "L'indice de $what est : " . isInArray($tab, $what);
?>
