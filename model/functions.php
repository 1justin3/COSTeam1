<?php

function get_user_nav(){
	$adminNav = array('../edit-asset/edit-asset', '../edit-software/edit-software', '../edit-people/edit-people','../audit/audit', '../reports/reports');
	$adminButtons = array('Asset', 'Software', 'People', 'Audit', 'Reports');
	$techNav = array('../edit-asset/edit-asset', '../edit-software/edit-software', '../edit-people/edit-people', '../audit/audit', '../reports/reports');
	$techButtons = array('Asset', 'Software', 'People', 'Audit', 'Reports');
	$userNav = array();
    global $navBarValues, $buttonValues,$user_type;
    $userType = $_SESSION['UserType'];
	if($userType == "Admin"){
        $navBarValues = $adminNav;
		$buttonValues = $adminButtons;
	}elseif($userType == "Tech"){
		$navBarValues = $techNav;
		$buttonValues = $techButtons;
	}else{
		$navBarValues = $userNav;
    }
};

//Functions for adding records:
//Function for submit button on "Add Asset"
if (!empty($_POST['add-asset-submit'])) {
   //do something here;
}

//Function for submit button on "Add Software"
if (!empty($_POST['add-software-submit'])) {
   //do something here;
}

//Function for submit button on "Add User"
if (!empty($_POST['add-user-submit'])) {
   //do something here;
}



//Functions for editing records:
//Function for submit button on "Edit Asset"
if (!empty($_POST['edit-asset-submit'])) {
   //do something here;
}

//Function for submit button on "Edit Software"
if (!empty($_POST['edit-software-submit'])) {
   //do something here;
}

//Function for submit button on "Edit User"
if (!empty($_POST['edit-user-submit'])) {
   //do something here;
}



//Functions for auditing and reporting:
//Function for submit button on "Audit"
if (!empty($_POST['audit-submit'])) {
   //do something here;
}

//Function for submit button on "Reports"
if (!empty($_POST['report-submit'])) {
	$activereport = $_POST['selectedreport'];
	if(empty($activereport))
	{
		array_push($errors, "Please select a report.");
	} else {
		switch($activereport){
			case "usersassets": echo("usersassets"); break;
			case "auditinventory": echo("auditinventory"); break;
			case "buildingassets": echo("buildingassets"); break;
			default: echo("Error!"); exit(); break;
		}
		exit();
	}
}


?>