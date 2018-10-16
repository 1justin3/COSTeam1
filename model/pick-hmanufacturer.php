<?php
$hmanquery = mysqli_query($db, "SELECT ManufacturerID, ManufacturerName FROM hardware_manufacturer ORDER BY ManufacturerName");
if(mysqli_num_rows($hmanquery)){
    $select ='';
    while($hmanrs=mysqli_fetch_array($hmanquery)){
          $select.='<option value="'.$hmanrs['ManufacturerID'].'">'.$hmanrs['ManufacturerName'].'</option>';
      }
    }
    echo $select;
?>