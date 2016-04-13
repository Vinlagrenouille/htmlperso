<!DOCTYPE html>
<html>

<head>
  <title>Tables</title>
</head>

<body>
  <form method="get" action="2.php">
    <fieldset>
      <legend><b>Table de ?</b></legend>
      <input id="table" type="text" name="table" /><br>
    </fieldset>
    <input type="submit" name="accepter" value="OK">
  </form>
  <?php
    if(isset($_GET['table'])){
      $table=$_GET['table'];
    }
    else{
      $table = 0;
    }
    for($i=1;$i<11;$i=$i+1){
        $res=$i*$table;
        echo $i."x".$table." = ".$res;
        echo "<br>";
    }
    ?>
</body>

</html>