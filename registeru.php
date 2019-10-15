<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detect</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.map {
			width: 100%;
			height: 300px;
			background-color: #222;
			background-image: url(images.jpg);
			background-size: cover;
		}
		.panel {
			box-shadow: 0px 1px 10px 3px rgba(34, 34, 34, 0.05)
		}
		.panel-body {
			background: #fff;
		}
		.panel-body p {
			color: #30A5FF !important;
			font-weight: 500 !important;
		}
		.navbar {
			background: #30A5FF;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#">Locator</a>
					
						
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search" method="post">
		
		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="home.php">home</a></li>
				<li><a href="signin.php">sign in</a></li>
			</ol>
		</div>
		<br>
			
		
<?php
$error="";
if (array_key_exists('submit', $_POST)) {
	 if (! $_POST['email']) {
	$error = "Email can't be empty <br> ";
	}if (! $_POST['pass']) {
	$error .= "Password can't be empty  <br>";
	}if (! $_POST['phone']) {
		$error .= "Phone number can't be empty  <br>";
	}if (! $_POST['firstname']) {
		$error .= "Firstname can't be empty  <br>";
	}if (! $_POST['last']) {
		$error .= "Lastname can't be empty  <br>";
	}if (! $_POST['add']) {
		$error .= "User's address can't be empty  <br>";
	}if ($error != "") {
		$error= "There were error(s) in your form  <br> " .$error ;
		echo "<div class='row justify-content-center'>
		<div class='col-md-12'>
		<div class='row'>
			<div class='col-lg-7'>
				<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em>".$error."<a href='#' class='pull-right'></a></div>
			</div>
		</div>
	</div>
	</div>";
	}else{
		$email=mysqli_real_escape_string($conn,$_POST['email']);
	   	$pass=mysqli_real_escape_string($conn,$_POST['pass']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $dept=mysqli_real_escape_string($conn,$_POST['dept']);
        $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
        $last=mysqli_real_escape_string($conn,$_POST['last']);
        $matric=mysqli_real_escape_string($conn,$_POST['matric']);
        $add=mysqli_real_escape_string($conn,$_POST['add']);


		$query="INSERT INTO user(Email,Password,Firstname,Lastname,Phone_number,Address,Department,Matric_no) VALUES('$email','$pass','$firstname','$last','$phone','$add','$dept','$matric')";
		$result=mysqli_query($conn,$query); header("location:admin.php");
		if ($result) {
			echo "<div class='row justify-content-center'>
		<div class='col-md-12'>
		<div class='row'>
			<div class='col-lg-7'>
				<div class='alert bg-success' role='alert'> User details successfully registered <a href='#' class='pull-right'><em class='fa fa-lg fa-close'></em></a></div>
			</div>
		</div>
	</div>
	</div>";
 header("location:signin.php");
		}else{
			$error .= "User's details isn't successfully submitted<br>";
			echo "<div class='row justify-content-center'>
		<div class='col-md-12'>
		<div class='row'>
			<div class='col-lg-7'>
				<div class='alert bg-danger' role='alert'><em >&nbsp;</em> $error</div>
			</div>
		</div>
	</div>
	</div>";
		}
	}
}


?>
		<div class="container">
                <div class="one-half last">
    <div class="heading_bg">
     <legend><h2>Register your details</h2>
     	       <h5 style="color:red"><i>You need to register your details before you can access this site!</i></h5>
     </legend> 
    </div>

    <form class="TTWForm" method="post">
    
                      <div class="row">
                    
                      <div class="col-md-6 form-group">
                      
                        <div class="col-md-6">
                          <input class="form-control mb-md" name="email"  type="text" placeholder="Email" required="required">
                        </div>
                      </div>
                       <div class="col-md-6 form-group">
                       <div class="col-md-6">
						<input class="form-control mb-md" name="pass"  type="password" placeholder="Password" required="required">
						</div>
                      </div>
                      </div>
                       <div class="row">
                    
                      <div class="col-md-6 form-group">
                       <div class="col-md-6">
                          <input class="form-control mb-md" name="phone"  type="text" placeholder="Phone_number" required="required">
                        </div>
                        
                      </div>
                       <div class="col-md-6 form-group">
                        <div class="col-md-6">
                          <input class="form-control mb-md" name="dept"  type="text" placeholder="Department">
                        </div>
                      </div>
                      </div>
                          <div class="row">
                    
                      <div class="col-md-6 form-group">
                      
                        <div class="col-md-6">
                          <input class="form-control mb-md" name="firstname"  type="text" placeholder="First name" required="required">
                        </div>
                      </div>
                       <div class="col-md-6 form-group">
                       <div class="col-md-6">
						<input class="form-control mb-md" name="last"  type="text" placeholder="Lastname" required="required">
						</div>
                      </div>
                      </div>

                      <div class="row">
                   
                      <div class="col-md-6 form-group">
                      
                        <div class="col-md-6">
                          <input class="form-control mb-md" name="matric"  type="text" placeholder="Matric number">
                        </div>
                      </div>
                       <div class="col-md-6 form-group">
                       <div class="col-md-6">
                          <input class="form-control mb-md" name="add"  type="text" placeholder="Address" required="required">
                        </div>
                      </div>
                      </div>
  
      <div class="row">
        <div class="col-md-4"></div>
      <div class="col-md-8">
      <div id="form-submit">
        <input value="Submit" type="submit" name="submit">
      </div>
  </div>
</div>
</form>
</div>
     

		<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
</div>
</div>
</nav>
</body>
</html>