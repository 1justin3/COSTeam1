<?php

include '../view/header.php';

 ?>
 <div class="body">
    <div id="primary" class="body">
        <body class="main">
			<h1>Add Asset Form</h1>
			<div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
			</div>
			<form name="addasset" method="post" action="functions.php">
				<div class="form-group">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="row">
									<label for="add_asset_inventorynumber">Inventory Number</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_inventorynumber" maxlength="50" /><br />
								</div>
								<div class="row">	
									<label for="add_asset_inventorydate">Inventory Date</label>
									<input type="date" class="form-control form-control-field form-control-lg" name="add_asset_inventorydate" /><br />
								</div>
								<div class="row">
									<!--Select List options manually added from the "BUILDING" table-->
									<label for="add_asset_building">Building</label>
									<select name="add_asset_building" class="form-control form-control-field form-control-lg">
										<option value="">N/A</option>
										<option value="1">CS</option>
										<option value="2">LA</option>
									</select><br />
								</div>
								<div class="row">
									<label for="add_asset_room">Room</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_room" maxlength="10" /><br />
								</div>
								<div class="row">
									<label for="add_asset_employeeid">EmployeeID</label>
									<input type="number" class="form-control form-control-field form-control-lg" name="add_asset_employeeid" min="0" max="999999999" /><br />
								</div>
								<div class="row">
									<label for="add_asset_usage">Usage</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_usage" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_asset_status">Status</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_status" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_asset_datesurplussed">Date Surplussed</label>
									<input type="date" class="form-control form-control-field form-control-lg" name="add_asset_datesurplussed" /><br />
								</div>
								<div class="row">
									<label for="add_asset_notes">Notes</label>
									<textarea name="add_asset_notes" class="form-control form-control-field form-control-lg" cols="3" rows="14" maxlength="500"></textarea><br />
								</div>
							</div>
							<div class="col">
								<div class="row">	
									<label for="add_asset_hostname">Host Name</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_hostname" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_asset_addomain">AD Domain</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_addomain" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_asset_ram">RAM (GB)</label>
									<input type="number" class="form-control form-control-field form-control-lg" name="add_asset_ram" min="0" max="999" placeholder="" /><br />
								</div>
								<div class="row">
									<label for="add_asset_macaddress">MAC Address</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_macaddress" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_asset_additionalmacaddress">Additional MAC Address</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_additionalmacaddress" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_asset_staticipv4">Static IPv4 Address</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_staticipv4" maxlength="30" /><br />
								</div>
								<!--Select List options manually added from the "OS" table-->
								<div class="row">
									<label for="add_asset_operatingsystem1">Operating System</label>
									<select class="form-control form-control-field form-control-lg" name="add_asset_operatingsystem1">
										<option value="">N/A</option>
										<option value="1">Windows 7</option>
										<option value="2">Windows 10</option>
									</select><br />
								</div>	
								<div class="row">
									<label for="add_asset_operatingsystemversion">Operating System Version</label>
									<input type="text" class="form-control form-control-field form-control-lg"  name="add_asset_operatingsystemversion" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_asset_additionalosvm">Additional OS VM</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_additionalosvm" maxlength="50" /><br />
								</div>
								<div class="row">
									<!--Select List options manually added from the "DEVICE_TYPE" table-->
									<label for="add_asset_hardwaretype">Hardware Type</label>
									<select class="form-control form-control-field form-control-lg" name="add_asset_hardwaretype">
										<option value="">N/A</option>
										<option value="1">Desktop</option>
										<option value="2">Laptop</option>
									</select><br />
								</div>	
								<div class="row">
									<!--Select List options manually added from the "HARDWARE_MANUFACTURER" table-->
									<label for="add_asset_manufacturer">Manufacturer</label>
									<select class="form-control form-control-field form-control-lg" name="add_asset_manufacturer">
										<option value="">N/A</option>
										<option value="1">Dell</option>
										<option value="2">Lenovo</option>
									</select><br />
								</div>
								<div class="row">
									<label for="add_asset_model">Model</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_model" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_asset_serial">Serial</label>
									<input type="text" class="form-control form-control-field form-control-lg" name="add_asset_serial" maxlength="50" /><br />
								</div>
								<div class="row">
									<label for="add_asset_hardware_hardwareid">Hardware ID Replaced</label>
									<input type="number" class="form-control form-control-field form-control-lg" name="add_asset_hardware_hardwareid" min="0" max="999999999" /><br />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<input class="btn" class="form-control form-control-field form-control-lg" type="submit" name="edit-asset-submit" value="Submit New Asset" />
							</div>
						</div>
					</div>
				</div>	
			</form>
		</body>
    </div>
</div>

<?php include '../view/footer.php';?>
 