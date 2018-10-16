<?php

include '../view/header.php';

 ?>

 <div class="body">
    <div id="primary" class="body">
        <body class="main">
			<h1>Change Password</h1>
			<div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
			</div>
			<div class="container">	 
				<form name="passwordchange" method="post" action="changepassword.php">
					<div class="form-group">
						<div class="row justify-content-xl-center">
							<div class="col-lg-2">
								<label class="col-form-label" for="user-old-password">Enter your existing password:</label>
							</div>	
							<div class="col-lg-6">
								<input type="password" class="form-control form-control-field form-control-lg" name="user-old-password" maxlength="50" /><br />
							</div>
						</div>
						<div class="row justify-content-xl-center">
							<div class="col-lg-2">
								<label class="col-form-label" for="user-new-password-1">Enter your new password:</label>
							</div>
							<div class="col-lg-6">
								<input type="password" class="form-control form-control-field form-control-lg" name="user-new-password-1" maxlength="50" /><br />
							</div>
						</div>	
						<div class="row justify-content-xl-center">
							<div class="col-lg-2">
								<label class="col-form-label" for="user-new-password-2">Confirm your new password:</label>
							</div>
							<div class="col-lg-6">
								<input type="password" class="form-control form-control-field form-control-lg" name="user-new-password-2" maxlength="50" /><br />
							</div>
						</div>	
						<div class="row justify-content-xl-center">
							<input class="btn" class="form-control form-control-field form-control-lg" type="submit" name="password-change-submit" value="Change Password" />
						</div>
					</div>
				</form>
			</div>
		</body>
    </div>
</div>

<?php include '../view/footer.php';?>
 