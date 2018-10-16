<?php 
    if(($_SESSION['Result'] != "")){
        $result = $_SESSION['Result'];
        $_SESSION['Result'] = "";
        if($_SESSION['ActionType'] =="Success"){
            echo" 
                <div class='container'>	
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$result</strong>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Clos'>
                                <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>
                </div>";}else{
                    echo" 
                <div class='container'>	
                    <div class='alert alert-danger alert-dismissible fade show ' role='alert'>
                        <strong>$result</strong>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Clos'>
                                <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>
                </div>";
                };
}; ?>
