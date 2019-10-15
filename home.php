<?php include("conn.php") ;?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detect</title>
	<script type="text/javascript" src="googlemap.js"></script>
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
		#map {
			width: 100%;
			height: 300px;
			border: 1px solid #30A5FF;
		
		}
		#data, #allData {
			display: none;
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
		table.table thead tr th, table.table tbody tr td{
			color: black;
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
		<?php

		$staffs = [];
		$found_result = 0;
		$error = '';
if (array_key_exists('search', $_POST)) {

	if ( ! $_POST['search']) {
		$error= "name can't be empty";
	}else{
		$search_str_arr = explode(" ", $_POST['search']);

		$query = "SELECT * FROM `staff` WHERE `Firstname` LIKE '%".mysqli_real_escape_string($conn,$search_str_arr[0])."%'";
		$array_len = count($search_str_arr);
		for($i = 0;$i < $array_len; $i++){
			if($i == 0) continue;
			$query .= " OR `Firstname` LIKE '%".mysqli_real_escape_string($conn,$search_str_arr[$i])."%'";
		}

		$result = mysqli_query($conn,$query);
		$found_result = mysqli_affected_rows($conn);
		$count = 0;
		while($row = mysqli_fetch_assoc($result)){
			$staffs[$count]['name'] = $row['status']. " " .$row['Firstname']. " " .$row['Lastname'] ;
			$staffs[$count]['dept'] = $row['Department'];
			$staffs[$count]['sch'] = $row['School'];
			$staffs[$count]['phone'] = $row['Phone_number'];
			$staffs[$count]['location'] = $row['Location'];
			$count++;
		}
		// print_r($staffs);
	}
}
?>
		<form method="post" role="search">
			<div class="form-group">
				<input type="text" id="search_input" class="form-control" name="search" placeholder="Search">
			</div>
		</form>
	<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	# code...
}

	?>
	<ul class="nav menu">
		<li class="active"><a href="home.php"><em class="fa fa-home">&nbsp;</em> Home</a></li>
		<li class=""><a href="login.php"><em class="fa fa-user">&nbsp;</em> Admin</a></li>
		<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-university">&nbsp;</em>School <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="school_name" href="#" school_name='SOC'>
						<span class="fa fa-arrow-right">&nbsp;</span> SOC
					</a></li>
					<li><a class="school_name" href="#" school_name='SOS'>
						<span class="fa fa-arrow-right">&nbsp;</span> SOS
					</a></li>
					<li><a class="school_name" href="#" school_name='SEMS'>
						<span class="fa fa-arrow-right">&nbsp;</span> SEMS
					</a></li>
					<li><a class="school_name" href="#" school_name='SMAT'>
						<span class="fa fa-arrow-right">&nbsp;</span> SMAT
					</a></li>
					<li><a class="school_name" href="#" school_name='SEET'>
						<span class="fa fa-arrow-right">&nbsp;</span> SEET
					</a></li>
					<li><a class="school_name" href="#" school_name='SHHT'>
						<span class="fa fa-arrow-right">&nbsp;</span> SHHT
					</a></li>
					<li><a class="school_name" href="#" school_name='SAAT'>
						<span class="fa fa-arrow-right">&nbsp;</span> SAAT
					</a></li>
					<li><a class="school_name" href="#" school_name='SET'>
						<span class="fa fa-arrow-right">&nbsp;</span> SET
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-building-o">&nbsp;</em> Department <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="department_name" href="#" department_name='Computer science'>
						<span class="fa fa-arrow-right">&nbsp;</span> Computer science
					</a></li>
					<li><a class="department_name" href="#" department_name='Information tech'>
						<span class="fa fa-arrow-right">&nbsp;</span> Information tech
					</a></li>
					<li><a class="department_name" href="#" department_name='Information system'>
						<span class="fa fa-arrow-right">&nbsp;</span> Information system
					</a></li>
					<li><a class="department_name" href="#" department_name='Cyber security'>
						<span class="fa fa-arrow-right">&nbsp;</span> Cyber security
					</a></li>
					<li><a class="department_name" href="#" department_name='Software Engineering'>
						<span class="fa fa-arrow-right">&nbsp;</span> Software Engineering
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
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Search Results</h3>
			</div>
		</div><!--/.row-->
		<div class='row justify-content-center'>
			<div class='col-md-7'>
				<div class='row'>
					<div class='col-lg-12'>
		<?php 
		if($error != ''){
			echo "	<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> $error<a href='#' class='pull-right'><em 
						class='fa fa-lg fa-close'></em></a>
					</div>";
		}else if($error == '' && $found_result > 0){
			echo "	<div class='alert bg-success' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> Your yielded $found_result results <a href='#' class='pull-right'><em 
						class='fa fa-lg fa-close'></em></a>
					</div>";
		}

		?>
					</div>
				</div>
			</div>
		</div>
	
	
		<div class="row justify-content-center">
			<div class="col-md-7">
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay">Personal Information</div>
					<div class='alert bg-success alert_message' style="display: none;" role='alert'> <a href='#' class='pull-right'><em 
						class='fa fa-lg fa-close'></em></a>
					</div>
					<div class="panel-body">
						<table class="table table-responsive">
							<thead>
								<tr>
									<th>Full Name</th>
									<th>Department</th>
									<th>School</th>
									<th>Phone no</th>
									<th>Office Address</th>
								</tr>
							</thead>
							<tbody >
								<?php
									foreach($staffs as $staff):
								?>
									<tr>
										<td>
											<?php echo $staff['name']; ?>
										</td>
										<td>
											<?php echo $staff['dept']; ?>
										</td>
										<td>
											<?php echo $staff['sch']; ?>
										</td>
										<td>
											<?php echo $staff['phone']; ?>
										</td>
										<td>
											<?php echo $staff['location']; ?>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<!-- <p><b>Full Name:</b> <?php if (isset($name)) {echo "$name"; } ?></p>
						<p><b>Department:</b> <?php if (isset($dept)) {echo "$dept"; } ?> </p>
						<p><b>School:</b> <?php if (isset($sch)) {echo "$sch"; } ?></p>
						<p><b>Phone no:</b> <?php if (isset($phone)) {echo "$phone"; } ?></p> -->
					</div>
				</div>
				<!-- <div class="panel panel-blue">
					<div class="panel-heading dark-overlay">Office Location</div>
					<div class="panel-body">
						<p><?php if (isset($location)) {echo "$location"; } ?></p>
					</div>
				</div> -->
			</div>
			<div class="col-md-5">
				<center>Access google map</center>
				<?php 
					require 'helpers.php';
					$help = new helpers;
					$coll = $help->getStaffsBlankLatLng();
					$coll = json_encode($coll, true);
					echo '<div id="data">' . $coll . '</div>';

					$allData = $help->getAllStaffs();
					$allData = json_encode($allData, true);
					echo '<div id="allData">' . $allData . '</div>';			
		 		?>
				<div id="map"></div>
			</div>
		</div><!--/.row-->
	</div><!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(document).ready(function(){
			$(".school_name").click(function(e){
				e.preventDefault();
				$('.alert_message').hide().text('');
				var school_name = $(this).attr('school_name'), search_input = $('#search_input').val();
				console.log(school_name);
				$.ajax({
					url: 'http://localhost/lumino/ajax.php',
					method: 'post',
					data: {school_name: school_name,search_input:  $('#search_input').val()},
					success: function(data){
						var staffs = JSON.parse(data), staff_html = '';
						if(staffs.status == 1){
							// console.log(staffs.data);
							$('.alert_message').text(staffs.data.length + ' results was/were found');
							$('.alert_message').show();
							for(key in staffs.data){
								console.log(staffs.data[key]);
								staff_html += '<tr>' +
										'<td>' + staffs.data[key].name + '</td>' +
										'<td>' + staffs.data[key].dept + '</td>' +
										'<td>' + staffs.data[key].sch + '</td>' +
										'<td>' + staffs.data[key].phone + '</td>' +
										'<td>' + staffs.data[key].location + '</td>' +
									'</tr>';
							}
							console.log(staff_html);
							$('tbody').html(staff_html);
						}
					},
					error: function(){
						console.log('Error');
					}
				})
			})

			$(".department_name").click(function(e){
				e.preventDefault();
				var department_name = $(this).attr('department_name');
				console.log(department_name);
				$.ajax({
					url: 'http://localhost/lumino/ajax.php',
					method: 'post',
					data: {department_name: department_name,search_input:  $('#search_input').val()},
					beforeSend: function(){
						console.log('Yellooo');
					},
					success: function(data){
						var staffs = JSON.parse(data), staff_html = '';
						if(staffs.status == 1){
							// console.log(staffs.data);
							$('.alert_message').text(staffs.data.length + ' results was/were found');
							$('.alert_message').show();
							for(key in staffs.data){
								console.log(staffs.data[key]);
								staff_html += '<tr>' +
										'<td>' + staffs.data[key].name + '</td>' +
										'<td>' + staffs.data[key].dept + '</td>' +
										'<td>' + staffs.data[key].sch + '</td>' +
										'<td>' + staffs.data[key].phone + '</td>' +
										'<td>' + staffs.data[key].location + '</td>' +
									'</tr>';
							}
							console.log(staff_html);
							$('tbody').html(staff_html);
						}
					},
					error: function(){
						console.log('Error');
					}
				})
			})
		})
	</script>

	<script async defer
    				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYNoHXbutlMWtI78Qgf_5efwQy7ECLUq8&callback=loadMap">
				</script>
	
</body>
</html>
