<?php

include '../view/header.php';

 ?>
<div class="body">
    <div id="primary" class="body">
		<body class="main">
			<div class="container">
				<h1>Select Record to Review</h1>
				<form name="searchemployee" method="post" action="functions.php">
					<div class="form-group">
						<div class="row justify-content-md-center">
							<div class="col-md-4">
								<input type="search" placeholder="UVU ID" class="form-control form-control-field form-control-md" name="search_employee_employeeid"/><br />
							</div>
							<div class="col-md-4">
								<input class="btn" class="form-control form-control-field form-control-md" type="submit" name="search-user-submit" value="Search for People" />
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- <h1>People Form</h1> -->
			<div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
			</div>
			<form name="adduser" method="post" action="functions.php">
				<div class="form-group">
					<div class="container">
						<div class="row justify-content-lg-center">
							<div class="col-lg-4">
								<input type="hidden" class="form-control form-control-field form-control-md" name="update_employee_employeeid" readonly />
								<div class="row justify-content-lg-left">
									<label for="update_employee_uvuid">UVU ID</label>
									<input type="number" class="form-control form-control-field form-control-md" name="update_employee_uvuid"  min="0" max="99999999" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_type">Type</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_employee_type" maxlength="25" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_fname">First Name</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_employee_fname" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_mname">Middle Name</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_employee_mname" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_lname">Last Name</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_employee_lname" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<!--Select List options manually added from the "TITLE" table-->
									<label for="update_employee_title">Title</label>
									<select name="update_employee_title" class="form-control form-control-field form-control-md">
										<option value="">N/A</option>
										<option value="1">Professor</option>
										<option value="2">Dr.</option>
									</select><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_positionid">Position ID</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_employee_positionid" maxlength="25" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_extension">Extension</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_employee_extension" maxlength="15" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_mobile">Mobile</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_employee_mobile" maxlength="15" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_email">Email</label>
									<input type="email" class="form-control form-control-field form-control-md" name="update_employee_email" maxlength="50" /><br />
								</div>
							</div>
							<div class="col-lg-4">
								<?php if($_SESSION['UserType'] == "Admin"){
										echo '<div class="row justify-content-lg-left">
										<label for="update_user_usertype">User Type</label>
										<select name="update_user_usertype" class="form-control form-control-field form-control-md">
											<option value="">No Access</option>
											<option value="">Read Only</option>
											<option value="Tech">Tech</option>
											<option value="Admin">Admin</option>
										</select><br />
									</div>
									<div class="row justify-content-lg-left">
										<label for="update_user_password">Overwrite Password</label>
										<input type="text" class="form-control form-control-field form-control-md" name="overwrite_user_password" maxlength="15" /><br />
									</div>';
									} ?>
								<div class="row justify-content-lg-left">
									<label for="update_employee_currentemployee">Current Employee</label>
									<select name="update_employee_title" class="form-control form-control-field form-control-md">										
										<option value="T">Yes</option>
										<option value="F">No</option>
									</select><br />
								</div>
								<div class="row justify-content-lg-left">
									<!--Select List options manually added from the "DEPARTMENT" table-->
									<label for="update_employee_departmentid">Department</label>
									<select name="update_employee_department" class="form-control form-control-field form-control-md">
										<option value="">N/A</option>
										<option value="1">COS</option>
										<option value="2">CE&T</option>
									</select><br />
								</div>
								<div class="row justify-content-lg-left">
									<!--Select List options populated from the pick-building.php that uses the "BUILDING" table-->
									<label class="label-field" for="update_employee_building">Building</label>
									<select name="update_employee_building" class="form-control form-control-field form-control-md">
										<option value="">N/A</option>
										<?php include '../model/pick-building.php';?>
									</select><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_office">Office</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_employee_office" maxlength="15" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="update_employee_notes">Notes</label>
									<textarea name="update_employee_notes" class="form-control form-control-field form-control-md" cols="3" rows ="12" row justify-content-lg-centers="30" maxlength="500"></textarea><br />
								</div>
							</div>
						</div>
						<div class="row justify-content-lg-center">
							<div class="col-lg-4">
								<input class="btn" class="form-control form-control-field form-control-md" type="submit" name="edit-employee-submit" value="Submit" />
							</div>
						</div>
					</div>
				</div>
			</form>
		</body>
    </div>
</div>

<?php include '../view/footer.php';?>
 