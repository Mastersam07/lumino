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
        <form role="search" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
    
    <ul class="nav menu">
        <li class="active"><a href="home.php"><em class="fa fa-home">&nbsp;</em> Home</a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-user">&nbsp;</em> Admin<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="Staff.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add Staff
                    </a></li>
                    <li><a class="" href="register.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add Admin
                    </a></li>
                    
                </ul>
            </li>
            <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div><!--/.sidebar-->
    <?php

if (array_key_exists('submit', $_POST)) {
    $error="";
     if (! $_POST['username']) {
    $error  = "Username can't be empty <br> ";
    }if (! $_POST['password']) {
    $error .= "Password can't be empty  <br>";
    }if ($error != "") {
        $error= "There were error(s) in your form  <br> " .$error ;
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
        $query="INSERT INTO admin(username,password) VALUES('$username','$password')";
        $result=mysqli_query($conn,$query);
        if ($result) {
        echo "<div class='row justify-content-center'>
        <div class='col-md-12'>
        <div class='row'>
        <div class='col-md-4'></div>
            <div class='col-lg-4'>
                <div class='alert bg-success' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em>Admin details successfully registered<a href='#' class='pull-right'></a></div>
            </div>
            <div class='col-md-4'></div>
        </div>
    </div>
    </div>";
    
 header("location:home.php");
        }else{
            echo "<div class='row justify-content-center'>
        <div class='col-md-12'>
        <div class='row'>
        <div class='col-md-4'></div>
            <div class='col-lg-4'>
                <div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em>Admin's details not successfully registered<a href='#' class='pull-right'></a></div>
            </div>
            <div class='col-md-4'></div>
        </div>
    </div>
    </div>";
        }
    }
}


?>
    <br>    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">

            <div class="login-panel panel panel-default">
                <div class="panel-heading">Register Admin</div>
                <div class="panel-body">
                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password">
                            </div>
                            <input value="Register" class="btn btn-primary" type="submit" name="submit">
                        </fieldset>
                            
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->    
</div>
</div>
</nav>
</body>
</html>