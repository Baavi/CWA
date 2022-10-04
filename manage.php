<?php
    /**
    * Author: Baavika Wijesundera 103520158
    * Target: ASSIGN3
    * Purpose: PHP
    * Created: 15/10/2021
    * Last updated: 23/10/2021
    * Credits: None
    */
    session_start();
    if(!isset($_SESSION["UserID"])){
        header ("location: login.php");
        exit ();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Creating Web Applications" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Baavika Wijesundera" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="styles/style.css" rel="stylesheet" />
    <script src="scripts/enhancements.js"></script>
    <title>Blue Genisys | Manage</title>
    <link rel="icon" href="images/atom.svg" type="image/icon" />
</head>
<?php
    function sanitise_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function display_table($query){
        require_once('settings.php');
        $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
                      
        if (!$conn) {
            echo "<p class='manage_error'>Database connection failure</p>"; 
        } else {
            $query = $query;              
            $result = mysqli_query($conn, $query);
            if(!$result) {
                echo "<p class='manage_error'>Something is wrong with ",	$query, "</p>";
            }else if (mysqli_num_rows($result) == 0){
                echo "<p class='manage_error'>No Records found</p>";
            } else {
                echo "<table><thead>";
                echo "<tr>\n"
                ."<th>EOI number</th>\n"
                ."<th>Job_ref</th>\n"
                ."<th>Firstname</th>\n"
                ."<th>Lastname</th>\n"
                ."<th>Address</th>\n"
                ."<th>Suburb</th>\n"
                ."<th>State</th>\n"
                ."<th>Postcode</th>\n"
                ."<th>Email</th>\n"
                ."<th>Telephone</th>\n"
                ."<th>Skills</th>\n"
                ."<th>Other_skills</th>\n"
                ."<th>EOI_status</th>\n"
                //."<th>Update status</th>\n"
                ."</tr>\n</thead>";
           
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>",$row["EOInumber"],"</td>";
                    echo "<td>",$row["Job_ref"],"</td>";  
                    echo "<td>",$row["Firstname"],"</td>";
                    echo "<td>",$row["Lastname"],"</td>";
                    echo "<td>",$row["Address"],"</td>";
                    echo "<td>",$row["Suburb"],"</td>";
                    echo "<td>",$row["State"],"</td>";
                    echo "<td>",$row["Postcode"],"</td>";
                    echo "<td>",$row["Email"],"</td>";
                    echo "<td>",$row["Telephone"],"</td>";
                    echo "<td>",$row["Skills"],"</td>";
                    echo "<td>",$row["Other_skills"],"</td>";
                    echo "<td>",$row["EOI_status"],"</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($result);
            } 
            mysqli_close($conn);
        }
    }

    function delete_table($query){
        require_once('settings.php');
        $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
                      
        if (!$conn) {
            echo "<p class='manage_error'>Database connection failure</p>"; 
        } else {
            $query = $query;              
            $result = mysqli_query($conn, $query);
            if(!$result) {
                echo "<p class='manage_error'>Something is wrong with ",	$query, "</p>";
            } else {
                echo "<p class ='manage_error'>Records Deleted!</p>";
                echo("<script>location.href = 'manage.php?view=All&orderby=EOInumber&submit=View';</script>");
            } 
            mysqli_close($conn);
        }
    }

    function update_table($query){
        require_once('settings.php');
        $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
                      
        if (!$conn) {
            echo "<p class='manage_error'>Database connection failure</p>"; 
        } else {
            $query = $query;              
            $result = mysqli_query($conn, $query);
            if(!$result) {
                echo "<p class='manage_error'>Something is wrong with ",	$query, "</p>";
            } else {
                echo "<p class='manage_error' id= 'applied'>Records Updated!</p>";
                echo("<script>location.href = 'manage.php?view=All&orderby=EOInumber&submit=View';</script>");
            } 
            mysqli_close($conn);
        }
    }
?>
  <body>
    <header>
        <nav id="navbar" class="nav">
            <a id="nav-logo" href="index.php">
            <img src="images/atom.svg " width="50" height="50" alt="Logo" /></a><br />
            <div class="dark-switch active">
                <!-- All the icons are taken from https://www.flaticon.com/-->
                <img src="images/dark-switch.svg" title="Dark Mode" alt="Dark Mode" />
            </div>
            <div class="light-switch">
                <!-- All the icons are taken from https://www.flaticon.com/-->
                <img src="images/light-switch.svg" title="Light Mode" alt="Light Mode" />
            </div>
            <div class="logout">
            <a id="logout" href="logout.php">
            <!-- All the icons are taken from https://www.flaticon.com/-->
            <img src="images/logout.svg" title="Logout" width="35" height="35" alt="Logout" /></a>
            </div>
        </nav>
    </header>
    <section class="manage" id="manage">
        <div class="tools">
            <form name="tools1" id="tools1" method="get" action="manage.php" novalidate="novalidate">
                <fieldset>
                    <legend>View EOI</legend>
                    <p id="view1">
                    <label for="All">All</label>
                    <input type="radio" id="All" name="view" value="All" checked="checked"/>
                    <label for="ADS034">DS034</label>
                    <input type="radio" id="ADS034" name="view" value="DS034" />
                    <label for="ACS302">CS302</label>
                    <input type="radio" id="ACS302" name="view" value="CS302" />
                    </p>
                    <p class="form" id="view2">
                    <input type="text" name="view_gname" id="view_gname" placeholder=" " maxlength="20" pattern="[A-Za-z]{1,20}"/>
                    <label for="view_gname" class="label-name"> 
                    <span class="content-name">First Name</span></label>
                    </p>
                    <p class="form" id="view3">
                    <input type="text" name="view_fname" id="view_fname" placeholder=" " maxlength="20" pattern="[A-Za-z]{1,20}"/>
                    <label for="view_fname" class="label-name"> 
                    <span class="content-name">Family Name</span></label>
                    </p>
                    <p class="form">
                        <select name="orderby" id="orderby">
                            <option value="EOInumber" selected="selected">EOI Number</option>
                            <option value="Job_ref">Job Reference</option>
                            <option value="Firstname">First Name</option>
                            <option value="Lastname">Family Name</option>
                            <option value="State">State</option>
                            <option value="Postcode">Post Code</option>
                            <option value="EOI_status">EOI Status</option>
                        </select>
                        <label for="orderby" class="label-name"><span class="content-name">Sort By</span></label>
                    </p>
                    <input class="submit_btn" type="submit" name="submit" value="View" />
                </fieldset>
            </form>
            <form name="tools2" id="tools2" method="post" action="manage.php" novalidate="novalidate">
                <fieldset>
                    <legend>Update EOI</legend>
                    <p class="form" id="update1">
                    <input type="text" name="update_eoi" id="update_eoi" placeholder=" " maxlength="5" pattern="[0-9]{1,5}"/>
                    <label for="update_eoi" class="label-name"> 
                    <span class="content-name">EOI Number</span></label>
                    </p>
                    <p id="update2">
                    <label for="New">New</label>
                    <input type="radio" id="New" name="update_status" value="New" checked="checked"/>
                    <label for="Current">Current</label>
                    <input type="radio" id="Current" name="update_status" value="Current" />
                    <label for="Final">Final</label>
                    <input type="radio" id="Final" name="update_status" value="Final" />
                    </p>
                    <input class="submit_btn" type="submit" name="submit2" value="Update" />
                </fieldset>
            </form>
            <form name="tools3" id="tools3" method="post" action="manage.php" novalidate="novalidate">
                <fieldset>
                    <legend>Delete EOI</legend>
                    <p id="delete">
                    <label for="None">None</label>
                    <input type="radio" id="None" name="delete" value="None" checked="checked"/>
                    <label for="DDS034">DS034</label>
                    <input type="radio" id="DDS034" name="delete" value="DS034" />
                    <label for="DCS302">CS302</label>
                    <input type="radio" id="DCS302" name="delete" value="CS302" />
                    </p>
                    <input class="submit_btn" type="submit" name="submit3" value="Delete" />
                </fieldset>
            </form>
        </div>
        <div class="display">
            <?php
                if (isset($_GET["submit"])){
                    if (isset ($_GET["view"]) && !empty ($_GET["view"])){
                        $view = $_GET["view"];
                        $view = sanitise_input($view);
                        $view_gname = $view_fname = "";
                        if (isset ($_GET["view_gname"])){
                            $view_gname = $_GET["view_gname"];
                            $view_gname = sanitise_input($view_gname);
                        }
                        if (isset ($_GET["view_fname"])){
                            $view_fname = $_GET["view_fname"];
                            $view_fname = sanitise_input($view_fname);
                        }
                        if(isset ($_GET["orderby"])){
                            $orderby = $_GET["orderby"];
                            $orderby = sanitise_input($orderby);
                        }

                        //echo "<p> View: $view</p>";
                        //echo "<p> Gname: $view_gname</p>";
                        //echo "<p> Fname: $view_fname</p>";
                        //echo "<p> Order By: $orderby</p>";
                        
                        if ((($view_gname != "") && ($view_fname != "")) && ($view != 'All')){
                            $query = "SELECT * FROM eoi WHERE Job_ref = '$view' AND Firstname LIKE '$view_gname%' OR Lastname LIKE '$view_fname%' ORDER BY $orderby";
                        }else if ((($view_gname != "") && ($view_fname == "")) && ($view != 'All')){
                            $query = "SELECT * FROM eoi WHERE Job_ref = '$view' AND Firstname LIKE '$view_gname%' ORDER BY $orderby";
                        }else if ((($view_gname == "") && ($view_fname != "")) && ($view != 'All')){
                            $query = "SELECT * FROM eoi WHERE Job_ref = '$view' AND Lastname LIKE '$view_fname%' ORDER BY $orderby";
                        }else if ((($view_gname != "") && ($view_fname == "")) && ($view == 'All')){
                            $query = "SELECT * FROM eoi WHERE Firstname LIKE '$view_gname%' ORDER BY $orderby";
                        }else if ((($view_gname == "") && ($view_fname != "")) && ($view == 'All')){
                            $query = "SELECT * FROM eoi WHERE Lastname LIKE '$view_fname%' ORDER BY $orderby";
                        }
                        if (($view_gname == "") && ($view_fname == "")){
                            if ($view == 'All'){
                                $view = "%";
                            }
                            $query = "SELECT * FROM eoi WHERE Job_ref LIKE '$view' ORDER BY $orderby";
                        }
                        //echo "<p> Query: $query</p>";
                        display_table($query);
                    }    
                }
                if (isset($_POST["submit3"])){
                    if (isset ($_POST["delete"]) && !empty ($_POST["delete"])){
                        $delete = $_POST["delete"];
                        $delete = sanitise_input($delete);

                        //echo "<p> Delete: $delete</p>";

                        if ($delete != 'None'){
                            $query = "DELETE FROM eoi WHERE Job_ref = '$delete'";
                            //echo "<p> Query: $query</p>";
                            delete_table($query);
                        }else{
                            echo "No Records Deleted!";
                            echo("<script>location.href = 'manage.php?view=All&orderby=EOInumber&submit=View';</script>");
                        }
     
                    }    
                }
                if (isset($_POST["submit2"])){
                    if (isset ($_POST["update_eoi"]) && !empty ($_POST["update_eoi"])){
                        $update_eoi = $_POST["update_eoi"];
                        $update_status = $_POST["update_status"];
                        $update_status = sanitise_input($update_status);
                        $update_eoi = sanitise_input($update_eoi);

                        //echo "<p> Update eoi: $update_eoi</p>";

                        if (preg_match("/^[\d]{1,5}$/",$update_eoi)){
                            $query = "UPDATE eoi SET EOI_status = '$update_status' WHERE EOInumber = '$update_eoi'";
                            //echo "<p> Query: $query</p>";
                            update_table($query);
                        }else{
                            echo "No Records Updated!";
                            echo("<script>location.href = 'manage.php?view=All&orderby=EOInumber&submit=View';</script>");
                        }
     
                    }    
                }
            ?>
        </div>
    </section>
    <footer id="indexfooter" class="footer">
        <p>Created for Blue Genisys &copy; 2021</p>
    </footer>
  </body>
</html>