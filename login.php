<?php include('UP_server.php');?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
      <link rel="shortcut icon" href="assets/top icon 2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Upang Hub Login </title>
  </head>
  <body>
  

  <div class="half" style="margin-bottom: 0">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/images/upang.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center" >

          <div class="col-md-7">
            <center>
            <div class="form-block" style="box-shadow: 5px 5px 10px #888888; width: 80%; text-align: left; margin-bottom: 100px; ">
              <div class="text-center mb-5">
              <h3>LOG IN</h3>
              </div>

              <form action="UP_server.php" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                </div>

                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
                </div>
                

                <input type="submit" value="Log In" class="btn btn-block btn-primary" name="login">

              </form>
            </div>
          </center>
          </div>

        </div>
      </div>
    </div>

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
  </div>
    

    

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>