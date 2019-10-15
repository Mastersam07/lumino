
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detect</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsd,elivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">
    <?php 
include 'conn.php';
 $error = '';
if (array_key_exists("submit", $_POST)) {
    $error="";
    if(! $_POST['email']){
        $error="email address cant't be empty<br>";
    }
    if (! $_POST['password']) {
        $error .="password can't be empty<br>";
    }
    if($error !=""){
        $error="There were error(s) in your login details:<br>".$error;
        echo "<div class='row justify-content-center'>
		<div class='col-md-12'>
		<div class='row'>
		<div class='col-lg-4'></div>
			<div class='col-lg-4'>
				<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> $error<a href='#' class='pull-right'></a></div>
			</div>
				<div class='col-lg-4'></div>
		</div>
	</div>
	</div>";
    }
    else{
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
       $query="SELECT * FROM `user` WHERE Email='$email' AND Password='$password' ";
       $result=mysqli_query($conn,$query);
       $row=mysqli_fetch_array($result);
        $email=$row['Email'];
        $password=$row['Password'];
       

       if ($email == $_POST['email'] AND $password == $_POST['password']) {
       
           header("location:home.php");
    }else{
    	echo "<div class='row justify-content-center'>
		<div class='col-md-12'>
		<div class='row'>
		<div class='col-lg-4'></div>
			<div class='col-lg-4'>
				<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> sorry you can't login, your matric number and password doesn't match/exists<a href='#' class='pull-right'></a></div>
			</div>
				<div class='col-lg-4'></div>
		</div>
	</div>
	</div>";
  
    }
  }
}
 ?>
<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Sign in</div>
				<div class="panel-body">
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<br><label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div><br>
							<input type="submit" name="submit" value="Login" class="btn btn-primary"><span style="float: right;">New user?<a href="registeru.php"> register now</a></span>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
    
        
                    </form>
                </div>
            </div>
        </div>
    </div>-->
    <?php
    	if($error != ''){
    		$error = '';
    	}
    ?>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>

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
		  html{
     	background: url() no-repeat center center fixed ;
     	-webkit-background-size:cover;
     	-moz-background-size:cover;
     	-o-background-size:cover;
     	background-size: cover;
     }
     body{
     	background: none;
     }
	</style>
</head>
<body>
	

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