<html>
<head>
    <title>Klasy</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
require_once('class.Demo.php');
$objDemo = new Demo();
echo $objDemo->sayHello('Stefan');
?>

<br><br><br>

<?php
include('class.Lion.php');

$objLion = new Lion();
$objLion->weight = 200;
$objLion->furColor = 'brąz';
$objLion->maneLenght = 36;
$objLion->eat();
$objLion->roar();
$objLion->sleep();

$objPetter = new Cat();
$objPetter->petTheKitty($objLion);
var_dump($objLion);
var_dump($objPetter);
?>

<br><br><br>

<?php
require_once('class.Cheetah.php');

function PetTheKitty(Cat $objCat)
{
    if ($objCat->maxSpeed < 5) {
        $objCat->purr();
    } else {
        print "Nie da się pogłaskać kotka - oddala się z prędkością " . $objCat->maxSpeed . " kilometrów na godzinę!";
    }
}

$objCheetah = new Cheetah();
petTheKitty($objCheetah);

$objCat = new Cat();
petTheKitty($objCat);
?>
