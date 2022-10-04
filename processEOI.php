<?php
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
        
        if (isset ($_POST["job_reference"]) && !empty ($_POST["job_reference"])){
            $jobref = $_POST["job_reference"];
            $jobref = sanitise_input($jobref);
            //echo "<p> Job Ref: $jobref</p>";
            if (!preg_match("/^[A-Za-z0-9]{5}$/",$jobref)) {
                header ("location: apply.php?jobref=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?jobref=empty");
            exit();
        }
        if (isset ($_POST["given_name"]) && !empty ($_POST["given_name"])){
            $gname = $_POST["given_name"];
            $gname = sanitise_input($gname);
            //echo "<p> First Name: $gname</p>";
            if (!preg_match("/^[A-Za-z]{1,20}$/",$gname)) {
                header ("location: apply.php?gname=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?gname=empty");
            exit();
        }
        if (isset ($_POST["family_name"]) && !empty ($_POST["family_name"])){
            $fname = $_POST["family_name"];
            $fname = sanitise_input($fname);
            //echo "<p> Last Name: $fname</p>";
            if (!preg_match("/^[A-Za-z\-]{1,20}$/",$fname)) {
                header ("location: apply.php?fname=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?fname=empty");
            exit();
        }
        if (isset ($_POST["dob"]) && !empty ($_POST["dob"])){
            $dob = $_POST["dob"];
            $dob = sanitise_input($dob);
            //echo "<p> DOB: $dob</p>";
            if (preg_match("/^\d{2}\\/\d{2}\\/\d{4}$/",$dob)) {
                $year = date("Y");
                $dob_year = substr($dob, -4);
                $age = $year - $dob_year;
                //echo "<p> Age: $age" </p>;
                if($age < 15 || $age > 80) {
                    header ("location: apply.php?dob=range");
                    exit();
                }
            }else{                
                header ("location: apply.php?dob=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?dob=empty");
            exit();
        }
        if (isset ($_POST["gender"]) && !empty ($_POST["gender"])){
            $gender = $_POST["gender"];
            $gender = sanitise_input($gender);
            //echo "<p> Gender: $gender</p>";
        }else{
            header ("location: apply.php?gender=empty");
            exit();
        }
        if (isset ($_POST["address"]) && !empty ($_POST["address"])){
            $address = $_POST["address"];
            $address = sanitise_input($address);
            //echo "<p> Address: $address</p>";
            if (!preg_match("/^[A-Za-z0-9\s]{1,40}$/",$address)) {
                header ("location: apply.php?address=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?address=empty");
            exit();
        }
        if (isset ($_POST["town"]) && !empty ($_POST["town"])){
            $town = $_POST["town"];
            $town = sanitise_input($town);
            //echo "<p> Town: $town</p>";
            if (!preg_match("/^[A-Za-z0-9\s]{1,40}$/",$town)) {
                header ("location: apply.php?town=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?town=empty");
            exit();
        }
        if (isset ($_POST["state"]) && !empty ($_POST["state"])){
            $state = $_POST["state"];
            //$state = sanitise_input($state);
            //echo "<p> State: $state</p>";
            if ($state == "placeholder" ) {
                header ("location: apply.php?state=empty");
                exit();
            }
        }
        if (isset ($_POST["postcode"]) && !empty ($_POST["postcode"])){
            $postcode = $_POST["postcode"];
            $postcode = sanitise_input($postcode);
            //echo "<p> Postcode: $postcode</p>";
            if (preg_match("/^[0-9]{4}$/",$postcode)) {
                $postcode_first = substr($postcode,-4,1);
                //echo "<p> Postcode First: $postcode_first</p>";
                if (($postcode_first == 3 || $postcode_first == 8) && $state != "VIC") {
                    header ("location: apply.php?postcode=match");
                    exit();
                }else if (($postcode_first == 1 || $postcode_first == 2) && $state != "NSW") {
                    header ("location: apply.php?postcode=match");
                    exit();
                }else if (($postcode_first == 4 || $postcode_first == 9) && $state != "QLD") {
                    header ("location: apply.php?postcode=match");
                    exit();
                }else if ($postcode_first == 0 && ($state != "NT" || $state != "ACT")) {
                    header ("location: apply.php?postcode=match");
                    exit();
                }else if ($postcode_first == 6 && $state != "WA") {
                    header ("location: apply.php?postcode=match");
                    exit();
                }else if ($postcode_first == 5 && $state != "SA") {
                    header ("location: apply.php?postcode=match");
                    exit();
                }else if ($postcode_first == 7 && $state != "TAS") {
                    header ("location: apply.php?postcode=match");
                    exit();
                }
            }else{
                header ("location: apply.php?postcode=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?postcode=empty");
            exit();
        }        
        if (isset ($_POST["email"]) && !empty ($_POST["email"])){
            $email = $_POST["email"];
            $email = sanitise_input($email);
            //echo "<p> Email: $email</p>";
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header ("location: apply.php?email=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?email=empty");
            exit();
        }
        if (isset ($_POST["phone"]) && !empty ($_POST["phone"])){
            $phone = $_POST["phone"];
            $phone = sanitise_input($phone);
            //echo "<p> Phone No: $phone</p>";
            if (!preg_match("/^[\d\s]{8,12}$/",$phone)) {
                header ("location: apply.php?phone=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?phone=empty");
            exit();
        }
        if (isset ($_POST["phone"]) && !empty ($_POST["phone"])){
            $phone = $_POST["phone"];
            $phone = sanitise_input($phone);
            //echo "<p> Phone No: $phone</p>";
            if (!preg_match("/^[\d\s]{8,12}$/",$phone)) {
                header ("location: apply.php?phone=invalid");
                exit();
            }
        }else{
            header ("location: apply.php?phone=empty");
            exit();
        }
        if(isset($_POST['skill_type']) && !empty ($_POST["skill_type"])){
            $skill_type = implode(', ', $_POST['skill_type']);
            $skill_type = sanitise_input($skill_type);
            $comments = $_POST["comments"];
            $comments = sanitise_input($comments);
            //echo "<p> Skill types: $skill_type</p>";
            //echo "<p> Comments: $comments</p>";
            if(in_array('otherskills', $_POST['skill_type']) && empty ($comments)){
                header ("location: apply.php?comments=invalid");
                exit();
              }
        }else{
            header ("location: apply.php?comments=empty");
            exit();
        }

        require_once ("settings.php"); // connection info

        $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
        // check if connection is successful
        if (!$conn){
            // Display error msg
            echo "<p>Database connection failure </p>";
            header ("location: apply.php");
            exit();
        }else{
            // Upon successful connection
            $sql_table= "eoi";
            $table_query = "CREATE TABLE IF NOT EXISTS $sql_table
            ( EOInumber INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
            Job_ref VARCHAR(5) NOT NULL,
            Firstname VARCHAR(20) NOT NULL,
            Lastname VARCHAR(20) NOT NULL,
            Address VARCHAR(40) NOT NULL,
            Suburb VARCHAR(40) NOT NULL,
            State VARCHAR(3) NOT NULL,
            Postcode INT NOT NULL,
            Email VARCHAR(50) NOT NULL,
            Telephone VARCHAR(15) NOT NULL,
            Skills VARCHAR(100) NOT NULL,
            Other_skills VARCHAR(200),
            EOI_status VARCHAR(8) DEFAULT 'New' CHECK (EOI_status = 'New' OR EOI_status = 'Current' OR EOI_status = 'Final' ));";

            $table_result = mysqli_query($conn, $table_query);

            // checks if the execution was successful
            if (!$table_result){
                echo "<p>Something is wrong with ", $query,"</p>";
                header ("location: apply.php");
                exit ();
            }

            $query = "INSERT INTO eoi(Job_ref,Firstname,Lastname,Address,Suburb,State,Postcode,Email,Telephone,Skills,Other_skills)
            VALUES('$jobref','$gname','$fname','$address','$town','$state','$postcode','$email','$phone','$skill_type','$comments');";

            $insert_result = mysqli_query($conn, $query);
            $last_id = $conn->insert_id;

            // checks if the execution was successful
            if (!$insert_result){
                echo "<p>Something is wrong with ", $query,"</p>";
                header ("location: apply.php");
                exit ();
            }
            // close the database connection
            mysqli_close($conn);
        }

        header ("location: apply.php?form=$last_id");
        exit();
    }else{
        header ("location: apply.php");
        exit();
    }    
    
?>