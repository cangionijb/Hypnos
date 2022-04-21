<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Votre Formulaire
</title>
</head>
<body>
<h1>Bonjour,  <?php echo $_GET['name'] ?></h1>
<h2>Merci pour vos informations  <?php echo $_GET['mail'] ?>
</h2>
<h1>Votre reclamation à bien était envoyer <?php echo $_GET['Votre Reclamation'] ?>
   <?php
    $n = $_GET['name'];
    $a = $_GET['mail'];
    ?>

</body>

</html>
 