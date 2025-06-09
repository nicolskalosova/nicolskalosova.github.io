<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $room = htmlspecialchars($_POST["room"]);
    $from = htmlspecialchars($_POST["date_from"]);
    $to = htmlspecialchars($_POST["date_to"]);
    $note = htmlspecialchars(trim($_POST["note"]));

    echo "<!DOCTYPE html>";
    echo "<html lang='cs'><head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><title>Rezervace Hotel Romance</title>";
    echo "<link rel='stylesheet' href='hotel.css'></head><body>";
    echo "<main style='max-width:700px;margin:60px auto;padding:34px;background:#fff8fa;border-radius:22px;text-align:center'>";
    echo "<h2>Děkujeme za rezervaci!</h2>";
    echo "<p><b>$name</b>, vaše objednávka na <b>";
    switch($room) {
        case 'luxusni': echo "Luxusní pokoj"; break;
        case 'standard': echo "Standardní pokoj"; break;
        case 'apartma': echo "Romantické apartmá"; break;
        case 'rodinny': echo "Rodinný pokoj"; break;
        default: echo htmlspecialchars($room); break;
    }
    echo "</b> od <b>" . htmlspecialchars($from) . "</b> do <b>" . htmlspecialchars($to) . "</b> byla přijata.<br>";
    echo "Potvrzení bude zasláno na <b>$email</b>.</p>";
    if ($note) echo "<p><i>Poznámka:</i> ".nl2br($note)."</p>";
    echo '<a href="hotel.html" style="color:#ee6983;text-decoration:none;font-weight:600">Zpět na hlavní stránku</a>';
    echo "</main></body></html>";
} else {
    header("Location: hotel.html");
    exit;
}
?>