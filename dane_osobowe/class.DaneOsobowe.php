<?php

class DaneOsobowe
{
    private $conn;

    public function __construct()
    {
        $this->conn = pg_connect("host=localhost port=5432 dbname=wandzia user=postgres") or die('Brak połączenia z serwerem');
    }

    public function znajdzWszystkieElementy()
    {
        $result = pg_query($this->conn, "select * from dane_osobowe");
        return pg_fetch_all($result);
    }

    public function zapisz($imie, $nazwisko, $wiek)
    {
        $query = "insert into dane_osobowe(imie, nazwisko, wiek) values('$imie','$nazwisko','$wiek');";
        pg_query($this->conn, $query);
    }

    public function usun($id)
    {
        $sqlDelete = "delete from dane_osobowe where id=" . $id;
        pg_query($this->conn, $sqlDelete);
    }

    public function edytuj($imie, $nazwisko, $wiek, $id)
    {
        $sqlUpdate = "update dane_osobowe set imie='$imie', nazwisko='$nazwisko', wiek='$wiek' where id='$id'";
        pg_query($this->conn, $sqlUpdate);
    }
}