<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}else{
  // header('location:user.php');
  $expire = 365 * 24 * 3600; // We choose a one year duration
    setcookie(session_name(), session_id(), time() + $expire);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
</head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/top icon 2.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: #f1f4f7;
			font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif; 
		}
		#navbarNav{
			  font-family: 'Roboto', sans-serif;

			}
			.navbar{
			  background-color: #2e3e1b;
			  border-bottom: 8px solid #977a00;
			  box-shadow: 5px 2px 5px;

			}
			.nav-item:hover{
			  background-color: #977a00;
			  border-bottom: 2px solid gold;
			}
			.active{
			  background-color: #977a00;
			   border-bottom: 2px solid gold;
			}
			#logotop{
			  filter: grayscale(0);
			  height: 80px;
			  width: auto;
			}
			#choices{
			  margin-left: 30px;
			}
		h1{
			text-align: center;
			padding-top: 12%;
			letter-spacing: 10px;	}
		hr.rounded {
		  border-top: 8px solid #977a00;
		  border-radius: 2px;
		  width: 15%;
		  margin-bottom: 3%;
		}
		img{
			width: 100%;
			height: 100%;
			padding-bottom: 15px;
			position: relative;
		}
		.images {
		  position: relative;
		  width: 50%;
		}

		.image {
		  display: block;
		  width: 100%;
		  height: auto;
		}

		.overlay {
		  position: absolute;
		  bottom: 100%;
		  left: 0;
		  right: 0;
		  background-color: #977a00;
		  overflow: hidden;
		  width: 100%;
		  height:0;
		  transition: .5s ease;
		}

		.images:hover .overlay {
		  bottom: 0;
		  height: 100%;
		}

		.text {
		  color: white;
		  font-size: 25px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
		@media (max-width: 1085px){
			h1{
				padding-top: 14%;
			}
		}
		@media (max-width: 900px){
			.text{
				font-size: 4vw;
			}
			.images{
				width: 100%;
				height: 100%;
				padding-bottom: 15px;
				padding-left: 30px;
				padding-right: 30px;
			}
			h1{
				text-align: center;
				padding-top: 27vh;
				letter-spacing: 10px;	}
			hr.rounded {
			  border-top: 8px solid #977a00;
			  border-radius: 2px;
			  width: 15%;
			}
		}
		footer{
		  height: 50px;
		}
	</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="outline: none;">
  <div class="container-fluid ">
   
    <a class="navbar-brand" href="#"><img src="assets/logoorig.png" id="logotop"></a>



<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    <div class="wrapper">
  <div class="hamburger-menu-button" onClick="toggleMenu()">
      <div class="hamburger-menu"/> 
  </div>
</div>
</button>

    <div class="collapse navbar-collapse justify-content-start mt-4 " id="navbarNav" >
        <ul class="nav justify-content-center  pl-3" id="choices">
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

          <li class="nav-item active">
            <a class="nav-link" href="gallery.php" style="color: white;">Gallery</a>
          </li>
           <li class="nav-item">
      		<a class="nav-link" href="user.php" style="color: white;">Users</a>
    		</li>
         
        </ul>
    </div>


  </div>
</nav>
	<div>
		<h1>Gallery</h1>
		<center><hr class="rounded"></center>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 images">
				<img src="school/1.jpg" alt="Avatar" class="image" style="height: 100%;">
				<div class="overlay">
					<div class="text">Athrium</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/2.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">Field</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/3.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">Audio Visual Room</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/4.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">University Library</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/5.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">Computer Laboratory</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/6.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">Crime Laboratory</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/7.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">College of Law</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/8.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">HM Laboratory</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/9.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">MAC Laboratory</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/22.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">Phinma Avenue</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/11.jpg" alt="Avatar" class="image" style="height: 100%;">
				<div class="overlay">
					<div class="text">MBA Building</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/33.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">NH Building</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/55.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">Pathway</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/66.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">Medical Laboratory</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/77.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">Church</div>
				</div>
			</div>
			<div class="col-sm-4 images">
				<img src="school/88.jpg" alt="Avatar" class="image">
				<div class="overlay">
					<div class="text">Architecture Laboratory</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="bg-light text-center text-lg-start" >
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
</html>