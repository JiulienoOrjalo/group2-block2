<!doctype html>
<html lang="en">
<title>Tuition Fee</title>
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
            <a class="nav-link " href="#" style="color: white;">Courses Offered</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Computation of Grades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#" style="color: white;">Computation of Tuition Fee </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Gallery</a>
          </li>
         
        </ul>
    </div>
  </div>
</nav>

   
    <div class="background" >
    <div class="container">
  <div class="row">
    <div class="container py-5"> 
       <br><br><br><br><br><br>
        <div class="card">  
            <div class="card-header bg-success text-white">  
                <h4 class="text-uppercase text-center">Tuition Fee</h4>  
            </div>  
            <div class="card-body">  
                <form>  
                    <h5>Miscellaneous Fee</h5>
                    <div class="form-row">
                      <div class="col-md-6"><br>  
                            <input type="number" placeholder="Guidance and Counselling Fee" class="form-control" id="guidance_fee" name="guidance_fee" required="" />  
                        </div> 

                        <div class="col-md-6"><br>   
                            <input type="number" placeholder="Library and Audio Visual Dvelopment Fee" class="form-control" id="library_fee" name="library_fee" required="" />  
                        </div> 

                        <div class="col-md-6"> <br>  
                            <input type="number" placeholder="Medical and Dental Fee" class="form-control" id="medical_fee" name="medical_fee" required="" />  
                        </div> 

                        <div class="col-md-6"><br>   
                            <input type="number" placeholder="Sports Development and Other Fees" class="form-control" id="sports_fee" name="sports_fee" required="" />  
                        </div>  
                    </div>  



                     <div class="form-row">  
                        <div class="col-md-6">  
                           <br><h5><label>Laboratory Fees</label>  </h5>
                            <input type="number" placeholder="Open Lab Fee" class="form-control" id="laboratory_fee" name="laboratory_fee"  />  
                        </div>  
                        <div class="col-md-6">  
                           <br> <h5><label>OTHERNTFs</label>  </h5>
                            <input type="number" placeholder="Non-Academic Fund" class="form-control" id="nonacad_fee" name="nonacad_fee"/>  
                        </div>  
                    </div>  


                    <br><h5>Other School Fees</h5>
                    <div class="form-row">

                        <div class="col-md-6"><br>  
                            <input type="number" placeholder="Insurance Fee" class="form-control" id="insurance_fee" name="guidance_fee" required="" />  
                        </div> 

                        <div class="col-md-6"><br>   
                            <input type="number" placeholder="AV & Internet" class="form-control" id="internet_fee" name="internet_fee" required="" />  
                        </div> 
                    </div>


                    <br><h5>Funds Held in Trust</h5>
                    <div class="form-row">
                        <div class="col-md-6"> <br>  
                            <input type="number" placeholder="Student Activity Fund" class="form-control" id="activity_fee" name="activity_fee" required="" />  
                        </div> 

                        <div class="col-md-6"><br>   
                            <input type="number" placeholder="Publication Fee" class="form-control" id="publication_fee" name="publication_fee" required="" />  
                        </div>  

                        <div class="col-md-6"><br>   
                            <input type="number" placeholder="Student Organization Fee" class="form-control" id="org_fee" name="org_fee" required="" />  
                        </div>  
                    </div>  

                    <div class="form-row">  
                        <div class="col-md-6">  
                           <br><h5><label>Uniforms</label>  </h5>
                            <input type="number" placeholder="Corporate Uniform" class="form-control" id="uniform_fee" name="uniform_fee" required="" />  
                        </div>  
                        <div class="col-md-6">  
                           <br> <h5><label>Books</label>  </h5>
                            <input type="number" placeholder="Materials Fee" class="form-control" id="book_fee" name="book_fee"/>  
                        </div>  
                    </div>  

                    <br>
                     <div class="form-row">  
                        <div class="col-md-6">  
                           <br><h5><label>Add:</label>  </h5>
                            <input type="number" placeholder="Additional Fees" class="form-control" id="add_fee" name="laboratory_fee" />  
                        </div>  
                        <div class="col-md-6">  
                           <br> <h5><label>Less:</label>  </h5>
                            <input type="number" placeholder="PHINMA Scholarship" class="form-control" id="scholarship" name="scholarship" />
                        </div>  
                    </div>  


                        
                  

                    <center><div class="col-md-6"></center> 
                        <br><br>
                            <input type="number" placeholder="TOTAL TUITION & FEES" class="form-control" id="nonacad_fee" name="nonacad_fee" disabled="TRUE" />  
                        </div>   
                    </div>  
                    <div style="margin-top:15px;">  
                        <button type="reser" class="btn btn-danger rounded-0">Clear</button>  
                        <button type="submit" class="btn btn-primary rounded-0">Compute</button>
                    </div>  
                </form>  
            </div>  
        </div>  
    </div>  
  </div>
</div>
</div>
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