<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="ilosh">
    <meta charset="UTF-8">
    <title>gar-delete-klant1.php</title>
    <link href="garage.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>garage delete klant 1</h1>
<p>
    Dit formulier zoekt een klant op uit
    de tabel klanten van de database garage
    om hem te kunnen verwijderen.
</p>
<form action="gar-delete-klant2.php" method="post">
    Welk klantid wilt u verwijderen?
    <input type="text" name="klantidvak"> <br />
    <input type="submit">
</form>
</body>
</html>