<?php

include '../view/header.php';
if($_SESSION['UserType'] != "Admin"){
    header("location:../index.php");
}
 ?>
<div class="body">
    <div id="primary" class="body">
		<body class="main">
			<div class="container">
				<h1>Select a DB User Record to Review</h1>
				<form name="searchuser" method="post" action="functions.php">
					<div class="form-group">
						<div class="row justify-content-md-center">
							<div class="col-md-4">
								<input type="search" placeholder="Employee ID" class="form-control form-control-field form-control-md" name="search_user_employeeid"/><br />
							</div>
							<div class="col-md-4">
								<input class="btn" class="form-control form-control-field form-control-md" type="submit" name="search-user-submit" value="Search for User" />
							</div>
						</div>
					</div>
				</form>
			</div>
			<h1>DB User Form</h1>
			<div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
			</div>
			<form name="adduser" method="post" action="functions.php">
				<div class="form-group">
					<div class="container">
						<div class="row justify-content-lg-center">
							<div class="col-lg-4">
								<div class="row justify-content-lg-center">
									<label for="update_user_employeetypeid">Employee Type ID</label>
									<input type="number" class="form-control form-control-field form-control-md" name="update_user_employeetypeid" min="0" max="999999999" readonly /><br />
								</div>
								<div class="row justify-content-lg-center">
									<label for="update_user_employeeid">Employee ID</label>
									<input type="number" class="form-control form-control-field form-control-md" name="update_user_employeeid" min="0" max="999999999" readonly /><br />
								</div>	
							</div>
							<div class="col-lg-4">
								<div class="row justify-content-lg-center">
									<label for="update_user_usertype">User Type</label>
									<select name="update_user_usertype" class="form-control form-control-field form-control-md">
										<option value="">No Access</option>
										<option value="Tech">Tech</option>
										<option value="Admin">Admin</option>
									</select><br />
								</div>
								<div class="row justify-content-lg-center">
									<label for="update_user_password">Overwrite Password</label>
									<input type="text" class="form-control form-control-field form-control-md" name="overwrite_user_password" maxlength="15" /><br />
								</div>
							</div>
						</div>
						<div class="row justify-content-lg-center">
							<div class="col-lg-4">
								<input class="btn" class="form-control form-control-field form-control-md" type="submit" name="edit-user-submit" value="Submit" />
							</div>
						</div>
					</div>
				</div>
			</form>
		</body>
    </div>
</div>

<?php include '../view/footer.php';?>
 