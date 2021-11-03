<?php
	include "conn.php";
	session_start();
	
	$uname=$_SESSION['user'];
	
	$getname=mysqli_query($conn,"SELECT * FROM registration 
	WHERE username='$uname'");
	
	if($d=mysqli_fetch_object($getname)){
		$name=$d->name;
		$pass=$d->password;
		$id=$d->id;
		$username=$d->username;
	}
?>

<!DOCTYPE html>
	<html>
		<head>
			<title><?php echo $name;?></title>
 		</head>
		<body>
			<h1>Welcome to your Homepage <?php echo $name;?></h1>
			
			<a href="pic.php">Pictures </a></br>
			
		id:	 <?php echo $id;?></br>
		name: <?php echo $name;?></br>
		username: <?php echo $username;?></br>
		password: 	<?php echo $pass;?></br>
			
		</body>
	</html>