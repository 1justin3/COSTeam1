<?php

include '../view/header.php';
if($_SESSION['UserType'] != "Admin"){
    header("location:../index.php");
}
 ?>
<div class="body">
    <div id="primary" class="body">
        <body class="main">
			<h1>Add User Form</h1>
			<div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
			</div>
			<form name="adduser" method="post" action="functions.php">
				<div class="form-group">
					<div class="container">
						<div class="row">
							<div class="col">	
								<div class="row">
									<label for="add_user_employeeid">Employee ID</label>
									<input type="number" class="form-control form-control-field form-control-lg" name="add_user_employeeid" min="0" max="999999999" /><br />
								</div>	
							</div>
							<div class="col">
								<div class="row">
									<label for="add_user_usertype">User Type</label>
									<select name="add_user_usertype" class="form-control form-control-field form-control-lg">
										<option value="">N/A</option>
										<option value="Tech">Tech</option>
										<option value="Admin">Admin</option>
									</select><br />
								</div>
								<div class="row">
									<label for="add_user_password">Temp Password</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_user_password" maxlength="15" /><br />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<input class="btn" class="form-control form-control-field form-control-lg" type="submit" name="add-user-submit" value="Submit New User" />
						</div>
					</div>
				</div>
			</form>
		</body>
    </div>
</div>

<?php include '../view/footer.php';?>
 