<html>
<head>
    <title>Formularz kontaktowy</title>
    <meta charset="UTF-8">
</head>
<body>

<?php

function sprawdzEmail($email)
{
    $spr = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';
    if (preg_match($spr, $email)) {
        return true;
    } else
        return false;

}

function sprawdzImie($imie)
{
    $sprawdz = '/^[a-zA-ZŁŚĆŹŻĄĘÓŃąęółśżźćń]+$/';
    if (preg_match($sprawdz, $imie)) {
        $imie = ucwords(strtolower($imie));
        return $imie;
    } else
        return false;
}

function sprawdzTelefon($telefon)
{
    $sprawdz = '/^[0-9]{9}+$/';
    if (preg_match($sprawdz, $telefon)) {
        return true;
    } else
        return false;
}

function sprawdzTresc($tresc)
{
    $tresc = trim($tresc);
    if (strlen($tresc) < 5) {
        return false;
    } else
        return $tresc;
}

function szukajWulgaryzmow($tresc)
{
    if (strpos($tresc, "cholera") == FALSE) // nie znaleziono szukanego wyrazu
    {
        echo "Można wyświetlić: $tresc.";
    } else // znaleziono szukany wyraz
        echo "Tekst zawiera wulgarne słownictwo.";
}


function sprawdzDomene($email)
{
    $domena = explode("@", $email);
    echo $domena[1] . "<br/>";
}

$email = $_POST['email'];
$imie = $_POST['imie'];
$tel = $_POST['telefon'];
$tresc = $_POST['tresc'];
$blad_danych = false;

if (!sprawdzEmail($email)) {
    echo "Adres e-mail niepoprawny" . "<br/>";
    $blad_danych = true;
}

$imie = sprawdzImie($imie);
if (!$imie) {
    echo "Imię wpisano niepoprawnie" . "<br/>";
    $blad_danych = true;
}

if (!sprawdzTelefon($tel)) {
    echo "Błędny format telefonu" . "<br/>";
    $blad_danych = true;
}

$tresc = sprawdzTresc($tresc);
if (!$tresc) {
    echo "Niepoprawna treść" . "<br/>";
    $blad_danych = true;
}

if ($blad_danych) {
    echo "Wystąpił jeden lub więcej błędów podczas przetwarzania danych." . "<br/>";
} else {
    echo "Imię klienta: $imie" . "<br/>";
    echo "Adres e-mail: $email" . "<br/>";
    echo "Domena: ";
    echo sprawdzDomene($email);
    echo "Numer telefonu: $tel" . "<br/>";
    echo "Treść: $tresc" . "<br/>";
}

?>
</body>
</html>
