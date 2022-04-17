<?php
    $insert= false;
    if(isset($_POST['USN'])){
    $server ="localhost";
    $username="root";
    $password="";

    //create a database connection
    $con = mysqli_connect($server, $username, $password);

    //check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    //collect post variables
    $USN= $_POST['USN'];
    $Name =$_POST['Name'];
    $Pwd =$_POST['Pwd'];
   
    $sql = "INSERT INTO `vaccinationdatabase`.`student` (`USN`, `Name`, `Pwd`) VALUES ('$USN', '$Name', '$Pwd');";
     
    // Execute the query
       if($con->query($sql) == true){

       //echo "Successfully inserted";
        //Flag for successful insertion
        $insert = true;
        header("location:afterregister.php");
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    //close the database connection
    $con->close();

}
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN</title>
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
      <a class="navbar-brand" style="color:#00ff00;font-family: Arial, Helvetica, sans-serif; font-weight: 900;">Student Registration</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="register.php">Register a new student</a></p>
     <!--<p><a href="infection.php">Submit Infection Form</a></p>--> 
      <p><a href="report.php">View vaccination reports</a></p>

    </div>
    <div class="col-sm-8 text-center"> 
      <h1 style="font-size: 50px;"><b>Welcome to Immunization Reports</b></h1>
      <h2 style="font-size: 40px; text-decoration: underline;color: blue"><b>Register new student</b></h1>
<div class="container well well-lg text-left" style="margin: 50px 400px 150px 100px;width:500px;">
  <form action="register.php" method="post" width="50%">  


    <div class="form-group">
      <label for="USN">* USN:</label>
      <input type="text" class="form-control" id="USN" placeholder="Enter Student USN" name="USN" required>
    </div>

        <div class="form-group">
      <label for="Name">* NAME:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Your Name" name="Name" required>
    </div>


    <div class="form-group">
      <label for="Student_Pwd">* Password:</label>
      <input type="password" class="form-control" id="Pwd" placeholder="Enter Student password " name="Pwd" required>
    </div>

      <button type="submit" class="btn" style="font: size 15px;pt;color:white; border-radius: 12px;background-color:green;border:1px solid #336600;padding:15px" > Register</button>
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