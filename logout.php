<?php 
session_start();
session_unset();
session_destroy();
echo "<script>alert('Logged Out!');document.location='login.php'</script>";
?>
