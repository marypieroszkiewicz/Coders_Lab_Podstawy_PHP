# PHP - Podstawy PHP - Ciasteczka i Sesje

## Ćwiczenia do zrobienia z wykładowcą

### Ćwiczenie 1
W zadaniu stwórz 3 strony. Strony mają mieć nastepującą funkcjonalność:
* Pierwsza strona ma nastawiać informacje w sesji pod kluczem ```counter``` na 0,
* Druga strona ma wyświetlać zawartość sesji pod kluczem ```counter``` i zwiększać ją o 1. Jeżeli nie ma takich danych w sesji to powinna wyświetlić odpowiednie informacje oraz wyświetlić link kierujący do pliku z punktu pierwszego.
* Trzecia strona powinna kasować dane z sesji (tylko te trzymane pod kluczem ```counter```).

### Ćwiczenie 2
W tym zadaniu stwórz 3 strony:
* Pierwsza strona ma nastawiać ciasteczko o nazwie ```User``` (tylko jeśli nie istnieje),
* Druga strona ma wyświetlać zawartość ciasteczka ```User``` (tylko jeśli istnieje, w przeciwnym wypadku wypisać informację o braku ciasteczka).
* Trzecia strona powinna kasować ciasteczko o nazwie ```User``` (tylko jeśli istnieje).

## Ćwiczenia do pracy samodzielnej

### Ćwiczenie 3
W tym zadaniu stwórz 2 strony:
* Na pierwszej powinien znajdować się formularz z dwoma polami tekstowymi. Pierwsze pole będzie przybierało nazwe ciasteczka, a drugie jego wartość. Formularz ma przekierowywać do tej samej strony metodą POST.
  Jeżeli na tą stronę wejdziemy metodą ```POST``` to ma ono tworzyć nowe ciasteczko o podanej nazwie i wartości.
* Na drugiej stronie wyświetl wszystkie ciasteczka do których masz dostęp. Jak wczytać wszystkie ciasteczka przeczytaj [tutaj][all-cookies]

### Ćwiczenie 4
W tym zadaniu stwórz 2 strony:
* Na stronie wyświetl wszystkie ciasteczka do których masz dostęp. Jak wczytać wszystkie ciasteczka przeczytaj [tutaj][all-cookies]. Przy każdym z nich wygeneruj link do drugiej strony przekazując GET-em nazwę ciasteczka.
* Na drugiej stronie poinformuj o tym że usuwasz ciasteczko i je usuń. Nazwę ciasteczka pobierz z ```GET```.

### Ćwiczenie 5
Napisz skrypt, który na podstawie podanych ocen (formularz ocen z przedmiotów) będzie liczył ich średną arytmetyczną.
Oceny trzymaj w tablicy którą będziesz wkładać do ciasteczka.

Zadbaj o walidację wprowadzanych ocen (nie mniejsza niż 2 i nie większa niż 5). 

Pamiętaj żeby sprawdzać czy tablica z ocenami istnieje w ciasteczku - jeżeli nie to ją stwórz.

Wszystkie oceny jakie są zapamiętane i ich średnia powinny być wyświetlane pod formularzem. 
Do trzymania tablicy w ciasteczku użyj funkcje ```serialize```, a do wczytania ```unserialize```.

<!-- Links -->
[all-cookies]:http://stackoverflow.com/questions/9577029/can-i-display-all-the-cookies-i-set-in-php