<!DOCTYPE html>
<html>

<head>
  <title>hello world en php !</title>
</head>

<body>
  <?php
    $clients = array (
	    "Luc", 
    	7 => "Paul", 
    	2 =>"Martin", 
    	"Arnaud"
    	);
    echo $clients[0]."<br>";
    echo $clients[8];
?>
</body>

</html>