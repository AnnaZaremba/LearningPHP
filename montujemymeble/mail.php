<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARTIFICIUM - wysyłka</title>
    <meta charset="utf-8"/>

    <link rel="stylesheet" type="text/css" href="css/slicknav.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet"
          charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="home">
    <div class="headerLine">
        <div id="menuF" class="default">
            <div class="container">
                <div class="row Ama">
                    <div class="logo col-md-4" style="margin-left: 385px">
                        <div >
                            <a href="montujemyMebleIndex.php" >
                                <img src="images/logoMM.png">
                            </a>
                        </div>
                        <div class="col-md-4 Des">
                            <h3>
                                <?php
                                include_once 'KontaktWalidator.php';
                                include_once 'KontaktWysylka.php';

                                $kontaktWalidator = new KontaktWalidator();
                                $kontaktWysylka = new KontaktWysylka();

                                $formularzWypelniony = false;

                                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
                                    $formularzWypelniony = true;
                                }

                                if ($formularzWypelniony) {
                                    $imie = $_POST['name'];
                                    $email = $_POST['email'];
                                    $temat = $_POST['subject'];
                                    $tresc = $_POST['message'];

                                    $komunikatyBledu = [];
                                    if (!$kontaktWalidator->sprawdzEmail($email)) {
                                        $komunikatyBledu[] = "Niepoprawny adres e-mail";
                                    }

                                    if (!$kontaktWalidator->sprawdzImie($imie)) {
                                        $komunikatyBledu[] = "Niepoprawne imię";
                                    }
                                    if (!$kontaktWalidator->sprawdzTemat($temat)) {
                                        $komunikatyBledu[] = "Niepoprawny temat";
                                    }

                                    if (!$kontaktWalidator->sprawdzTresc($tresc)) {
                                        $komunikatyBledu[] = "Niepoprawna treść";
                                    }
                                    if (count($komunikatyBledu) > 0) {

                                        foreach ($komunikatyBledu as $value) {
                                            echo "<div style='font-size: large;'>" . $value . "</div>";
                                        }
                                    } else {
                                        if ($kontaktWysylka->wyslijMaila($temat, $tresc, $imie, $email)) {
                                            echo "<div style='font-size: large;'>Wiadomość została wysłana - dziekujemy!</div>";
                                        } else {
                                            echo "Błąd wysyłania";
                                        }
                                    }
                                }
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 cBusiness">
            <h4>
                <a href="montujemyMebleIndex.php">Powrót do strony głównej</a>
            </h4>
        </div>
    </div>
</div>

</html>
