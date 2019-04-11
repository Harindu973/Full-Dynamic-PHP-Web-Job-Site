<!DOCTYPE html>
<html>
	<head>
		<title>
			JobSeeker
		</title>

    <link rel="stylesheet" href="css/Style.css" type="text/css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

     <?php
$output = NULL;
$outputEmail = NULL;
$outputTitle = NULL;
$outputLogo = NULL;
$outputCompany = NULL;
$outputDate = NULL;
$outputDesc = NULL;
$outputLoc = NULL;
$outputType = NULL;



if(isset($_POST['submit'])){

    include_once 'dbcon.php';

 $search = $conn->real_escape_string($_POST['search']);
 $searchtype = $conn->real_escape_string($_POST['type']);
 $searchloc = $conn->real_escape_string($_POST['loc']);

 $resultSet = $conn->query("SELECT * FROM jobdata WHERE job_title = '$search' AND Job_Type = '$searchtype' AND Location = '$searchloc' ");
if($resultSet->num_rows > 0)
{
while($rows = $resultSet->fetch_assoc())
{
    $Info = $rows['Job_Description'];
    $Tit = $rows['Job_Title'];
    $Log = $rows['Logo']; 
    $Com = $rows['Company'];
    $Date = $rows['Date_Time'];
    $Email = $rows['Email'];
    $Jtype = $rows['Job_Type'];
    $Loc = $rows['Location'];

   // $output .= "$Info </br> $Tit </br> $Com </br>  $Email  </br> $Jtype </br>  $Loc </br> </br>";
    $outputEmail .= "$Email";
    $outputType .= "$Jtype";
    $outputTitle .= "$Tit";
    $outputLogo .= "$Log";
    $outputCompany .= "$Com";
    $outputDate .= "$Date";
    $outputDesc .= "$Info";
    $outputLoc .= "$Loc";
}
}
else
{
    echo "No result";
}
}

?>


	</head>
<body>
<div class="top">
      <div>

      	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="title">
                    
                    <a class="navbar-brand" href="">
                <h2>Job<strong>Seeker</strong></h2></a>
                  </div>
              <div class="tmenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
              </div>  
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                       <pre>    </pre> 
                                  
                <div class="dropdown">
                  <li class="nav-item">
                <span>Category</span>
                    <div class="dropdown-content">
                      <p><a class = "black_link" href="Full time.php">Full Time</a></p>
                      <p><a class = "black_link" href="Part Time.php">Part Time</a></p>
                      <p><a class = "black_link" href="Freelance.php">Freelance</a></p>
                      <p><a class = "black_link" href="Internship.php">Internship</a></p>
                      <p><a class = "black_link" href="Temporary.php">Termporary</a></p>
                    </div>
                    </li>
                </div>
                        <pre>    </pre> 
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About</a>
                    </li>
                        <pre>    </pre> 
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact</a>
                    </li>


              
                        <pre>      </pre> 
                    <li class="nav-item">
                      <a href="new-post.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Post a Job</span></a>
                    </li>
                </ul>
              </div>

        </nav>

          
      </div>
      <div class="imge">
        <img src="images/apply.jpg">
      </div>
      <div class="main1">
        
        <div class="jobdesc">
          <form method="post" enctype="text/plain">
                  <div class="form-group">
                      <label class="btn btn-success"><b><?php echo $outputType; ?></b></label><br>
                  </div>
                  <div class="jdtitle"><h2>
                    <?php echo $outputTitle; ?></h2><br>
                  </div>
 
                  <br><br>
                  <div class="jdcompany">
                    <?php echo $outputCompany; ?> <br>
                  </div>
                  <p>     </p>
                  <div class="jddate">
                    <?php echo $outputDate; ?> <br>
                  </div>
                  <br><br><br>
                  <div class="jddesc">
                    <?php echo $outputDesc; ?> <br>
                  </div>
          </form>
        </div>

        
        <div class="tp">
                  <p>
                    <h1><font color="#049131"><b>Apply Now</b></font></h1>
                    <div class="applymail">
                       <a href="mailto:<?php echo "$outputEmail"; ?>?Subject=My%20CV%20through%20JobSeeker" target="_top"><input type="button" class="btn btn-primary py-2" value="Click here to Send your CV"></a>
                     </div><br><br>
                      <div>
                    <?php echo '<center><br><img src="'.$outputLogo.'"  alt="HTML5 Icon" style="width:328px;height:228px"></center>'; ?> <br>
                  </div>
                     <br><br>
                     <h3>JobSeeker Contact Info</h3><font size="4" color="#00BE26"><br>
                    <b>Address</b><br>
                    NSBM Green University,<br>
                    colombo,<br>
                    Sri Lanka.<br><br>

                    <b>Phone</b><br>
                    +9411 22 22 123<br><br>
                  </font></p>
                 
          </div> 
      </div>
</div>
   
</body>
</html>