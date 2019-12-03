<!-- Déclaration de 2 variables age et gender -->
<?php
$age=20;
$gender='femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP2Ex2</title>
</head>
<body>
  <!-- Déclaration d'un paragraphe -->
  <p><?php
  // Si c'est un homme ayant 18 ans ou plus alors texte suivant (Vous êtes....)
  if($age>=18 AND $gender=='homme')
  {
    echo'Vous êtes un homme et vous êtes majeur';
  }
  // Sinon si c'est un homme ayant moins de 18 ans alors le texte suivant (Vous êtes..)
  elseif($age<=17 AND $gender=='homme')
  {
    echo'Vous êtes un homme et vous êtes mineur';
  }
  // Si vous êtes une femme ayant 18 ans ou plus alors le texte suivant (Vous êtes...)
  if($age>=18 AND $gender=='femme')
  {
    echo'Vous êtes une femme et vous êtes majeure';
  }
  // Sinon si vous êtes une femme ayant moins de 18 ans alors le texte suivant(Vous êtes ...)
  elseif($age<=17 AND $gender=='femme')
  {
    echo'Vous êtes une femme et vous êtes mineure';
  }
  ?></p>
</body>
</html>
