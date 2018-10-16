<?php

include '../view/header.php';
 ?>
 
<div class="body">
    <div id="primary" class="body">
        <body class="main">
			<div class="container">
            	<h1>Select Software Record to Review</h1>
            	<form name="searchsoftware" method="post" action="functions.php">
					<div class="form-group">
						<div class="row justify-content-md-center">
							<div class="col-md-4">
								<input type="search" placeholder="Software Name" class="form-control form-control-field form-control-md" name="search_software_softwareid" /><br />
							</div>
							<div class="col-md-4">	
								<input class="btn" class="form-control form-control-field form-control-md" type="submit" name="search-software-submit" value="Search for Software" />
							</div>
						</div>
					</div>
				</form>
			</div>
            <!-- <h1>Software Form</h1> -->
            <div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
			</div>
            <form name="editsoftware" method="post" action="functions.php">
				<div class="form-group">
					<div class="container">
						<div class="row justify-content-lg-center">
							<div class="col-lg-4">
								<input type="hidden" class="form-control form-control-field form-control-md" name="update_software_softwareid" readonly />
                                <div class="row justify-content-lg-left">
                                    <label for="update_software_softwareid">Renew by Date</label>
                                    <input type="number" class="form-control form-control-field form-control-md" name="update_software_softwareid"  readonly /><br />
                                </div>
								<div class="row justify-content-lg-left">
									<label for="edit_software_softwarename">Software Name</label>
									<input type="text" class="form-control form-control-field form-control-md" name="edit_software_softwarename" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<!--Select List options manually added from the "SOFTWARE_MANUFACTURER" table-->
									<label for="edit_software_manufacturer">Manufacturer</label>
									<select name="edit_software_manufacturer" class="form-control form-control-field form-control-md" required>
										<option value="">N/A</option>
										<option value="1">Adobe</option>
										<option value="2">Microsoft</option>
									</select><br />
								</div>
								<div class="row justify-content-lg-left">	
									<label for="edit_software_licensesavailable">Licenses Available</label>
									<input type="number" class="form-control form-control-field form-control-md" name="edit_software_licensesavailable" min="0" max="999999999" /><br />
								</div>
							</div>
							<div class="col-lg-4">	
								<div class="row justify-content-lg-left">
									<label for="edit_software_licensetype">License Type</label>
									<input type="text" class="form-control form-control-field form-control-md" name="edit_software_licensetype" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="edit_software_expiration">Expiration Date</label>
									<input type="date" class="form-control form-control-field form-control-md" name="edit_software_expiration" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="edit_software_licenseserver">License Server</label>
									<input type="text" class="form-control form-control-field form-control-md" name="edit_software_licenseserver" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label for="edit_software_licensekey">License Key</label>
									<input type="text" class="form-control form-control-field form-control-md" name="edit_software_licensekey" maxlength="100" /><br />
								</div>
							</div>
						</div>
						<div class="row justify-content-lg-center">
							<div class="col-lg-4">
								<input class="btn" class="form-control form-control-field form-control-md" type="submit" name="edit-software-submit" value="Submit" />
							</div>
						</div>
					</div>
				</div>
			</form>
		</body>
	</div>
</div>

<?php include '../view/footer.php';?>
 