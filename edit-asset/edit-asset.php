<?php

include '../view/header.php';
 ?>
 <div class="body">
    <div id="primary" class="body">
        <body class="main">
			<div class="container">
				<h1>Search Asset Record to Review</h1>
				<form name="searchasset" method="post" action="functions.php">
					<div class="form-group">
						<div class="row justify-content-md-center">
							<div class="col-md-4">
								<input type="search" placeholder="Inventory Number" class="form-control form-control-field form-control-md" name="search_asset_hardwareid"/><br />
							</div>		
							<div class="col-md-4">
								<input class="btn" class="form-control form-control-field form-control-md" type="submit" name="search-asset-submit" value="Search for Asset" />
							</div>
						</div>
					</div>
				</form>
			<!-- <h1>Asset Form</h1>	 -->
				<?php include '../model/messenger.php';?>
			</div>
			<form name="editasset" method="post" action="functions.php">
				<div class="form-group">
					<div class="container">
						<div class="row justify-content-lg-center">
							<div class="col-lg-4">
								<input type="hidden" class="form-control form-control-field form-control-md" name="update_asset_hardwareid" readonly />
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_tag">Asset Tag</label>
									<input type="number" class="form-control form-control-field form-control-md" name="update_asset_tag" min="0" max="999999999"/><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_inventorynumber">Inventory Number</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_inventorynumber" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">	
									<label class="label-field" for="update_asset_inventorydate">Inventory Date</label>
									<input type="date" class="form-control form-control-field form-control-md" name="update_asset_inventorydate" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<!--Select List options populated from the pick-building.php that uses the "BUILDING" table-->
									<label class="label-field" for="update_asset_building">Building</label>
									<select name="update_asset_building" class="form-control form-control-field form-control-md">
										<option value="">N/A</option>
										<?php include '../model/pick-building.php';?>
									</select><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_room">Room</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_room" maxlength="10" /><br />
								</div>
								<!--Select List options populated from the pick-emp.php that uses the EMPLOYEE table-->
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_employeeid">Assigned User</label>
									<select class="form-control form-control-field form-control-md" name="update_asset_employeeid">
										<option value="">N/A</option>
										<?php include '../model/pick-emp.php';?>
									</select><br />
								</div>	
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_usage">Usage</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_usage" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_status">Status</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_status" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_datesurplussed">Date Surplussed</label>
									<input type="date" class="form-control form-control-field form-control-md" name="update_asset_datesurplussed" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_notes">Notes</label>
									<textarea name="update_asset_notes" class="form-control form-control-field form-control-md" cols="3" rows="15" maxlength="500"></textarea><br />
								</div>
							</div>
							<div class="col-lg-4">
								<div class="row justify-content-lg-left">	
									<label class="label-field" for="update_asset_hostname">Host Name</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_hostname" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_addomain">AD Domain</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_addomain" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_ram">RAM (GB)</label>
									<input type="number" class="form-control form-control-field form-control-md" name="update_asset_ram" min="0" max="999" placeholder="" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_macaddress">MAC Address</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_macaddress" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_additionalmacaddress">Additional MAC Address</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_additionalmacaddress" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_staticipv4">Static IPv4 Address</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_staticipv4" maxlength="30" /><br />
								</div>
								<!--Select List options populated from the pick-os.php that uses the "OS" table-->
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_operatingsystem1">Operating System</label>
									<select class="form-control form-control-field form-control-md" name="update_asset_operatingsystem1">
										<option value="">N/A</option>
										<?php include '../model/pick-os.php';?>
									</select><br />
								</div>	
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_operatingsystemversion">Operating System Version</label>
									<input type="text" class="form-control form-control-field form-control-md"  name="update_asset_operatingsystemversion" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_additionalosvm">Additional OS VM</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_additionalosvm" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<!--Select List options manually added from the "DEVICE_TYPE" table-->
									<label class="label-field" for="update_asset_hardwaretype">Hardware Type</label>
									<select class="form-control form-control-field form-control-md" name="update_asset_hardwaretype">
										<option value="">N/A</option>
										<option value="1">Desktop</option>
										<option value="2">Laptop</option>
									</select><br />
								</div>	
								<div class="row justify-content-lg-left">
									<!--Select List options populated from the pick-hmanufacturer.php that uses the "HARDWARE_MANUFACTURER" table-->
									<label class="label-field" for="update_asset_manufacturer">Manufacturer</label>
									<select class="form-control form-control-field form-control-md" name="update_asset_manufacturer">
										<option value="">N/A</option>
										<?php include '../model/pick-hmanufacturer.php';?>
									</select><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_model">Model</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_model" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_serial">Serial</label>
									<input type="text" class="form-control form-control-field form-control-md" name="update_asset_serial" maxlength="50" /><br />
								</div>
								<div class="row justify-content-lg-left">
									<label class="label-field" for="update_asset_hardware_hardwareid">Hardware ID Replaced</label>
									<input type="number" class="form-control form-control-field form-control-md" name="update_asset_hardware_hardwareid" min="0" max="999999999" /><br />
								</div>
							</div>
						</div>
						<div class="row justify-content-lg-center">
							<div class="col-lg-4">
								<input class="btn" class="form-control" type="submit" name="edit-asset-submit" value="Submit" />
							</div>
						</div>
					</div>
				</div>	
			</form>
		</body>
    </div>
</div>

<?php include '../view/footer.php';?>
 