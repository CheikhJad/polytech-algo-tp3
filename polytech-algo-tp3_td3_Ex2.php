<?php
function divisors($n) {
    $divs = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $divs[] = $i;
        }
    }
    return $divs;
}

    /* Exemple d'utilisation*/
$n = 15;
echo "Les diviseurs de $n sont : " . implode(", ", divisors($n)); /*Pour cette partie j'ai rechercher sur https://www.php.net/manual/fr/function.implode.php#:~:text=implode%20%E2%80%94%20Rassemble%20les%20%C3%A9l%C3%A9ments%20d'un*/
?>
