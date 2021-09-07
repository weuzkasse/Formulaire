<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <title>contact</title>
</head>
<body>
    <div class="form">
    
    <form action="affichage.php" method= "GET">
    <h1><U>Remplissez le formulaire</U></h1>
        <label><U>Prenom:</U></label>
       <input  type="text" name="Prenom" required="required" ><br><br>
       <label><U>Nom:</U></label>
      <input  type="text" name="Nom"  required="required"><br><br>
      <label><U>E-mail:</U></label>
      <input  type="e-mail" name="Mail"  required="required"><br><br>
      <label><U>Telephone:</U></label>
      <input  type="tel" name="Tel"  required="required"><br><br>
      <label><U>Adresse:</U></label>
      <input  type="text" name="Adresse"  required="required"><br><br>
      <button type="submit" name="valider">Envoyer</button>
    </form>
   </div>
    
</body>
</html>