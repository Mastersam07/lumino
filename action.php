<?php 
	require 'helpers.php';
	$help = new helpers;
	$help->setId($_REQUEST['id']);
	$help->setLat($_REQUEST['lat']);
	$help->setLng($_REQUEST['lng']);
	$status = $help->updateStaffsWithLatLng();
	if($status == true) {
		echo "Updated...";
	} else {
		echo "Failed...";
	}
 ?>