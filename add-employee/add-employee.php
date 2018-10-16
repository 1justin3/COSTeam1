<?php

include '../view/header.php';

 ?>
<div class="body">
    <div id="primary" class="body">
        <body class="main">
			<h1>Add Employee Form</h1>
			<div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
			</div>
			<form name="addemployee" method="post" action="functions.php">
				<div class="form-group">
					<div class="container">
						<div class="row">
							<div class="col">	
								<div class="row">
									<label for="add_employee_uvuid">UVU ID</label>
									<input type="number" class="form-control form-control-field form-control-lg" name="add_employee_uvuid"  min="0" max="99999999" /><br />
								</div>
								<div class="row">
									<label for="add_employee_type">Type</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_employee_type" maxlength="25" /><br />
								</div>
								<div class="row">
									<label for="add_employee_fname">First Name</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_employee_fname" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_employee_mname">Middle Name</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_employee_mname" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_employee_lname">Last Name</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_employee_lname" maxlength="50" /><br />
								</div>
								<div class="row">
									<!--Select List options manually added from the "TITLE" table-->
									<label for="add_employee_title">Title</label>
									<select name="add_employee_title" class="form-control form-control-field form-control-lg">
										<option value="">N/A</option>
										<option value="1">Professor</option>
										<option value="2">Dr.</option>
									</select><br />
								</div>
								<div class="row">
									<label for="add_employee_positionid">Position ID</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_employee_positionid" maxlength="25" /><br />
								</div>
								<div class="row">
									<label for="add_employee_extension">Extension</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_employee_extension" maxlength="15" /><br />
								</div>
								<div class="row">
									<label for="add_employee_mobile">Mobile</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_employee_mobile" maxlength="15" /><br />
								</div>
								<div class="row">
									<label for="add_employee_email">Email</label>
									<input type="email" class="form-control form-control-field form-control-lg" name="add_employee_email" maxlength="50" /><br />
								</div>
							</div>
							<div class="col">
								<div class="row">
									<label for="add_employee_currentemployee">Current Employee</label>
									<select name="add_employee_title" class="form-control form-control-field form-control-lg">
										<option value="">N/A</option>
										<option value="T">Yes</option>
										<option value="F">No</option>
									</select><br />
								</div>
								<div class="row">
									<!--Select List options manually added from the "DEPARTMENT" table-->
									<label for="add_employee_departmentid">Department</label>
									<select name="add_employee_department" class="form-control form-control-field form-control-lg">
										<option value="">N/A</option>
										<option value="1">COS</option>
										<option value="2">CE&T</option>
									</select><br />
								</div>
								<div class="row">
									<!--Select List options manually added from the "BUILDING" table-->
									<label for="add_employee_building">Building</label>
									<select name="add_employee_building" class="form-control form-control-field form-control-lg">
										<option value="">N/A</option>
										<option value="1">CS</option>
										<option value="2">LA</option>
									</select><br />
								</div>
								<div class="row">
									<label for="add_employee_office">Office</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_employee_office" maxlength="15" /><br />
								</div>
								<div class="row">
									<label for="add_employee_notes">Notes</label>
									<textarea name="add_employee_notes" class="form-control form-control-field form-control-lg" cols="3" rows="30" maxlength="500"></textarea><br />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<input class="btn" class="form-control form-control-field form-control-lg" type="submit" name="add-employee-submit" value="Submit New Employee" />
						</div>
					</div>
				</div>
			</form>
		</body>
    </div>
</div>

<?php include '../view/footer.php';?>
 