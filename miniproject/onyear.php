<?php
   $con = mysqli_connect("localhost","root","","vaccinationdatabase");
   $sql = "Select Distinct ryear from report";
  
   $sql3="Select Distinct dose from report";
   
   $res=mysqli_query($con, $sql);
  
   $res3=mysqli_query($con, $sql3);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="icon" type="image/png" sizes="96x96" href="title.png">
  <script type="text/javascript" src="js\onyear.js"></script>
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
      height: 200%;
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
        height: 100;
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
  

  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="admin2.php">Go to home page</a></p>
    
      
    
      <p><a href="report.php">View Vacciantion Report</a></p>
      <p><a href="onname.php">Report on Vaccine Name</a></p>
      <p><a href="ondept.php">Report on Departmentwise</a></p>
      
      <p><a href="onyear.php">Report on Yearwise</a></p>
      <p class="active"><a href="on2.php">Report on Vaccine and Department</a></p>
      <p><a href="complex.php">Complex Queiries</a></p>
     
    </div>


  
  
  
  
  
    <div class="col-lg-8 mb-4 mb-lg-0">
              
                
                  





    <div class="filter-section mb-2 mob-filter-show">
      <form id="reportFilter">
        <div class="row">

          <div class="col-md-4">
            <div class="form-group">
            <label>Year</label>
              <select class="form-control" id="year" onchange = "selectVD()" >
              <option>Select Year</option>
               <?php while( $rows = mysqli_fetch_array($res)){
                 ?>
                 <option value="<?php echo $rows['ryear']; ?>" ><?php echo $rows['ryear'];?></option>
                 <?php
               }
               ?>
              </select>
            </div>
          </div>


          

          <div class="col-md-4">
            <div class="form-group">
            <label>Dose</label>
              <select class="form-control" id="dose" onchange = "selectVD()" >
              <option>Select Dose</option>
              <?php while( $rows = mysqli_fetch_array($res3)){
                 ?>
                
                 <option value="<?php echo $rows['dose']; ?>" ><?php echo $rows['dose'];?></option>
                 <?php
               }
               ?>
              </select>
            </div>
          </div>
          
        </div>
      </form>
    </div>


  



    <div class="col-sm-8 text-center">
      <h2 style="color:blue;text-decoration: underline;">Vaccination Report Details</h2> 
      <table class="table table-bordered">
    <thead style="background-color:#ffffff;color: #000000;">
      <tr>
        <th>Serial No</th>
        <th>USN</th>
        <th>NAME</th>
        <th>DEPARTMENT</th>
        <th>VACCINE NAME</th>
        <th>DOSE</th>
        <th>DOSE DATE</th>
        <th>CERTIFICATE NUMBER</th>
        <th>CERTIFICATE LINK</th>
      </tr>
    </thead>
    <tbody id="ans">


    </tbody>
</table>
  </div>

</div>
</div>













</body>
</html>