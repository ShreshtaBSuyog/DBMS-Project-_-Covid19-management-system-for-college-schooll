<?php

   $k = $_POST['id'];
   $k3=$_POST['id3'];
   $k = trim($k);
   $k3 = trim($k3);
   $con = mysqli_connect("localhost","root","","vaccinationdatabase");
   $sql = "SELECT * FROM `report` where rdept='{$k}' AND  dose='{$k3}'";
   $res=mysqli_query($con, $sql);

   $no = 1; //auto numbering
  
   
   while($rows = mysqli_fetch_array($res)){
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
   }

<?php
  $no++; }
   //echo $sql;
   echo "No rows Selected";
?>
