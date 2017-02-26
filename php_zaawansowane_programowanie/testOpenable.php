<html>
<head>
    <title>test Openable</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
require_once('class.Door.php');
require_once('class.Jar.php');

function openSomething(Openable $obj)
{
    $obj->open();
//    $obj->close();
}

openSomething(new Door());
openSomething(new Jar("galaretka"));