<?php
	include 'model/functions.php';
    include 'model/database.php';
	?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link href="styles.css" rel="stylesheet" type="text/css" media="all">
	<nav class="navbar sticky-top navbar-expand-xl navbar-light">
		<div class="container-fluid">
      		<a class="logo"><img alt="Brand" src="college-science-green.png" alt="COS"></a>
        </div>
    </nav>
    <div class="container col-lg-4">
		<?php include 'model/messenger.php';?>
    </div>
	<div class="container">
        <form class="form-login" method="post" action="users/users.php">
            <div row>
                 <div class=" form-group row justify-content-xl-center">
                    <div col class="col-lg-4">
                    <input type="text" class="form-control" name="userNameInput" placeholder="Username">
                    </div>
                </div>
            </div>
            <div row>
                <div class="form-group row justify-content-xl-center">
                    <div col class="col-lg-4">
                        <input type="password" class="form-control" name="userPassword" placeholder="Password">
                    </div>
                </div>
            </div> 
                <div class="form-group row justify-content-xl-center"> 
                    <div col class="col-lg-10">
                    <button type="submit"  class="btn btn-lg">Login</a></button>
                    </div>
                </div>
            </div>
        </form>
    </div>  