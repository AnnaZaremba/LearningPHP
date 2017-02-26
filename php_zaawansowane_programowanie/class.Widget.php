<?php

class Widget
{

    private $id;
    private $name;
    private $description;
    private $hDB;
    private $needsUpdating = false;

    public function __construct($widgetID)
    {
        $this->hDB = pg_connect("host=localhost port=5432 dbname=wandzia user=postgres");

        if (!is_resource($this->hDB)) {
            throw new Exception('Nie można połączyć się z bazą');
        }

        $sql = "select nazwa, opis from artykul where nr_artykulu = $widgetID";
        $rs = pg_query($this->hDB, $sql);
        if (!is_resource($rs)) {
            throw new Exception("Błąd przy wykonaniu instrukcji wyboru");
        }

        if (!pg_num_rows($rs)) {
            throw new Exception("Szukanego artykulu nie ma w bazie");
        }

        $data = pg_fetch_array($rs);
        $this->id = $widgetID;
        $this->name = $data['nazwa'];
        $this->description = $data['opis'];

    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->needsUpdating = true;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        $this->needsUpdating = true;
    }

    public function __destruct()
    {

        if (!$this->needsUpdating) {
            return;
        }

        $sql = 'update artykul set ';
        $sql .= "nazwa = '" . pg_escape_string($this->name) . "', ";
        $sql .= "opis = '" . pg_escape_string($this->description) . "' ";
        $sql .= "where nr_artykulu = " . $this->id;

        echo $sql;

        $rs = pg_query($this->hDB, $sql);

        if (!is_resource($rs)) {
            throw new Exception("Wystąpił błąd podczas aktualizacji bazy danych");
        }

        pg_close($this->hDB);

    }
}