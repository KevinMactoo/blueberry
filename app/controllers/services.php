<?php

include (ROOT_PATH . "/app/helpers/validateServices.php");
include (ROOT_PATH . "/app/helpers/formErrors.php");


$query = "SELECT * FROM services WHERE id=1";

$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0 ) {
while ($row = mysqli_fetch_array($run_query)) {
	$services_recording = $row['recording'];
	$services_mixing = $row['mixing'];
	$services_booking = $row['booking'];
}
}

if (isset($_POST['update'])) {
	require "../gump.class.php";
	$gump = new GUMP();
	$_POST = $gump->sanitize($_POST); 
	
	$gump->validation_rules(array(
	));
	$gump->filter_rules(array(
		'recording' => 'trim|sanitize_string',
		));
	$validated_data = $gump->run($_POST);
	
	if($validated_data === false) {
		?>
		<center><font color="red" > <?php
		 $_SESSION['msg'] = $gump->get_readable_errors(true);
        $_SESSION['type'] = 'error'; ?> </font></center>
		<?php 
	}
	else {
		$services_recording = $validated_data['recording'];
		$services_mixing = $validated_data['mixing'];
		$services_booking = $validated_data['booking'];
		
	  
	$queryupdate = "UPDATE services SET recording = '$services_recording' , booking = '$services_booking' , mixing='$services_mixing' WHERE id= 1 " ;
	$result = mysqli_query($conn , $queryupdate) or die(mysqli_error($conn));
	if (mysqli_affected_rows($conn) > 0) {
		$_SESSION['msg'] = 'About Us Updated Successfully';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . "/dashboard/pages.php");
        exit();
	}
	else {
		echo "<script>alert('Error! ..try again');</script>";
		
	}
	}
}

//dd($services_mixing);
?>