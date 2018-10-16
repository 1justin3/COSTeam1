<?php
    include '../model/database.php';

    $UName = $_SESSION['EmployeeID'];
    $OldPass2 = mysqli_real_escape_string($db, $_POST['user-old-password']);
    $NewPass1 = mysqli_real_escape_string($db, $_POST['user-new-password-1']);
    $NewPass2 = mysqli_real_escape_string($db, $_POST['user-new-password-2']);

    //Check to make sure that the two new passwords are not null.
    //if($OldPass2 !="" && $NewPass1 !="" && $NewPass2 !=""){
    if($NewPass1 !="" && $NewPass2 !=""){
        //Check to see that the two new passwords match
        if($NewPass1 == $NewPass2){
            $query = mysqli_query($db, "SELECT PassHash FROM emp_type WHERE EmployeeID ='$UName'");
            echo "Querry is: SELECT PassHash FROM emp_type WHERE EmployeeID ='$UName'"; /*Do we need this? Justin*/
            while ($user = mysqli_fetch_array($query)){
                $ValidUser = $user;
            }/*Do we need this? Justin*/
            if (ISSET($ValidUser)){
                $VerifyOldPass1 = $ValidUser[0];
                $NewPassDBValue = password_hash($NewPass1, PASSWORD_DEFAULT);
                if (password_verify($OldPass2, $VerifyOldPass1)) {
                    $query2 = mysqli_query($db, "UPDATE emp_type SET PassHash ='$NewPassDBValue' WHERE EmployeeID ='$UName'");
                    header("location:../activeuser/user.php");
                    $_SESSION['Result'] = "Password updated" ;
                    $_SESSION['ActionType'] = "Success";
                } else{
                    $_SESSION['Result'] = "Old password does not match";
                    $_SESSION['ActionType'] = "Warning";
                    header("location:../activeuser/user.php");
                }

            } else{
                $_SESSION['Result'] = "Error 27";
                $_SESSION['ActionType'] = "Warning";
                header("location:../activeuser/user.php");
            }

        } else{
            $_SESSION['Result'] = "New passwords do not match";
            $_SESSION['ActionType'] = "Warning";
            header("location:../activeuser/user.php");
            
        }
    } else{
        $_SESSION['Result'] = "Fields submitted are Null.";
        $_SESSION['ActionType'] = "Warning";
        header("location:../activeuser/user.php");
    }
	?>