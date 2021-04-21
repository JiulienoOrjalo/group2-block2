<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPang Hub</title>
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
					<li class="active"><a class="" href="CourseOffered.php">CITE</a></li>
					<li><a class="" href="CMA.php">CMA</a></li>
					<li><a class="" href="CEA.php">CEA</a></li>
					<li><a class="" href="CHS.php">CHS</a></li>
					<li><a class="" href="CSS.php">CSS</a></li>
					<li><a class="" href="SHS.php">SHS</a></li>
					<li><a class="" href="Admission.php">Admission Requirements</a></li>	
	</li>
		</ul></ul>
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
		</div>
		<div class="row">
			<div class="col-lg-8">
				<h1 class="page-header"><p>College Programs of</p>College of Information Technology</h1>
			</div>
		</div>	

		<div class="jumbotron">
			<h3>Information Technology</h3>
			<p style="font-size: 15px;">The BS Information Technology program provides students with skills and knowledge needed in relevant emerging high-growth areas in the industry. Through our program, we train students with the development and management of contemporary areas such as cloud computing and applications, analytics and data science, artificial intelligence, and the Internet of Things. We use a curriculum based on inputs and guidance from practicing industry experts.</p>
		</div>
		<div class="jumbotron">
			<h3>Computer Science</h3>
			<p style="font-size: 15px;">The Bachelor of Science in Computer Science (BSCS) program is a four-year program that provides students with a broad understanding of key principles and important applications in the field of computing. The students will be exposed to new technologies and techniques, which they can apply to devise new ways of using computers and to improve computers as tools for various applications.</p>
		</div>


		
		
</body>
</html>