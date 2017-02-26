<html>
<head>
    <title>test demo</title>
    <meta charset="UTF-8">
</head>
<body>


<?php
require_once('class.Demo.php');
$objDemo = new Demo();
$objDemo->setName('Stefan');
$objDemo->sayHello();

$objDemo->setName(37);
