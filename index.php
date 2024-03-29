<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}else{
  header('location:user.php');
}

?>
<!doctype html>
<html lang="en">
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

    <title>UPANG hub</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="outline: none;">
  <div class="container-fluid ">
   
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
        <ul class="nav justify-content-center  pl-3" id="choices">
          <li class="nav-item">
            <a class="nav-link active" href="index.php" style="color: white;">Home</a>
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
            <a class="nav-link" href="user.php" style="color: white;">Users</a>
          </li>

        </ul>
    </div>


  </div>
</nav>

    <div class="banner-area">
        <div class="content-area">
           <div class="content">
              <h1 class="animate__animated animate__backInLeft">UPANG HUB</h1>
              <p class="animate__animated animate__backInRight">The accuracy you always needed</p>
           </div>
        </div>
    </div>

  <div class="bg2" >
    <div class="container">
  <div class="row">
    <div class="col-sm-12 d-flex justify-content-left">
      <h1>ABOUT US</h1>
    </div>

    <div class="col-sm-12 d-flex justify-content-left">
      <p>Enrolling in PHINMA UPang gives you the privilege of having excellent
         education in a vibrant community closer to home. Students are equipped with skills and knowledge that
          are relevant and in line with national-level education standards to make them competitive, no matter where they go to.

      </p>
    </div>
   

  </div>
</div>
  </div>



<!-- LOGO HOVER -->    
   
  <div class="bg3" >
    <div class="container">
  <div class="row">
      <center><h4>Powered by</h4></center>

    <div class="col-sm-4 d-flex justify-content-center">
       <img src="assets/logo2.png">
    </div>

    <div class="col-sm-4 d-flex justify-content-center">
       <img src="assets/logo3.png">
    </div>

  <div class="col-sm-4 d-flex justify-content-center">
      <img src="assets/logo1.png" style="height: 160px">
  </div>

  </div>
</div>
  </div>
<!-- END -->  

<footer class="bg-light text-center text-lg-start">
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <script type="text/javascript">
      const parallax = 3;
      const container = document.querySelector(".banner-area");

      window.addEventListener("scroll", () => {
        console.log("Scrolling");
        container.style.setProperty(
          "background-position-y",
          `${(window.scrollY / parallax) * -1}px`
        );
      });

    </script>
    <script>
      Swal.fire({
  title: 'UPang Hub',
  text: 'Welcome to UPang Hub Page',
  imageUrl: 'assets/customizedlogo.png',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
  closeOnClickOutside: false,
  allowOutsideClick: false,
  timer: 5000,
  
})
    </script>
    <script src="main.js"></script>
</html>