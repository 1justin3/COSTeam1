<?php
	include '../model/functions.php';
	include '../model/database.php';
	 if ( !isset($_SESSION['FName']) ) {
        header("location:../login.php");
    }
    $first_name = $_SESSION['FName'];
	$last_name = $_SESSION['LName'];
	?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../styles.css" rel="stylesheet" type="text/css" media="all">
	<nav class="navbar sticky-top navbar-expand-xl navbar-light">
		<div class="container-fluid">
      		<a href="../index.php" class="logo"><img alt="Brand" src="../college-science-green.png" alt="COS"></a>
	  		<button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  			<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav">
			 		<?php
					  $current = '../'. basename($_SERVER['PHP_SELF'],'.php') . '/' .basename($_SERVER['PHP_SELF'],'.php');
						get_user_nav();
					  	 $count = 0;
						 foreach($navBarValues as $nav)
							{	
								if($current == $navBarValues[$count]){
								echo "<li class='nav-item '><a href=".$nav.".php button  class='btn  navbar-btn btn-lg current'>".$buttonValues[$count]."</a></button></li>";
								}else{
								echo "<li class='nav-item'><a href=".$nav.".php button  class='btn  navbar-btn btn-lg'>".$buttonValues[$count]."</a></button></li>";
								}
								$count++;
							}
					  ?>
					  </ul>
					  </div>
					  
					<span class="float-right">
						<a href="../logout.php" button  class="btn navbar-btn btn-right btn-lg">Logout</a></button>
						<a href="../activeuser/user.php" button  class="btn navbar-btn btn-right btn-lg"><?php echo $first_name." ".$last_name?> </a></button>
						<a href="../faq/faq.php" button class="btn navbar-btn btn-right btn-lg"><i class="far fa-question-circle" style="font-size:24px; color:white;"></i></button></a>
						
					</span>
  	   </div>
	</nav>
	<br/>
	<br/>
</html>
