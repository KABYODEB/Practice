<?php

  session_start();



  $USERNAME =$_REQUEST['username'];
  $PASSWORD =$_REQUEST['password'];

  if($USERNAME==null || $PASSWORD==null){

  	echo "invalid USERNAME/PASSWORD<br>";


  }
  else{
  	if($USERNAME==$PASSWORD){
  	$_SESSION['status'] =true;
    header('location:Home.php');

}
else{
  echo "Invalid User";
}




}






?>








