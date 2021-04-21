<?php

	$id = "";
	$output = '';
	$connection=mysqli_connect("localhost","root","","upang_hub");

$list = mysqli_query($connection, "SELECT * FROM tbl_account");

if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	 $sql_query = "SELECT * FROM tbl_account WHERE username = '$username' AND password = '$password' ";
     $result = mysqli_query($connection,$sql_query);

   	$row=mysqli_fetch_array($result);

   	if ($row['username'] == $username && $row['password'] == $password) {
   		echo "<script>alert('Login Success!');document.location='index.php'</script>";
		
   	}
   	else{
   		 echo "<script>alert('Incorrect credentials!');document.location='login.php'</script>";
   	}
}

?>