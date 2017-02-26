<?php

class WyswietlenieTabeliZBazyDanych
{
    private $conn;

    public function __construct()
    {
        echo "nawiazanie polaczenia z db";
        $this->conn = pg_connect("host=localhost port=5432 dbname=wandzia user=postgres") or die('Brak połączenia z serwerem');
    }

    /**
     * Metoda (funkcja) wyświetlająca tabelę html
     *
     * @param $tytul
     * @param $orderBy
     * @return string
     */
    public function wyswietl($tytul, $orderBy)
    {
        $query = "SELECT * FROM testowa ORDER by " . $orderBy;
        $rs = pg_query($this->conn, $query) or die("Nie można połączyć się z bazą danych");
        $html = "<table border=\"2\">
            <caption>$tytul</caption>
            <tr>
                <td>Imię</td>
                <td>Nazwisko</td>
                <td>Wiek</td>
            </tr>";
        while ($row = pg_fetch_row($rs)) {
            $html .= "<tr>";
            $html .= "<td>$row[0]\n</td> <td>$row[1]\n</td> <td>$row[2]\n</td>";
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;
    }
}