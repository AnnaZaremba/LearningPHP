<?php

class ZapisDoBazyDanych
{
    public function zapisz($imie, $nazwisko, $wiek)
    {
        $conn = pg_connect("host=localhost port=5432 dbname=wandzia user=postgres") or die('Brak połączenia z serwerem');
        $query = "insert into testowa values('$imie','$nazwisko','$wiek');";
        pg_query($conn, $query);
    }
}