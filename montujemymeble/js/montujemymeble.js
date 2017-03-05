$(document).ready(function () {
    // Czyszczenie formularza
    $(".clear").click(function () {
        $("#formularz_kontaktowy")[0].reset();
    });
    // Zapisywanie formularza
    $(".send").click(function () {
        $("#formularz_kontaktowy")[0].submit();
    });
});

