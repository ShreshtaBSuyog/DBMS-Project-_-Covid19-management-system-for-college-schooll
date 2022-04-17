<?php
$con=mysqli_connect("localhost","root","");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['USN'])){
	if(!empty($_POST["USN"] && $_POST["Pwd"])){
	$USN=$_POST['USN'];
	$Pwd=$_POST['Pwd'];
		$sql="SELECT * FROM `vaccinationdatabase`.`student` WHERE USN='$USN' AND Pwd='$Pwd'";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)==1){
      $_SESSION['status'] = "Login Successful";
     echo "Successfully logged in";
       echo "<script type='text/javascript'> $(function(){ alert('Login successful'); }) ;</script> ";
       header('location:student2.php');
     }
     else{
      $_SESSION['status'] = "PLEASE ENTER CORRECT LOGIN CREDENTIALS ";
       header("Location: student.php?error=Incorect User name or password");
       echo "Incorrect credentials";
     
     //header('location:adminlogin.php');
     echo "Please enter correct login credentials";
         echo " <script type='text/javascript'> $(function(){ alert('PLEASE ENTER CORRECT LOGIN CREDENTIALS '); }) ;</script>";
     }
   }
 
   else{
     $_SESSION['status'] = "PLEASE ENTER CORRECT LOGIN CREDENTIALS ";
     header("Location: student.php?error=Incorrect User name or password");
   echo "Incorrect credentials";
   //	header('location:admin.php');
     echo "please enter login credentials";
     echo "<script type='text/javascript'> alert('PLEASE ENTER CORRECT LOGIN CREDENTIALS');</script>";
   }

} 
?>




<!DOCTYPE html>
<html>
<head>
	<title>STUDENT LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="C:\xampp\htdocs\miniproject\images\title.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="icon" type="image/png" sizes="96x96" href="title.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style >
    .navbar {
      margin: 0px;
      border-radius: 0;
      background-color: #4d4d4d
    }
     .jumbotron {
      margin-bottom: 0;
    	background-color: black;
    	padding: 0;

    }
    footer {
      background-color: black;
      padding: 25px;
      color: white;
    }

#home {
color: white ; 
font-size:36px;
font-family:"Comic Sans MS", cursive, sans-serif;
margin: 5px 5px;
}

  </style>
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
  <h1 id="home"><img src="home1.jpg" width="200" height="80">IMMUNIZATION RECORDS</h1>     
  </div>
</div>

<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">HOME</a></li>
        <li><a href="admin.php">ADMIN LOGIN</a></li>
        
        <li class="active"><a href="student.php">STUDENT LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container well well-lg" style="margin: 50px 400px 150px 100px ;width:600px;">
  <form action="student.php" method="POST" width="50%">
    <div class="form-group">
      <label for="USN">STUDENT-ID:</label>
      <input type="text" class="form-control" id="USN" placeholder="Enter  USN" name="USN" >
    </div>
    <div class="form-group">
      <label for="Pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="Pwd" placeholder="Enter password" name="Pwd">
    </div>
    
    <button type="submit" class="btn btn-success" >LOGIN</button>
  </form>
</div>



<footer class="container-fluid text-center">
<p>@covid vaccination records</p>
</footer>
</body>
