
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
 
 <script>

function validateRadio (radios)
{
    for (i = 0; i < radios.length; ++ i)
    {
        if (radios [i].checked) return true;
    }
    return false;
}

    function validateForm() {
      var title = document.forms["jobupload"]["title"];
      var company = document.forms["jobupload"]["Company"];
      var email = document.forms["jobupload"]["email"];
      var jtype = document.forms["jobupload"]["jtype"];
      var location = document.forms["jobupload"]["Location"];
      var info = document.forms["jobupload"]["info"];

      if (title.value == "")
      {
        window.alert("please enter your job title");
        name.focus();
        return false;

      }
      if (company.value == "")
      {
        window.alert("please enter your company name");
        company.focus();
        return false;

      }

      if (email.value == "")
      {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;

      }

    if (location.value == "")                               
    { 
        window.alert("Please enter your location."); 
        name.focus(); 
        return false; 
    } 

    if(validateRadio (document.forms["jobupload"]["jtype"]))
    {
        return true;
    }
    else
    {
        alert('Please select job type');
        return false;
    }


    }
    </script>
  
  
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
        <img src="images/post.jpg">
      </div>
      <div class="main1">
        
        <div class="mail">
          <form action="new-post.php" method="POST" name="jobupload" onsubmit="return validateForm()"> 
                  <div class="form-group">
                    <label><b>Job Title</b></label>
                    <input type="text" class="form-control" name="title" placeholder="eg: Full Stack Frontend"><br>
                  </div>
                  <div class="form-group">
                    <label><b>Company</b></label>
                    <input type="text" class="form-control" name="Company"><br>
                  </div>

                  <div class="form-group">
                    <label><b>Company Logo</b></label><br>
                    <input type="file"  name="logo"><br>
                  </div><br>

                  <div class="form-group">
                    <label><b>Company Email Address</b></label>
                    <input type="email" name="email" class="form-control" placeholder="name@example.com"><br>
                  </div>

                  <div class="form-group">
                    <label><h3>Job Type</h3></label><br>
                    <input type="Radio" name="jtype" value="Full Time"> Full Time<br>
                    <input type="Radio" name="jtype" value="Part Time"> Part Time<br>
                    <input type="Radio" name="jtype" value="Freelance"> Freelance<br>
                    <input type="Radio" name="jtype" value="Internship"> Internship<br>
                    <input type="Radio" name="jtype" value="Temporary"> Temporary<br><br>
                  </div>

                  <div class="form-group">
                    <label><b>Location</b></label><br>
                    <input type="text" class="form-control" name="Location"><br>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1"><b>Job Description</b></label>
                    <textarea class="form-control" name="info"  rows="10" ><pre><font color="gray"><!-- Do Not Erase this tags--> </textarea>
                  </div>

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary"  value="Post Your Job">
                  </div>
                </form>
        </div>

        
        <div class="tp">
                  <p>
                    <h3>Contact Info</h3><font size="4" color="#00BE26"><br>
                    <b>Address</b><br>
                    NSBM Green University,<br>
                    colombo,<br>
                    Sri Lanka.<br><br>

                    <b>Phone</b><br>
                    +9411 22 22 123<br><br>

                    <b>Email Address</b><br>
                     inquiries@nsbm.lk<br><br>
                  </font></p>
          </div>

        
      <div>
</div> 
<?php
error_reporting(0);

include_once 'dbcon.php';


$info = $_POST["info"];
$tit = $_POST['title']; 
$Com = $_POST['Company'];
$logo = $_POST['logo'];
$email = $_POST['email'];
$jype = $_POST['jtype'];
$Loc = $_POST['Location'];
$my_date = date('Y-m-d');



$sql = "INSERT INTO jobdata (Job_Title,Company,Logo,Email,Job_Type,Location,Job_Description,Date_Time ) 
        VALUES ('$tit','$Com','$logo','$email ','$jype','$Loc','$info','$my_date')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} 

$conn->close();
?>     
</body>
</html>