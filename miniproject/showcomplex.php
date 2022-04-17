<?php

   $k = $_POST['id'];
   $k2=$_POST['id2'];
   $k3=$_POST['id3'];
   $k4=$_POST['id4'];
   $k = trim($k);
   $k2 = trim($k2);
   $k3 = trim($k3);
   $k4 = trim($k4);
   $con = mysqli_connect("localhost","root","","vaccinationdatabase");
   $sql = "SELECT * FROM `report` where rvaccinactionname='{$k}' and rdept='{$k2}' and dose='{$k3}' and ryear='{$k4}'";
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
   echo "no rows selected";
?>
