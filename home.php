<?php
  session_start();

 if(isset($_SESSION['id'])&& isset($_SESSION['user_name'])){

 
?>
<!DOCTYPE html>
<html>
	
 <head>
    	<title>Home</title>
    	<link rel="stylesheet" type="text/css" href="styles.css">
 </head>
  <body>
  	
   <h1>Hellow,<?php echo $_SESSION['name']; ?></h1><br>
   <a href="logout.php">Logout</a>
  	

  </body>  
</html>
<?php
}else{
   header("Location:index.php");
   exit();
}
?>