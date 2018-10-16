<?php

include '../view/header.php';

 ?>
 <div class="body">
    <div id="primary" class="body">
        <body class="main">
            <h1>Run a report</h1>
            <div class="container col-lg-6">	
				<?php include '../model/messenger.php';?>
            </div>
            <div class="container">
                <form name="searchasset" method="post" action="functions.php">
                 <div class="form-group">
                    <div class="row">
                        <div class="col-md-8">
                            <select class="form-control form-control-field form-control-md" name="selectedreport" required/><br />
                                <option value="">Select a Report</option>
                                <option value="usersassets">Assets Assigned to a User</option>
                                <option value="auditinventory">Audit Inventory</option>
                                <option value="buildingassets">Assets in a Building</option>
                            </select><br />
                        </div>
                        <div class="col-md-4">
                            <input class="btn" class="form-control form-control-field form-control-md" type="submit" name="report-submit" value="Use This Report" />
                         </div>
                    </div>
                    </div>
                 </form>
            </div>
        </body>
    </div>
</div>

<?php include '../view/footer.php';?>
 