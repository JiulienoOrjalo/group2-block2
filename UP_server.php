<?php
// Prepared Statement
session_start();
$connection=mysqli_connect("localhost","root","","upang_hub");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();}
if (isset($_POST)) {
	// getting the input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
	// Create a SQL query but this time use a parameter markers, this are used for variable binding
    $query = "SELECT * FROM tbl_account WHERE username = ? AND password = ?;";
	// Initialize statement
    $stmtinit = mysqli_stmt_init($connection);
	// Prepare the statement, include the initialize statement and the query
    $preparedStatement = mysqli_stmt_prepare($stmtinit, $query);
	// Check if the prepared statement failed
    if (!$preparedStatement) {
        echo "\nSQL Statement Failed" . mysqli_stmt_error($stmtinit);
    } else {
		// bind the parameter, by including the initalized statement object, the "ss" are the data types of the inputs
		// and put now the variable inputs.
        mysqli_stmt_bind_param($stmtinit, "ss", $username, $password);
		// after binding, execute it now.
        mysqli_stmt_execute($stmtinit);
		// store ther result in a variable
        $result = mysqli_stmt_get_result($stmtinit);
		// create a variable with to fetch the result in associative array and find if theres a value of it more than one
        if ($row = mysqli_fetch_assoc($result) > 0) {
			// if user and password has been found, it will login.
			echo "<script>alert('Login Success!');document.location='user.php'</script>";
			$_SESSION['username'] = $username;
        } else {
			// if not, we will dump the data
            var_dump($query);
        }
    }
}
?>
<?php
// session_start();
// $connection=mysqli_connect("localhost","root","","upang_hub");
// // Check connection
// if (mysqli_connect_errno()) {
// 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
// 	exit();
// 	}
// if (isset($_POST['login'])) {
// 	// getting the users input from the form and storing it without sanitizing it.
// 	$username=$_POST['username'];
// 	$password=$_POST['password'];

// 	 $sql_query = "SELECT * FROM tbl_account WHERE username = '$username' AND password = '$password' ";
//      $result = mysqli_query($connection,$sql_query);
// 	 $getResult = mysqli_fetch_assoc($result);
	
		
// 	 if($fetchResult = mysqli_num_rows($result) > 0){
// 		echo "<script>alert('Login Success!');document.location='user.php'</script>";
// 				$_SESSION['username'] = $username;
// 	 }else {
// 		echo "<script>alert('Login Failed!');document.location='login.php'</script>";
// 	 }
// 	}?>