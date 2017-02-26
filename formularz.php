<?php
$conn = pg_connect("host=localhost port=5432 dbname=wandzia user=postgres");
$result = pg_query($conn, "select * from miejscerodzaj");
$tablicaWynikow = pg_fetch_all($result);

//var_dump($tablicaWynikow);

//echo "id: " . $tablicaWynikow[0]['id'];
//echo "nazwa: " . $tablicaWynikow[0]['nazwa'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>formularz</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>

<form method="post" action="druga_strona.php">

    <div>nazwa:</div>
    <div><input type="text" name="nazwa" value="to_jest_nazwa"></div>
    <div>rodzaj:</div>
    <div>
        <select name="rodzaj">
            <?php
            for ($i = 0; $i < count($tablicaWynikow); $i++) {
                echo "<option value='" . $tablicaWynikow[$i]['id'] . "'>" . $tablicaWynikow[$i]['id'] . " - " . $tablicaWynikow[$i]['nazwa'] . "</option>";
            }
            ?>
        </select>
    </div>
    <div>opis:</div>
    <div><textarea name="opis" cols="50" rows="10">to_jest_opis</textarea></div>

    <div><input type="submit" value="zapisz"></div>

</form>

</body>
</html>