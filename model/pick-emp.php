<?php
$empquery = mysqli_query($db, "SELECT e.F_Name, e.L_Name, e.EmployeeID FROM employee e ORDER BY e.L_Name, e.F_Name");
if(mysqli_num_rows($empquery)){
    $select ='';
    while($rs=mysqli_fetch_array($empquery)){
          $select.='<option value="'.$rs['EmployeeID'].'">'.$rs['L_Name'].', '.$rs['F_Name'].'</option>';
      }
    }
    echo $select;
?>