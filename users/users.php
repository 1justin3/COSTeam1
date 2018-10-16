<?php
    include '../model/database.php';
    if(!ISSET($_POST['userNameInput']) || !ISSET($_POST['userPassword'])){
        $_SESSION['Result'] = "Username or Password is incorrect";
        $_SESSION['ActionType'] = "Warning";
        header("location:../login.php");
    }; /* Prevents SQL error if user doesnt enter a Username or Password */


    $UName = mysqli_real_escape_string($db, $_POST['userNameInput']);
    $Pass = mysqli_real_escape_string($db, $_POST['userPassword']);
    $query = mysqli_query($db, "SELECT e.F_Name, e.L_Name, et.UserType, et.EmployeeID, et.PassHash FROM employee e JOIN emp_type et ON e.EmployeeID = et.EmployeeID WHERE e.EMAIL ='$UName'");
    while ($user = mysqli_fetch_array($query)){
        $ValidUser = $user;
    }
    mysqli_close();
    if (ISSET($ValidUser)){
        $_SESSION['FName'] = $ValidUser[0];
        $_SESSION['LName'] = $ValidUser[1];
        $_SESSION['UserType'] = $ValidUser[2];
        $_SESSION['EmployeeID'] = $ValidUser[3];
        $VerifyPass = $ValidUser[4];
        /*$_SESSION['Result'] = ""; //For status messages when clicking submit */
        if (password_verify($Pass, $VerifyPass)){
        }else{
            session_start();
            session_destroy();
            session_start();
            $_SESSION['Result'] = "Username or Password is incorrect";
            $_SESSION['ActionType'] = "Warning";
        }
    }
    else{
        $_SESSION['Result'] = "Username or Password is incorrect";
        $_SESSION['ActionType'] = "Warning";
    }
    header("location:../index.php");
	?>