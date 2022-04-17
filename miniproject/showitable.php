<?php

   
   $k2=$_POST['id2'];
   $k3=$_POST['id3'];
   $k4=$_POST['id4'];
  
   $k2 = trim($k2);
   $k3 = trim($k3);
   $k4 = trim($k4);
   $con = mysqli_connect("localhost","root","","vaccinationdatabase");
   $sql = "SELECT * FROM report r JOIN infection i on r.rusn=i.usn where r.rdept='{$k2}' and r.dose='{$k3}' and r.ryear='{$k4}';";
   $res=mysqli_query($con, $sql);

   $no = 1; //auto numbering
  
   
   while($rows = mysqli_fetch_array($res)){
    ?>    <tr>
        <td><?php echo $no ;?></td>
        <td><?php echo $rows['usn'];     ?></td>
        <td><?php echo $rows['name'];   ?></td>
        <td><?php echo $rows['dept'];   ?></td>
        <td><?php echo $rows['rvaccinactionname'];   ?></td>
        <td><?php echo $rows['dose'];     ?></td>
        <td><?php echo $rows['dosedate'];   ?></td>
        <td><?php echo $rows['iname']   ?></td>
        <td><?php echo $rows['idate']   ?></td>
        <td><?php echo $rows['rno']   ?></td>
        <td><html><p><h4 style="font-size: 15px; text-decoration:color: blue"> <p><a href="<?php echo $rows['reportlink']   ?>" target="_blank">View Report</a></p></h4> </p></html></td>
    </tr>
   }

<?php
  $no++; }
   //echo $sql;
   echo "no rows selected";
?>
