<?php 
session_start();

echo "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="title.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
      height: 100%;
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
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#00ff00;font-family: Arial, Helvetica, sans-serif; font-weight: 900;">IMMUNIZATION RECORDS</a>
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
      <p><a href="register.php">New Student Registeration</a></p>
      <p><a href="report.php">View Vacciantion Reports</a></p>
      <p><a href="report2.php">View Infection Reports</a></p>
      <p><a href="log.php">View Recent Log Details on Infection Table</a></p>
     
    </div>
    <div class="col-sm-8 text-center"> 
      <h1 style="font-size: 50px;"><b>Welcome to Immunization Records Database</b></h1>
      <h2 style="font-size: 40px;"><b>WELCOME ADMINISTRATOR!</b></h1>
        <ul style="text-align: left; font-size: 20px; font-family: Arial, Helvetica, sans-serif; ">
        <li>Adminstrator can register new student </li>
        <li>Administrator can view the vaccination reports of students</li>
        
        </ul>
      </p>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="margin-bottom: 0px;">
  <p>@covid vaccination records</p>
</footer>

</body>
</html>