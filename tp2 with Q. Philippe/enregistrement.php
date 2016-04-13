<?php
  extract($_POST);
  $nom = strtolower($nom);
  $nom = ucfirst($nom);
  $prenom = strtolower($prenom);
  $prenom = ucfirst($prenom);

  if($gender=="male"){
    $gender="Monsieur";
  }
  if($gender=="female"){
    $gender="Madame";
  }
if($gender=="other"){
  $gender="";
}

  echo "Bonjour ".$gender." ".$prenom." ".$nom;
?>