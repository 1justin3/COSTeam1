<?php
$buildingquery = mysqli_query($db, "SELECT BuildingID, BuildingName FROM building ORDER BY BuildingName");
if(mysqli_num_rows($buildingquery)){
    $select ='';
    while($buildingrs=mysqli_fetch_array($buildingquery)){
          $select.='<option value="'.$buildingrs['BuildingID'].'">'.$buildingrs['BuildingName'].'</option>';
      }
    }
    echo $select;
?>