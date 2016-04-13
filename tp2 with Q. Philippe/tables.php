<?php

$table=$_POST($table)

if(isset($_POST($table))){
  $table=$_POST($table);
}
else{
  $table = "";
}

for($i=1;$i<11;$i=$i+1){
    $res=$i*$table;
    echo $i."x".$table." = ".$res;
}

?>