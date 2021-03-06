<?php include 'conn.php';?>
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
				<a class="navbar-brand" href="#">Locator</a>
					
						
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
	
	<ul class="nav menu">
		<li class="active"><a href="home.php"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-university">&nbsp;</em> Admin <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Staff
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Admin
					</a></li>
					
				</ul>
			</li>
			
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li><a href="#">Search Result</a></li>
			</ol>
		</div>
		<div class="container">
                <div class="one-half last">
    <div class="heading_bg">
      <h2>Staff Info</h2>
    </div>
    <form class="TTWForm" method="post">
    
 					<div class="row">
                    
                      <div class="col-md-6 form-group">
                      
                        <div class="col-md-6">
                          <select class="form-control mb-md" name="status">
                       		<option>Miss.</option>
                            <option>Mrs.</option>
                            <option>Mr.</option>
                            <option>Dr.</option>
                            <option>Prof.</option>
                            
                          </select>
                        </div>
                      </div>
                       <div class="col-md-6 form-group">
                        <div class="col-md-6">
                          <select class="form-control mb-md" name="sch">
                           	 <option>SOC</option>
                              <option>SOS</option>
                              <option>SEMS</option>
                              <option>SEET</option>
                              <option>SET</option>
                              <option>SHHT</option>
                              <option>SMAT</option>
                              <option>SAAT</option>
                            
                          </select>
                         
                        </div>
                      </div>
                      </div>
                      <div class="row">
                    
                      <div class="col-md-6 form-group">
                      
                        <div class="col-md-6">
                          <input class="form-control mb-md" name="firstname"  type="text" placeholder="First name">
                        </div>
                      </div>
                       <div class="col-md-6 form-group">
                        <div class="col-md-6">
                          <input class="form-control mb-md" name="lastname"  type="text" placeholder="lastname">
                        </div>
                      </div>
                      </div>
                       <div class="row">
                    
                      <div class="col-md-6 form-group">
                      
                        <div class="col-md-6">
                          <input class="form-control mb-md" name="dept"  type="text" placeholder="Department">
                        </div>
                      </div>
                       <div class="col-md-6 form-group">
                        <div class="col-md-6">
                          <input class="form-control mb-md" name="phone"  type="tel" placeholder="Phone no">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                   
                      <div class="col-md-6 form-group">
                      
                        <div class="col-md-6">
                          <input class="form-control mb-md" name="location"  type="text" placeholder="Location">
                        </div>
                      </div>
                       <div class="col-md-6 form-group">
                       
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
      </div>
    </form>

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