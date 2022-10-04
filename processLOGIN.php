<?php
    session_start();
    /**
    * Author: Baavika Wijesundera 103520158
    * Target: ASSIGN3
    * Purpose: PHP
    * Created: 15/10/2021
    * Last updated: 23/10/2021
    * Credits: None
    */
    function sanitise_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (isset($_POST["submit"])){
        if (isset($_SESSION["Log_attempt"]) && !empty ($_SESSION["Log_attempt"])){
            if ($_SESSION["Log_attempt"] == "1"){
                $_SESSION["Log_attempt"] = "2";
            }else if($_SESSION["Log_attempt"] == "2"){
                $_SESSION["Log_attempt"] = "3";
            }else if($_SESSION["Log_attempt"] == "3"){
                $_SESSION["Log_attempt"] = "1";
                header ("location: index.php");
                exit(); 
            }

        }else{
            $_SESSION["Log_attempt"] = "1";
        }
        if (isset ($_POST["Username"]) && !empty ($_POST["Username"])){
            $Username = $_POST["Username"];
            $Username = sanitise_input($Username);
            //echo "<p> Username: $Username</p>";
            if (isset ($_POST["Password"]) && !empty ($_POST["Password"])){
                $Password = $_POST["Password"];
                $Password = sanitise_input($Password);
                //echo "<p> Password: $Password</p>";

                require_once ("settings.php"); // connection info

                $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
                // check if connection is successful
                if (!$conn){
                    // Display error msg
                    echo "<p class='manage_error'>Database connection failure </p>";
                    header ("location: login.php");
                    exit();
                }else{
                    // Upon successful connection
                    $sql_table= "users";
                    $user_query = "SELECT * FROM $sql_table WHERE User_Uid = '$Username'";
                    $user_result = mysqli_query($conn, $user_query);
                    $row = mysqli_fetch_assoc($user_result);
                    $pwd = $row["User_Pwd"];
                    //echo "<p> DB Password: $pwd</p>";
                    // checks if the execution was successful
                    if (!$row){
                        echo "<p class='manage_error'>Something is wrong with ", $query,"</p>";
                        header ("location: login.php?Username=invalid");
                        exit ();
                    } else {
                        $Password = md5($Password);
                        //echo $Password;
                        //$password_check = password_verify($Password, $pwd); password_verify(),password_hash() cannot be used becouse the current Mercury server doesn't support it
                        if ($Password == $pwd){
                            $_SESSION["UserID"] = $row["User_ID"];
                            //echo "<p>UserID : ", $_SESSION["UserID"],"</p>";
                            header ("location: manage.php?view=All&orderby=EOInumber&submit=View");

                        }else{
                            header ("location: login.php?Password=invalid");
                            exit ();
                        }
                    }
                }
            }else{
                header ("location: login.php?Password=empty");
                exit();
            }
        }else{
            header ("location: login.php?Username=empty");
            exit();
        }

    }

?>