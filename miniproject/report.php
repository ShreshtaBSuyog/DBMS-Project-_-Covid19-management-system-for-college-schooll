

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    
     
    
      <p  class="active"><a href="report.php">View Vacciantion Report</a></p>
      <p><a href="onname.php">Report on Vaccine Name</a></p>
      <p><a href="ondept.php">Report on Departmentwise</a></p>
    
      <p><a href="onyear.php">Report on Yearwise</a></p>
      <p><a href="on2.php">Report on Vaccine and Department</a></p>
      <p><a href="complex.php">Complex Queiries</a></p>
     
    </div>


  
  
  
  
  
   

  



    <div class="col-sm-8 text-center">
      <h2 style="color:blue;text-decoration: underline;">Vaccination Report Details</h2> 
      <table class="table table-bordered">
    <thead style="background-color:#ffffff;color: #000000;">
      <tr>
        <th>Serial No.
        <th>USN</th>
        <th>NAME</th>
        <th>DEPARTMENT</th>
        <th>VACCINE NAME</th>
        <th>DOSE</th>
        <th>DOSE DATE</th>
        <th>CERTIFICATE NUMBER</th>
        <th>CERTIFICATE LINK</th>  <!-- new-->
      </tr>
    </thead>
    <tbody>

    <?php

$db=mysqli_connect("localhost","root","","vaccinationdatabase");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql="SELECT * FROM report";
    $result=mysqli_query($db,$sql) or die("Bad query:");
    $no=1; //auto numbering
/*while($row=mysqli_fetch_assoc($result)){
 //echo "<tr><td> {$no}</td><td>{$row['rusn']}</td><td>{$row['rname']}</td><td>{$row['rdept']}</td><td>{$row['rvaccinactionname']}</td><td><b>{$row['dose']}</b></td><td>{$row['dosedate']}</td><td>{$row['rCertificateNo']}</td><td>{$row['certificate_link']}</td></tr>"; 
 echo "<tr><td> {$no}</td><td>{$row['rusn']}</td><td>{$row['rname']}</td><td>{$row['rdept']}</td><td>{$row['rvaccinactionname']}</td><td><b>{$row['dose']}</b></td><td>{$row['dosedate']}</td><td>{$row['rCertificateNo']}</td></tr>"; 
 <td><html><p><h4 style="font-size: 15px; text-decoration:color: blue"> <p><a href="<?php echo $row['certificate_link']   ?>" target="_blank">View Certificate</a></p></h4> </p></html></td>
 $no++;
}*/

while($rows = mysqli_fetch_array($result)){
  ?>    <tr>
      <td><?php echo $no ;?></td>
      <td><?php echo $rows['rusn'];     ?></td>
      <td><?php echo $rows['rname'];   ?></td>
      <td><?php echo $rows['rdept'];   ?></td>
      <td><?php echo $rows['rvaccinactionname'];   ?></td>
      <td><?php echo $rows['dose'];     ?></td>
      <td><?php echo $rows['dosedate'];   ?></td>
      <td><?php echo $rows['rCertificateNo']   ?></td>
      <td><html><p><h4 style="font-size: 15px; text-decoration:color: blue"> <p><a href="<?php echo $rows['CertificateLink']   ?>" target="_blank">View Certificate</a></p></h4> </p></html></td>
  </tr>
  </tr>
 
 <?php
 $no++; }
   //echo $sql;
   //echo "no rows selected";

?>


    </tbody>
</table>
  </div>

</div>
</div>

</body>
</html>