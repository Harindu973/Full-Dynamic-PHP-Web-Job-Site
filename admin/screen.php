<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$job_no= $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM jobdata WHERE job_no=$job_no");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$Job_Title = $n['Job_Title'];
			$Company = $n['Company'];
			$Email = $n['Email'];
			$Job_Type = $n['Job_Type'];
			$Location = $n['Location'];
			$Job_Description = $n['Job_Description'];
		
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin page </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM jobdata"); ?>

<table>
	<thead>
		<tr>
			<th>Job No</th>
			<th>Job Title</th>
			<th>Company</th>
			<th>Email</th>
			<th>Job_Type </th>
			<th>Location</th>
			<th>Job_Description</th>
	        <th colspan="7">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['job_no']; ?></td>
			<td><?php echo $row['Job_Title']; ?></td>
			<td><?php echo $row['Company']; ?></td>
			<td><?php echo $row['Email']; ?></td>
			<td><?php echo $row['Job_Type']; ?></td>
			<td><?php echo $row['Location']; ?></td>
			<td><?php echo $row['Job_Description']; ?></td>
			</br>
			<td>
				<a href="screen.php?edit=<?php echo $row['job_no']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['job_no']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	
 

<form method="post" action="server.php" >

	<input type="hidden" name="job_no" value="<?php echo $job_no; ?>">

	<div class="input-group">
		<label>Job Title</label>
		<input type="text" name="Job_Title" value="<?php echo $Job_Title; ?>">
	</div>
	<div class="input-group">
		<label>company</label>
		<input type="text" name="Company" value="<?php echo $Company; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="Email" value="<?php echo $Email; ?>">
	</div>
	<div class="input-group">
		<label>Job_Type</label>
		<input type="text" name="Job_Type" value="<?php echo $Job_Type; ?>">
	</div>
	<div class="input-group">
		<label>Location</label>
		<input type="text" name="Location" value="<?php echo $Location; ?>">
	</div>
	<div class="input-group">
		<label>Job_Description</label>
		<input type="text" name="Job_Description" value="<?php echo $Job_Description; ?>">
	</div>
	<div class="input-group">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		
		<?php endif ?>
	</div>
</form>
<center>
<b id="logout"><a href="logout.php">Log Out</a></b>
</center>
</body>
</html>