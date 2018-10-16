<?php
$empquery = mysqli_query($db, "SELECT OS_ID, OS_Type FROM os ORDER BY OS_Type");
if(mysqli_num_rows($empquery)){
    $select ='';
    while($rs=mysqli_fetch_array($empquery)){
          $select.='<option value="'.$rs['OS_ID'].'">'.$rs['OS_Type'].'</option>';
      }
    }
    echo $select;
?>