<?php

//Kółko-Krzyżyk, jedna z najbardziej popularnych gier. Każdy z nas grał w nią na pewno wiele razy. Założeniem gry jest ułożenie w jednym rzędzie (pion lub poziom) lub w skosie trzech takich samych znaków (istnieje 8 takich możliwości - 3 w pionie, 3 w poziomie i dwa pod skosem).
//
//Przejdźmy do pisania: Podstawą gry jest tablica[3][3]. Duża część gry będzie losowa, komputer będzie podejmował tylko decyzje w logicznej ripoście na nasze ruchy, więc nie będzie to gra w której komputer zawsze wygrywa.
//
//Struktura programu będzie następująca:
//
//pętla(dopóki nikt nie wygra i nie ma remisu)
//{
//Wyświetl aktualny stan gry
//jeżeli (ruch komputera)
//{
//komputer wstawia swój znak
//}
//w przeciwnym wypadku
//{
//użytkownik wstawia swój znak
//}
//sprawdzenie czy ktoś wygrał
//jeżeli teraz był ruch komputera to zaznacz teraz ruch użytkownika
//jeżeli teraz był ruch użytownika to zaznacz teraz ruch komputera
//}
//
//Przejdźmy teraz do opisania poszczególnych metod:
//
//Zacznijmy od funkcji, która zaprezentuje wynik gry. Ota jeden z najprostszych przykładów:
//1 2 3
//a  | |
//b  | |
//c  | |
//
//Miejsca w których mogą pojawić się znaki niech będą zmiennymi char wypełnionymi spacją, główna pętla gry będzie drukować aktualną wersje w której zmiennym tym możemy nadać wartość X lub O.
//
//Następnie mamy funkcję sprawdzającą czy ktoś wygrał. Będzie ona sprawdzać czy w którymkolwiek rzędzie (pion lub poziom) lub skosie nie ma trzech takich samych znaków (X lub O). Zabezpieczyć się należy również przed sytuacją remisu, w której nie ma już wolnego miejsca do wstawiania kolejnych znaków X lub O i nikt do tej pory nie wygrał, np:
//1 2 3
//a O|X|O
//b O|X|X
//c X|O|O
//
//Kolejnym zadaniem będzie nauczenie komputera myśleć - czyli napisanie funkcji, która będzie sterować ruchami komputera.
//
//Funkcja ta będzie sprawdzać:
//czy w którymkolwiek rzędzie/skosie nie ma dwóch swoich znaków i jednego pustego. Jeżeli taką sytuacje napotka to zapełnia puste pole swoim znakiem i w ten sposób wygrywa,
//następnie algorytm sprawdzi czy w którymkolwiek rzędzie/skosie nie ma dwóch znaków przeciwnika i jednego pustego. Jeżeli taką sytuacje napotka to zapełnia puste pole, blokując tym samym wygraną przeciwnika,
//ostatnią możliwością jest to, że żaden z powyższych przykładów nie ma miejsca, wtedy niech funkcja losowa wybierze pole to zapełnienia.
//
//
//Ostatnią funkcją jest pobieranie informacji o ruchu od gracza. Zależy ona od sposobu reprezentacji graficznej gry, jeśli zrobiłeś to tak jak ja napisałem to możesz poprosić użytkownika o podanie współrzędnych np: a1. Pamiętaj żeby zabezpieczyć program przed podaniem niewłaściwych współrzędnych np b5, albo d1. Oraz przed podaniem współrzędnych pola które jest już wypełnione, np: b3 dla gry poniżej:
//1 2 3
//a  | |
//b  |O|X
//c  | |X
