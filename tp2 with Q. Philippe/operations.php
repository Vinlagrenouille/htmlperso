<?php

extract($_POST);

if(is_numeric($operande) == false){
  $operande=1;
}
if(is_numeric($ednarepo)==false){
  $ednarepo=1;
}


if($op == "mult"){
  echo $operande*$ednarepo;
  echo "<br>";
}
if($op=="div"){
  //question 3-2 :
  if($ednarepo == 0){
     $ednarepo=1;
  }
  echo $operande/$ednarepo;
  echo "<br>";
}
if($op=="add"){
  echo $operande+$ednarepo;
  echo "<br>";
}
if($op=="sub"){
  echo $operande-$ednarepo;
  echo "<br>";
}
?>