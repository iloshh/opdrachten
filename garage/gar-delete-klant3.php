<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="ilosh">
    <meta charset="UTF-8">
    <title>gar-delete-klant2.php</title>
    <link href="garage.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>garage delete klant 3</h1>
<p>
    Op klantid gegevens zoeken uit de
    tabel klanten van de database garage
    zodat ze verwijderd kunnen worden.
</p>
<?php
// gegevens uit het formulier halen -----------------------------
$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];

// klantgegevens verwijderen -----------------------------------
if ($verwijderen)
{
    require_once "gar-connect.php";

    $sql = $conn->prepare("delete from klant where klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);

    echo "De gegevens zijn verwijderd. <br />";
}
else
{
    echo "De gegevens zijn verwijderd. <br />";
}

echo "<a href='gar-menu.php'>Terug naar het menu</a>";
?>
</body>
</html>
