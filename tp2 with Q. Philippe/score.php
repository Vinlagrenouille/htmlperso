<?php

extract($_POST);
$score=0;

echo "<h2> Reponses </h2>";

for($i=1;$i<=$nbq;$i = $i+1){
  if(isset($_POST["question".$i])){
    $test=$_POST["question".$i];
    echo "<li> question ".$i." ";
    if($test == "vrai"){
      $score = $score + 1;
      echo "Bonne reponse </li>";
    }
    if($test == "faux"){
      echo "Mauvaise reponse </li>";
    }
  }
  else{
     echo "<li> question ".$i." "."Pas de reponse </li>";
    }
   }


echo "<br> Score : ".$score;

?>