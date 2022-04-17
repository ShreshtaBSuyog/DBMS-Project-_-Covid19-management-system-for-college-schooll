<?php
  $insert=false;
  if(isset($_POST['rusn'])){
  $server = "localhost";
  $username = "root";
  $password = "";
  $con = mysqli_connect($server, $username, $password);

  if(!$con){
    die("connection to this database failed due to" .mysqli_connect_error());
  }
 //echo "Success connecting to the db";

    $rusn=$_POST['rusn'];
    $rname=$_POST['rname'];
    $rdept=$_POST['rdept'];
    $ryear=$_POST['ryear'];
    $rvaccinactionname=$_POST['rvaccinactionname'];
    $dose=$_POST['dose'];
    $dosedate=$_POST['dosedate'];
    $rCertificateNo=$_POST['rCertificateNo'];
    $CertificateLink=$_POST['CertificateLink'];

    $sql = "INSERT INTO  `vaccinationdatabase`.`report` (`rusn`, `rname`, `rdept`, `ryear`, `rvaccinactionname`, `dose`, `dosedate`, `rCertificateNo`, `CertificateLink`) VALUES ('$rusn', '$rname', '$rdept', '$ryear', '$rvaccinactionname', '$dose', '$dosedate', '$rCertificateNo',  '$CertificateLink');";


    if($con->query($sql) == true){
        // echo "Successfully inserted";
          $insert = true;
          header("location:afterform.php");
      }
    else{
          echo "ERROR: $sql <br> $conn->error";
      }
    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>STUDENT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="title.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="icon" type="image/png" sizes="96x96" href="title.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 600px;}

    
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding:20px 20px 40px 30px;
      background-color: #ffff00;
      color: #000000;
      font-family: Impact, Charcoal, sans-serif,monospace;
      height: 300%;
      font-weight: italic;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #000000;
      color: white;
      padding: 15px;
      margin-bottom:0px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    input{
        width:0px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#00ff00;font-family: Arial, Helvetica, sans-serif; font-weight: 900;">Immunization Reports</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <p><a href="student2.php">Go Back Home</a></p>
      <p><a href="form.php">Submit Vaccination Form</a></p>
      <p><a href="infection.php">Submit Infection Form</a></p>
    </div>
    <div class="col-sm-8 text-center"> 
      <h1 style="font-size: 50px;"><b>Welcome to Immunization Reports</b></h1>
      <h2 style="font-size: 40px; text-decoration: underline;color: blue"><b>Submit Vaccination Form</b></h1>
      <h4 style="font-size: 20px; text-decoration:color: blue"><b>Please upload the Certificate here : <p><a href="https://drive.google.com/drive/folders/1asdqXHrYQCe5v4shqd7C1LOVlgiiJWbd" target="_blank">Upload Certificate</a></p> </b></h4> 
<div class="container well well-lg text-left" style="margin: 50px 400px 150px 100px;width:500px;">
  <form action="form.php" method="post" width="50%">
    
 
  <div class="form-group">
      <label for="rusn">* USN:</label>
      <input type="text" class="form-control" id="rusn" placeholder="Enter Your USN" name="rusn" required>
    </div>
        <div class="form-group">
      <label for="rname">* NAME:</label>
      <input type="text" class="form-control" id="rname" placeholder="Enter Your Name" name="rname" required>
    </div>


   
   
 <div class="form-group">
      <label for="rdept">* DEPARTMENT:</label>
      <select  name="rdept" required>
        <option value="N/A">N/A</option>
        <option value="CSE">CSE</option>
        <option value="ISE">ISE</option>
        <option value="ECE">ECE</option>
        <option value="EEE">EEE</option>
        <option value="ME">ME</option>
        <option value="TE">TE</option>
      </select>
    </div>

    <div class="form-group">
        <label for="ryear">* ADDMISSION YEAR:</label>
        <select name="ryear"  id="ryear" required>
          <option value="N/A" >N/A</option>
          <option value="2016" >2016</option>
          <option value="2017" >2017</option>
          <option value="2018" >2018</option>
          <option value="2019" >2019</option>
          <option value="2020" >2020</option>
          <option value="2021" >2021</option>
          <option value="2022" >2022</option>
          
        </select>
      </div>
    


  <div class="form-group">
      <label for="rvaccinactionname">* VACCINE NAME:</label>
      <select class="flow-control" name="rvaccinactionname" id="rvaccinactionname" required>
        <option value="N/a">N/A</option>
        <option value="CovidShield">CovidShield</option>
        <option value="Covaxin">Covaxin</option>
        <option value="Sputnik V">Sputnik V</option>
    </select>
  </div>
 

    <div class="form-group">
        <label for="dose">* VACCINATION DOSE</label>
        <select class="flow-control" name="dose" id="dose" required>
            <option>1</option>
            <option>2</option>
          <option>Booster Dose 1</option>
          <option>Booster Dose 2</option>
          <option>Booster Dose 3</option>
          <option>Booster Dose 4</option>
          <option>Booster Dose 5</option>
          <option>Booster Dose 6</option>
        </select>
      </div>

      <div class="form-group">
        <label for="dosedate">* Dose Date:</label>
        <input type="date" class="form-control" id="dosedate" placeholder="Enter Dose Date" name="dosedate" required>
      </div>

        
    <div class="form-group">
        <label for="rCertificateNo">* Certificate Number:</label>
        <input type="text" class="form-control" id="rCertificateNo" placeholder="Enter Vaccination Certificate Number" name="rCertificateNo" required>
      </div>
     
  

<div class="form-group">
        <label for="CertificateLink">* Certificate Link:</label>
        <input type="text" class="form-control" id="CertificateLink" placeholder="Provide your document Link" name="CertificateLink" required>
      </div>
      <button type="submit" class="btn" style="font: size 15px;pt;color:white; border-radius: 12px;background-color:green;border:1px solid #336600;padding:15px" > Submit</button>
  </form>
</div>
      </p>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="margin-bottom: 0px;">
  <p>@covid vaccination records</p>
</footer>

</body>
</html>