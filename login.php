 <?php 
include 'conn.php';
if (array_key_exists("submit", $_POST)) {
    $error="";
    if(! $_POST['username']){
        $error="username address cant't be empty<br>";
    }
    if (! $_POST['password']) {
        $error .="password can't be empty<br>";
    }
    if($error !=""){
        $error="There were error(s) in your login details:<br>".$error;
		echo "<div class='row justify-content-center'>
		<div class='col-md-12'>
		<div class='row'>
		<div class='col-md-4'></div>
			<div class='col-lg-4'>
				<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em>$error<a href='#' class='pull-right'></a></div>
			</div>
			<div class='col-md-4'></div>
		</div>
	</div>
	</div>";

    }else{
        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
       $query="SELECT * FROM `admin` WHERE username='$username' AND password='$password' ";
       $result=mysqli_query($conn,$query);
       $row=mysqli_fetch_array($result);
        $username=$row['username'];
        $password=$row['password'];

       if ($username == $_POST['username'] AND $password == $_POST['password']) {
       
           header("location:admin.php");
    }else{
    	echo "<div class='row justify-content-center'>
		<div class='col-md-12'>
		<div class='row'>
		<div class='col-md-4'></div>
			<div class='col-lg-4'>
				<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em>'sorry you can't login, your matric number and password doesn't match/exists'<a href='#' class='pull-right'></a></div>
			</div>
			<div class='col-md-4'></div>
		</div>
	</div>
	</div>";
    }
  }
}
 
?>

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
			color: #333 !important;
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
				<a class="navbar-brand" href="#">Location Detector</a>
					
						
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
	
	<ul class="nav menu">
		<li class="active"><a href="home.php"><em class="fa fa-home">&nbsp;</em> Home</a></li>
		<li class=""><a href="login.php"><em class="fa fa-user">&nbsp;</em> Admin</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-university">&nbsp;</em> School <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> SOC
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> SAAT
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> SOS
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> SEMS
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> SET
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> SMAT
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> SHET
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-building-o">&nbsp;</em> Department <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Computer science
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Information tech 
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Information system
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Cyber security
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Software Engineering
					</a></li>
				</ul>
			</li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div><br>
							<input type="submit" name="submit" value="Login" class="btn btn-primary"></fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	

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