<?php

$num1 = 10;
$num2 = 5;
function mathTricks($num1, &$num2) {
    $num1 += 5;
    $num1 = $num1 * 4;
    $num1 -= $num2;
    $num2 = $num1 % 7;

    return ++$num1;
}

echo mathTricks($num1, $num2);
echo $num1 . '00' . $num2;

/*
Co zostanie wyświetlone przez funkcje?
a. 5510005
b. 5610006
c. 10005
d. 1056005
e. 11006

Jeśli masz problem z rozwiązaniem zanim uruchomisz plik dodaj komentarz do każdej linii kodu z wartością jaką przechowuje w danym momencie zmienna

Poprawna odpowiedź:
Dlaczego:

 */