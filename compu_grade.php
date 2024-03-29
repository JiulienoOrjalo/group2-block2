<!doctype html>
<html lang="en">
<title>Grades</title>
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
      <a class="nav-link active" href="compu_grade.php" style="color: white;">Computation of Grades</a>
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
   
    <div class="background" >
    <div class="container">
  <div class="row">
    <div class="container py-5"> 
       <br><br><br><br>
        <div class="card">  
            <div class="card-header bg-success text-white">  
                <h4 class="text-uppercase text-center">Computation of Grades</h4>  
            </div>  
            <div class="card-body">  
                <form id="myForm">  
                    <h5>Please input your grades</h5>

                    <div class="container">
                        <div class="row">
                          <div class="col-sm-4 p-2">
                            <input type="number" placeholder="P1 Grade" class="form-control" id="p1grade" max="100" min="0" name="p1" required="" />
                          </div>
                          <div class="col-sm-4 p-2">
                            <input type="number" placeholder="P2 Grade" class="form-control" min="0" max="100" id="p2grade" name="p2" required="" />
                          </div>
                          <div class="col-sm-4 p-2">
                            <input type="number" placeholder="P3 Grade" class="form-control"  min="0" max="100" id="p3grade" name="p3" required="" />
                          </div>
                        </div>
                      </div>
                     <hr style="opacity: 0.1">
                      <h5>Average</h5>
                        <div class="container">
                        <div class="row">
                          <div class="col-sm-2 p-2">
                             <input type="number" placeholder="Average" class="form-control" id="average" name="avg" readonly="" />
                          </div>

                          <div class="col-sm-2 p-2">
                            <input type="text" placeholder="Grade Equivalent" class="form-control" id="equivalent" name="equivalent" readonly="" />
                          </div>
                          <div class="col-sm-4">
                            
                          </div>
                          <div class="col-sm-4">
                            
                          </div>
                        </div>
                      </div>
                    </div> 
                </form>  
                   <div style="margin: 20px; text-align: right;">  
                          <button onclick="clearbutt()" class="btn btn-danger rounded-0">Clear</button>  
                          <button onclick="calc()" class="btn btn-primary rounded-0">Compute</button>
                    </div>  
                  <script>

   function calc(){
                       var p1 = parseFloat(document.getElementById("p1grade").value);
                       var p2 = parseFloat(document.getElementById("p2grade").value);
                       var p3 = parseFloat(document.getElementById("p3grade").value);

                        var ave = (p1 * 0.33) + (p2 * 0.33) + (p3 * 0.34);

                        document.getElementById("average").value = ave.toFixed(2);

                        if(ave >=96.0 && ave<=100){
                          document.getElementById("equivalent").value = 1.00;
                          swal("","STUDENT PASSED!", "success");
                        }
                        else if(ave >=91.5 && ave <=95.9){
                          document.getElementById("equivalent").value = 1.25;
                          swal("","STUDENT PASSED!", "success");
                        }
                        else if(ave >=87.0 && ave <=91.4){
                          document.getElementById("equivalent").value = 1.50;
                          swal("","STUDENT PASSED!", "success");
                        }
                        else if(ave >= 82.5 && ave <= 86.9){
                          document.getElementById("equivalent").value = 1.75;
                          swal("","STUDENT PASSED!", "success");
                        }
                        else if(ave >= 78.0 && ave <= 82.4){
                          document.getElementById("equivalent").value = 2.00;
                          swal("","STUDENT PASSED!", "success");
                        }
                        else if(ave >= 73.5 && ave <= 77.9){
                          document.getElementById("equivalent").value = 2.25;
                          swal("", "STUDENT PASSED!", "success");
                        }
                        else if(ave >= 69.0 && ave <= 73.4){
                          document.getElementById("equivalent").value = 2.50;
                          swal("", "STUDENT PASSED!", "success");
                        }
                        else if(ave >= 64.5 && ave <= 68.9){
                          document.getElementById("equivalent").value = 2.75;
                          swal("", "Your student PASSED!", "success");
                        }
                        else if(ave >= 60.0 && ave <=64.4){
                          document.getElementById("equivalent").value = 3.00;
                          swal("", "STUDENT PASSED!", "success");
                        }
                        else if(ave >= 0.0 && ave <= 59.9){
                          document.getElementById("equivalent").value = 5.00;
                          swal("", "STUDENT FAILED!", "warning");
                        }
                  }

                  function clearbutt(){
                     document.getElementById("myForm").reset();
                  }
                    </script>
            </div>  
        </div>  
    </div>  
  </div>
</div>
</div><br><br>
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

    <script src="main.js"></script>

</html>