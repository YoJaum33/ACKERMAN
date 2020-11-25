<?php

  $userNom = $_POST["user-nom"] ?? false;
  $userPrenom = $_POST["user-prenom"] ?? false;
  $userAdresse = $_POST["user-adresse"] ?? false;
  $userCp = $_POST["user-cp"] ?? false;
  $userVille = $_POST["user-ville"] ?? false;
  $userPays = $_POST["user-pays"] ?? false;
  $userTel = $_POST["user-tel"] ?? false;
  $userLogin= $_POST["user-login"] ?? false;
  $userMdp = $_POST["user-mdp"] ?? false;



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>account-create--process.php</title>
  <style>code{background:#FF0}</style>
</head>
<body>
  <main>
    <p>Bien le bonjour, je suis le fichier <code>account-create--process.php</code> et voici les valeurs que je viens tout juste de recevoir par la méthode <code>POST</code>:</p>
    <ul>
      <li>Nom : <?php echo $userNom; ?></li>
      <li>Prénom :<?php echo $userPrenom; ?></li>
      <li>Adresse :<?php echo $userAdresse; ?></li>
      <li>Code postal :<?php echo $userCp; ?></li>
      <li>Ville :<?php echo $userVille; ?></li>
      <li>Pays :<?php echo $userPays; ?></li>
      <li>Téléphone :<?php echo $userTel; ?></li>
      <li>Adresse électronique :<?php echo $userLogin; ?></li>
      <li>Mot de passe :<?php echo $userMdp; ?></li>
    </ul>
  </main>
</body>
</html>