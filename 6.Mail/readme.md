# PHP - Podstawy PHP - Maile

```
Kolory jakich przykładowo możesz użyć
#a94442 - ciemny czerwony
#f2dede - jaśniejszy czerwony
#3c763d - ciemny zielony
#dff0d8 - jaśniejszy zielony
```

### Ćwiczenie 1
Napisz stronę "kontakt". Strona powinna posiadać formularz z polami:
* imię i nazwisko odbiorcy
* adres email odbiorcy
* temat wiadomości
* treść wiadomości

Formularz powinien być przesyłany metodą ```POST``` do pliku ```mailSender.php```, w którym sprawdź czy dane zostały przesłane odpowiednią metodą.
Wypełniony formularz powinien być przesyłany w postaci emaila na ustalony w kodzie adres.

Jako nadawcę maila użyj stałych ```ADMIN_NAME``` oraz ```ADMIN_MAIL``` które zdefinuj w pliku ```mailSender.php``` i przypisz do nich odpowiednie dane.

Po wysłaniu maila przekieruj użytkownika (```[podpowiedź: header location][redirect]```) na stronę z formularzem i prześlij za pomocą ```GET``` komunikat o sukcesie lub porażce wysyłki maila.

Aby przesłać w adresie strony komunikat ze spacjami zobacz funkcję ```[urlencode][urlencode]```

Ostyluj div z komunikatem na zielono lub czerwono w zależności od rodzaju komunikatu, komunikat ma się nie wyświetlać jeśli dane nie były przesłane.

Skorzystaj z biblioteki [PHPMailer][phpmailer] (instrukcja znajduje się w prezentacji, sprawdź też instrukcję na repozytorium)

### Ćwiczenie dodatkowe (dla chętnych)

Dodaj do pól formularza atrybut ```data-length``` zawierający maksymalną długość wpisanego pola.
Napisz z użyciem JavaScript lub jQuery walidację formularza polegającą na:
* żadne pole nie może być puste
* pole nie może przekroczyć dowolnej ilości znaków (waliduj to za pomocą ```keydown``` a nie dopiero podczas wysyłki formularza
* pole z adresem email musi zawierać znak ```@```

Jeśli jakieś pole sie nie waliduje spowoduj, że kolor tła i obramowania inputa zmieni się na czerwony.
Pod inputem pojawi się komunikat o błędzie dotyczącym danego inputa.

Jeśli pole posiadało błąd a użytkownik uzupełnił je prawidłowo, ukryj komunikat o błędzie i przywróć wyjściowe tło i obramowanie dla inputa.

Formularz nie może się wyslać do czasu spełnienia warunków walidacji.

### Ćwiczenie dodatkowe 2 (dla chętnych)

Dodaj pod polem ```textarea``` element w którym będzie pokazana aktualna ilość znaków wpisana w to pole, dane aktualizuj co każdy wpisany/usunięty znak.

<!-- Links -->
[urlencode]:https://secure.php.net/manual/pl/function.urlencode.php
[redirect]:https://stackoverflow.com/questions/2112373/php-page-redirect
[phpmailer]:https://github.com/PHPMailer/PHPMailer