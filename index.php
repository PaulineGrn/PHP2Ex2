<?php
// Déclaration de la variable Woman
$gender = 'Woman';
// Déclaration de la variable age
$age = 20;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHPPartie2Exo2</title>
</head>
<body>
  <p>
    <?php
    // Déclaration de la condition if pour l'âge compris entre 0 et 100 ans
    if ($age > 0 && $age < 100){
      // Déclaration de if et de la variable gender pour le genre et être majeur
      if ($gender == 'Man' && $age >= 18){
        ?>
        Vous êtes un homme et vous êtes majeur
        <!-- Condition elseif pour le genre masculin et être mineur -->
      <?php }elseif($gender == 'Man' && $age < 18) { ?>
        Vous êtes un homme et vous êtes mineur
        <!-- Condition elseif pour le genre féminin et être majeur -->
      <?php }elseif($gender == 'Woman' && $age >= 18) { ?>
        Vous êtes une femme et vous êtes majeure
        <!-- Condition elseif pour le genre féminin et inférieur à 18 ans -->
      <?php }elseif($gender == 'Woman' && $age < 18) { ?>
        Vous êtes une femme et vous êtes mineure
        <!-- sinon le genre n'est pas valide -->
      <?php }else{ ?>
        erreur le genre n'est pas valide
        <?php
      }
      // Sinon l'âge est non valide
    }else{
      ?>
      age non valide
    <?php } ?>
  </p>
</body>
</html>
© 2019 GitHub, Inc.
