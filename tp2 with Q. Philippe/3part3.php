<!DOCTYPE html>
<html>

<head>
  <title>Operations</title>
</head>

<body>
  <?php
extract($_POST);
if(isset($operande) && isset($ednarepo) && isset($op)){
if(is_numeric($operande) == false){
  $operande=1;
}
if(is_numeric($ednarepo)==false){
  $ednarepo=1;
}

if($op == "mult"){
  $res=$operande*$ednarepo;
}
if($op=="div"){
  //question 3-2 :
  if($ednarepo == 0){
     $ednarepo=1;
  }
  $res= $operande/$ednarepo;
}
if($op=="add"){
  $res= $operande+$ednarepo;
}
if($op=="sub"){
  $res = $operande-$ednarepo;
}
}
?>
  <form method="post" action="3part3.php">
    <fieldset>
      <input type="text" name=operande value="<?php if(isset($res)){ echo $res; } ?>" />
      <br/>
      <select name=op >
        <option value=mult >x</option>
        <option value=add >+</option>
        <option value=sub >-</option>
        <option value=div >/</option>
      </select>
      <br/>
      <input type=text name=ednarepo />
    </fieldset>
    <input type="submit" name="accepter" value="Calculer">
  </form>
  <?php
  if(isset($res)){
    echo $res."<br>";
  }
  ?>
</body>

</html>