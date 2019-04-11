<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'jobseeker');

	// initialize variables
	        $Job_Title = "";
			$Company = "";
			$Email = "";
			$Job_Type = "";
			$Location = "";
			$Job_Description = "";
	        $job_no = 0;
	        $update = false;

	

	if (isset($_POST['update'])) {
	    $job_no = $_POST['job_no'];
	    $Job_Title = $_POST['Job_Title'];
		$Company = $_POST['Company'];
		$Email = $_POST['Email'];
		$Job_Type = $_POST['Job_Type'];
		$Location = $_POST['Location'];
		$Job_Description = $_POST['Job_Description'];
		mysqli_query($db, "UPDATE jobdata SET job_title = '$Job_Title', Company = '$Company', Email = '$Email', Job_type = '$Job_Type', Location = '$Location', Job_description = '$Job_Description' WHERE job_no=$job_no");
		
		$_SESSION['message'] = "Address updated!"; 
		header('location: screen.php');
	}

if (isset($_GET['del'])) {
	$job_no = $_GET['del'];
	mysqli_query($db, "DELETE FROM jobdata WHERE job_no=$job_no");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: screen.php');
}


	$results = mysqli_query($db, "SELECT * FROM jobdata");


?>