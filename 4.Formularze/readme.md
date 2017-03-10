# PHP - Podstawy PHP - Formularze

## Ćwiczenia do zrobienia z wykładowcą

### Ćwiczenie 1
Napisz stronę, która wczyta ze zmiennej superglobalnej dwie zmienne ```start``` i ```end``` (dla uproszczenia załóżmy że będziemy przesyłać tylko liczby całkowite). Następnie wypisze wszystkie liczby od ```start``` do ```end```. Jeżeli zmienne nie są przesłane to wypisz odpowiednią informację na ten temat.
Następnie na drugiej stronie stwórz kilka linków w html do pierwszej strony przesyłając informację za pomocą GET.

### Ćwiczenie 2
Na stronie napisz formularz, który będzie przyjmował imię i nazwisko. Formularz ten ma przekierowywać do tej samej strony metodą POST.
Jeżeli strona została uruchomiona przez zapytanie POST (musicie sprawdzić to w superglobalnej zmiennej ```$_SERVER['REQUEST_METHOD']```) to ponad formularzem ma się wyświetlić napis "Witaj <podane imie> <podane nazwisko>" 

### Ćwiczenie 3
Napisz skrypt przeliczający waluty:
* EUR → USD
* USD → EUR
* EUR → PLN
* PLN → EUR
* USD → PLN
* PLN → USD
Skrypt powinien wyświetlać formularz zawierający pole do wpisania kwoty, pola typu radio do wybrania z jakiej i na jaką walutę przeliczamy oraz przycisk „Przelicz“.
Przeliczona kwota powinna pokazać się ponad formularzem.

Napisz funkcję ```getRate($from, $to)```, która przyjmie kod 2 walut i zwróci kurs przeliczania, użyj w funkcji ```switch``` oraz ```if```, kurs przeliczania dla danej pary możesz wymyślić.

```getRate('USD','PLN') -> 3.8210```

Do przeliczania kwoty napisz funkcję ```exchange($value, $rate)``` która zwróci przeliczoną kwotę, przeczytaj o funkcji ```number_format``` i spróbuj zakrąglić zwróconą wartość do 2 miejsc po przecinku.

```exchange(50.5, 3.8210)```

## Ćwiczenia do pracy samodzielnej

### Ćwiczenie 4
W tym zadaniu dopisz funkcjonalnośc do 2 stron:
* Pierwsza strona (multi.php) ma pobierać 2 zmienne z GET o nazwach ```width``` i ```height``` (jeżeli informacje nie są przesłane to ```width = 5``` i ```height =10```), a następnie wygeneruje tabliczkę mnożenia o podanej wysokości i szerokości,
* Na drugiej stronie (index.php) stwórz kilka linków do pierwszej strony przesyłając informację za pomocą GET.

<!-- Links -->
[all-cookies]:http://stackoverflow.com/questions/9577029/can-i-display-all-the-cookies-i-set-in-php
