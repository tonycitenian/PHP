<?php
	include "conn.php";
	session_start();
	
	//this is for calling reg button
	if(isset($_POST['reg'])){
		
		$name=$_POST['nm'];
		$username=$_POST['un'];
		$password=$_POST['pw'];
		
		$insert=mysqli_query($conn,"INSERT INTO registration 
		VALUES('0','$name','$username','$password')");
		
		if($insert==true){
			echo "Data was inserted in your DB";
		}else{
			echo "Error Insert";
		}
	}
	
	//this is for login
	if(isset($_POST['login'])){
		
		$username=$_POST['user'];
		$password=$_POST['pass'];
		
		$check=mysqli_query($conn,"SELECT * FROM registration 
		WHERE username='$username' AND password='$password'");
		
		$n=mysqli_num_rows($check);
		
	
		if($n <= 0){
			?>
				<script>
					alert("Error Username or Password Please try again.");
					window.location.href="login.html";
				</script>
			<?php
		}else{
		
			?>
				<script>
					alert("Correct Username and Password");
					window.location.href="home.php";
				</script>
			<?php
			$_SESSION['user']=$username;
		}
		
	}
		




?>