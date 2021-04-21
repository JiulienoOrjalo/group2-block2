<?php include ('UP_server.php')?>
<!doctype html>
<html lang="en">
<title>Users</title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/top icon 2.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
      h5{
        color: black;
      }
       h4{
        margin-top: 5px;
        font-weight: bold;
        font-style: 'Merriweather', serif;
      }
      .background{
        background-color: #F1f4f7;
      }* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 70%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  outline: none;
}
#submit{
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 20%;
  font-size: 16px;
  padding: 12px 20px 12px ;
  text-align: center;
  justify-content: center;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#submit:hover{
  color: white;
  background-color: #977a00;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
    </style> 
  </head>
  <body style="background-color: #F1f4f7;"> 
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="outline: none;">
  <div class="container-fluid">
   
    <a class="navbar-brand" href="index.php"><img src="assets/logoorig.png" id="logotop"></a>



<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    <div class="wrapper">
  <div class="hamburger-menu-button" onClick="toggleMenu()">
      <div class="hamburger-menu"/> 
  </div>
</div>
</button>

<div class="collapse navbar-collapse justify-content-start mt-4 " id="navbarNav" >
  <ul class="nav justify-content-center" id="choices">
    <li class="nav-item">
      <a class="nav-link" href="index.php" style="color: white;">Home</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="compu_grade.php" style="color: white;">Computation of Grades</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tuition_calculator.php" style="color: white;">Computation of Tuition Fee</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="CourseOffered.php" style="color: white;">Courses Offered</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="gallery.php" style="color: white;">Gallery</a>
    </li>

     <li class="nav-item">
        <a class="nav-link active" href="user.php" style="color: white;">User</a>
      </li>

  </ul>
</div>

  </div>
</nav>
   
<div class="background" >
<div class="container">
  <div class="row">
    <div class="container py-5"> 
       <br><br><br><br>
        <div class="card">  
            <div class="card-header bg-success text-white">  
                <h4 class="text-uppercase text-center">Number of Users</h4>  
            </div>  
            <div class="card-body"> 



<form method="post">            
<div style="justify-content: center; text-align: center;">
<input type="text" id="myInput" placeholder="Search for names.." name="user">
<input type="submit" id="submit" name="search">
</div>
<?php

if (isset($_POST['search'])== null) 
{
 
  $connection=mysqli_connect("localhost","root","","upang_hub");
  $result = mysqli_query($connection, "SELECT * FROM tbl_account");
  $rowcount = mysqli_num_rows($result);
}
else{
  $user = $_POST['user'];
  $connection=mysqli_connect("localhost","root","","upang_hub");
  $result = mysqli_query($connection, "SELECT * FROM tbl_account WHERE username LIKE '%$user%'");
  $rowcount = mysqli_num_rows($result);
}
 
?>


<table id="myTable">
  <tr class="header">
    <th style="width:60%;">USERNAME</th>
  </tr>

<?php



for ($i=1; $i<=$rowcount; $i++)
{   

    $row = mysqli_fetch_array($result);

  
 ?>
  <tr>
   <td><?php echo $row['username']?></td>
 </tr>

<?php    
}


?>



</table>

</form>

            </div>  
        </div>  
    </div>  
  </div>
</div>
</div>
<br><br><br><br><br><br><br><br><br>
<footer class="bg-light text-center text-lg-start" style="width: 100%; bottom: 0; height: auto; position: fixed;">
  <div class="text-center p-3" style="background-color:#495555; color: white">
    © 2020 Copyright:
    <a class="text-light" href="#" style="text-decoration: none; color: white"><b>Group 2</b></a>
    <div>
  <a href="#" style="text-decoration: none; color: white;"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
  <a href="#" style="text-decoration: none; color: white;"><i class="fa fa-instagram" aria-hidden="true"></i></a>    
  <a href="#" style="text-decoration: none; color: white;"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
  <a href="#" style="text-decoration: none; color: white;"><i class="fa fa-google" aria-hidden="true"></i></a>
    </div>
  </div>
</footer>
</body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


    <script src="main.js"></script>

</html>