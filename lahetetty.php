<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yhteystiedot</title>
</head>
<body>
    <form action="yhteystiedot.html" method="POST">
    <h1>Kiitos viestistäsi! Otamme sinuun pian yhteyttä.</h1>
    <p>Yhteytestietosi ovat:</p>
    <ol>
        <li><em>Nimesi:</em> <?php echo $_POST["nimi"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Viesti:</em> <?php echo $_POST["viesti"]?></li>
    </ol>
</form>
</body>
</html>
