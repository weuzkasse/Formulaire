<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $Prenom= $_GET ["Prenom"];
    $Nom= $_GET ["Nom"];
    $Mail= $_GET ["Mail"];
    $Tel= $_GET ["Tel"];
    $Adresse= $_GET ["Adresse"];
  
    echo "<center>Je m'appelle $Prenom $Nom.<br>Mon e-mail est: $Mail.<br>J'habite à $Adresse.<br>Veuillez me contacter au: $Tel.</center>";
    
  ?>
</body>
</html>