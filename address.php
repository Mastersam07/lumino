<?php
public function getAllcollegesLatLng(){
	$sql= "Select * from $this -> staff";
	$stmt = $this ->conn->prepare($sql);
	$stmt= execute();
	return $stmt -> fetchAll(PDO::FETCH_ASSOC);

}

?>