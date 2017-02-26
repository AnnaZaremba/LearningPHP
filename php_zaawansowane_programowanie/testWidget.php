<html>
<head>
    <title>testWidget</title>
    <link type='text/css' rel='stylesheet' href='../style.css'/>
    <!--polskie znaki-->
    <meta charset="UTF-8">
</head>
<body>

<?php
require_once('class.Widget.php');

try {
    $objWidget = new Widget(1);

    print "Nazwa artykułu: " . $objWidget->getName() . "<br>\n";
    print "Opis artykułu: " . $objWidget->getDescription() . "<br>\n";

    $objWidget->setName('Trampki');
    $objWidget->setDescription('Trampki o dużym przebiegu!');
}
catch (Exception $e) {
    die("Wystąpił problem: " . $e->getMessage());
}