<?php
session_start();
$con=mysqli_connect("localhost","root","");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['admin_id'])){
	if(!empty($_POST["admin_id"] && $_POST["apwd"])){
	$admin_id=$_POST['admin_id'];
	$apwd=$_POST['apwd'];
  $sql = "SELECT * FROM `vaccinationdatabase`.`admin` WHERE admin_id='$admin_id' AND apwd='$apwd';";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)==1){
     $_SESSION['status'] = "Login Successful";
		echo "Successfully logged in";
      echo "<script type='text/javascript'> $(function(){ alert('Login successful'); }) ;</script> ";
			header('location:admin2.php');
		}
		else{
     $_SESSION['status'] = "PLEASE ENTER CORRECT LOGIN CREDENTIALS ";
      header("Location: admin.php?error=Incorect User name or password");
      echo "Incorrect credentials";
		
		//header('location:adminlogin.php');
		echo "Please enter correct login credentials";
        echo " <script type='text/javascript'> $(function(){ alert('PLEASE ENTER CORRECT LOGIN CREDENTIALS '); }) ;</script>";
		}
	}

	else{
    $_SESSION['status'] = "PLEASE ENTER CORRECT LOGIN CREDENTIALS ";
    header("Location: admin.php?error=Incorrect User name or password");
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
	<title>ADMIN LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="title.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
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
        <li><a href="home.php">HOME</a></li>
        <li class="active"><a href="admin.php">ADMIN LOGIN</a></li>
        
       <li><a href="student.php">STUDENT LOGIN</a></li> 
        
      </ul>
    </div>
  </div>
</nav>
<div class="container well well-lg" style="margin: 50px 400px 150px 100px; width:600px;">


  <form action= "admin.php" method="POST" width="50%">
    <div class="form-group">
      <label for="admin_id">ADMIN-ID:</label>
      <input type="text" class="form-control" id="admin_id" placeholder="Enter User Id" name="admin_id">
    </div>
    <div class="form-group">
      <label for="apwd">PASSWORD:</label>
      <input type="password" class="form-control" id="apwd" placeholder="Enter password" name="apwd">
    </div>
   
	 <button type="submit" class="btn btn-success" >LOGIN</button>
    
  </form>
</div>



<footer class="container-fluid text-center">
<p>@covid vaccination records</p>
</footer>





</body>

</html>