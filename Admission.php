<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPangHub</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		body {
		  background: #f1f4f7;
		  padding-top: 60px;
		  font-size: 14px;
		  color: #444444;
		  font-family: "Montserrat", "", Helvetica, Arial, sans-serif; 
		}
		.profile-usertitle {
		  float: left;
		  text-align: left;
		  margin: 10px 0 0 12px; }
		 .profile-userpic img {
		  float: left;
		  margin: 10px 0px 0px 15px;
		  width: 50px;
		  height: 50px;
		  border-radius: 9999px !important; 
		}

  		.profile-sidebar {
		  padding: 10px 0;
		  padding-top: 60px;
		  border-bottom: 1px solid #e9ecf2; }
		  @media (min-width: 768px) {
		 .sidebar {
		    display: block;
		    position: fixed;
		    top: 60px;
		    bottom: 0;
		    left: 0;
		    z-index: 1000;
		    display: block;
		    margin: 0;
		    padding: 0;
		    overflow-x: hidden;
		    overflow-y: auto; 
		}

		  .navbar-header {
		    width: 100%; } }
		.sidebar ul.nav a:hover, .sidebar ul.nav li.parent ul li a:hover {
		  text-decoration: none;
		  background-color: #2e3e1b;
		  color: #fff; 
		}

		.sidebar ul.nav .active a, .sidebar ul.nav li.parent a.active, .sidebar ul.nav .active > a:hover, .sidebar ul.nav li.parent a.active:hover, .sidebar ul.nav .active > a:focus, .sidebar ul.nav li.parent a.active:focus {
		  color: #fff;
		  background-color: #2e3e1b; 
		}

		.sidebar ul.nav ul, .sidebar ul.nav ul li {
		  list-style: none;
		  list-style-type: none; 
		}

		.sidebar ul.nav li a {
		  height: 50px;
		  font-size: 15px;
		  line-height: 2em;
		  color: #444444;
		   }

		.sidebar ul.nav ul.children {
		  width: auto;
		  padding: 0;
		  margin: 0;
		  background: #f9f9f9; 
		}

		.sidebar ul.nav ul.children li a {
		  height: 40px;
		  background: #f1f4f7;
		  color: #444444;
		  }

		.sidebar ul.nav li.current a {
		  background-color: #009879;
		  color: #fff !important; 
		}

		.sidebar ul.nav li.parent ul li a {
		  border: none;
		  display: block;
		  padding-left: 30px;
		  line-height: 40px;
		  border-radius: 0; 
		}

		.sidebar ul.nav li.divider {
		  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
		  margin: 0px 0; }
		  .container-fluid{
		  	background-color: #2e3e1b;
		  }
		  .sidebar ul {
		  margin: 20px 0px; 
		}

		.sidebar form {
		  padding: 10px 0 0 0;
		  margin: 10px 10px 20px 10px; 
		}
		 .sidebar{
		  box-shadow: none;
		  background: #fff; 
		  display: block;
		  padding: 0;}
		  .divider, .clear{
		  clear: both; 
		}
		.navbar-header .navbar-brand{
		  color: #2e3e1b;
		  font-size: 25px;
		  font-weight: 500;
		  height: 108px;
		  padding-top: 25px; }

		.navbar-header .navbar-brand span{
		  color: white; 
		  text-transform: none;
		}
		 h1 {
		  font-weight: 300;
		  font-size: 40px;
		}
		p{
			font-weight: 300;
			font-size: 25px;
			
		}
		.jumbotron{
			margin-left: 20px;
			height: auto;
			width: 96%;
			background-color: rgba(0,0,0,0.1);
			padding: 5px;
			padding-left: 25px;
			padding-right: 20px;
		}
		.page-header{
			margin-left: 20px;
			margin-bottom: 10px;
			margin-top: 80px;
		}
		h3{
			color: #2e3e1b;
		}
		img{
			 height: 60px;
  			 width: auto;
			 margin-top: 32px;
			 float: left;
			 margin-right: 20px;
		}
		table{
			margin-top: 53px;
			color: white;


		}
		/*td{
			padding-top: 15px;
			padding-left: 10px;
			font-size: 17px;
			font-family: 'Roboto', sans-serif;
		}*/
		td a{
			color: white;
			font-family: 'Roboto', sans-serif;
			padding-top: 15px;
			padding-left: 20px;
			font-size: 17px;


		}
		td a:hover{
			color: white;
			text-decoration: none;
			background-color: #977a00;
 			border-bottom: 2px solid gold;
 			padding-top: 10px;
 			padding-bottom: 10px;
 			padding-left: 11px;
 			padding-right: 11px;



		}
		table .active{
 			 background-color: #977a00;
   			 border-bottom: 2px solid gold;
   			 padding-top: 10px;
 			padding-bottom: 10px;
 			padding-left: 11px;
 			padding-right: 11px;
 			
		}
		table .active:hover{
 			 background-color: #977a00;
   			 border-bottom: 2px solid gold;
   			 padding-top: 10px;
 			padding-bottom: 10px;
 			padding-left: 9px;
 			padding-right: 9px;


 
		}		
		h2{
			color: #977a00;
		}
		strong{
			color: #2e3e1b;
		}
		h3{
			color: #2e3e1b;
		}

	</style>
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="logoorig.png"><a class="navbar-brand"></a>
				<table>
			<td><a href="index.php">Home</a></td>
			<td><a href="compu_grade.php">Computation of Grades </a></td>
			<td><a href="tuition_calculator.php">Computation of Tuition Fee </a></td>
			<td><a href="CourseOffered.php"  class="active">Courses Offered </a></td>
			<td><a href="gallery.php">Gallery</a></td>
			<td><a href="user.php">User</a></td>
		</table>
			</div>
		</div>
		<div class="container-fluid" style="background-color: #977a00; height: 8px;">
			<div class="navbar-header">
				<a class="navbar-brand"></a>
			</div>
		</div>
	</nav>


	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="upang.jpeg" class="img-responsive" alt="Upanglogo">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-status">PHINMA University <br>Of Pangasinan</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<ul class="nav menu">
			<li style="text-transform: uppercase; font-size: 1.5vw; background-color: rgba(0,0,0,0.2); padding: 10px;">Departments</li>
					<li><a class="" href="CourseOffered.php">CITE</a></li>
					<li><a class="" href="CMA.php">CMA</a></li>
					<li><a class="" href="CEA.php">CEA</a></li>
					<li><a class="" href="CHS.php">CHS</a></li>
					<li><a class="" href="CSS.php">CSS</a></li>
					<li><a class="" href="SHS.php">SHS</a></li>
					<li class="active"><a class="" href="Admission.php">Admission Requirements</a></li>	
	</li>
		</ul></ul>
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
		</div>
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header">Admission Requirements</h1>
			</div>
		</div>	
		<div class="jumbotron">
			<h3>Official Enrollment Steps</h3>
			<h2>01</h2>
			<p><strong>MARKETING DEPARTMENT</strong><br>1.1 Fill up Student Permanent Record (SPR) & Info Sheet.<br>
				1.2 Verification of Required Documents (if available):
			<ol type="i">
				<li>Form 138</li>
				<li>NSO Birth Certificate</li>
				<li>For Handog Kaibigan (HK) Scholars</li>
				<ol type="I">
					<li>HK Certificate</li>
					<li>Certificate of Indigency</li>
				</ol>
			</ol>
		</p>
	</div>
		<div class="jumbotron">
			<h2>02</h2>
		<p><strong>Advising</strong>(For Transferees only)<br>2.1 Go to the Dean's Office (See Dean or Program Head) for subject crediting</p>
		</div>
		<div class="jumbotron">
		<h2>03</h2>
		<p><strong>Registrar & Finance</strong><br>3.1 Submission of Remaining requirements:
			<ol type="a">
				<li>Form 138</li>
				<li>NSO Birth Certificate</li>
				<li>For Handog Kaibigan (HK) Scholars</li>
				<ol type="i">
					<li>HK Certificate</li>
					<li>Certificate of Indigency</li>
				</ol>
			</ol><br>3.2 Downpayment<br>
			<ol type="i">
				<li> If enrollee has Slot Reservation:<br>Non-scholars: pay an additional P2,000.00 downpayment to get ID & 1 set of uniform For scholars: can pay P750.00 for ID or P1,500 for both ID & 1 set of uniform.</li>
				<li>If enrollee has NO Slot Reservation:<br>Non-scholars: pay P2,500.00 downpayment to get ID & 1 set of uniform For HK scholars: can pay P750.00 for ID or P1,500 for both ID & 1 set of uniform</li>
			</ol><br>3.3 Printing of Official Registration Form (ORF) or Temporary Registration Form (TRF) in case schedule is not yet ready.</p>
		</div>
		
</body>
</html>