<?php

include '../view/header.php';

 ?>
<div class="body">
    <div id="primary" class="body">
        <body class="main">
			<h1>Add Software Form</h1>
			<div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
			</div>
			<form name="addsoftware" method="post" action="functions.php">
				<div class="form-group">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="row">
									<label for="add_software_softwarename">Software Name</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_software_softwarename" maxlength="50" /><br />
								</div>
								<div class="row">
									<!--Select List options manually added from the "SOFTWARE_MANUFACTURER" table-->
									<label for="add_software_manufacturer">Manufacturer</label>
									<select name="add_software_manufacturer" class="form-control form-control-field form-control-lg" required>
										<option value="">N/A</option>
										<option value="1">Adobe</option>
										<option value="2">Microsoft</option>
									</select><br />
								</div>
								<div class="row">	
									<label for="add_software_licensesavailable">Licenses Available</label>
									<input type="number" class="form-control form-control-field form-control-lg" name="add_software_licensesavailable" min="0" max="999999999" /><br />
								</div>
							</div>
							<div class="col">	
								<div class="row">
									<label for="add_software_licensetype">License Type</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_software_licensetype" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_software_expiration">Expiration Date</label>
									<input type="date" class="form-control form-control-field form-control-lg" name="add_software_expiration" /><br />
								</div>
								<div class="row">
									<label for="add_software_licenseserver">License Server</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_software_licenseserver" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_software_licensekey">License Key</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_software_licensekey" maxlength="100" /><br />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<input class="btn" class="form-control form-control-field form-control-lg" type="submit" name="edit-software-submit" value="Submit New Software" />
							</div>
						</div>
					</div>
				</div>
			</form>
		</body>
	</div>
</div>

<?php include '../view/footer.php';?>
 