# PHP - Podstawy PHP - Tablice 

## Ćwiczenia do zrobienia z wykładowcą

Przykładowe tablice do wykorzystania w zadaniach:
```
$tab = [1, 15, 19, 4, 3, 7];//jednowymiarowa
$tabAssoc = [
    'imie'     => 'Marek',
    'nazwisko' => 'Kowalski',
    'wiek'     => 56,
    'wzrost'   => 187,
    'waga'     => 85,
];//jednowymiarowa asocjacyjna

$tabMulti = [
    [2, 4, 8, 16],
    [32, 64, 128, 256],
    [512, 1024, 2048, 4096],
];//wielowymiarowa
```

### Ćwiczenie 1
Napisz funkcję ```printTableWithFor($array)``` która w pętli ```for``` przejdzie po wszystkich elementach tablicy i wypisze je na ekranie,
dodatkowo napisz funkcję ```printTableWithForeach($array)``` która w pętli ```foreach``` przejdzie po wszyskich elementach tablicy i wypisze je na ekranie.

### Ćwiczenie 2
Napisz dwie funkcje:
* ```print2DTable($table)``` - która wyświetli tablicę dwuwymiarową w postaci macierzy,
* ```getFirstSum($array)``` - która obliczy sumę pierwszych elementów tablic każdego drugiego wymiaru 

## Ćwiczenia do pracy samodzielnej

### Ćwiczenie 3
Napisz funkcję, która wyświetli największą liczbę spośród liczb znajdujących się w tablicy liczb całkowitych.
Funkcja ma przyjmować jeden parametr – tablicę.
Spróbuj rozwiązać to zadanie na 2 różne sposoby (używając sortowania i pętli)

### Ćwiczenie 4
Napisz funkcję, która wyświetli te liczby w tablicy, które są mniejsze od średniej arytmetycznej wszystkich liczb w tablicy.

### Ćwiczenie 5
Napisz funkcję, która sprawdza, czy zmienna przekazana jako pierwszy parametr występuje w tablicy przekazanej jako drugi parametr. 
Jeżeli tak, funkcja powinna zwrócić logiczną prawdę (```true```) a jeżeli nie to fałsz (```false```).

## Ćwiczenia do zrobienia w domu

### Ćwiczenie 1
Przerób funkcję z ćwiczenia 5 (zadania które trzeba było zrobić podczas zajęć) w taki sposób żeby przyjmowała jeszcze 3 argument. Argument ma być przekazywany przez referencję.
Jeżeli funkcja znajdzie szukany element w tablicy powinna zapisać indeks pod którym wystąpił szukany element w argumencie przekazanym przez referencje.

Zobacz co się zmieni jeżeli przekażesz ten argument nie używając referencji. Postaraj się wyjaśnić dlaczego tak się dzieje.