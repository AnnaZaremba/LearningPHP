<?php
/**
 * Odczytaj dane z pliku dane.csv
 * Wyświetl je w tabelce html z trzema kolumnami:
 * - imie
 * - nazwisko
 * - wiek
 *
 * <?php echo - skrót <?=
 */
?>
<table>
    <tr>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Wiek</th>
    </tr>
    <?php
    $hd = fopen('dane.csv', 'rt');
    while (!feof($hd)) {
        $linia = fgetcsv($hd, 1024, ';');
        var_dump($linia);
        ?>
        <tr>
            <td><?= $linia[0] ?></td>
            <td><?= $linia[1] ?></td>
            <td><?= $linia[2] ?></td>
        </tr>
        <?php
    }
    fclose($hd);
    ?>
</table>

