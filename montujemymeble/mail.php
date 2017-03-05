<?php
$recipient = "annapufelska@gmail.com";
$fmtResponse = implode("", file("response.htt"));
$fmtMail = implode("", file("mail.htt"));
foreach ($_POST as $key => $val) {
    $fmtResponse = str_replace("<$key>", $val, $fmtResponse);
    $fmtMail = str_replace("<$key>", $val, $fmtMail);
}
if ($_POST["access"] == "irregeheim") {
    echo "wysyłam maila";
    mail($recipient, $_POST["name"], $fmtMail);
}
echo $fmtResponse;
