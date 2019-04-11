
<!DOCTYPE html>
<html>
<?php
$output = NULL;
if(isset($_POST['submit'])){

    include_once 'dbcon.php';

 $search = $conn->real_escape_string($_POST['search']);

 $resultSet = $conn->query("SELECT * FROM jobdata WHERE job_title = '$search' ");
if($resultSet->num_rows > 0)
{
while($rows = $resultSet->fetch_assoc())
{
    $Info = $rows['Job_Description'];
    $Tit = $rows['Job_Title']; 
    $Com = $rows['Company'];
    $Email = $rows['Email'];
    $Jype = $rows['Job_Type'];
    $Loc = $rows['Location'];

    // $output .= "$Info </br> $Tit </br> $Com </br>  $Email  </br> $Jtype </br>  $Loc </br> </br>";
    $outputEmail .= "<br> $Email";
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
    $output = "No result";
}
}

?>
<body>
    <form method="POST">
    <input type="TEXT" name="search"/>
    <input type="SUBMIT" name="submit" value="search"/>
    </form>
    <?php echo $output; ?>
</body>
</html>