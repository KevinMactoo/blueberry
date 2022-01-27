<?php

include (ROOT_PATH . "/app/helpers/validateAbout.php");
include (ROOT_PATH . "/app/helpers/formErrors.php");


$query = "SELECT * FROM aboutus WHERE id=1";

$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0 ) {
while ($row = mysqli_fetch_array($run_query)) {
	$aboutus_title = $row['title'];
	$aboutus_content = $row['content'];
	$aboutus_subtitle = $row['subtitle'];
}
}

if (isset($_POST['update'])) {
	require "../gump.class.php";
	$gump = new GUMP();
	$_POST = $gump->sanitize($_POST); 
	
	$gump->validation_rules(array(
		'title'    => 'required|max_len,120|min_len,5',
		'content' => 'required|max_len,10000|min_len,150',
	));
	$gump->filter_rules(array(
		'title' => 'trim|sanitize_string',
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
		$aboutus_title = $validated_data['title'];
		$aboutus_content = $validated_data['content'];
		$aboutus_subtitle = $validated_data['subtitle'];
		
	  
	$queryupdate = "UPDATE aboutus SET title = '$aboutus_title' , subtitle = '$aboutus_subtitle' , content='$aboutus_content' WHERE id=1 " ;
	$result = mysqli_query($conn , $queryupdate) or die(mysqli_error($conn));
	if (mysqli_affected_rows($conn) > 0) {
		$_SESSION['msg'] = 'About Us Updated Successfully';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . "/dashboard/aboutus.php");
        exit();
	}
	else {
		echo "<script>alert('Error! ..try again');</script>";
		
	}
	}
}

$sql = "SELECT * FROM booking ";
$result -> $mysqli -> query($sql);

// Fetch all
$result -> fetch_all(MYSQLI_ASSOC);

// Free result set
$result -> free_result();

?>