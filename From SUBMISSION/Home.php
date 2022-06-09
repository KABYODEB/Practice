<?php

   session_start();
   if(isset($_SESSION['status'])){

?>

<html>
<head>
	<title>Home page </title>
</head>
<body>
	
	
	<h1>WELCOME HOME</h1>
	<a href="Logout.php">Logout</a>
	

</body>
</html>

<?php } else {
	echo "invalid request";
}?>

