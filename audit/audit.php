<?php

include '../view/header.php';

 ?>
 <div class="body">
    <div id="primary" class="body">
    <body class="main">
            <h1>Audit</h1>
            <div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
            </div>
         <div class="container">   
            <form name="searchasset" method="post" action="functions.php">
                <div class="form-group">
                    <div class="row justify-content-lg-center">
						<div class="col">
							<select class="form-control form-control-field form-control-md" name="filter_audit_bytablename"><br />
								<option value="">Select a Table Name</option>
								<option value="BUILDING">BUILDING</option>
								<option value="DEPARTMENT">DEPARTMENT</option>
								<option value="DEVICE_TYPE">DEVICE_TYPE</option>
								<option value="EMP_TYPE">EMP_TYPE</option>
								<option value="EMPLOYEE">EMPLOYEE</option>
								<option value="HARDWARE">HARDWARE</option>
								<option value="HARDWARE_MANUFACTURER">HARDWARE_MANUFACTURER</option>
								<option value="OS">OS</option>
								<option value="SOFTWARE">SOFTWARE</option>
								<option value="SOFTWARE_ASSIGNMENT">SOFTWARE_ASSIGNMENT</option>
								<option value="SOFTWARE_MANUFACTURER">SOFTWARE_MANUFACTURER</option>
								<option value="TITLE">TITLE</option>
							</select><br />
						</div>
                        <div class="col">
                            <input type="search" placeholder="Enter Field Name" class="form-control form-control-field form-control-md" name="filter_audit_byfieldname"/><br />
                        </div>
						<div class="col">
                            <input type="search" placeholder="Enter User Name" class="form-control form-control-field form-control-md" name="filter_audit_byusername"/><br />
                        </div>
						<div class="col">
                            <input type="search" placeholder="Enter a Date" class="form-control form-control-field form-control-md" name="filter_audit_bydate"/><br />
                        </div>
                        <div class="col">
                            <input class="btn" class="form-control form-control-field form-control-md" type="submit" name="audit-submit" value="Run Audit" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <h1>Audit Results</h1>
        <div style="overflow-x:auto;">
            <div class class="table-responsive-md">
                <table class="table">
                    <tr>
                        <th>Table Name</th>
                        <th>Field Name</th>
                        <th>Previous Value</th>
                        <th>New Value</th>
                        <th>User</th>
                        <th>Date/Time</th>
                    </tr>
                    <tr>
                        <td>Test</td>
                        <td>Sample</td>
                        <td>Was</td>
                        <td>Here</td>
                        <td>On</td>
                        <td>10/01/2018 9:43 PM</td>
                    </tr>
                </table>
            </div>
        </div>
<?php
/*
//get results from database
//$result = mysqli_query($db,"SELECT * FROM audit");
$result = array(
    "name" => "bar",
    "bar" => "foo",
);
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
*/
?>

</body>
    </div>
</div>

<?php include '../view/footer.php';?>
 