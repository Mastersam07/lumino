<?php

include("conn.php") ;
if(isset($_POST['school_name'])){
	$school_name = $_POST['school_name'];
	$query = "SELECT * FROM `staff` WHERE School='".mysqli_real_escape_string($conn,$school_name)."'";
	if($_POST['search_input']){
		$query .= " AND (Firstname LIKE '%".$_POST['search_input']."%' OR Lastname LIKE '%".$_POST['search_input']."%')";
	}

	$result = mysqli_query($conn,$query);
	$found_result = mysqli_affected_rows($conn);
	$count = 0;
	$staffs = [];	
	while($row = mysqli_fetch_assoc($result)){
		$staffs[$count]['name'] = $row['status']. " " .$row['Firstname']. " " .$row['Lastname'] ;
		$staffs[$count]['dept'] = $row['Department'];
		$staffs[$count]['sch'] = $row['School'];
		$staffs[$count]['phone'] = $row['Phone_number'];
		$staffs[$count]['location'] = $row['Location'];
		$count++;
	}

	echo json_encode(['status'=>1,'message'=>'School Name gotten successfully!','data'=>$staffs]);
}elseif(isset($_POST['department_name'])){
	$department_name = $_POST['department_name'];
	$query = "SELECT * FROM `staff` WHERE Department='".mysqli_real_escape_string($conn,$department_name)."'";

	$result = mysqli_query($conn,$query);
	$found_result = mysqli_affected_rows($conn);
	$count = 0;
	$staffs = [];	
	while($row = mysqli_fetch_assoc($result)){
		$staffs[$count]['name'] = $row['status']. " " .$row['Firstname']. " " .$row['Lastname'] ;
		$staffs[$count]['dept'] = $row['Department'];
		$staffs[$count]['sch'] = $row['School'];
		$staffs[$count]['phone'] = $row['Phone_number'];
		$staffs[$count]['location'] = $row['Location'];
		$count++;
	}

	echo json_encode(['status'=>1,'message'=>'Department Name gotten successfully!','data'=>$staffs]);
}

?>
